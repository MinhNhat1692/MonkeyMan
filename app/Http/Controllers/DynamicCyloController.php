<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RouteCylo;
use App\Http\Controllers\PostController;

class DynamicCyloController extends Controller
{
    //Get slug id for n cylo
    public function getSlugCombine($slug1,$slug2 = null, $slug3 = null, $slug4 = null, $slug5 = null){
        $slugList = [];
        $slug = RouteCylo::where('slug',$slug1)->first();
        if ($slug){
            array_push($slugList,$slug->id);
        }else{
            abort(404);
        }
        if ($slug2 != null){
            $slug = RouteCylo::where('slug',$slug2)->first();
            if ($slug){
                array_push($slugList,$slug->id);
            }else{
                abort(404);
            }
            if ($slug3 != null){
                $slug = RouteCylo::where('slug',$slug3)->first();
                if ($slug){
                    array_push($slugList,$slug->id);
                }else{
                    abort(404);
                }
                if ($slug4 != null){
                    $slug = RouteCylo::where('slug',$slug4)->first();
                    if ($slug){
                        array_push($slugList,$slug->id);
                    }else{
                        abort(404);
                    }
                    if ($slug5 != null){
                        $slug = RouteCylo::where('slug',$slug5)->first();
                        if ($slug){
                            array_push($slugList,$slug->id);
                        }else{
                            abort(404);
                        }
                    }
                }
            }
        }
        $post = PostController::getPost($slugList);
        if ($post){
            return view('post', [
                'post' => $post
            ]);
        }else{
            abort(404);
        }
    }
}

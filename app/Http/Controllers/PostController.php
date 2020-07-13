<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public static function getPost($combinationArray){
        $post = false;
        switch (count($combinationArray)) {
            case 1:
                $post = Post::where([
                    ['slug1', '=', $combinationArray[0]],
                    ['slug2', '=', 0],
                    ['slug3', '=', 0],
                    ['slug4', '=', 0],
                    ['slug5', '=', 0],
                ])->first();
                break;
            case 2:
                $post = Post::where([
                    ['slug1', '=', $combinationArray[0]],
                    ['slug2', '=', $combinationArray[1]],
                    ['slug3', '=', 0],
                    ['slug4', '=', 0],
                    ['slug5', '=', 0],
                ])->first();
                break;
            case 3:
                $post = Post::where([
                    ['slug1', '=', $combinationArray[0]],
                    ['slug2', '=', $combinationArray[1]],
                    ['slug3', '=', $combinationArray[2]],
                    ['slug4', '=', 0],
                    ['slug5', '=', 0],
                ])->first();
                break;
            case 4:
                $post = Post::where([
                    ['slug1', '=', $combinationArray[0]],
                    ['slug2', '=', $combinationArray[1]],
                    ['slug3', '=', $combinationArray[2]],
                    ['slug4', '=', $combinationArray[3]],
                    ['slug5', '=', 0],
                ])->first();
                break;
            case 5:
                $post = Post::where([
                    ['slug1', '=', $combinationArray[0]],
                    ['slug2', '=', $combinationArray[1]],
                    ['slug3', '=', $combinationArray[2]],
                    ['slug4', '=', $combinationArray[3]],
                    ['slug5', '=', $combinationArray[4]],
                ])->first();
                break;
        }
        return $post;
    }
}

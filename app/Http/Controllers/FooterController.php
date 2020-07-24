<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
    //
    public static function RenderSelectedFooter($footerid){
        $footer = Footer::where('id',$footerid)->first();
        return view('footer/'.$footer->name, [
            'footer' => json_decode($footer->body,true),
            "folder" => 'footer/'.$footer->name."/"
        ]);
    }
}

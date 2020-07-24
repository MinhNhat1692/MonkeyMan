<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class HeaderController extends Controller
{
    //
    public static function RenderSelectedHeader($headerid){
        $header = Header::where('id',$headerid)->first();
        return view('header/'.$header->name, [
            'header' => json_decode($header->body,true),
            "folder" => 'header/'.$header->name."/"
        ]);
    }
}

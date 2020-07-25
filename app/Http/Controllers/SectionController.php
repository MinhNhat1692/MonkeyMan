<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class SectionController extends Controller
{
    //
    public static function RenderSelectedSection($sectioninfo){
        return view('element/'.$sectioninfo["element"], [
            'section' => $sectioninfo["value"],
            'folder' => "element/"
        ]);
    }
}

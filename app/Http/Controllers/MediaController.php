<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use Image;

class MediaController extends Controller
{
    //
    public function index()
    {
        $image = Media::latest()->first();
        return view('media.index', compact('image'));
    }

    public function upload()
    {
        $image = Media::latest()->first();
        return view('media.index', compact('image'));
    }

    public function resizeStore(Request $request)
    {
	    $this->validate($request, [
	        'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
	    ]);
	    $originalImage= $request->file('filename');
	    $thumbnailImage = Image::make($originalImage);

	    // Define upload path
	    $thumbnailPath = public_path('/img/thumbnail/');
	    $originalPath = public_path('/img/');

        if (!file_exists($thumbnailPath)) {
            mkdir($thumbnailPath, 0777, true);
        }

        if (!file_exists($originalPath)) {
            mkdir($originalPath, 0777, true);
        }

	    // Save Orginal Image
	    $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

	    // Resize and save image
	    $thumbnailImage->resize(150,150);
	    $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

	    // Save In Database
	    $imagemodel= new Media();
        $imagemodel->name=time().$originalImage->getClientOriginalName();
        $imagemodel->description = "testing";
        $imagemodel->version = "1";
        $imagemodel->uid = 0;

	    $imagemodel->save();

	    return back()->with('success', 'Image Upload successful');
		
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class UploadImageController extends Controller

{
	public function index()
	{
		return view('test',['images'=>Image::get()]);

	}

    public function upload(Request $request)
    {
    	$image = $request->profile;
    	$name = $image->getClientOriginalName();
    	$image->storeAs('/image', $name);

    	$image_save = new Image;
    	$image_save->name = $name;
    	$image_save->save();

    	return back();





    }
}

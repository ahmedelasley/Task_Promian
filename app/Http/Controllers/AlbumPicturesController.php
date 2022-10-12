<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\AlbumPictures;

class AlbumPicturesController extends Controller
{
    public function index()
    {
        return view('albums');
    }

    public function picturesStore(Request $request, $id)
    {
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name= $filename.'-'.time().'.'.$extension;
        $image->move(public_path('images'),$file_name);
            
        AlbumPictures::create([
            'name'    => $filename,
            'picture'    => $file_name,
            'album_id' =>  $id,
            'user_id' =>  Auth::user()->id,
        ]);

    }
}

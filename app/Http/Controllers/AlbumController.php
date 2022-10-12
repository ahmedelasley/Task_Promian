<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\AlbumPictures;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::get();
        return view('albums.index',compact('albums'));
    }

    public function show($id)
    {
        $album = Album::find($id);
        $albumPicture = $album->pictures()->get();
        return view('albums.show', compact('album', 'albumPicture'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourites;

class FavouritesController extends Controller
{
    public function create ()
    {

        Favourites::create([
            'user_id' => auth()->id(),
            'video_id' => request('videoId'),
            'title' => request('title'),
            'image' => request('imageUrl'),
            'creator' => request('creator')
        ]);

        return back();
    }
}

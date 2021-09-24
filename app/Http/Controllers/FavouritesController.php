<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourites;

class FavouritesController extends Controller
{
    public function create ()
    {

        if (auth()->check()) {
            Favourites::create([
                'user_id' => auth()->id(),
                'video_id' => request('videoId'),
                'title' => request('title'),
                'image' => request('imageUrl'),
                'creator' => request('creator')
            ]);

            return back();
        } else {
            return redirect('/login')
                ->with('unauthorised', 'Login to add to your favourites!');
        }
    }
}

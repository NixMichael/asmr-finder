<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchList;

class WatchListController extends Controller
{
    public function create ()
    {

        WatchList::create([
            'user_id' => auth()->id(),
            'video_id' => request('videoId'),
            'title' => request('title'),
            'image' => request('imageUrl'),
            'creator' => request('creator')
        ]);

        return back();
    }
}

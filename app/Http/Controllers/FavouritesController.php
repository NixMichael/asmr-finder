<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Favourites;
use App\Models\Creator;

class FavouritesController extends Controller
{
    public function create ()
    {

        if (auth()->check()) {


            $channelImage = Http::get(
                "https://www.googleapis.com/youtube/v3/channels", 
                [
                    'part' => 'snippet',
                    'fields' => 'items',
                    'id' => request('creatorId'),
                    'key' => env('YOUTUBE_KEY')
                    ]
                );
                
            $image = json_decode($channelImage);
            $creatorImage = $image->items[0]->snippet->thumbnails->default->url;

                // Creator::create([
                //     'creator_id' => request('creatorId'),
                //     'name' => request('creatorTitle'),
                //     'image_url' => $creatorImage
                // ]);
            // }

            Favourites::create([
                'user_id' => auth()->id(),
                'video_id' => request('videoId'),
                'creator_id' => request('creatorId'),
                'title' => request('title'),
                'image' => request('imageUrl'),
                'creator_image' => $creatorImage
            ]);

            return back();
        } else {
            return redirect('/login')
                ->with('unauthorised', 'Login to add to your favourites!');
        }
    }
}

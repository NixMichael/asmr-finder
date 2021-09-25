<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index ()
    {
        return view('search');
    }

    public function show ()
    {
        $qry = request('query');
        $response = Http::get(
            "https://youtube.googleapis.com/youtube/v3/search", 
            [
                'part' => 'snippet',
                'q' => "asmr+${qry}",
                'key' => env('YOUTUBE_KEY'),
                'maxResults' => 15
                ]
            );
        $results = json_decode($response);



        return view('search', [
            'content' => $results->items,
            // 'channelImage' => $channelImage
        ]);
    }
}

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


        // $channelInfo = Http::get(
        //     "https://www.googleapis.com/youtube/v3/channels", 
        //     [
        //         'part' => 'snippet',
        //         'fields' => 'items',
        //         'id' => $results->items[0]->snippet->channelId,
        //         // 'id' => 'UCDwR_uew-XkbO0RjUAgrUug',
        //         'key' => env('YOUTUBE_KEY')
        //         ]
        //     );
            
        // $imgResults = json_decode($channelInfo);
        // $channelImage = $imgResults->items[0]->snippet->thumbnails->default->url;


        // WORKS
        // $url = "https://www.googleapis.com/youtube/v3/channels?part=snippet&fields=items%2Fsnippet%2Fthumbnails%2Fdefault&id={$results->items[0]->snippet->channelId}&key=AIzaSyBp5_MZQ5yTlWHaNGpskMN_2wjo1FMzMHM";
        // $url = "https://www.googleapis.com/youtube/v3/channels?part=snippet&fields=items%2Fsnippet%2Fthumbnails%2Fdefault&id=UCDwR_uew-XkbO0RjUAgrUug&key=AIzaSyBp5_MZQ5yTlWHaNGpskMN_2wjo1FMzMHM";

        // $ch = curl_init();
        // curl_setopt( $ch, CURLOPT_URL, $url );
        // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        // $channelOBJ = json_decode( curl_exec( $ch ) );

        // $channelImage = $channelOBJ->items[0]->snippet->thumbnails->default->url;

        // return "<img src='".$channelImage."'/>";
        // dd($channelImage);


        return view('search', [
            'content' => $results->items,
            // 'channelImage' => $channelImage
        ]);
    }
}

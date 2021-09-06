<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index ()
    {
        $response = Http::get("https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=UCE6acMV3m35znLcf0JGNn7Q&key=".env('API_KEY')."&maxResults=15");

        $results = json_decode($response);

        return view('home', [
            'content' => $results->items
        ]);
    }
}

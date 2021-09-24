<x-layout>
    <form class="rounded-xl mx-auto w-11/12 lg:w-7/12 my-8 flex space-x-2 outline-blue bg-gray-800" action="/search/results" method="GET">
        <input class="rounded-tl-xl rounded-bl-xl px-4 py-2 flex-grow text-black" name="query" type="text" placeholder="Find content" value={{ request('query') ?? '' }}>
        <button class="rounded-tr-xl rounded-br-xl px-4 bg-white hover:bg-blue-400 hover:text-white text-black px-3 py-4" type="submit">Search</button>
    </form>

    <div class="w-11/12 lg:w-5/6 mx-auto flex flex-col lg:flex-row flex-wrap justify-around">
        
        @if (isset($content) && is_array($content))
        @foreach ($content as $video)
            @if (isset($video->id->videoId))
                <article class="w-full lg:w-5/12 flex flex-col items-center my-3 bg-gray-800 hover:bg-gray-900 rounded-xl py-3">
                    <h4>{{ $video->snippet->channelTitle }}</h4>
                    <h4 class="my-4 lg:h-12">{!! $video->snippet->title !!}</h4>

                    <a class="w-full cursor-pointer my-2" target="_blank" href="https://youtube.com/watch?v={{ $video->id->videoId }}">
                        <div style="
                            position: relative;
                            width: 100%;
                            padding-top: 56.25%; 
                            background-image: url('{{ $video->snippet->thumbnails->high->url }}');
                            background-position: center;
                            background-size: cover;
                        ">
                        </div>
                        {{-- <div style="width: 100%; height: 60px; background: url('{{ $video->image }}')"></div> --}}
                        {{-- <img src="{{ $video->image }}" alt="{{ $video->title }}"> --}}
                    </a>

                    <div class="w-full flex justify-around">
                        <x-account-form name="watchlist" :video="$video" />
                        <x-account-form name="favourite" :video="$video" />
                    </div>

                </article>
            @endif
        @endforeach
        @else
            <p>No results to display.</p>
        @endif
</x-layout>
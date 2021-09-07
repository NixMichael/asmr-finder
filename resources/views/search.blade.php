<x-layout>
    <form class="rounded-md mx-auto my-8 flex gap-6 py-6 px-12 bg-gray-800" action="/search/results" method="GET">
        <input class="rounded p-2 text-black" name="query" type="text" placeholder="Find content">
        <input class="rounded px-4 text-black" type="submit" value="Search">
    </form>
    <div class="w-11/12 lg:w-5/6 mx-auto flex flex-col lg:flex-row flex-wrap justify-around">
    @if (isset($content) && is_array($content))
        @foreach ($content as $video)
            @if (isset($video->id->videoId))
                <article class="lg:w-5/12 flex flex-col items-center my-3 bg-gray-600 p-3 rounded-md">
                    <h4 class="mb-4 h-12">{!! $video->snippet->title !!}</h4>
                    <a href="https://youtube.com/watch?v={{ $video->id->videoId }}">
                        <div class="w-full relative" style="padding-top: 52.25%">
                            <div class="absolute w-full h-full bg-no-repeat bg-center" style=" margin-top: -52.25%; background-image: url('{{ $video->snippet->thumbnails->high->url }}')">
                        </div>
                    </a>
                </article>
            @endif
        @endforeach
    @else
        <p>No results to display.</p>
    @endif
</x-layout>
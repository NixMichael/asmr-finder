<x-layout>
    <div class="w-5/6 mx-auto flex flex-wrap justify-around">
    @foreach ($content as $video)
        @if (isset($video->id->videoId))
            <article class="w-5/12 flex flex-col items-center my-3 bg-gray-600 p-3 rounded-md">
                <h4 class="mb-4">{{ $video->snippet->title }}</h4>
                <a href="https://youtube.com/watch?v={{ $video->id->videoId ?? 'ha' }}">
                    <img src="{{ $video->snippet->thumbnails->high->url }}" alt="{{ $video->snippet->title }}">
                </a>
            </article>
        @endif
    @endforeach
</x-layout>
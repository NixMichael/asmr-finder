@props(['video'])

<div class="flex rounded-xl m-4 py-6 lg:w-3/12">
    <div class="w-full flex flex-col items-center my-3 bg-gray-800 hover:bg-gray-900 rounded-t-xl pt-3">
    {{-- <div class="flex flex-col items-center border p-4 rounded-xl"> --}}
        <h2>{{ $video->creator }}</h2>
        <div class="text-xs mb-3">{{ $video->title }}</div>
        <a class="w-full" href="https://youtube.com/watch?v={{ $video->video_id }}">
            <div style="
                position: relative;
                width: 100%;
                padding-top: 56.25%; 
                background-image: url('{{ $video->image }}');
                background-position: center;
                background-size: cover;
            ">
            </div>
            {{-- <div style="width: 100%; height: 60px; background: url('{{ $video->image }}')"></div> --}}
            {{-- <img src="{{ $video->image }}" alt="{{ $video->title }}"> --}}
        </a>
    </div>
</div>
@props(['video'])

<div class="flex rounded-xl m-4 py-6 lg:w-3/12">
    <div class="relative w-full flex flex-col items-center my-3 bg-gray-800 hover:bg-gray-900 rounded-t-xl pt-3">
    {{-- <div class="flex flex-col items-center border p-4 rounded-xl"> --}}
        {{-- <p>{{$video->creator_image}}</p> --}}
        @if ($video->creator_image)
            <img
                class="flex justify-center items-center bg-black z-10 text-xs absolute -top-4 -right-4 w-20 h-20 border-2 border-white rounded-full"
                src="{{ $video->creator_image }}"
                alt="No Image"
                {{-- style="
                    background-image: url('{{ $video->creator_image }}');
                    background-position: center;
                    background-size: cover; --}}
                {{-- "> --}}
            />
        @endif
        <div class="text-xs text-left mb-3 px-4 pr-20 max-h-8 overflow-hidden overflow-ellipsis">{{ $video->title }}</div>
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
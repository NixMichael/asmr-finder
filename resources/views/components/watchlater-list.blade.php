@props(['watchlater'])

<h1 class="w-full border-b-2 py-2 px-4 text-left text-3xl">Watch Later</h1>

<div class="flex">
    @if (count($watchlater) < 1)
        <p class="my-8">Nothing saved yet.</p>
    @else
        @foreach($watchlater as $video)
            <x-display-videos :video="$video" />
        @endforeach
    @endif
</div>
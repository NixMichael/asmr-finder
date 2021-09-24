@props(['favourites'])

<h1 class="w-full border-b-2 py-2 px-4 text-left text-3xl">Favourites</h1>

@if (count($favourites) < 1)
    <p class="my-8">No favourites yet.</p>
@else
    @foreach($favourites as $video)
        <x-display-videos :video="$video" />
    @endforeach
@endif
<x-layout>
    <section class="mx-8">
        <x-favourites-list :favourites="$favourites" />
        <x-watchlater-list :watchlater="$watchlist" />
    </section>
</x-layout>
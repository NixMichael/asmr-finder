@props(['name', 'video'])

<form action="/account/add/{{ $name }}" method="POST">
    @csrf
    <input type="hidden" name="videoId" value="{{ $video->id->videoId }}">
    <input type="hidden" name="title" value="{{ $video->snippet->title }}">
    <input type="hidden" name="imageUrl" value="{{ $video->snippet->thumbnails->high->url }}">
    <input type="hidden" name="creatorName" value="{{ $video->snippet->channelTitle }}">
    <input type="hidden" name="creatorId" value="{{ $video->snippet->channelId }}">
    <button class="py-2 px-4 rounded bg-white text-black hover:bg-green-400 hover:text-white" type="submit">{{ $name === 'favourite' ? 'Add Fave' : 'Watch Later' }}</button>
</form>
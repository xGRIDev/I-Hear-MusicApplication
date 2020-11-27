<div id="albums" class="container-fluid">
    <div id="recently-added" style="display: inherit;" class="recently-add">
        <div style="display: flex" class="px-2">
            <h1 class="list-title px-2 pt-2 w-100">Albums</h1>
        </div>


        <ul style="overflow: scroll;" class="track-list mx-0 row">
            @foreach($albums as $album)
            <li class="track-card album-card p-2">
                <div class="artwork">
                    <a href="#"><span
                                style='background-image: url("{{ $album->album_cover }}");'></span></a>
                </div>
                <div class="info">
                    <a href="#" class="title" title="Ace Combat 7 Original Sound Tracks (2019)">
                        <p>{{ $album->title }}</p>
                    </a>
                    <a href="#" class="artist">
                        <p></p>
                    </a>
                </div>
                <input type="hidden" value="{{ $album->id }}">
            </li>
            @endforeach
        </ul>



    </div>
</div>
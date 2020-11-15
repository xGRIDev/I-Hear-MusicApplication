<div id="artists" class="container-fluid">
    <div id="recently-added" style="display: inherit;" class="recently-add">
        <div style="display: flex" class="px-2">
            <h1 class="list-title px-2 pt-2 w-100">Artists</h1>
        </div>

        <ul style="overflow: scroll;" class="track-list mx-0 row">
            @foreach($artists as $artist)
                <li class="track-card artist-card p-2">
                    <div class="artwork">
                        <a href="#"><span
                                    style='background-image: url("{{ $artist->image }}");'></span></a>
                    </div>
                    <div class="info">
                        <a href="#" class="title">
                            <p>{{ $artist->career_name }}</p>
                        </a>
                    </div>
                    <input type="hidden" value="{{ $artist->id }}">
                </li>
            @endforeach

        </ul>



    </div>
</div>

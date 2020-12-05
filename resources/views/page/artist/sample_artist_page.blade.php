<div class="jumbotron mt-5" style='background-image: url("{{ $artist->image }}");  background-size:cover;'>
                <h1 class="display-4">{{ $artist->career_name}}</h1>
                    <p class="lead">{{ $artist->biography}}</p>
                        <hr class="my-4">
                     <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            
<!-- Khalid artist -->
<div class="px-2">
    <h1 class="list-title px-2 pt-2 w-100">{{ $artist->career_name}}</h1>
    <br>
    <div class="row list-songs" style="cursor:pointer;">
        <table class="table table-hover tab-nowrap col-12">
            <thead>
            <tr class="col-12">
                <th style="width: 60px">#</th>
                <th style="width: 40%;">Title</th>
                <th style="width: 20%;">Artist</th>
                <th style="width: 20%;">Album</th>
                <th style="width: 10%;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($artist->songs as $song)
                <tr src="{{ $song->url }}">
                    <th scope="row">
                        <div class="artwork">
                                    <span class="no-border-radius"
                                          style='background-image: url("{{ $song->album->album_cover }}");'></span>
                        </div>
                    </th>
                    <td class="td-nowrap">{{ $song->title }}</td>
                    <td>{{ $artist->career_name}}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
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
<!-- End Khalid Page -->
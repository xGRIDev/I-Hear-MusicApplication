<div id="songs" class="px-2 songs container-fluid">
    <h1 class="list-title px-2 pt-2 w-100">Songs</h1>
    <br>
    <div class="row list-songs">
        <table class="table table-hover tab-nowrap col-12">
            <thead>
            <tr class="col-12">
                <th style="width: 60px;"></th>
                <th style="width: 40%;">Title</th>
                <th style="width: 20%;">Artist</th>
                <th style="width: 20%;">Album</th>
                <th style="width: 10%;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($songs as $song)
                <tr class="list" src="{{ $song->url }}">
                    <th scope="row">
                        <div class="artwork">
                                        <span class="no-border-radius"
                                              style='background-image: url("{{ $song->album->album_cover }}");'></span>
                        </div>
                    </th>
                    <td class="td-nowrap">{{ $song->title }}</td>
                    <td>{{ $song->artist->career_name }}</td>
                    <td>{{ $song->album->title }}</td>
                    <td></td>
                    <input type="hidden" value="{{ $song->id }}">
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="explore" class="container-fluid">
    <!-- weekly chart -->
    <div id="weekly-chart" class="px-2" style="cursor:pointer;">
        <h1 class="list-title px-2 py-2 w-100">Weekly Charts</h1>
        <div class="row list-songs">
            <table class="table table-hover tab-nowrap col-12">
                <thead>
                <tr class="col-12">
                    <th style="width: 60px;">#</th>
                    <th style="width: 40%;">Title</th>
                    <th style="width: 20%;">Artist</th>
                    <th style="width: 20%;">Album</th>
                    <th style="width: 10%;"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($weeklyCharts as $weeklyChart)
                    <tr class="list" src="{{ $weeklyChart->url }}">
                        <th scope="row">
                            <div class="artwork">
                                        <span class="no-border-radius"
                                              style='background-image: url("{{ $weeklyChart->album->album_cover }}");'></span>
                            </div>
                        </th>
                        <td class="td-nowrap">{{ $weeklyChart->title }}</td>
                        <td>{{ $weeklyChart->artist->career_name }}</td>
                        <td>{{ $weeklyChart->album->title }}</td>
                        <td></td>
                        <input type="hidden" value="{{ $weeklyChart->id }}">
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- weekly chart -->

    <!-- recently-add -->
    <div id="recently-added" style="display: inherit;" class="recently-add">
        <div style="display: flex" class="px-2">
            <h1 class="list-title px-2 pt-2 w-100">Recently Added</h1>
            <!-- <section class="w-100 list-more d-flex justify-content-end">
                <div>
                    <a>Show all</a>
                </div>
                <button class="material-icons">keyboard_arrow_left</button>
                <button class="material-icons">keyboard_arrow_right</button>
            </section> -->
        </div>

        <ul style="overflow: scroll;" class="track-list ml-1 row">
            @foreach($recentlyAddeds as $recentlyAdded)
                <li id="card"
                    src="{{ $recentlyAdded->url }}"
                    class="track-card song p-2">
                    <div class="artwork">
                        <span style='background-image: url("{{ $recentlyAdded->album->album_cover }}");'></span>
                    </div>
                    <div class="info">
                        <a href="#" class="title">
                            <p>{{ $recentlyAdded->title }}</p>
                        </a>
                        <a href="#" class="artist">
                            <p>{{ $recentlyAdded->artist->career_name }}</p>
                        </a>
                    </div>
                    <input type="hidden" value="{{ $recentlyAdded->id }}">
                </li>
            @endforeach

        </ul>
    </div>
    <!-- end of recently-add -->

    <!-- trending -->
    <div id="trending" class="trending">

        <div style="display: flex" class="px-2">
            <h1 class="list-title px-2 pt-2 w-100">Trending</h1>
            <!-- <section class="w-100 list-more d-flex justify-content-end">
                <div>
                    <a>show all</a>
                </div>
                <button class="material-icons">keyboard_arrow_left</button>
                <button class="material-icons">keyboard_arrow_right</button>
            </section> -->
        </div>
        <ul style="overflow: scroll;" class="track-list ml-1 row">
            @foreach($trendings as $trending)
                <li id="card"
                    src="{{ $trending->url }}"
                    class="track-card song p-2">
                    <div class="artwork">
                        <span style='background-image: url("{{ $trending->album->album_cover }}");'></span>
                    </div>
                    <div class="info">
                        <a href="#" class="title">
                            <p>{{ $trending->title }}</p>
                        </a>
                        <a href="#" class="artist">
                            <p>{{ $trending->artist->career_name }}</p>
                        </a>
                    </div>
                    <input type="hidden" value="{{ $trending->id }}">
                </li>
            @endforeach
        </ul>
    </div>
    <!-- end of trending -->
</div>
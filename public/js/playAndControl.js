var prevSong = new Audio;
var playingSong = null;
var song;
var add = 0;
var current;
var volume;

var i = 0;
var startTime = 0,
    startMinutes = 0,
    startSeconds = 0;
var isPaused = false;
var trackProgressTimer = null;
var trackProgressBar = null;



$(document).ready(function () {
    jQuery.fn.clickToggle = function (a, b) {
        var ab = [b, a];
        return this.on("click", function () {
            ab[this._tog ^= 1].call(this);
        });
    };

    // $('input[type=range]').on('input', function () {
    //     $(this).trigger('change');
    // });

    $(document).on('input', '#volume-input', function() {
        volume = $("#volume-input").val();
        // console.log(volume);
        playingSong.volume = volume/100;
    });


    // //song selection in card
    $(document).on('click', ".track-card.song", function () {
        current = $(this);
        //set info to object song
        // $(".list-songs table tbody tr").removeClass("current-song");
        $(".current-song").removeClass("current-song");
        $(this).addClass("current-song");
        setSongInCard(current);
        playSong();
        setPlayingInfo();
    })


    //song selection in list
    $(document).on('click', ".list-songs table tbody tr", function () {
        // get and play song
        current = $(this);
        //set info to object song
        setSongInList(current);
        playSong();

        //set playing info in playing section
        // $(".list-songs table tbody tr").removeClass("current-song");
        $(".current-song").removeClass("current-song");
        $(this).addClass("current-song");

        setPlayingInfo();
    })

    // pause and play song
    $(document).on('click', "#play, #pause", function (e) {
        var playingStatus = $(".play-progress .control #play i");
        if (playingStatus.text() == "play_arrow") {
            playingStatus.text("pause");
            playingSong.play();
            e.preventDefault();
            isPaused = false;
        } else {
            playingStatus.text("play_arrow");
            playingSong.pause();
            e.preventDefault();
            isPaused = true;
        }
    })

    //go to next song
    $(document).on('click', "#next", function () {
        var section = current.parent().parent().parent();
        var temp = current.parent();
        //control for weekly chart list
        if (section.parent().is('#weekly-chart, .album-info')) {
            if (current.is(":last-child")) {
                current.removeClass("current-song");
                current = current.parent().children(':first-child');
                current.addClass("current-song");
            } else {
                current = current.next();
                $(".current-song").removeClass("current-song").next().addClass("current-song");
            }
            setSongInList(current);
        } else if (temp.parent().is('#recently-added, #trending')) {
            if (current.is(":last-child")) {
                current.removeClass("current-song");
                current = current.parent().children(':first-child');
                current.addClass("current-song");
            } else {
                current = current.next();
                $(".current-song").removeClass("current-song").next().addClass("current-song");
            }
            setSongInCard(current);
        } else { //control for song list
            if (current.is(":last-child")) {
                current.removeClass("current-song");
                current = current.parent().next().next().children(':first-child');
                current.addClass("current-song");
            } else {
                current.removeClass("current-song");
                current = current.next();
                current.addClass("current-song");
            }
            setSongInList(current);
        }

        playSong();
        setPlayingInfo();

    })

    //go to prev song
    $(document).on('click', "#prev", function () {
        var section = current.parent().parent().parent();
        var temp = current.parent();
        //control for weekly chart list
        if (section.parent().is('#weekly-chart, .album-info')) {
            if (current.is(":first-child")) {
                current.removeClass("current-song");
                current = current.parent().children(':last-child');
                current.addClass("current-song");
            } else {
                current = current.prev();
                $(".current-song").removeClass("current-song").prev().addClass("current-song");
            }
            setSongInList(current);
        } else if (temp.parent().is('#recently-added, #trending')) {
            if (current.is(":first-child")) {
                current.removeClass("current-song");
                current = current.parent().children(':last-child');
                current.addClass("current-song");
            } else {
                current = current.prev();
                $(".current-song").removeClass("current-song").prev().addClass("current-song");
            }
            setSongInCard(current);
        } else { //control for song list
            if (current.is(":first-child")) {
                current.removeClass("current-song");
                current = current.parent().prev().prev().children(':last-child');
                current.addClass("current-song");
            } else {
                current.removeClass("current-song");
                current = current.prev();
                current.addClass("current-song");
            }
            setSongInList(current);
        }

        playSong();
        setPlayingInfo();
    })



})

function setSongInCard(current) {
    song = {
        title: current.children(":nth-child(2)").children(':nth-child(1)').children(':nth-child(1)').text(),
        artist: current.children(":nth-child(2)").children(':nth-child(2)').children(':nth-child(1)').text(),
        album: null,
        duration: 0,
        src: current.attr("src"),
        cover: current.children(":nth-child(1)").children(":nth-child(1)").css("background-image"),
    };
    console.log(song);
}

function setSongInList(current) {
    song = {
        title: current.children(":nth-child(2)").text(),
        artist: current.children(":nth-child(3)").text(),
        album: current.children(":nth-child(4)").text(),
        src: current.attr("src"),
        duration: 0,
        cover: current.children(":nth-child(1)").children(":nth-child(1)").children(":nth-child(1)").css("background-image"),
    };

}

function setPlayingInfo() {

    //set playing info
    $(".play-artwork span").css({
        "background-image": song.cover
    });
    $(".play-info .info .title p").text(song.title);
    $(".play-info .info .artist p").text(song.artist);
    $(".play-progress .control #play i").text("pause");

    //set duration
    $(playingSong).on("canplay", function () {
        song = {
            duration: this.duration,
        };
        var minutes = Math.floor(song.duration / 60);
        var seconds = Math.ceil(song.duration - minutes * 60);
        if (seconds > 9)
            $('#duration').text(minutes + ":" + seconds);
        else
            $('#duration').text(minutes + ":0" + seconds);
        AudioTrack();

        // track progress timer
        trackProgressTimer = setInterval(function () {
            volume = $("#volume").val();
            // console.log(volume);
            song.volume = volume/100;
            var endMinutes = Math.floor(song.duration / 60);
            var endSeconds = Math.ceil(song.duration - minutes * 60);
            // startMinutes = startSeconds = 0
            if (!isPaused) {
                startSeconds = startSeconds + 1; // incrementation
                if (startSeconds < 10) {
                    $('#startDuration').text(startMinutes + ":0" + startSeconds);
                } else {
                    if (startSeconds == 60) {
                        startMinutes = startMinutes + 1;
                        startSeconds = 0;
                        $('#startDuration').text(startMinutes + ":" + startSeconds);
                    } else {
                        $('#startDuration').text(startMinutes + ":" + startSeconds);
                    }
                }
                // console.log(startMinutes, startSeconds);
                if (startMinutes == endMinutes && startSeconds == endSeconds) {
                    clearInterval(trackProgressTimer);
                    startMinutes = 0, startSeconds = 0;
                    $('#startDuration').text(startMinutes + ":" + startSeconds);
                }
            }
        }, 1000)

    });
}

function playSong() {
    playingSong = new Audio(song.src);
    prevSong.pause();
    $('#startDuration').text("0:00");
    $("#song-progress").css("width", 0 + "%");
    isPaused = false;
    clearInterval(trackProgressTimer);
    clearInterval(trackProgressBar);
    i = 0;
    startSeconds = 0;
    startMinutes = 0;
    volume = $("#volume-input").val();
    playingSong.volume = volume/100;
    playingSong.play();
    prevSong = playingSong;
}

function AudioTrack() {
    // track progress bar
    var onePercentDuration = (song.duration / 100);
    var endTime = song.duration;
    trackProgressBar = setInterval(function () {
        if (!isPaused) {
            $("#song-progress").css("width", i + "%");
            i++; // incrementation
            startTime = startTime + onePercentDuration;
            // reset progress bar
            if (i == 101) {
                clearInterval(trackProgressBar);
                i = 0;
                $("#song-progress").css("width", i + "%");
            }
        }
    }, onePercentDuration * 1000);

}
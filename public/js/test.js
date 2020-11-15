var prevSong = new Audio;
var playingSong = null;
var song;
var i=0;
var startTime = 0 ,startMinutes = 0, startSeconds = 0;
var isPaused = false; 

$(document).ready(function () {
    jQuery.fn.clickToggle = function (a, b) {
        var ab = [b, a];
        return this.on("click", function () {
            ab[this._tog ^= 1].call(this);
        });
    };

    //declaring variable
    // var bread = $("#bread");
    // var fbBread = firebase.database().ref().child("better").child("title");
    // var list1 = $("#list1");
    // var fbList1 =  firebase.database().ref().child("better");

    // fbList1.child("cover").on('value',function(datasnapshot) {
    //     console.log(datasnapshot.val());
    //     console.log($(list1[0].children[0].children[0].children[0]).css("background-image" , datasnapshot.val()));
    // })
    

    $("#toggle").click(function () {
        $("aside").toggleClass("aside");
        $("#content").toggleClass("ml-0 col-md-12 col-xl-12 col-lg-12");
        $("#search").toggleClass("ml-md-4")
    });

    // bread.click(function() {
    //     fbBread.on('value', function(datasnapshot) {
    //         bread.text(datasnapshot.val());
    //     })
    // })

    //menu selection
    $("aside ul li a").click(function () {
        $("aside ul li, .active-menu").removeClass("active-menu");
        $(this).parent().addClass("active-menu");
        $(this).addClass("active-menu");
    })

    //display artist respond to selected menu
    $("#menu-explore").click(function () {
        $("#songs, #albums, #artists").addClass("hide");
        $("#explore").removeClass("hide");
    })
    $("#menu-songs").click(function () {
        $("#albums, #artists, #explore").addClass("hide");
        $("#songs").removeClass("hide");
    })
    $("#menu-albums").click(function () {
        $("#songs, #artists, #explore").addClass("hide");
        $("#albums").removeClass("hide");
    })

    //declara var for song selection

    //select song in card
    $(".track-card").clickToggle(
        function () {
            // b.play();
        },
        function () {
            // b.pause();
        }

    );

    //song selection in card
    $(".track-card").click(function () {
        song = {
            title: $(this.children[1].children[0].children[0]).text(),
            artist: $(this.children[1].children[1].children[0]).text(),
            album: null,
            src: $(this).attr("src"),
            cover: $(this.children[0].children[0]).css("background-image"),
        }

        playingSong = new Audio(song.src);
        // console.log(playingSong.duration())
        prevSong.pause();
        playingSong.play();
        prevSong = playingSong;

        $(".play-artwork span").css({
            "background-image": song.cover
        });
        $(".play-info .info .title p").text(song.title);
        $(".play-info .info .artist p").text(song.artist);
        $(".play-progress .control #play i").text("pause");
    })

    //song selection in list
    $(".list-songs table tbody tr").click(function () {

        song = {
            title: $(this.children[1]).text(),
            artist: $(this.children[2]).text(),
            album: $(this.children[3]).text(),
            src: $(this).attr("src"),
            duration: 0,
            cover: $(this.children[0].children[0].children[0]).css("background-image"),
        }

        playingSong = new Audio(song.src);
        prevSong.pause();
        playingSong.play();
        prevSong = playingSong;
        var songDuration;
        
        $(playingSong).on("canplay", function () {
            song = {duration: this.duration}
            var minutes = Math.floor(song.duration / 60);
            var seconds = Math.ceil(song.duration - minutes * 60);
            // console.log(minutes, seconds);
            $('#duration').text(minutes+":"+seconds);
            

            // track progress bar
            var onePercentDuration=(song.duration/100);
            var endTime = song.duration;
            var trackProgressBar = setInterval(function () {
                if (!isPaused){
                    $("#song-progress").css("width",i+"%");
                    i++; // incrementation
                    startTime = startTime + onePercentDuration;
                    // reset progress bar
                    if (i == 101){
                        clearInterval(trackProgressBar);
                        i=0;
                        $("#song-progress").css("width",i+"%");
                    }
                }
                // console.log(i);
            }, onePercentDuration*1000)
            
            // track progress timer
            var trackProgressTimer = setInterval(function (){
            var endMinutes = Math.floor(song.duration / 60);
            var endSeconds = Math.ceil(song.duration - minutes * 60);
            // startMinutes = startSeconds = 0
                if (!isPaused){
                    startSeconds = startSeconds + 1; // incrementation
                    if (startSeconds < 10){
                        $('#startDuration').text(startMinutes+":0"+startSeconds);
                    }
                    else{
                        if (startSeconds == 60){
                            startMinutes = startMinutes + 1;
                            startSeconds = 0;
                            $('#startDuration').text(startMinutes+":"+startSeconds);
                        }
                        else{
                            $('#startDuration').text(startMinutes+":"+startSeconds);
                        }
                    }
                    // console.log(startMinutes, startSeconds);
                    if (startMinutes == endMinutes && startSeconds == endSeconds){
                        clearInterval(trackProgressTimer);
                        startMinutes = 0, startSeconds = 0;
                        $('#startDuration').text(startMinutes+":"+startSeconds);
                    }
                }
            }, 1000)
        });
        
        $(".list-songs table tbody tr").removeClass("current-song");
        $(this).addClass("current-song");

        $(".play-artwork span").css({
            "background-image": song.cover
        });
        $(".play-info .info .title p").text(song.title);
        $(".play-info .info .artist p").text(song.artist);
        $(".play-progress .control #play i").text("pause");
        // $(".play-progress .control #play").attr("id", "pause");
    })

    // pause song
    $("#play, #pause").click(function (e) {
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

    // seeking (click on progress bar to go to a position)
    var isSeeking = false;
    var progressPosition = $("#song-progress").css("width");
    // console.log(progressPosition);
    $("#song-progress").click(function(e){
        var position = e.pageX - this.offsetLeft;
        console.log(position);
    });

});

// var b = new Audio('https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/In%20The%20End%20-%20Linkin%20Park.mp3?alt=media&token=8d74a9c1-77a5-4d38-baf4-d8bb4113f34f');

function play() {

}

function pause() {

}

function next() {

}

function prev() {

}

function shuffle() {

}

function repeat() {

}


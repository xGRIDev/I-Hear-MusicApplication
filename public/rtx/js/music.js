// NOW I CLICK album-poster TO GET CURRENT SONG ID
$(".album-poster").on("click", function (e) {
    var dataSwitchId = $(this).attr("data-switch");
    //console.log(dataSwitchId);

    // and now i use aplayer switch function see
    ap.list.switch(dataSwitchId); //this is static id but i use dynamic

    // aplayer play function
    // when i click any song to play
    ap.play();

    // click to slideUp player see
    $("#aplayer").addClass("showPlayer");
});

const ap = new APlayer({
    container: document.getElementById("aplayer"),
    listFolded: true,
    audio: [
        {
            name: "Invisible Beauty",
            artist: "Artist Name",
            url: "source/invisible_beauty.mp3",
            cover:
                "https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        },
        {
            name: "Just Stay", // SONG NAME
            artist: "Artist Name", //ARTIST NAME
            url: "source/just_stay.mp3", // PATH NAME AND SONG URL
            cover:
                "https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500", // COVER IMAGE
        },
        {
            name: "Liquid Time",
            artist: "Artist Name",
            url: "source/liquid_time.mp3",
            cover:
                "https://images.pexels.com/photos/838696/pexels-photo-838696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        },
        {
            name: "Silky Smooth",
            artist: "Artist Name",
            url: "source/silky_smooth.mp3",
            cover:
                "https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        },
    ],
});

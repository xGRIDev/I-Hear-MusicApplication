<script>
    jQuery(document).ready(function () {
        //update song's clicked count
        $('.track-card, .list').on('click' ,function (e) {
            e.preventDefault();
            var id = parseInt($(this).children(':last-child').val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/song/count/{id}') }}",
                data: {
                    id: id,
                },
                method: "POST",
                success: function (data) {
                    // $(this).addClass("hide");
                    // alert(id);
                }
            });
            // alert(id);
        });
        //Side bar menu click
        $(document).on('click','#menu-songs', function(e) {
        // $("#menu-songs").on('click', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('song/all') }}",
                data: {
                    // id: $(this).attr('id')
                },
                method: "GET",
                success: function (data) {
                    // $(".app #content").find(">div").not(".app .content #explore").remove("hide");
                    // $('#explore').addClass('hide');
                    // $('#songs').append('<p>HELLO</p>')
                    $('#content').html(data);
                    console.log(data);
                }
            });
        })
        $(document).on('click','#menu-explore', function(e) {
        // $("#menu-explore").on('click', function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/explore') }}",
                data: {
                    // id: $(this).attr('id')
                },
                method: "GET",
                success: function (data) {
                    $('#content').html(data);
                    console.log(data);
                }
            });
        });
        $(document).on('click','#menu-albums', function(e) {
            // $("#menu-explore").on('click', function (e) {
            // alert("Album");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/album/all') }}",
                data: {
                    // id: $(this).attr('id')
                },
                method: "GET",
                success: function (data) {
                    $('#content').html(data);
                    console.log(data);
                }
            });
        })
        $(document).on('click','#menu-artists', function(e) {
            // $("#menu-explore").on('click', function (e) {
            // alert("Album");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/artist/all') }}",
                data: {
                    // id: $(this).attr('id')
                },
                method: "GET",
                success: function (data) {
                    $('#content').html(data);
                    console.log(data);
                }
            });
        })
    });
</script>
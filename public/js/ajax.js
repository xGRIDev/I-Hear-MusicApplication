$(document).ready(function () {
    jQuery.fn.clickToggle = function (a, b) {
        var ab = [b, a];
        return this.on("click", function () {
            ab[this._tog ^= 1].call(this);
        });
    };

    $('.track-card').click(function () {
        var id = parseInt($(this).children(':last-child').val());
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        // $.ajax({
        //     url: "{{ song/update/{id} }}",
        //     data: {
        //         'id':id
        //     }
        //     method: "POST",
        //     success: function( data ) {
        //         alert("Success")
        //     }
        // });
        // alert(++id);
    });

});
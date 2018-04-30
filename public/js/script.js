//NAVIGATION
$("#topNav").click(function () {
    $("#nav").toggle("fast");
});

$(window).on("load resize", function () {
    if ($(window).width() > 993) {
        $('#nav').show();
    }
    if ($(window).width() < 991) {
        $('#nav').hide();
    }
});
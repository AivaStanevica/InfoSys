//NAVIGATION
$("#topNav").click(function () {
    $("#nav").toggle("fast");
});

$(window).on("load resize", function () {
    if ($(window).width() > 991) {
        $('#nav').show();
    }
    if ($(window).width() < 992) {
        $('#nav').hide();
    }
});

//datepicker
$('#sandbox-container .input-daterange').datepicker({
    weekStart: 1,
    language: "lv"
});
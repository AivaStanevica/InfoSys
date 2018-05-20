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

//Pievienot papildus sadaļu
$("#additionalBtn").click(function(){
    $("#insertAfter")
        .after($('<div/>', {class:"form-group col-md-1 col-lg-1"})
            .append($('<label/>', {for:"addUnits", html:"Skaits"}))
            .append($('<input/>', {type: "text", class:"form-control", id: "addUnits", name:"add_units[]" }))
        )
        .after($('<div/>', {class:"form-group col-md-3 col-lg-3"})
            .append($('<label/>', {for:"additional", html:"Nosaukums"}))
            .append($('<input/>', {type: "text", class:"form-control", id: "additional", name:"additional[]" }))
        )

});


//
$('#submitLend').on('click',function () {
    $('#lendInventory').submit();
    $('#lendInventory2').submit();
})

$('#submitSell').on('click',function () {
    $('#soldInventory').submit();
    $('#soldInventory2').submit();
})

//datepicker
$('#sandbox-container .input-daterange').datepicker({
    weekStart: 1,
    language: "lv"
});
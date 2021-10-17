// parallax effect
let bg = $("#bg");
let moon = $("#moon");
let mountain = $("#mountain");
let road = $("#road");
let text = $("#text");
let btn_index = $("#btn_index");

window.addEventListener('scroll', function () {
    var value = this.window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    moon.style.left = -value * 0.5 + 'px';
    mountain.style.top = -value * 0.15 + 'px';
    road.style.top = value * 0.15 + 'px';
    text.style.top = value * 1 + 'px';
    btn_index.style.top = value * 0.5 + 'px';
});
//end parallax effect

//search bar
$("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
    $.ajax({
        url: "action.php",
        method: "post",
        data: {
        query: searchText,
        },
        success: function (response) {
        $("#show-list").html(response);
        },
    });
    } else {
    $("#show-list").html("");
    }
});
// Set searched text in input field on click of search button
$(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
});

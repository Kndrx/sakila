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


// searchbar
$("#search").keyup(function() {
    var searchText = $(this).val();

    if (searchText != ''){
        $.ajax({
            url: 'searchDvd.php',
            method: 'post',
            data: {query:searchText},
            success:function(response){
                $('#showlist').html(response);
            }
        });
    
    }
    else {
        $('#showlist').html('');
    };
 
});

$(document).on('click', 'a', function(){
    $('#search').val($(this).text());
});

var clicks = 0;
$(".like_cont").click(function(e) {
    if (document.getElementById('myImg').getAttribute('src') == "./img/likered.png") {
        $(this).html("Unlike").removeClass("like_cont").addClass("unlike_cont");
        clicks--;
        document.getElementById("myImg").src = "./img/likeblack.png";

        $(".likecount").html(clicks);
    } else {
        $(this).html("Like").removeClass("unlike_cont").addClass("like_cont");
        clicks++;
        document.getElementById("myImg").src = "./img/likered.png";



        $(".likecount").html(clicks);
    }
    return false;
});



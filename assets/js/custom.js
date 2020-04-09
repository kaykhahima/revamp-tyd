$("li").click(function () {
    // If this isn't already active
    if (!$(this).hasClass("active")) {
        // Remove the class from anything that is active
        $("li.active").removeClass("active");
        // And make this active
        $(this).addClass("active");
    }
});



$('li').on('click', function () {
    $('#sidebar').removeClass("active");
});


$(window).load(function () {
    $('.post-module').hover(function () {
        $(this).find('.description').stop().animate({
            height: "toggle",
            opacity: "toggle"
        }, 300);
    });
});

$(document).ready(function () {
    var size = $("#data > p").size();
    if (document.getElementById('data').innerText.length >= 800) {
        $("#appendedColumn").addClass("span-3");
        $(".column1 > p").each(function (index) {
            if (index >= size / 2) {
                $(this).appendTo("#column2");
            }
        });
    }
});

//console.log(document.getElementById('data').innerText.length);

//console.log(document.getElementById('sidebar').offsetWidth);

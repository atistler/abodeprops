$(window).load(function() {
    $('.slider').nivoSlider({
        pauseTime: 3500,
        effect: "slideInLeft"
    });
    $(".item a").mouseenter(function() {
        $(this).find(".title").effect("bounce", { times:2 }, 200);
    })
});
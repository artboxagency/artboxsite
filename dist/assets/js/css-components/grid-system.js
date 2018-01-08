$(".single-news-home-page").mouseover(function()  {
    $(this).find(".black-box").addClass("hover-grid");
    $(".single-news-home-page").mouseout(function() {
        $(this).find(".black-box").removeClass("hover-grid");
    });

});

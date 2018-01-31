$( document ).ready(function() {

    $("html, body").scrollTop($("#news-scroller").offset().top);

    $(".menu-item").click(function () {

        var menuLinkItem = $(this).find("a").attr("href");
        console.log(menuLinkItem);

        $("html, body").animate({scrollTop:$(menuLinkItem.toLowerCase() + "-scroller").offset().top - 100});


    });

    // Decalre component


})

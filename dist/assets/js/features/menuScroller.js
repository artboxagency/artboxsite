$( document ).ready(function() {

    $("html, body").scrollTop($("#news-scroller").offset().top);

    $(".menu-item").click(function () {

        var menuLinkItem = $(this).find("a").attr("href");

        $("html, body").animate({scrollTop:$(menuLinkItem.toLowerCase() + "-scroller").offset().top - 100});


    });


    // Decalre component
    var menuItem = $(".menu-item");
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        for(var i = 0; i < menuItem.length; i++) {
            $(menuItem[i]).css({"border": "none"});
            var item = $(menuItem[i]).find("a").attr("href");
            var state = item.includes("#");

            if(state) {
                
                var linkPosition = $(item.toLowerCase() + "-scroller").offset().top;
                console.log("Current link position  :   "  + linkPosition);
                console.log(linkPosition.height);

                if(scroll > (linkPosition - 75) && scroll < (linkPosition)) {
                    $(menuItem[i]).css({"border": "solid 2px black"});
                }

            }



        }
    });






    console.log(menuItem);
})

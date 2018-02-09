$( document ).ready(function() {

    $("html, body").scrollTop($("#news-scroller").offset().top);

    $(".menu-item").click(function () {

        var menuLinkItem = $(this).find("a").attr("href");

        $("html, body").animate({scrollTop:$(menuLinkItem.toLowerCase() + "-scroller").offset().top - 100});


    });


    // Decalre component
    var menuItem = $(".menu-item");

    if (false) {

        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            for(var i = 0; i < menuItem.length; i++) {
                $(menuItem[i]).css({"border": "none"});
                var item = $(menuItem[i]).find("a").attr("href");
                var state = item.includes("#");

                if(state) {

                    var linkPosition = $(item.toLowerCase() + "-scroller").offset().top;
                    var blocItemHeight = $(item.toLowerCase() + "-homepage-container").height();


                    console.log("Current link position  :   "  + linkPosition);


                    if(scroll > (linkPosition - 120) && scroll < (linkPosition + 600)) {
                        $(menuItem[i]).css({"border": "none"});
                        $(menuItem[i]).css({"border-bottom": "solid 4px black"});
                    }
                }
            }
        });
    }


    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        console.log(scroll);
        var modelPosition = $("#model-homepage-container").offset().top;
        var servicesPosition = $("#home-page-services-container").offset().top;
        var clientsPosition = $("#clients-homepage-container").offset().top;
        var projectsPosition = $("#projects-homepage-container").offset().top;
        var missionPosition = $("#mission-homepage-container").offset().top;
        var teamPosition = $("#team-homepage-container").offset().top;



        if(scroll > modelPosition)  {
            console.log("model reached");
        }
        

    });



    console.log(menuItem);
})

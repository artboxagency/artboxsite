$(document).ready(function() {

    //var infosHomePage = $("#home-page-infos-container");
    var infosHomePage = $("#home-page-infos-container");
    var newsHomePage  = $("#news-homepage-container");
    var modelHomePage = $("#model-homepage-container");
    var serviceModelPage = $("#home-page-services-container");
    var projectsHomePage = $("#projects-homepage-container");
    var missionHomePage = $("#mission-homepage-container");
    var teamHomePage = $("#team-homepage-container");
    var servicesHomepage = $("#home-page-services-container");
    var clientsHomepage = $("#clients-homepage-container");

    // All components Array
    var allHomePageComponent = [
        newsHomePage,
        modelHomePage,
        serviceModelPage,
        projectsHomePage,
        missionHomePage,
        servicesHomepage,
        clientsHomepage,
        teamHomePage

    ];

    // Hide those components
    allHomePageComponent.forEach(element => {
        element.find(".first-animation").css({
            "opacity" : "0"
        });

        element.find(".second-animation").css({
            "opacity" : "0"
        });

        element.find(".third-animation").css({
            "opacity" : "0"
        });
        element.find(".fourth-animation").css({
            "opacity" : "0"
        });
        element.find(".fifth-animation").css({
            "opacity" : "0"
        });

    });

    var scrollerCounter = 0;
    // Check if Scroll
    $(window).scroll(function() {
        scrollerCounter++;
        var scrollPos = $(window).scrollTop();

        // Define different use case
        console.log("Scroll Position :  "  + scrollPos);

        console.log("top position of :  "  + $("#projects-homepage-container").offset().top);

        // Define use case and prevent bug
        if(scrollPos > ($("#projects-homepage-container").offset().top) - 150) {
            $("#projects-homepage-container .second-animation").addClass("animated fadeInLeft");

        }
        if(scrollPos > ($("#home-page-services-container").offset().top) - 150) {
            
        }
        if(scrollPos > ($("#mission-homepage-container").offset().top) - 150) {

            $("#mission-homepage-container .second-animation").addClass("animated fadeInLeft");

        }

        for(var i = 0; i < allHomePageComponent.length; i++) {

            var currentElement = allHomePageComponent[i];
            var elementPosition = currentElement.offset().top;

            if(scrollerCounter > 4) {
                if(scrollPos > (elementPosition) - 350) {

                    var animationEnd = (function(el) {
                      var animations = {
                        animation: 'animationend',
                        OAnimation: 'oAnimationEnd',
                        MozAnimation: 'mozAnimationEnd',
                        WebkitAnimation: 'webkitAnimationEnd',
                      };

                      for (var t in animations) {
                        if (el.style[t] !== undefined) {
                          return animations[t];
                        }
                      }
                    })(document.createElement('div'));

                    var secondAnimation = currentElement.find(".second-animation");
                    var thirdAnimation = currentElement.find(".third-animation");
                    var fourthAnimation = currentElement.find(".fourth-animation");
                    var fifthAnimation = currentElement.find(".fifth-animation");

                    currentElement.find(".first-animation").addClass('animated fadeInLeft').one(animationEnd, function() {

                        console.log(currentElement);
                        secondAnimation.addClass('animated fadeInLeft').one(animationEnd, function() {
                            console.log("Second animation done");
                            thirdAnimation.addClass('animated fadeInUp').one(animationEnd, function() {
                                console.log("Third animation done");
                                fourthAnimation.addClass('animated fadeInUp').one(animationEnd, function() {
                                    console.log("salut");
                                    fifthAnimation.addClass('animated fadeInUp');
                                });
                            });
                        });
                    });

                }


                //$("#news-homepage-container").addClass('animated fadeInLeft');
                //$("#news-homepage-container").show();

            }
        }

    });

    var scrollTool = {

        // Always refering to body
        animateScrollTo: function(elementSelectorPosition) {
            $(document).animate({scrollTop: elementSelectorPosition + "px"});
        },

        scrollToTop: function() {
            $(document).animate({scrollTop: 0 + "px"});
        }
    }
});

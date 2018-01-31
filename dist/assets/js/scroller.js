$(document).ready(function() {
    // Get component

    //var infosHomePage = $("#home-page-infos-container");
    var newsHomePage  = $("#news-homepage-container");
    var modelHomePage = $("#model-homepage-container");
    var serviceModelPage = $("#home-page-services-container");
    var projectsHomePage = $("#projects-homepage-container");
    var missionHomePage = $("#mission-homepage-container");
    var teamHomePage = $("#team-homepage-container");


    // All components Array
    var allHomePageComponent = [
        newsHomePage,
        modelHomePage,
        serviceModelPage,
        projectsHomePage,
        missionHomePage,
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

    });

    // Hide those components

    var scrollerCounter = 0;
    // Check if Scroll
    $(window).scroll(function() {
        scrollerCounter++;
        var scrollPos = $(window).scrollTop();

        for(var i = 0; i < allHomePageComponent.length; i++) {

            var currentElement = allHomePageComponent[i];
            var elementPosition = currentElement.offset().top;

            if(scrollerCounter > 4) {
                if(scrollPos > (elementPosition) - 350) {
                    // See https://github.com/daneden/animate.css/issues/644
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

                    currentElement.find(".first-animation").addClass('animated fadeInLeft').one(animationEnd, function() {
                        secondAnimation.addClass('animated fadeInLeft').one(animationEnd, function() {
                            thirdAnimation.addClass('animated fadeInLeft');
                        });
                    });

                }

                //$("#news-homepage-container").addClass('animated fadeInLeft');
                //$("#news-homepage-container").show();

            }
        }

    });



    var scrollTool = {

        animateChildElementOfDomNode: function(parent, classes, callback) {

        },

        // Always refering to body
        animateScrollTo: function(elementSelectorPosition) {
            $(document).animate({scrollTop: elementSelectorPosition + "px"});
        },

        scrollToTop: function() {
            $(document).animate({scrollTop: 0 + "px"});
        }
    }
});

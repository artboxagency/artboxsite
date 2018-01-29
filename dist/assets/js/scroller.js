$(document).ready(function() {
    // Get component
    var infosHomePage = $("#home-page-infos-container");
    var newsHomePage  = $("#news-homepage-container");
    var modelHomePage = $("#model-homepage-container");
    var projectsHomePage = $("#projects-homepage-container");
    var missionHomePage = $("#mission-homepage-container");
    var teamHomePage = $("#team-homepage-container");
    var servicesHomepage = $("#home-page-services-container");

    // All components Array
    var allHomePageComponent = [
        infosHomePage,
        newsHomePage,
        modelHomePage,
        projectsHomePage,
        missionHomePage,
        servicesHomepage,
        teamHomePage

    ];

    // Hide those components
    allHomePageComponent.forEach(element => {
        element.css({
            "opacity":"0"
        });
    });
    console.log(allHomePageComponent);
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
                if(scrollPos > (elementPosition) - 200) {
                    currentElement.addClass('animated fadeInLeft');
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

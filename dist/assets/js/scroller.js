$(document).ready(function() {
    
    // Define components top position
    
    
    var news = $("#news-homepage-container").offset().top;
    
    
    // Check if Scroll
    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();
        console.log(scrollPos);
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
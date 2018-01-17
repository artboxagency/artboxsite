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
        animateScrollTo: function(domElement, elementSelectorPosition) {
            $(domElement).animate({scrollTop: elementSelectorPosition + "px"});
        }
    } 
});
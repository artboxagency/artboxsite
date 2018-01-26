$(document).ready(function() {
    
    // Kill Scroll
    if ($("#landing-page-animation").length > 0) {
        GeneralBehaviour.ScrollTool.killScroll($("body"));
    } 
    $("#landing-page-animation").scroll(function() {
        console.log("penis");
    });
    
    $("#landing-page-animation").click(function()  {
        $(".landing-page-container").addClass("animated flipOutY ");
            
        setTimeout(function(){ 

            $("#landing-page-animation").addClass("toFadeOut"); 
            GeneralBehaviour.ScrollTool.enableScroll($("body"));    
        }, 1200);
    })
    


});


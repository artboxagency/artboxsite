$(document).ready(function() {
    
    // Kill Scroll
    GeneralBehaviour.killScroll($("body"));

    
    $("#landing-page-animation").click(function()  {
        $(".landing-page-container").addClass("animated flipOutY ");
            
        setTimeout(function(){ 

            $("#landing-page-animation").addClass("toFadeOut"); 
            GeneralBehaviour.enableScroll($("body"));    
        }, 1200);
    })
    


});


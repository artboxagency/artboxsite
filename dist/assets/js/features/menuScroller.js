$( document ).ready(function() {

    $("html, body").scrollTop($("#news-scroller").offset().top);

    $(".menu-item").click(function () {
        
        var menuLinkItem = $(this).find("a").attr("href");
        
   
        $("html, body").animate({scrollTop:$(menuLinkItem + "-scroller").offset().top - 100});
        
    }); 
    
    // Decalre component 
})
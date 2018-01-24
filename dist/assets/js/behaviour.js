$(".menu-hamburger").click(function() {

    $("#menu").removeClass("kill-menu-display");
    $("#menu").addClass("active-menu-display");


    $("nav .close-button").click(function() {
        $("#menu").addClass("kill-menu-display");
        $("#menu").removeClass("active-menu-display");
    });
})


$("#formulas-homepage-container").hide();

$(".font-medium-title.know-more").click(function() {
    
    $("#formulas-homepage-container").slideToggle(500);
    $(this).find(".plus-to-know-more").toggleClass("active-button");
});


$(".return-homepage").click(function () {
    $("#site-container *").addClass("animated flipOutY");
    console.log("http://localhost:8888/artbox/art2k18/dist/")
    setTimeout(function(){ console.log(GeneralBehaviour.RedirectionTool.redirecTo(GeneralBehaviour.HomePath)) }, 1200);
});

$("#contact-homepage-container input").addClass("active-input");


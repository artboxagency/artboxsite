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
});

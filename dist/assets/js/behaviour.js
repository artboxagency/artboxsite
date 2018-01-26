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

setTimeout(function() { 

    console.log("Init Session");
    $.ajax({
        url : 'utils/actions/setSessions.php' // La ressource ciblée
     });

 }, 3000);

 setTimeout(function() { 

    console.log("Die Session");
    $.ajax({
        url : 'utils/actions/setSessions.php?dieSession=true' // La ressource ciblée
     });

 }, 50000000);

$(".subgenres-list").hide();

$(".service-title").click(function() {
    
    $(this).parent().find(".subgenres-list").slideToggle();
})

 var lineDrawing = anime({
    targets: 'svg path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: true
});
  


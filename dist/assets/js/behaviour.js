var largeur = window.innerWidth;
if(largeur > 880) {
    $(".close-button").hide();
}

window.onresize = function(event) {
    if(window.innerWidth > 880) {
        $(".close-button").hide();
    }
};


$(".menu-hamburger").click(function() {

    $("#menu").removeClass("kill-menu-display");
    $("#menu").addClass("active-menu-display");
    $(".close-button").show();
    // add closed button
    $(".close-button").addClass("active-button");

    $(".menu-item").click(function() {
        killMenuDisplay();
    })
    $(".close-button").click(function() {
        killMenuDisplay();
    });

})

function killMenuDisplay() {
    $(".close-button").removeClass("active-button");
    $("#menu").addClass("kill-menu-display");
    $("#menu").removeClass("active-menu-display");
}

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

// Adding Form Hider
$(".form-container").hide();
$(".call-to-action-container").css({"margin-bottom": "180px"});

$(".call-to-action-container").click(function() {
    $(".call-to-action-container").css({"margin-bottom": "45px"});
    $(".form-container").fadeIn();
})

setTimeout(function() {


    $.ajax({
        url : 'utils/actions/setSessions.php' // La ressource ciblée
     });

 }, 3000);

 setTimeout(function() {


    $.ajax({
        url : 'utils/actions/setSessions.php?dieSession=true' // La ressource ciblée
     });

 }, 50000000);

$(".subgenres-list").hide();

$(".service-title").click(function() {
    $(this).find(".plus-to-know-more").toggleClass("active-button");
    $(this).parent().find(".subgenres-list").slideToggle();
})


window.onresize = function(event) {
    if(window.innerWidth > 1000) {
        $("");
    }
};

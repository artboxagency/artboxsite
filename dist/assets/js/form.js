$(".cameleon-label-form").click(function() {
    console.log("salut");


    $(this).parent().find("input").toggleClass("active-input");
});

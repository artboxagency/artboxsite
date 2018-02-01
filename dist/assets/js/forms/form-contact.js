$("#contact-homepage-container .form-submit").click(function() {

    var form = $("#contact-homepage-container form .single-input");
    var _valueToProcess = {};


    for(var i = 0; i<form.length; i++) {
        var formItemName = form[i].name;
        _valueToProcess[formItemName] = $(form[i]).val();
    }

    var stringifyValue = JSON.stringify(_valueToProcess);
    $("#unique-form").fadeOut(500);
    // Then Ajax
    $.post( "site-parts/controllers/formSubmitController.php", {contactForm: stringifyValue})
        .done(function(data) {
            $("#unique-form").fadeIn("500");
    });
});

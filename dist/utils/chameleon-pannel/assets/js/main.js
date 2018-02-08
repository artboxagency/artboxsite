$(document).ready(function() {

    $("#connect-validate").click(function() {
        // Define input
        var inputs = $("#loginForm input");
        var credentials = {};


        for(var i = 0; i < inputs.length; i++) {
            credentials[inputs[i].name] = $(inputs[i]).val();
        }
        //
        var toPost = JSON.stringify(credentials);
        $.ajax({
            method: "POST",
            url: "services/loginService.php",
            data:  {'creds': toPost}
          })
            .done(function(response) {


        });

    })
});

function toObject(arr) {
    var rv = {};
    for (var i = 0; i < arr.length; ++i)
      rv[i] = arr[i];
    return rv;
  }

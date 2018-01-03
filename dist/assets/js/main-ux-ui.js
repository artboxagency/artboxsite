"use strict"
$( document ).ready(function() {

	$("br").remove();

// Code to be executed when the whole document object model has loaded
    // Handle closing toggling membership menu
    $(".become-member-container .button").click(function() {
		enableMembershipForm();

	});

    $(".become-member span").click(function() {
		$(".login-form-container .closing-button").trigger("click");
        $(".menu-membership").trigger("click");
    });

    $(".call-to-action.main-page-button.become-member").click(function() {
		enableMembershipForm();
	})


    function enableMembershipForm() {
		$("#bloc-membership-overlay").addClass("active-membership");
		blockScrolling('body')

		$("#bloc-membership-overlay .closing-button").click(function() {

			$(this).parent().removeClass("active-membership");
			enableScrolling('body');
		});
    }


    // Handle closing of involve
    $(".become-involve").click(function() {
        $("#bloc-involve-overlay").addClass("active-involving");
        blockScrolling('body')

        $("#bloc-involve-overlay .closing-button").click(function() {

            $(this).parent().removeClass("active-involving");
            enableScrolling('body');
        });
    });

/*
    // Handle video
    $(".button.button-video").click(function() {
        // Hide Menu
        $("header").fadeOut(400);
        displayVideo(true);
        $(".closing-button.video").click(function() {
			$("header").fadeIn(400);
            displayVideo(false);
        });

    });
*/
    // Handle login display
    $("header .connection").click(function() {
        $("#bloc-login-overlay").addClass("active-login");

        $("#bloc-login-overlay .closing-button").click(function() {
			$("#bloc-login-overlay").removeClass("active-login");
        });
    });


});


function displayVideo(active) {
    var height;
    if(!active) {
        height = "0%";
    } else {
        height = "100%";
    }

    $(".video-foreground iframe").animate({
        "height" : height
    }, 1000, function() {
        // This function is trigger when the animation is done

        // Display Button for closing video
        $(".closing-button.video").addClass("active-button-video");
    });
}

function blockScrolling(element) {
    $(element).css({
        overflow: 'hidden',
        height: '100%'
    });
}

function enableScrolling(element) {
    $(element).css({
        overflow: 'auto',
        height: 'auto'
    });
}

$(".white-rounder").click(function() {
    
});


$(".call-to-action.button-video").click(function(){
	$("#fullScreenDiv").addClass("kill-display");

})

$(".video-component .closing-button").click(function() {
	$("#fullScreenDiv").removeClass("kill-display");
})

window.onload = function () {
	var element = document.getElementById('video');
	element.muted = "muted";
}


$(".video-component .closing-button").click(function() {
	$(this).parent().remove();
	$("#fullScreenDiv").removeClass("kill-display");
	enableScrolling($("body"));
});

$(".wrapper-item-news p").click(function() {

	if($(this).find("input").is(":checked"))  {
		$(this).find("input").prop('checked', false);
	}  else {
		$(this).find("input").prop('checked', true);
	}
});


// Handle form selected moment
$("#involve-moment-selection").change(function () {
		var str = "";
		$( "select option:selected" ).each(function() {
			str += $(this).text() + " ";
		});
	$(".appointment-moment").val(str);
})


if(window.innerWidth < 550) {

	$("#bloc-involve-infos	.center-content h3 br").remove();
}


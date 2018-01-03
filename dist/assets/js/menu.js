// Define variables

$( document ).ready(function () {
	var blocHome= [$("#bloc-home").offset().top, "blue", "bloc-home"];
	var blocInfos = [$("#bloc-infos").offset().top, "blue", "bloc-infos"];
	var blocEvents = [$("#bloc-events").offset().top, "transparent", "bloc-event"];
	// var blocInvolve = [$("#bloc-involve").offset().top, "transparent", "bloc-involve"];
	var blocInvolveInfos = [$("#bloc-involve-infos").offset().top, "blue", "bloc-involve-infos"];
	var blocQuestions = [$("#bloc-question").offset().top, "transparent", "block-question"]
	var blocs = [blocInfos, blocEvents,blocInvolveInfos, blocQuestions];

	var menuHome = $(".menu-home");
	var menuAbout = $(".menu-about");
	var menuEvents = $(".menu-events");
	var menuInvolve = $(".menu-involve");
	var menuQuestion = $(".menu-question");

// Define Pin
	var homeAnchor = $(".menu-home-anchor");
	var infosAchor = $(".menu-infos-anchor");
	var eventAnchor = $(".menu-events-anchor");
	var involveAnchor = $(".menu-involve-anchor");
	var involeInfosAnchor = $(".menu-involve-infos-anchor");
	var questionAnchor = $(".menu-question-anchor");

	// Change color on click
	$(".menu-item").click(function() {
		$("header").css({"background-color":"white"});

	});

	// Load require code on document laod
	executeOnDocReady();
	// Set on load document color
	function executeOnDocReady() {


		$("nav .menu-home").css({
			"background-color":"#004588",
			"color" : "white"
		});
		$('header').css({
			"background-color":"transparent"
		});
		if($(window).scrollTop() > 2) {

			$("header").css({"background-color":"white"});
		}

	}
	$(".menu-home-anchor").addClass("single-white");
// Define user behaviour
	$(window).scroll(function() {


		var currentScroll = $(window).scrollTop();

		// Loop through all blocks
		for (var i = 0; i < blocs.length; i++) {
			var currentBlock = blocs[i];
			if (currentScroll >= currentBlock[0] && currentScroll < currentBlock[0] + 500) {
				displayHeaderBackground(currentBlock)
			}

		}

		// Verify Menu
		printCurrentBlocMenu(currentScroll);

	});

// Define functions
	function displayHeaderBackground(blocInfos) {

		if (blocInfos[1] == "blue") {

		} else {

		}
	}

// Handle menu color changing
// Get all menus items
	function printCurrentBlocMenu(scroll) {
		clearMenu();
		clearAnchor();

		var limiter = 400;

		if(scroll == 0 )  {

			$("header").css({"background-color":"transparent"});
			$("header").removeClass("activate-shadow");
		}

		if(scroll > 3) {
			$("header").addClass("activate-shadow");
		}
		if(scroll > blocHome[0] - window.innerHeight - limiter && scroll < (blocHome[0] + window.innerHeight - limiter)) {

			$("#menu-linker li").addClass("all-blue");
			menuHome.css({
				"background-color":"#004588",
				"color":"white"
			});

			homeAnchor.addClass("single-white");


			$("header").css({"background-color":"white"});



		} else if(scroll > blocInfos[0] - limiter && scroll < (blocInfos[0] + window.innerHeight - limiter)) {

			menuAbout.css({
				"background-color":"#004588",
				"color" : "white"
			});

			$('header').css({
				"background-color":"white"
			});

			$("#menu-linker li").addClass("all-blue");

			infosAchor.addClass("single-white");

		} else if(scroll > blocEvents[0] - limiter && scroll < (blocEvents[0] + window.innerHeight - limiter)) {
			menuEvents.css({
				"background-color":"#004588",
				"color":"white"
			});


			$("#menu-linker li").addClass("all-blue");

			eventAnchor.addClass("single-white");


		} else if(scroll > blocInvolveInfos[0] - 400 && scroll < (blocInvolveInfos[0] + (window.innerHeight))) {
			menuInvolve.css({
				"background-color":"#004588",
				"color":"white"
			});

			$("#menu-linker li").addClass("all-blue");
			involveAnchor.addClass("single-white");

		} else if (scroll > blocInvolveInfos[0] - 400 && scroll <(blocInvolveInfos[0]) + (window.innerHeight)) {
			menuInvolve.css({
				"background-color":"#004588",
				"color":"white"
			});
			$("#menu-linker li").addClass("all-white");
			involveAnchor.addClass("single-blue");

		} else if(scroll > (blocQuestions[0] - 400)){

			menuQuestion.css({
				"background-color":"#004588",
				"color":"white"
			});
			clearAnchor();
			questionAnchor.addClass("single-white");
		}
	}

	function clearMenu() {

		$("#menu-div li.menu-item").css({
			"background-color" : "transparent",
			'color' : "#004588"
		});
	}

	function clearAnchor() {



		$("#menu-linker li").removeClass("all-white");
		$("#menu-linker li").removeClass("all-blue");
		$("#menu-linker li").removeClass("single-white");
		$("#menu-linker li").removeClass("single-blue");

	}

	// Remove unwantes tyle

})

var wH = window.innerHeight;

$(".bloc").css({
	"min-height": (wH - 100) + "px"
})

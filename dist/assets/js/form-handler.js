$(document).ready(function () {
	// Form login
	$(".login-form-container .button.login").click(function () {

		$("#loginform").submit();
	});
	// Detect click on button
	$(".button.become-member.submit").click(function () {

		// Build datas
		var datastring = $("#form-membership").serialize();

		// Clear error message
		$(".errors-container").html("");

		if (verifyField($("#form-membership"))) {
			submitMembershipForm(datastring);
		}
	});

	// Detect click on button
	$(".button.get-involve.submit").click(function () {

		// Build datas
		var datastring = $("#form-involve").serialize();


		// Clear error message
		$(".errors-container").html("");

		if (verifyField($("#form-involve"))) {
			submitInvolveForm(datastring);
		}


	});

	// Detect click on button
	$(".button.question.submit").click(function () {

		var valueText = $("#text-area-question").val();

		$(".message-form-object").val(valueText);
		// Build datas
		var datastring = $("#form-question").serialize();


		// Clear error message
		$(".errors-container").html("");
		if (verifyField($("#form-question"))) {
			submitQuestionForm(datastring);
		}
	});


	// Take a form object and then verify it
	function verifyField(form) {
		// Get all required field
		var requiredField = $(form).find(".required");
		var stackerError = 0;

		// Process Field
		for (var i = 0; i < requiredField.length; i++) {
			var currentField = $(requiredField[i]).val();
			if (currentField.length == 0) {
				$(requiredField[i]).css({"border": "solid #DC143C 1px"});
				$(requiredField[i]).attr("placeholder", "Requis");
				stackerError++;
			} else {
				$(requiredField[i]).css({"border": "none"});
			}
		}
		if (stackerError == 0) {
			return true;
		} else {
			return false;
		}
	}

	function submitMembershipForm(datastring) {


		killFormDisplay($("#form-membership"));
		enableLoader($(".membership-form-container"));


		// Submit form via post method
		if (true) {
			$.ajax({
				method: "POST",
				url: "utils/forms/forms_process.php",
				data: datastring,
				success: function (output) {

					if (output.length > 2) {
						var decode = JSON.parse(output);

						if (decode.flag) {
							verifyError($(".membership-form-container .errors-container"), decode.flag);
							enableFormDisplay($("#form-membership"));
							killLoader();
						}
					} else {
						// If no error
						killLoader();
						$(".membership-form-container h3").hide();
						validatedFormSuccess($(".membership-form-container"), "<h4>Merci de vous être inscrit.</h4>");
						setTimeout(function () {
							otherMessage();
						}, 300);

						function otherMessage() {
							validatedFormSuccess($(".membership-form-container"), "<h4>Vous faites maintenant partie de la liste d’envoi du programme Alumni. Vous recevrez des informations sur les événements à venir et les projets réalisés.</h4>");
						}



						$(document).click(function () {
							$("#bloc-membership-overlay").fadeOut(500);
							enableScrolling($("body"));
						});
					}


				}
			})
		}
	}

	function submitInvolveForm(datastring) {

		killFormDisplay($("#form-involve"));
		enableLoader($(".invole-form-container"));


		// Submit form via post method
		if (true) {

			// Define asynchronous ajax call for form processing
			$.ajax({

				// Define ajax options
				method: "POST",
				url: "utils/forms/forms_process.php",
				data: datastring,

				// Build the function when the asynchronous call is success
				success: function (output) {

					if (output.length > 2) {

						// Decode the JSON answer
						var decode = JSON.parse(output);

						// If Errors are found then  process the error
						if (decode.flag) {

							// Verify error and happend them
							verifyError($(".membership-form-container .errors-container"), decode.flag);

							// Reload form display
							enableFormDisplay($("#form-membership"));

							// Kill the loader
							killLoader();
						}
					} else {

						// Kill loader
						killLoader();

						// Initiate the form success
						validatedFormSuccess($(".invole-form-container"), "<h4>Merci de vous être inscrit.</h4>");

						//
						$(".invole-form-container h3").hide();
						setTimeout(function () {
							otherMessage();
						}, 300);

						function otherMessage() {
							validatedFormSuccess($(".invole-form-container"), "<h4>Vous faites maintenant partie de la liste d’envoi du programme Alumni. </h4>" +
								"<h4>Vous recevrez des informations sur les événements à venir et les projets réalisés.\n</h4>" +
								"<h4>Un membre de l’équipe Alumni vous contactera aussi sous peu pour déterminer de quelle façon vous pourriez vous impliquer. </h4>");
						}

						$(document).click(function () {
							$("#bloc-involve-overlay").fadeOut(500);
							enableScrolling($("body"));
						});
					}


				}
			})
		}
	}

	function submitQuestionForm(datastring) {

		killFormDisplay($("#form-question"));
		enableLoader($(".question-form-container"));

		// Submit form via post method
		if (true) {

			// Define asynchronous ajax call for form processing
			$.ajax({

				// Define ajax options
				method: "POST",
				url: "utils/forms/forms_process.php",
				data: datastring,

				// Build the function when the asynchronous call is success
				success: function (output) {

					if (output.length > 2) {

						// Decode the JSON answer
						var decode = JSON.parse(output);

						// If Errors are found then  process the error
						if (decode.flag) {

							// Verify error and happend them
							verifyError($(".question-form-container .error-container"), decode.flag);

							// Reload form display
							enableFormDisplay($("#form-question"));

							// Kill the loader
							killLoader();
						}
					} else {

						// Kill loader
						killLoader();

						// Initiate the form success
						validatedFormSuccess($(".question-form-container"), "<h4 class='new-message-send' style='colorwhite;'>Merci de votre message.</h4>");

						//

						function otherMessage() {
							validatedFormSuccess($(".question-form-container"), "<h4 class='new-message-send' style='color:white;'>Un membre de l’équipe Alumni vous contactera sous peu.</h4>");
						}
						setTimeout(function () {
							otherMessage();
						}, 300);

						setTimeout(function () {
							// Fade out message sender
							$(".new-message-send").fadeOut(400);

							// Removing all previous message
							$("#form-question input").val("");
							$("#form-question textarea").val("");
							// Display the form
							$("#form-question").show();

						}, 4000);
						$(document).click(function () {
							$("#bloc-involve-overlay").fadeOut(500);
							enableScrolling($("body"));
						});
					}


				}
			})
		}
	}

	/*
	* void fx(x,y)
	* inputs => x = Dom element to use a parent à
	* 			y = erorrs

	* */
	function verifyError(domElement, errors) {

		// Each error case are done like this
		if (errors.email) {
			domElement.append("<div class='error email-error'>" + errors.email + "</div>");
			domElement.parent().find(".email-container").addClass("animated shake");
		}

		if (errors.username) {
			domElement.append("<div class='error username-error'>" + errors.username + "</div>");
			domElement.parent().find(".username-container").addClass("animated shake");
		}

	}

	function validatedFormSuccess(domElement, validationMessage) {
		domElement.append("<div class='form-validation-message'>" + validationMessage + "</div>")
	}

	/*
	* Functions bellow allows display and hiding of element plus for the processing
	*
	* */
	function killFormDisplay(element) {
		element.fadeOut(25);
	}

	function enableFormDisplay(element) {
		element.fadeIn(50);
	}

	/*void f(x)
		x -> the parent element on wich you would like to happend the loader.image
	*/
	function enableLoader(elementToHappen) {
		elementToHappen.append("<img id='loader-image' src='assets/images/component/Spinner.svg'>")
	}

	// Fadeout all loader image then remove them from the dom
	function killLoader() {
		$("#loader-image").fadeOut(75).remove();
	}
});

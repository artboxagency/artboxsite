$( document ).ready(function () {

	// Get all input field
	var inputs = $(".form-user-input input");

	// Everytime a key is pressed, process to the single field validation
	inputs.keydown(function (){
		handleSingleField($(this));
	});
});


function handleSingleField(field) {

	// Case
	if(field[0].name == "email") {
		$(field).addClass("not-valid");
		if(verifyCharacter(field.val(), ["@", "."]) == "valid") {
			$(field).removeClass("not-valid");
		}
	}

	if(field[0].name == "password") {
		validatePassword($(field).val());

	}
	if(field[0].name == "phone") {

	}
}


function verifyCharacter(value, forcedCharacter) {


	var char = value.split("");
	var validator = 0;
	for(var i = 0; i < value.length; i++) {
		for(var j = 0; j < forcedCharacter.length; j++) {
			if(value[i] == forcedCharacter[j]) {
				validator++;
			}
		}
	}

	if(validator >= forcedCharacter.length) {
		return validateField(true);
	}
	return validateField(false);
}


function validateField(state) {
	if(state == true) {
		return "valid";
	} else {
		return "not";
	}
}



var passwordMinimumLength = 12;
var intCount = 2;
var messages = [];
// Special function for Password
function validatePassword(passwordValue) {
	messages = [];
	var intCounter = 0;
	var char = passwordValue.split("");
	for(var i =0; i < char.length; i++) {

		// Check for integer in password
		if(isNaN(char[i]) == false) {
			intCounter++;
		}

	}

	if(intCounter >= intCount && passwordValue.length >= passwordMinimumLength) {

	} else {
		if(intCounter <= intCount) {
			messages.push("Le mot de passe doit contenir au moins deux charactère numérique");
		}
		if(intCounter <= intCount) {
			messages.push("Le mot de passe doit contenir au moins 12 charactère");
		}
	}
	displayPasswordMessage(messages);
}

function displayPasswordMessage(messages) {

	var container = $(".password-message-container");
	container.html("");
	for(var i = 0;i < messages.length; i++) {
		container.append("<div class='message'>" + messages[i] + "</div>");
	}
}





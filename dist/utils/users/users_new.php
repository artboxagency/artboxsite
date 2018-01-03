<?php
require "../security/crypt.php";
require "../security/password.php";
require "../security/tokens.php";
require "../emails/email_methods.php";

/*
	This function init a new user
	-> It's the entry point for all user processing
		-Data processing
		-Email sending
		-Flagger etc...

	bool f(x, y)
	input y =The functions takes a $db object as argument,
				->db is passed as argument to others argument,
				-> Please note that all other function calling db
				   use a copy of this params.

*/
function initNewUser($form, $db) {


	/* Handle error case */
	// Start by checking if a user already exist
	// Void fx($formField)
	if (checkIfUserExist($form["email"], $db)) {

		// Set errors
		$errors["flag"]["email"] = "Ce email est déjà lié à un compte.";
	}
	// Void
	if(checkIfSingleUsername($form["username"], $db)) {

		// Set errors
		$errors["flag"]["username"] = "Ce nom d'utilisateur existe déjà";
	}

	// Print Errors
	if (count($errors) > 0) {
		echo json_encode($errors);
	}


    /*
        For processing the SQL request let's build our data
    */
	if (isset($form["newsletter"])) {

		// set form newsletter
		$form["newsletter"] = 1;

	} else {
		$form["newsletter"] = 0;
	}

    // Build datas for query
    $firstname = $form["firstname"];
    $lastname = $form["lastname"];
    $age = $form["age"];
    $email = $form["email"];
    $profession = $form["profession"];
    $username = $form["username"];
    $password = $form["password"];
    // Let's encrypt the password
    $password = encryptPassword($password);
    $newsletter = $form["newsletter"];

    // Populate a token
	$x = array();
    $validationToken  = populateToken($x["alpha-numeric"]);

    // Smash them into an array for building message template
    $messageContent["firstname"] = $firstname;
    $messageContent["lastname"] = $lastname;
    $messageContent["email"] = $email;
    $messageContent["username"] = $username;
    $messageContent["token"] = $validationToken;


    // Let's persist into our database
    $sql = "INSERT INTO ndl_pending_users (firstname, lastname, age, profession, email, username, password, validation_token)
    VALUES ('$firstname', '$lastname', $age, '$profession', '$email', '$username', '$password', '$validationToken')";

    if ($db->query($sql) === TRUE) {

    } else {

    }

    // Let's init new user newsletter
	$sqlNewsletter = "INSERT INTO ndl_newsletter (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email')";


	if ($db->query($sqlNewsletter) === TRUE) {

	} else {
		echo "Error: " . $sqlNewsletter . "<br>" . $db->error;
	}


    // Send email of new user
    $messageContent = buildSubscriptionMessage($messageContent);

    // TODO: Create a function for sending email to the user for account validation
	if(FALSE) {
		sendNewUserMail($messageContent, $email);
	}
	return true;
}

function validateNewUser($token, $db) {
    var_dump($token);
}

function checkIfUserExist($userEmail = false, $db) {

	if ($userEmail) {

		// Build the query
		$sql = "SELECT email from ndl_users";

		// Get the results
		$result = $db->query($sql);

		// check is some results
		if ($result->num_rows > 0) {

			// Loop through all records
			while($row = $result->fetch_assoc()) {

				// If a record with user email exist
				if($row["email"] == $userEmail) {

					// Return true so email exists
					return true;
				}
			}
		}

	} else {
		return false;
	}
}


function checkIfSingleUsername($username= false, $db) {

	if ($username) {

		// Build the query
		$sql = "SELECT username from ndl_users";

		// Get the results
		$result = $db->query($sql);

		// check is some results
		if ($result->num_rows > 0) {

			// Loop through all records
			while($row = $result->fetch_assoc()) {

				// If a record with user email exist
				if($row["username"] == $username) {

					// Return true so email exists
					return true;
				}
			}
		}

	} else {
		return false;
	}
}

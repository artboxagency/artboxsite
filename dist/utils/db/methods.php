<?php
// Start the session
session_start();

require "connect.php";
require "../security/password.php";

// Return all the users in the dabatase
function getUsers($db = FALSE) {

	if ($db) {
		//Declare user array
		$users = array();

		// Build Query
		$sql = "SELECT * FROM ndl_users";

		// Fetch Result
		$result = $db->query($sql);

		// Check is some datas where found
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$users[] = $row;
			}

		}
		return $users;
	} else {

	}
}

function logUser($db, $username, $password, $redirect = FALSE) {
	if ($db) {
		if ($username) {

			// Build Query
			$sql = "SELECT * FROM ndl_users WHERE username='$username'";

			// Fetch Result
			$result = $db->query($sql);

			// Check for user and declare user
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$user = $row;
				}
			}

			// If a user with this username exist
			if ($user) {

				// Compare password
				if (verifyPassword($password, $user["password"])) {

					// Get user Id
					$userId = $user["id"];
					// Build a query
					$sql = "UPDATE ndl_users SET is_log=1 WHERE id=$userId";

					// Process the user login
					if ($db->query($sql) === TRUE) {

						// Then generate a session token
						initUserSession($userId, $db);

						if ($redirect) {
							// Redirect
							redirect("../../");
						}
					}
				}
			}
		}
	}
}

function initUserSession($userId = FALSE, $db) {
	if ($userId) {
		$token = generateToken($userId);
		$now = time();
		$sql = "INSERT INTO ndl_sessions (user_id, start_time, user_ip, token)
        VALUES ('$userId', '$now', '127.0.0.0.1', '$token')";

		if ($db->query($sql) === TRUE) {

			// Then declare the client side session
			$_SESSION["is_logged_in"] = TRUE;
			$_SESSION["session_token"] = $token;
			$_SESSION["uid"] = $userId;

			return TRUE;
		}
	}
}

/*
*    Input = uniqueUserId
*    Output = random token
*/
function generateToken($userId = FALSE) {
	if ($userId) {
		$token = md5(uniqid($userId * rand(0, pow(2, 32)), TRUE));
		return $token;
	} else {
		return FALSE;
	}
}

function setSession() {

}

function setMessage($loginMessageError = FALSE) {
	if ($loginMessageError) {
		$loginMessage = "Une erreur de connection est arrivée";
	} else {
		$loginMessage = "Vous êtes connecté";
	}
	return $loginMessage;
}

function redirect($url) {
	echo "<script>location.href='$url';</script>";
}

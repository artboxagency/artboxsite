<?php
/*
This file contains all related functions for users processing
Such as connect, disconnect and so on ..

 */

/*
    f(x) => array
    input => UserId(int), $field(string)
        UserId = The id of the user you want to get infos
        Field  = Singlefield
    output => UserInfos(Array)
*/
function getUserInfos($db, $userId = FALSE, $field = FALSE) {

	if ($userId) {

		$sql = "SELECT * FROM ndl_users WHERE id=$userId";

		$result = $db->query($sql);
		// Check is some datas where found
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				if ($field) {
					$user[] = $row[$field];
				} else {
					$user[] = $row;
				}

			}
		}
		return $user;
	} else {
		return FALSE;
	}

}

/*
    This function timestamp the users loggedout inside the the DB
    This function also call killUserSession(x=>uid), that detroy the session
    This functions DOES NOT LOGOUT the user but simply handle session related infos
*/
function logUserDisconnect($sessionToken = FALSE) {

	if ($sessionToken) {

		// Declare infos
		$sessionEndTime = time();

		// Query to the db
		$db = connectToDb();
		$sql = "UPDATE ndl_sessions SET end_time='$sessionEndTime' WHERE token='$sessionToken'";
		if ($db->query($sql) === TRUE) {
			// If the record has been update. Kill the session
			killUserSession();
		} else {
			echo "Error updating record: " . $db->error;
		}

	} else {

		return FALSE;
	}
}

/*
    This function logout the user with a given user id
*/
function logOutUser($userId = FALSE) {
	if ($userId) {
		// Query to the db
		$db = connectToDb();
		$sql = "UPDATE ndl_users SET is_log=0 WHERE id='$userId'";

		if ($db->query($sql) === TRUE) {

		}
	}
}

/*
    f(x)=>VOID
    Takes not input, kill the current session
*/
function killUserSession() {


	// Unset all of the session variables.
	$_SESSION = array();

	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}

	// Finally, destroy the session.
	session_destroy();
}

function getClientDeviceInfos() {
	$_SERVER['HTTP_USER_AGENT'] . "\n\n";
	$browser = get_browser(NULL, TRUE);
	print_r($browser);
}

/*
    This function take a password, salt it and compare it to the encrypted one in the bd
*/
function checkPassword($passwordEntry, $hashedPassword) {

	$hashed_password = crypt($passwordEntry); // let the salt be automatically generated
	if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
		return TRUE;
	}
}

?>

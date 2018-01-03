<?php


require "utils/db/connect.php";

validateNewUser($_GET["token"], connectToDb());

function validateNewUser($token, $db) {

	$sql = "SELECT * FROM ndl_pending_users WHERE validation_token = '$token'";
	$result = $db->query($sql);
	$temporaryUserDatas = array();

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$temporaryUserDatas = $row;
			// Populate a new entry in the user table
			populateNewUser($temporaryUserDatas, $db);

		}
	} else {

	}
	$db->close();
}

function populateNewUser($datas, $db) {

	// Collect good datas for query
	$username = $datas["username"];
	$password = $datas["password"];
	$firstname = $datas["firstname"];
	$lastname = $datas["lastname"];
	$email = $datas["email"];

	$sql = "INSERT INTO ndl_users (username, password, firstname, lastname, email)  VALUES ('$username', '$password', '$firstname', '$lastname', '$email')";

	if ($db->query($sql) === TRUE) {

		// If the new user is populate into user_db
		deleteTemporaryEntry($datas['validation_token'], $db);
		redirect();
	} else {

		echo $sql . "<br>" . $db->error;
	}

}

// Takes a unique token and
function deleteTemporaryEntry($token, $db) {

	$sql = "DELETE FROM ndl_pending_users WHERE validation_token = '$token' ";
	if ($db->query($sql) === TRUE) {
		echo "The user was well deleted";
	}

}

function redirect() {
	echo "<script>location.href='index.php?uservalidate=true';</script>";
}

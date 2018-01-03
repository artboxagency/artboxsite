<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-08
 * Time: 11:11
 */


$servername = "127.0.0.1";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "ndlqc_www_alumni");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {

	echo "<h1>If you see a dog, you are well connected to the DB <3 <3</h1>";
	echo "<img src='https://i.imgflip.com/4a8he.jpg'>";
}
$task = $_GET["task"];

if($task == "select") {
	$sql = "SELECT * FROM ndl_users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["username"];
		}
	} else {
		echo "0 results";
	}
}

if($task == "delete") {
	// sql to delete a record
	$sql = "DELETE FROM ndl_users";

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}



$conn->close();

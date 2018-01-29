<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-23
 * Time: 10:18
 */

/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-08
 * Time: 11:11
 */

$servername = "127.0.0.1";
$username = "root";
$password = "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905";

// Create connection
$conn = new mysqli($servername, $username, $password, "ndl");
// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {



}
$task = "select";
if ($task == "select") {
	$sql = "SELECT * FROM ndl_membership";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "<li>" . $row["email"] . "</li>";
		}
	} else {
		echo "0 results";
	}
}

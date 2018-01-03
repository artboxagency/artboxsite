<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-23
 * Time: 09:53
 */

/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-08
 * Time: 11:11
 */


$servername = "";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "ndlqc_www_alumni");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Create database

$conn->close();

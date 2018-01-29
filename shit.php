<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-08
 * Time: 11:11
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "127.0.0.1";
$username = "root";
$password = "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905";

// Create connection
$conn = new mysqli($servername, $username, $password, 'artb2018');

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

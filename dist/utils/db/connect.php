<?php

require "setup.php";

function connectToDb() {

    // Create connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DB);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        return $conn;
    }
}

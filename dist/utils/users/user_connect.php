<?php


require "../db/methods.php";
require "users_methods.php";
// Create new Db instance
$db = connectToDb();

// Get username and password login
$username = $_POST["username"];
$password = $_POST["password"];

// Process to user Login
logUser($db, $username, $password);

// Set user's first name into session
$_SESSION["firstname"] = getUserInfos($db, $_SESSION["uid"], "firstname");





echo "<script>location.href='../../';</script>";

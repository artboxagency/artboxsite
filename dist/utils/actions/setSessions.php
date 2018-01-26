<?php
session_start();

// Set session variables
$ip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);
$_SESSION["visitor"] = array();
$_SESSION["visitor"]["ip"] = $ip;
$_SESSION["visitesStatus"] = 100;

if($_GET["dieSession"])  {
    dieSession();
}

// Void
function dieSession() {


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
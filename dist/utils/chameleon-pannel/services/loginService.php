<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../../Autoloader.php";

$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

$auth = new Auth();

//$_server, $_username ,$_passwor
if($_POST["creds"]) {

    $decodeCreds = json_decode($_POST["creds"]);
    $auth->setauthUserName($decodeCreds->email);
    $auth->setPassword($decodeCreds->password);
    $auth->db = $db;

    // Send username // password
    if($auth->logUser($db ,$decodeCreds->email, $decodeCreds->password)){

        $auth->initSession();
        $auth->session->stampNewSessionInDb();
        $auth->setSession();
            
    } else {

        // Print logging error
        echo json_encode($auth->getErrors());
    }


//    var_dump($auth);

}

function loginService($username, $password) {
    echo $username . $password;
}

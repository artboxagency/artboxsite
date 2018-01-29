<?php
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

function getDrivingForces($db, $lang) {

    $sql = "SELECT * FROM dForces where locale = '$lang'";
    $drivingForces = $db->getData($sql);
    return $drivingForces;
}

$drivingForces = getDrivingForces($db, $_SESSION["locale"]);

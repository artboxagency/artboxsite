<?php
$db = new Db("127.0.0.1", "root", "ipod", "");

function getDrivingForces($db, $lang) {

    $sql = "SELECT * FROM dForces where locale = '$lang'";
    $drivingForces = $db->getData($sql);
    return $drivingForces;
}

$drivingForces = getDrivingForces($db, $_SESSION["locale"]);

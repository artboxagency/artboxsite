<?php
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");

function getDrivingForces($db, $lang) {

    $sql = "SELECT * FROM dForces where locale = '$lang'";
    $drivingForces = $db->getData($sql);
    return $drivingForces;
}

$drivingForces = getDrivingForces($db, $_SESSION["locale"]);

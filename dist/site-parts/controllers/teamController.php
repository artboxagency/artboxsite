<?php
$db = new Db("127.0.0.1", "root", "ipod", "");

function getTeamMembers($db, $lang) {

    $sql = "SELECT * FROM team where locale='$lang'";
    $teamMembers = $db->getData($sql);
    return $teamMembers;
}

getTeamMembers($db, $_SESSION["locale"]);

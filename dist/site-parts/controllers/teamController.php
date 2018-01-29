<?php
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

function getTeamMembers($db, $lang) {

    $sql = "SELECT * FROM team where locale='$lang' ORDER BY employeeRank";
    $teamMembers = $db->getData($sql);
    return $teamMembers;
}

$teamMembers = getTeamMembers($db, $_SESSION["locale"]);

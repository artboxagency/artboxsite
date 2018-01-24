<?php
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");

function getTeamMembers($db, $lang) {

    $sql = "SELECT * FROM team where locale='$lang' ORDER BY employeeRank";
    $teamMembers = $db->getData($sql);
    return $teamMembers;
}

$teamMembers = getTeamMembers($db, $_SESSION["locale"]);

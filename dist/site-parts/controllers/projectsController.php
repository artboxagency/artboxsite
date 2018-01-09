<?php
$db = new Db("127.0.0.1", "root", "ipod", "");

function getLastPublishedProjects($db, $lang) {
    $sql = "SELECT * FROM projects where locale = '$lang'";
    $homePageProjects = $db->getData($sql);
    return $homePageProjects;
}

$projects = getLastPublishedProjects($db, $_SESSION['locale']);

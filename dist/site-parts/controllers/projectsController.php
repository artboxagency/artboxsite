<?php
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

function getLastPublishedProjects($db, $lang) {
    $sql = "SELECT * FROM projects where locale = '$lang'";
    $homePageProjects = $db->getData($sql);
    return $homePageProjects;
}

$projects = getLastPublishedProjects($db, $_SESSION['locale']);

<?php
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");

function getLastPublishedProjects($db, $lang) {
    $sql = "SELECT * FROM projects where locale = '$lang'";
    $homePageProjects = $db->getData($sql);
    return $homePageProjects;
}

$projects = getLastPublishedProjects($db, $_SESSION['locale']);

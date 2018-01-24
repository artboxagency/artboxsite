<?php
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");

function getLastPublishedNews($db) {
    $sql = "SELECT * FROM newsposts_homepage";
    $homepageNews = $db->getData($sql);
    return $homepageNews;
}

// Define last published news
$homepageNews = getLastPublishedNews($db);

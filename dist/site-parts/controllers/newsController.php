<?php
$db = new Db("127.0.0.1", "root", "ipod", "");

function getLastPublishedNews($db) {
    $sql = "SELECT * FROM newsposts_homepage";
    $homepageNews = $db->getData($sql);
    return $homepageNews;
}

// Define last published news
$homepageNews = getLastPublishedNews($db);

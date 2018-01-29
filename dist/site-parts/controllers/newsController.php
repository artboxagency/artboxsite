<?php
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

function getLastPublishedNews($db) {
    $sql = "SELECT * FROM newsposts_homepage";
    $homepageNews = $db->getData($sql);
    return $homepageNews;
}

// Define last published news
$homepageNews = getLastPublishedNews($db);

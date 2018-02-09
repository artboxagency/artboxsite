<?php
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getLastPublishedNews($db) {
    $sql = "SELECT * FROM newsposts_homepage";
    $homepageNews = $db->getData($sql);
    return $homepageNews;
}

function getAllPublishedItem($db, $locale) {
    $news = array();

    $sql = "SELECT * FROM newsposts where locale='$locale'";
    $newQueryResult = $db->getData($sql);
    return $newQueryResult;

}
// Define last published news
$homepageNews = getLastPublishedNews($db);

// Define all items
$allNews = getAllPublishedItem($db, $_SESSION["locale"]);

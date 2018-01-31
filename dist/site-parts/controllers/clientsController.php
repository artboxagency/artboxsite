<?php

$db = new Db("127.0.0.1", "root", "ipod", "");

function getClients($db, $lang) {

    $sql = "SELECT * FROM clients where locale='$lang'";
    $clients = $db->getData($sql);
    return $clients;
}

$clients = getClients($db, $_SESSION["locale"]);

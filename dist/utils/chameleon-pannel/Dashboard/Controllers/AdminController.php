<?php

require_once "../../Class/Db.php";


$db = new Db("127.0.0.1","root","","artb2018");

function getAllNewsPost($db) {

    $newPosts = $db->getData("SELECT * FROM newsposts");
    return $newPosts;
}

function getAllTeamMembers($db) {
    $teamMembers = $db->getData("SELECT * FROM team");
    return $teamMembers;
}


function getAllProjects($db) {

    return $db->getData("SELECT * FROM projects");
}

function getAllClients($db) {

    return $db->getData("SELECT * FROM clients");
}


// Takes an array and return all the keys from this array
function buildLabelfromArray($array) {
    $labels = array();
    foreach($array as $key => $value) {
         $labels[] = $key;
    }

    return $labels;
}

// Stuff to process to Views
$adminDasboardItems = array();

$news = getAllNewsPost($db);
$newsLabel = buildLabelfromArray($news[0]);

$teamMember = getAllNewsPost($db);
$teamMemberLabel = buildLabelfromArray($teamMember[0]);

$clients = getAllClients($db);
$clientsLabel = buildLabelfromArray($clients[0]);


$projects = getAllProjects($db);
$projectsLabel = buildLabelfromArray($projects[0]);

<?php
session_start();
var_dump($_SESSION);


require_once "Controllers/AdminController.php";
require_once "Views/AdminViews.php";

// All Pages gors to the end
require_once "Pages/HomePage.php";

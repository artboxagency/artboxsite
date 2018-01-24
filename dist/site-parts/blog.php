<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php session_start(); ?>
<?php
require_once "../config/langage.php";
require_once "../trans/dictionaries.php";
require_once "../config/Autoloader.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/libs/fontawesome/font-awesome.css">
</head>
<body>
<h1 style="display:none">Artbox</h1>
<div id="site-container">

    <?php require "views/single-blog-post.php"; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../assets/js/behaviour.js"></script>
<script src="../assets/js/general.js"></script>
<script src="../assets/js/searchbar.js"></script>
<script src="../assets/js/form.js"></script>
<script src="../assets/js/forms/form-contact.js"></script>
<script src="../assets/js/css-components/grid-system.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110253487-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110253487-1');
</script>

</body>

</html>

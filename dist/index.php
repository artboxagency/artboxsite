<?php session_start(); ?>
<?php
require_once "config/langage.php";
require_once "trans/dictionaries.php";
require_once "config/Autoloader.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artbox Translation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1 style="display:none">Artbox</h1>
<div id="site-container">

	<!-- Top header infos -->
	<?php require "site-parts/header.php"; ?>
	<?php require "site-parts/homepage.php"; ?>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/behaviour.js"></script>
<script src="assets/js/css-components/grid-system.js"></script>


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
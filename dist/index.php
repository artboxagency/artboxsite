<?php session_start(); ?>
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

	<?php
	require "site-parts/component-blue-print/video-component.php";
	?>
	<!-- Top header infos -->
	<?php require "site-parts/header.php"; ?>

	<!-- Bloc Home -->
	<?php require "site-parts/bloc-home.php"; ?>

	<!-- Bloc 1 -->
	<?php require "site-parts/bloc-video.php"; ?>

	<!-- Bloc 2 -->
	<?php require "site-parts/bloc-infos.php"; ?>

	<!-- Bloc 3 -->
	<?php /* require "site-parts/bloc-membership.php"; */ ?>

	<!-- Bloc 4 -->
	<?php require "site-parts/bloc-events.php"; ?>

	<!-- Bloc 5 -->
	<?php /*require "site-parts/bloc-involve.php";*/ ?>

	<!-- Bloc 5.5 -->
	<?php require "site-parts/bloc-involve-infos.php"; ?>


	<!-- Bloc 6 -->
	<?php require "site-parts/bloc-question.php"; ?>


	<!-- Require login -->
	<?php require "site-parts/bloc-login.php"; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/main-ux-ui.js"></script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/events-blocker.js"></script>
<script src="assets/js/form-handler.js"></script>
<script src="assets/js/form-validation.js"></script>
<script src="assets/js/menu-behaviour.js"></script>
<script src="assets/js/video-component.js"></script>
<script src="assets/js/arrow-section-behaviour.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110253487-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110253487-1');
</script>
<!-- Check for error -->
<?php if ($_GET["errors"] || $_GET["success"]) { ?>

	<script src="assets/js/message-setter.js"></script>
<?php } ?>

</body>

</html>

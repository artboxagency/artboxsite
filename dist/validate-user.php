<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NOTRE-DAME DE LOURDE</title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

        <div id="site-container">
            <?php require "site-parts/header.php"; ?>
            <?php require "site-parts/validations/new-user-subscription.php"; ?>
            
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/main-ux-ui.js"></script>
		<script src="assets/js/menu.js"></script>
		<script src="assets/js/events-blocker.js"></script>
		<script src="assets/js/form-handler.js"></script>

	</body>

</html>

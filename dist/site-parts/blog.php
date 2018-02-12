
<?php session_start();
require "../config/langage.php";
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

	<style>
		#particles-js {
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			z-index: -100;
		}

	</style>
</head>
<body>
<h1 style="display:none">Artbox</h1>
<div id="site-container">

	<div style="" id="particles-js"></div>
	<?php $type = "news"; ?>
	<?php $nid = $_GET["bc-article"]; ?>
	<?php require "headerSinglePage.php"; ?>
  	<?php require "views/single-blog-post.php"; ?>
	<?php require "footer.php"; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../assets/js/behaviour.js"></script>
<script src="../assets/js/general.js"></script>
<script src="../assets/js/searchbar.js"></script>
<script src="../assets/js/form.js"></script>
<script src="../assets/js/forms/form-contact.js"></script>
<script src="../assets/js/css-components/grid-system.js"></script>


<script type="text/javascript" src="../assets/js/libs/pjs.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110253487-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110253487-1');
</script>

<!-- Particles -->
<script>

			$("html, body").animate({scrollTop: "0px"}	);
			particlesJS.load('particles-js', '../assets/particles.json', function() {
				console.log('callback - particles.js config loaded');
			});
</script>

</body>

</html>

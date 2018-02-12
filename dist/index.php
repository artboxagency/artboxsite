
<?php session_start(); ?>
<?php
require_once "config/langage.php";
require_once "trans/dictionaries.php";
require_once "config/Autoloader.php";


ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>

	<title>ARTBOX - Marketing Social</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/libs/fontawesome/font-awesome.css">
	<!-- Start of artbox Zendesk Widget script -->
	<!-- <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="artbox.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
	/*]]>*/</script> -->
	<!-- End of artbox Zendesk Widget script -->

	<!-- <link rel="stylesheet" href="assets/css/libs/skeleton.css"> -->

	<style>
		#particles-js {
			width: 100%;
    		height: 100%;
    		position: fixed;
    		top: 0px;
    		left: 0px;
			z-index: 1;
		}

	</style>

</head>
<body>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">

	</script>
	<!-- End of Tawk.to Script -->
<?php
if(!isset($_SESSION["visitesStatus"])) {
//	require_once "site-parts/animation-component/landing-page.php";
}
?>
<h1 style="display:none">Artbox</h1>
	<!-- <div style="" id="particles-js"></div> -->
	<div class="fb-customerchat"
	 page_id="241901372853259"
	 ref="<OPTIONAL_WEBHOOK_PARAM>"
	 theme_color="<HEX_COLOR_CODE>"
	 logged_in_greeting="<GREETING_MESSAGE_FOR_LOGGED_IN_USERS>"
	 logged_out_greeting="<GREETING_MESSAGE_FOR_LOGGED_OUT_USERS>">
	</div>

<div id="site-container">
	<div class="search-result"></div>
	<?php require "site-parts/header.php"; ?>
	<?php require "site-parts/homepage.php"; ?>
</div>
<?php require "site-parts/footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/libs/anime.js"></script>
<script src="assets/js/libs/tawk.js"></script>
<script src="assets/js/general.js"></script>
<script src="assets/js/scroller.js"></script>
<script src="assets/js/behaviour.js"></script>
<script src="assets/js/searchbar.js"></script>
<script src="assets/js/form.js"></script>
<script src="assets/js/features/menuScroller.js"></script>
<script src="assets/js/forms/form-contact.js"></script>
<script src="assets/js/css-components/grid-system.js"></script>
<script src="assets/js/animation-component/landing-page.js"></script>
<script src="assets/js/features/searchbar.js"></script>

<?php
	require "site-parts/component-blue-print/search-result.php";
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110253487-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-110253487-1');
</script>
<script type='text/javascript'>
  var locale = "<?php echo $_SESSION['locale'] ?>"; //dont forget to place the PHP code block inside the quotation
</script>


<script type="text/javascript" src="assets/js/libs/pjs.js"></script>

<!-- Particles -->
<script>
			particlesJS.load('particles-js', 'assets/particles.json', function() {
				console.log('callback - particles.js config loaded');
			});
</script>
</body>

</html>

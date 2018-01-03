<?php

// void fx()
/*
    This function takes no input and return nothing
    This function prints the content of styles/styles.css into the email template content
    This functions also print the style tag
*/
function includeStyling() {

	$stylePath = dirname(__FILE__) . "/styles/styles.css";
	$styles = file_get_contents($stylePath);

	return "<style>"  .  $styles  .  "</style>" ;
}

function buildMemberShipMessageContent($content) {
	$message = "<div id='message-container'>";
	$message .= "<h1>Bonjour</h1>,";
	$message .= "<strong>le message suivant tient à vous faire part d'une nouvelle demande de membre pour le groupe ALUMNI!</strong>";
	$message .= "<br>Les informations du nouveaux membre sont les suivantes:";
	$message .= "<ul>";
	$message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
	$message .= "<li>"."Email : " . $content["email"]."</li>";
	$message .= "<li>"."Profession : " . $content["profession"]."</li>";
	$message .= "</ul>";
	$message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
	$message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
	$message .= "</div>";

	return $message;
}


function buildInvolveMessageContent($content) {


	$message  = "<div id='message-container'>";
	$message .= "<h1 style=''>Bonjour</h1>,";
	$message .= "<strong>le message suivant tient à vous faire part d'une nouvelle demande d'implications pour le groupe ALUMNI!</strong>";
	$message .= "<br>Les informations de l'implication sont les suivantes:";
	$message .= "<ul>";
	$message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
	$message .= "<li>"."Email : " . $content["email"]."</li>";
	$message .= "<li>"."Profession : " . $content["employer"]. "</li>";
	$message .= "<li>"."Téléphone : " . $content["jobtitle"].  "</li>";
	$message .= "</ul>";
	$message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
	$message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
	$message .= "</div>";

	return $message;
}


function buildQuestionMessageContent($content) {

	$message = "<div id='message-container'>";
	$message .= "<h1 style=''>Bonjour</h1>,";
	$message .= "<strong>le message suivant tient à vous faire part d'une nouvelle question pour le groupe ALUMNI!</strong>";
	$message .= "<br>Les informations de la questions sont les suivantes:";
	$message .= "<ul>";
	$message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
	$message .= "<li>"."Email : " . $content["email"]."</li>";
	$message .= "</ul>";
	$message .= "<h4> Joignez " . $content["firstname"] . " " . $content["lastname"] . " au <a href='tel:". $content["phone"] ."'>" . $content["phone"] . "</a></h4>";
	$message .= "<h4>Le contenu du message est ci-dessous.</h4>";
	$message .= "<p>".$content["object"]."</p>";
	$message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
	$message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
	$message .= "</div>";
	includeStyling();

	return $message;
}

function buildSubscriptionMessage($content) {

	$message = "<div id='message-container'>";
	$message .= "<img src='http://alumni.ndl.qc.ca/assets/images/ndl-logo-bleu.png'>";
	$message .= "<h1 style=''>Bonjour,</h1>";
	$message .= "<div id='container'>";
	$message .= "<h2>Merci de votre inscription!<h2>";

	//$message .= "<a href='". "http://alumni.ndl.qc.ca" .  "/validate-user.php?token=" . $content["token"] ."'><h3>Valider.</h3></a>";
	$message .= "</div>";
	$message .= "</div>";
	$message .= "</div>";

	$message .= includeStyling();

	return $message;
}

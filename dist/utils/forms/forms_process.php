<?php
require_once "forms_methods.php";

// Transfer post to $form
$form = $_POST;



// Process each form
switch ($form["form-type"]) {

	case "membership-new-user":

		// Init errors
        $errors = array();
        processNewUser($form);
        break;

    case "membership":

        processMembershipForm($form);
        break;

    case "involve":

        processInvolveForm($form);
        break;

    case "question":

        processQuestionForms($form);
        break;

    default:

}

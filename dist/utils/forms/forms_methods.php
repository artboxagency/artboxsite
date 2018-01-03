<?php

require "../db/connect.php";
require "component/CONST.php";
require "../users/users_new.php";


/*
    void f(x) -> input x  array[]
    x-> A form array
*/

function processNewUser($form) {

    if ($form) {


        if(initNewUser($form, connectToDb()) == false) {
			return false;
		}
    } else {
        return false;
    }
}


function processMembershipForm($form = false) {
    if ($form) {
        processMembershipFormValidation($form, $customFilters = false);
    } else {
        return false;
    }

}

function processInvolveForm($form = false) {

    if ($form) {

        processInvolveFormValidation($form);

    } else {
        return false;
    }

}

function processQuestionForms($form = false) {
    if ($form) {

        processQuestionFormValidation($form, $customFilters = false);
    } else {
        return false;
    }

}

function processMembershipFormValidation($form){

    $errors = array();
    $toPersist = array();

    // Loop through each form values
    foreach ($form as $key => $value) {

        // Flag if an item contains something different than letter and digit or email @ and characters.
        if (preg_match("/[^A-Za-z0-9@.:;¨ç^!@#$%?&*()+=_-!', âàäÂÄÀêëéèÉÈÊËÎÏîïöÖüû; ]/", $value)) {

            // Than put it on the error stack
            $errors["unvalid-character"][$key] = $value;

        }


        if ($key == "age") {

            // Force age to be int
            intval($value);
            $age = $value;

            // Check for any negative number and switch to positive
            if ($age <= 0) {
                $age = ($age * 1) + 1;
            }
        }

        $toPersist[$key] = processSanitize($value);
    }

    if(count($errors) >= 1) {


        die();
    } else {
        persistMembershipToBd($toPersist, "ndl_membership", connectToDb());
    }

}

function processInvolveFormValidation($form){


    $errors = array();
    $toPersist = array();

    // Loop through each form values
    foreach ($form as $key => $value) {

        // Flag if an item contains something different than letter and digit or email @ and characters.
        if (preg_match("/[^A-Za-z0-9@.:;¨ç^!@#$%?&*()+=_!', \-\ âàäÂÄÀêëéèÉÈÊËÎÏîïöÖüû; ]/", $value)) {

            // Than put it on the error stack
            $errors["unvalid-character"][$key] = $value;

        }

        if ($key == "age") {

            // Force age to be int
            intval($value);
            $age = $value;

            // Check for any negative number and switch to positive
            if ($age <= 0) {
                $age = ($age * 1) + 1;
            }
        }

        $toPersist[$key] = processSanitize($value);
    }

    if(count($errors) >= 1) {

        echo json_encode($errors);
    } else {

        persistInvolveToBd($toPersist, "ndl_involves", connectToDb());
    }

}

function processQuestionFormValidation($form){

    $errors = array();
    $toPersist = array();

    // Loop through each form values
    foreach ($form as $key => $value) {

        // Flag if an item contains something different than letter and digit or email @ and characters.
        if (preg_match("/[^A-Za-z0-9@.:;¨ç^!@#$%?&*()+=_!', \-\ âàäÂÄÀêëéèÉÈÊËÎÏîïöÖüû; ]/", $value)) {

            // Than put it on the error stack
            $errors["unvalid-character"][$key] = $value;

        }

        if ($key == "age") {

        	if(!$value) {
        		$value = 45;
			} else {
				// Force age to be int
				intval($value);
				$age = $value;

				// Check for any negative number and switch to positive
				if ($age <= 0) {
					$age = ($age * 1) + 1;
				}
			}

        }

        $toPersist[$key] = processSanitize($value);
    }

    if(count($errors) >= 1) {
        var_dump("errors");
        die();
    } else {
        persistQuestionToDb($toPersist, "ndl_questions", connectToDb());
    }

}
/*
    string fx(string, int)
    return a sanitize string of the input

*/
function processSanitize($inputToSanitize) {

    $charArray = str_split($inputToSanitize);
    $bannedChar = unserialize (BANNEDCHARACTERS);
    $charStacker = "";
    foreach ($charArray as $pointers => $char) {
        foreach($bannedChar as $key => $bChar) {
            if ($char == $bChar) {
                $char = "";
            }
        }
        $charStacker .= $char;
    }

    return $charStacker;
}

/*
    void string fx(array[])
    takes an input array and persist it to DB
    TODO Makes arguments list such as $values, $tableName, $tableRows
*/
function persistMembershipToBd($values, $tableName, $db) {

    // Unset form type from values
    unset($values["form-type"]);

    // Get the number of values + init counter
    $valuesLength = count($values);
    $counter = 1;

    // Start building the query
    $query = "INSERT INTO $tableName (firstname, lastname, age, job_title, email) VALUES (";

    // Build the query by adding values and handling " sql related characters"
    foreach($values as $key => $value) {
        if ($counter < $valuesLength) {
            $query .= " '" .$value . "'" . ",";
        } else {
            $query .= " '" .$value . "'" . ")";
        }

        $counter++;
    }

    if ($db->query($query) === TRUE) {
        echo "New record created successfully";
        require "../emails/email_methods.php";
        $messageContent = buildMemberShipMessageContent($values);


        sendMemberShipMessage($messageContent, "philippe@artbox.agency");
        // echo "<script>location.href='../../?membership-message=submit';</script>";

    } else {

    }
}


/*
    void string fx(array[])
    takes an input array and persist it to DB
    TODO Makes arguments list such as $values, $tableName, $tableRows
*/
function persistInvolveToBd($values, $tableName, $db) {


    // Unset form type from values
    unset($values["form-type"]);

    // Get the number of values + init counter
    $valuesLength = count($values);
    $counter = 1;

    // Start building the query
    $query = "INSERT INTO $tableName (firstname, lastname, age, employer, job_title, email, appointment) VALUES (";

    // Build the query by adding values and handling " sql related characters"
    foreach($values as $key => $value) {
        if ($counter < $valuesLength) {
            $query .= " '" .$value . "'" . ",";
        } else {
            $query .= " '" .$value . "'" . ")";
        }
        $counter++;
    }
		
    if ($db->query($query) === TRUE) {

        // require "../emails/email_methods.php";
        $messageContent = buildInvolveMessageContent($values);

        sendInvolveMessage($messageContent, "");
        // echo "<script>location.href='../../?membership-message=submit';</script>";

    } else {
		echo "Error: " . $query . "<br>" . $db->error;
    }
}

function persistQuestionToDb($values, $tableName, $db) {

    // Unset form type from values
    unset($values["form-type"]);

    // Get the number of values + init counter
    $valuesLength = count($values);
    $counter = 1;

    // Start building the query
    $query = "INSERT INTO $tableName (firstname, lastname, age, profession, email, phone, object) VALUES (";

    // Build the query by adding values and handling " sql related characters"
    foreach($values as $key => $value) {
        if ($counter < $valuesLength) {
            $query .= " '" .$value . "'" . ",";
        } else {
            $query .= " '" .$value . "'" . ")";
        }
        $counter++;
    }

    if ($db->query($query) === TRUE) {

        // require "../emails/email_methods.php";
        $messageContent = buildQuestionMessageContent($values);

        sendQuestionMessage($messageContent, "");



    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }

}

function persistNewUser($form, $db) {
    var_dump($form);

}

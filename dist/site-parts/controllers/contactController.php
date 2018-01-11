<?php
$db = new Db("127.0.0.1", "root", "ipod", "");

function initContactform() {
    $contactForm = new Form("Contact form");

    $contactForm->createSingleInput("Prénom", "text", "firstname");
    $contactForm->createSingleInput("Nom", "text", "lastname");
    $contactForm->createSingleInput("Age", "number", "age");
    $contactForm->createSingleInput("Courriel", "email", "email");
    $contactForm->createSingleInput("Téléphone", "tel", "tel");

    $contactForm->setFormType("formContact");
    return $contactForm;
}

function submitForm($form) {
    

}

$contactForm = initContactform();



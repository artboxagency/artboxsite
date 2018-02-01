<?php require "site-parts/controllers/contactController.php"; ?>
<div id="contact-homepage-container" class="">
    <h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["siteTitle"]["rdv"] ?></h2>
    <div class="" style="max-width:80%;">
        <?= $dictionnaries[$_SESSION["locale"]]["siteContent"]["rdv"]["bloc1"] ?>
    </div>
    <div class="call-to-action-container">
        <?= $dictionnaries[$_SESSION["locale"]]["siteContent"]["rdv"]["button"] ?>
    </div>


    <div class="form-container">
        <div class=""><?=$dictionnaries[$_SESSION["locale"]]["siteContent"]["rdv"]["bloc2"] ?>
        <?php $contactForm->renderForm(); ?>
    </div>
</div>

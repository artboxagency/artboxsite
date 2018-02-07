<?php require_once "site-parts/controllers/servicesHomepageController.php";?>


<div id="home-page-services-container" class="main-bloc">
<h3 class="title-font first-animation">Services</h3>

<div class="grid">
    <?php foreach($services as $key => $service) { ?>
        <div class="unique-service cell">
            <h3 class="service-title font-medium-title second-animation"><?= $service["name"] ?><span class="plus-to-know-more">+</span></h3>
            <?php $subgenres = explode( "%",$service["subgenres"]); ?>
            <ul class="subgenres-list second-animation">

            <?php foreach($subgenres as $key=>$subgenre) { ?>
                <li class="subgenre-item">-<?= $subgenre ?></li>
            <?php } ?>

            </ul>
        </div>
    <?php } ?>

</div>

</div>

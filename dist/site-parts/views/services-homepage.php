<?php require_once "site-parts/controllers/servicesHomepageController.php";?>


<div id="home-page-services-container" class="main-bloc">
<h3 class="title-font first-animation">Services</h3>

<div class="grid four-grid-services">
    <?php foreach($services as $key => $service) { ?>
        <div class="cell four-cell-services">
            <div class="unique-service grid-item">
                <h3 class="service-title font-medium-title second-animation"><?= $service["name"] ?><span class="plus-to-know-more">+</span></h3>
                <?php $subgenres = explode( "%",$service["subgenres"]); ?>
                <ul class="subgenres-list second-animation">

                <?php foreach($subgenres as $key=>$subgenre) { ?>
                    <li class="subgenre-item font-description">-<?= $subgenre ?></li>
                <?php } ?>

                </ul>
            </div>
        </div>
    <?php } ?>

</div>

</div>

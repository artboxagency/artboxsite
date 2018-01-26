<?php require_once "site-parts/controllers/servicesHomepageController.php";?>

<h3 class="title-font">Services</h3>
<div id="home-page-services-container">


<?php foreach($services as $key => $service) { ?>
    <div class="unique-service">
        <h3 class="service-title font-medium-title"><?= $service["name"] ?></h3>
        <?php $subgenres = explode( "%",$service["subgenres"]); ?>
        <ul class="subgenres-list">
        
        
        <?php foreach($subgenres as $key=>$subgenre) { ?>
            <li class="subgenre-item">-<?= $subgenre ?></li>
        <?php } ?>

        </ul>
    </div>
<?php } ?>

</div>

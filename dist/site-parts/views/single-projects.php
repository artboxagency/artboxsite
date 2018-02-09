<?php require_once "controllers/singleProjectController.php";?>
<?php
    $projectId = $_GET["pid"];
    $project = getSingleProject($projectId)[0];
?>
<div id="single-page-header">
    <div class="">
        <i class="fa fa-home return-homepage" aria-hidden="true"></i>
    </div>
</div>

<div id="single-projects-container">
    <h3 class="title-font"><?= $project['title'] ?></h3>
    <div class="single-project-header">
        <p><?= $project['header'] ?></p>
        <img class="image-large" src="<?= $project["headerImage"] ?>" alt="<?= $project["title"]?> artbox-project-image-">
    </div>
    <div class="single-project-content">
        <h4 class="font-medium-title"><?= $project["bloc1Title"] ?></h4>
        <p><?= $project["bloc1Content"] ?></p>

        <div class="double-image">
            <img src="<?= $project["asset1Url"] ?>">
            <img src="<?= $project["asset2Url"] ?>">
        </div>

        <img class="image-large" src="<?= $project["asset3Url"] ?>">

        <div class="grid2">
            <div class="left-box">
                <img class="image-large" src="<?= $project["asset4Url"] ?>">
            </div>
            <div class="right-box">
                <h4 class="font-medium-title"><?= $project["bloc2Title"] ?></h4>
                <p><?= $project["bloc2Content"] ?></p>
            </div>


        </div>
    </div>
</div>

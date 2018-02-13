<?php require_once "controllers/singleProjectController.php";?>
<?php
    $projectId = $_GET["pid"];
    $project = getSingleProject($projectId, $_SESSION["locale"])[0];
?>


<div id="single-projects-container">
    <h3 class="title-font"><?= $project['title'] ?></h3>
    <div class="single-project-header">
        <p><?= $project['header'] ?></p>
        <img class="image-large" src="<?= $project["headerImage"] ?>" alt="<?= $project["title"]?> artbox-project-image-">
    </div>
    <div class="single-project-content">
        
    </div>
</div>

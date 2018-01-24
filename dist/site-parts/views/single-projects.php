<?php require_once "controllers/singleProjectController.php";?>
<?php  
    $projectId = $_GET["pid"]; 
    $project = getSingleProject($projectId);
?>
<div id="single-page-header">
    <div class="">
        <i class="fa fa-home return-homepage" aria-hidden="true"></i>
    </div>
</div>    


<div id="single-projects-container">
    <h4>Single Projects</h4>
    
</div>

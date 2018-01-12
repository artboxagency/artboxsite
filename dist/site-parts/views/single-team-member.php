<?php require_once "controllers/singleTeamMemberController.php";?>
<?php  
    $memberId = $_GET["member"]; 
    $member = getSingleTeamMember($memberId);
?>

<h4>Single team member</h4>
<div class="single-team-member-container">
<img src="<?= $member[0]["pictureUrl"] ?>" alt="">    
    <h4><?= $member[0]["firstname"] . $member[0]["lastname"] ?></h4> 
    <div class="team-member-infos">
        <h4><?= $member[0]["jobTitle"] ?></h4>
        <h4><?= $member[0]["phonenumber"] ?></h4>
        <h4><?= $member[0]["email"] ?></h4>
    </div>
    <p class="single-member-bio"><?=  $member[0]["bio"] ?></p>



</div>
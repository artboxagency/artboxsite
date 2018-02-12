<?php require_once "controllers/singleTeamMemberController.php";?>
<?php
    $memberId = $_GET["member"];
    $member = getSingleTeamMember($memberId);
?>


<div class="single-team-member-container">
<img src="<?= $member[0]["pictureUrl"] ?>" alt="">
    <h4><?= $member[0]["firstname"] . $member[0]["lastname"] ?></h4>
    <div class="team-member-infos">
        <h4><?= $member[0]["jobTitle"] ?></h4>
        <h4><?= $member[0]["phonenumber"] ?></h4>
        <h4><?= $member[0]["email"] ?></h4>
        <div class="single-team-member-socialnetworks">

            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </div>
    </div>
    <p class="single-member-bio"><?=  $member[0]["bio"] ?></p>
</div>

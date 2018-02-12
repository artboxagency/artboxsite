<?php
require_once "../../Class/Db.php";
$db = new Db("127.0.0.1","root","","artb2018");


if ($_POST["form-type"] == "news") {
    
    uploadFile("pictures", "/Users/antoine/htdocs-symlink/artbox/art2k18/dist/utils/chameleon-pannel/Dashboard/Medias/Images", "/Users/antoine/htdocs-symlink/artbox/art2k18/dist/assets/images/fromChameleon");

}


function uploadFile($image, $DashboardPath, $publicPath) {
    foreach ($_FILES[$image]['error'] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {

            $tmpName = $_FILES['pictures']['tmp_name'][$key];
            $tmpNameToClient = $_FILES['pictures']['tmp_name'][$key];
            // basename() may prevent directory traversal attacks, but further
            // validations are required
            $name = basename($_FILES['pictures']['name'][$key]);

            move_uploaded_file($tmpName, "$DashboardPath/$name");
            copy("$DashboardPath/$name", "$publicPath/$name");

        }
    }
}

    ?>

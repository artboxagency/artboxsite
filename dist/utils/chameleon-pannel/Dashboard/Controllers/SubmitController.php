<?php




function uploadFile($image, $DashboardPath, $publicPath)
foreach ($_FILES['pictures']['error'] as $key => $error) {
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

    ?>

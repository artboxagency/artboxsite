<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../../Class/Db.php";
$db = new Db("127.0.0.1","root","","artb2018");

if ($_POST["form-type"] == "news") {

    foreach ($_POST as $key => $value) {
        $_POST[$key] = $db->parseAndQuery($value);
    }
    $id = $_POST['id'];
    $nid = $_POST['nid'];
    $title = $_POST['title'];
    $header = $_POST['header'];
    $paragraphes = $_POST['paragraphes'];
    $date = $_POST['date'];
    $author = $_POST['author'];

    $sql = "UPDATE newsposts SET title= '$title',
            header = '$header',
            paragraphes = '$paragraphes',
            author = '$author'
     WHERE id = $id";


    $db->queryDb($sql);


    uploadFile("pictures", "/Users/antoine/htdocs-symlink/artbox/art2k18/dist/utils/chameleon-pannel/Dashboard/Medias/Images", "/Users/antoine/htdocs-symlink/artbox/art2k18/dist/assets/images/fromChameleon");
    header("Location: http://localhost:8888/artbox/art2k18/dist/utils/chameleon-pannel/Dashboard/Pages/EditItem.php?item-type=news&item-id=$id");
}

function processUpdateInDb($table, $query) {

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

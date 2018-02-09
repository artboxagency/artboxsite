<?php

require_once "../../Class/Db.php";



function getItemContent($itemType, $itemId) {
    $db = new Db("127.0.0.1","root","","artb2018");
    switch ($itemType) {
        case 'news':
            $sql = "SELECT * from newsposts where id=$itemId";
            $item = $db->getData($sql);
            return $item;
            break;


        default:
            # code...
            break;
    }
}


function builItemForm($item, $path)  {

    $html = "<form action='$path' name='something'  method='post'>";
    foreach ($item[0] as $key => $data) {
        $html .= "<div class='form-group'>";
        if(strlen($data) > 150) {

            $html.= "<h1>$key</h1>";
            $html.= "<textarea id='$key' rows='15' cols='90'>$data</textarea>";

        } else if(strpos($data, 'jpg') || strpos($data, 'jpeg') || strpos($data, 'png')) {
            $html.="<h4>$key</h4>";
            $html.="<h6>Current Image</h6>";
            $html.="<img src='$data'>";
            $html.="<h6>Change Image<h6>";
            $html .= "<input style=''class='btn btn-default' type='file' name='' id='$key'>";
        }
        else {
            $html.="<label>$key</label>";
            $html.="<input value='$data' type='text' class='form-control'id=''>";

        }
        $html .= "</div>";

    }
    $html .= "<input type='submit' value='Submit'>";
    $hmtl .= "</form>";
    print_r($html);
}

function persistUpdateItem() {


}

$news = getItemContent("news", 100);
builItemForm($news, "../Controllers/SubmitController.php");

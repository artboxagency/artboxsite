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


function builItemForm($item)  {
    $html = "";
    foreach ($item[0] as $key => $data) {
        $html .= "<div class='form-group'>";

        if(strlen($data) > 150) {

            $html.= "<h1>$key</h1>";
            $html.= "<textarea rows='15' cols='90'>$data</textarea>";



        } else if(strpos($data, 'jpg')) {
            $html.="<h4>$key</h4>";
            $html.="<img src='$data'>";
            
        }
        else {
            $html.="<label>$key</label>";
            $html.="<input value='$data' type='text' class='form-control'id=''>";

        }
        $html .= "</div>";

    }
    print_r($html);
}
$news = getItemContent("news", 100);
builItemForm($news);

<?php

switch($_REQUEST['_page']){

    case"lunch";
        $res = food::fetch_type($db,"lunch");
        require("template/page/shop.php");
    break;

    case"dinner";
        $res = food::fetch_type($db,"lunch");
        require("template/page/shop.php");
    break;

    case"others";
        $res = food::fetch_type($db,"lunch");
        require("template/page/shop.php");
    break;

    case"details";
        $res = food::view($db,$_GET['id']);
        require("template/page/details.php");
    break;
}



?>
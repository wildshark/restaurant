<?php
session_start();



include("control/global.php");
include("module/food.php");

if(!isset($_REQUEST['_submit'])){
    if(!isset($_REQUEST['_page'])){
        if(!isset($_REQUEST['_dash'])){
            session_destroy();
            require("template\page\home.php");
            exit;
        }
    }else{
        include("module/page.php");
    }
}


?>
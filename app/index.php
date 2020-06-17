<?php
$page = "";
$title = "Home";
require_once("templates/header.php");
if($page == ""){
    require_once("templates/home.php");
    require_once("templates/aside.php");
    require_once("templates/footer.php");
}
require_once("function.php");
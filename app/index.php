<?php
session_start();
$page = "";
$title = "Home";


if (!empty($_GET) && !empty($_GET['p'])) {
    $page = $_GET['p'];
}

require("models/model.php");
require("controllers/controller.php");
require("templates/header.php");

if ($page == "") {
    require("templates/home.php");
} else {
    if (file_exists("templates/$page.php")) {
        if(file_exists("models/$page-model.php")){
            require("models/$page-model.php");
        }
        if(file_exists("controllers/$page-controller.php")){
            require("controllers/$page-controller.php");
        }
        require("templates/$page.php");
    } else {
        require("templates/home.php");
    }
}

require("templates/aside.php");
require("templates/footer.php");
require("function.php");
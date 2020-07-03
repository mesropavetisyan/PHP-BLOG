<?php

if(!empty($_POST) && !empty($_POST['submit'])){
    setcookie("am","",time()-100);
    header("Location:?p=home");
}
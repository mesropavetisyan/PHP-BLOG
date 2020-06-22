<?php
function validateRegister()
{
    $data = [
        "name" => [
            "value" => "",
            "error-message" => "",
        ],
        "email" => [
            "value" => "",
            "error-message" => "",
        ],
        "password" => [
            "value" => "",
            "error-message" => "",
        ],
    ];
    if (empty($_POST)) {
        return $data;
    }

    if(empty($_POST['name'])){
        $data['name']['error-message'] = "Name is required";
    }else {
        $data['name']['value'] = $_POST['name'];
    }
    if(empty($_POST['email'])){
        $data['email']['error-message'] = "Email is required";
    }else {
        $data['email']['value'] = $_POST['email'];
    }
    if(empty($_POST['password'])){
        $data['password']['error-message'] = "Password is required";
    }else {
//        $data['password']['value'] = $_POST['password'];
    }
    return $data;
}

$data = validateRegister();
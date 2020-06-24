<?php
function validateLogin()
{
    $data = [
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

    if (empty($_POST['email'])) {
        $data['email']['error-message'] = "Email is required";
    } else {
        $data['email']['value'] = $_POST['email'];
        $data['email']['value'] = strip_tags($_POST['email']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email']['error-message'] = "Email is not correct";
        }
    }
    if (empty($_POST['password'])) {
        $data['password']['error-message'] = "Password is required";
    } else {
//        $data['password']['value'] = $_POST['password'];
    }

    return $data;
}

function IssetErrors ($data)
{
    if(empty($_POST)) {
        return true;
    }
    foreach ($data as $info) {
        if (strlen($info['error-message']) > 0) {
            return true;
        }
    }
    return false;
}
$data = validateLogin();

if (!IssetErrors($data)) {
    header("Location:?p=profile");
}


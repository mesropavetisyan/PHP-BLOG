<?php

function validateLogin()
{
    $login = "mesrop@test.com";
    $pass = '$2y$10$4jNh5fMZftewICnz44lHue53t7r/LWCjub9HHqAYI0XPiEi2g/uae';
    $data = [
        "email" => [
            "value" => "",
            "error-message" => "",
        ],
        "password" => [
            "value" => "",
            "error-message" => "",
        ],
        "authorization" => [
            "error-message" => "",
        ]
    ];
    if (empty($_POST)) {
        return $data;
    }

    if (empty($_POST['email'])) {
        $data['email']['error-message'] = "Email is required";
    } else {
        $data['email']['value'] = strip_tags($_POST['email']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email']['error-message'] = "Email is not correct";
        }
    }
    if (empty($_POST['password'])) {
        $data['password']['error-message'] = "Password is required";
    } else {
        if (empty($data['email']['error-message']) && $data['email']['value'] == $login &&
            password_verify($_POST['password'], $pass)
        ) {
            header("Location:?p=profile");
        } else {
            $data["authorization"]["error-message"] = "Email or password is not correct";
        }
    }

    return $data;
}

function IssetErrors($data)
{
    if (empty($_POST)) {
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

//if (!IssetErrors($data)) {
//    header("Location:?p=profile");
//}


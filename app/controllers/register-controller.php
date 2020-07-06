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
        "authorization" => [
            "error-message" => "",
        ]
    ];
    if (empty($_POST)) {
        return $data;
    }

    if (empty($_POST['name'])) {
        $data['name']['error-message'] = "Name is required";
    } else {
        $data['name']['value'] = strip_tags($_POST['name']);
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
        $data['password']['value'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
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

$data = validateRegister();

if (!IssetErrors($data)) {
    $res = addNewUser($data['name']['value'], $data['email']['value'], $data['password']['value']);
    if (!$res) {
        $err = mysqli_error($conn);
        if($err = "Duplicate entry '".$data['email']['value']."' for key 'email'"){
$data['authorization']['error-message'] = "User with email '".$data['email']['value']."' already exists";
        }
    }else {
        header("Location:?p=login");
    }
}
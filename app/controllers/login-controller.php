<?php
if(!empty($_SESSION['userId'])){
    session_destroy();
    header("Location: ?" . $_SERVER['QUERY_STRING']);
}
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

        $userData = mysqli_fetch_all(getUserByEmail($data['email']['value']), MYSQLI_ASSOC);
        if (count($userData) === 0) {
            $data["authorization"]["error-message"] = "No such user with given email";
        } else {
            if (password_verify($_POST['password'], $userData[0]["password"])) {
                setcookie("am", true, strtotime("+2days"));
                $_SESSION['userId'] = $userData[0]["id"];
                header("Location:?p=profile");
            } else {
                $data["authorization"]["error-message"] = "Email or password is not correct";
            }
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


<?php
if(empty($_SESSION['userId'])){
    header("Location: ?p=login");
}

$data = getUserInfo($_SESSION['userId']);
if(!$data){
    header("Location: ?p=login");
}

$data = mysqli_fetch_array($data,MYSQLI_ASSOC);

function validateForm(){
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
        "image" => [
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
    if (!empty($_POST['password'])) {
        $data['password']['value'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    if(!empty($_FILES['image'])){
        /** TODO write file validation */
        $data['image']['value'] = $_FILES['image']['tmp_name'];
    }
    return $data;
}

$formData = validateForm();

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

function saveUserImage($tmp){
    $imageName = time() * 1000;
    if(move_uploaded_file($tmp,"assets/images/users/$imageName.jpg")){
        return "$imageName.jpg";
    }
    return false;
}

if(!IssetErrors($formData)){
$imgRes = saveUserImage($formData['image']['value']);
if($imgRes){
    $r = updateUserInfo(
        [
            "id"=>$_SESSION['userId'],
            "name"=>$formData['name']['value'],
            "email"=>$formData['email']['value'],
            "image"=>$imgRes,
        ]
    );
    if($r){
        header("Location: ?p=profile");
    }
}
}
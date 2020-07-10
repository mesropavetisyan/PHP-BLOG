<?php

function addNewUser($name, $email, $pass)
{
    global $conn;
    $sql = "INSERT INTO users (name,email, password,isActive)
VALUES ('$name', '$email', '$pass', 1)";
    $response = mysqli_query($conn,$sql);
    return $response;
}
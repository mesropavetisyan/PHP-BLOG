<?php

function getUserByEmail($email)
{
    global $conn;
    $sql = "SELECT id, password FROM users WHERE email = '$email' and isActive = 1";
    $response = mysqli_query($conn,$sql);
    return $response;
}
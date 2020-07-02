<?php

function addNewUser($name, $email, $pass)
{
    global $conn;
    $sql = "INSERT INTO users (name,email, password,isActive)
VALUES ('$name', '$email', '$pass', 1)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
<?php
if(!MYVAR || MYVAR !== "myvalue"){
    exit("you can't huck me!");
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getCategories()
{
    global $conn;
    $sql = "SELECT categories.id as 'id',categories.name as 'name', COUNT(`blog_post_id`) as 'count'
FROM categories LEFT JOIN blog_post_categories
ON blog_post_categories.category_id = categories.id
GROUP BY categories.id";
    return mysqli_query($conn,$sql);
}
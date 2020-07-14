<?php

function getBlogPost($url){
    global $conn;
$sql = "SELECT * FROM blog_posts WHERE isActive=1 AND url='$url'";
return mysqli_query($conn, $sql);
}
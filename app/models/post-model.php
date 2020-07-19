<?php

function getBlogPost($url){
    global $conn;
$sql = "SELECT blog_posts.id,title,url,author,date,image,text,
GROUP_CONCAT(categories.id, '=', categories.name SEPARATOR ',') as 'category' FROM blog_posts 
JOIN blog_post_categories 
ON blog_posts.id = blog_post_id 
JOIN categories
ON category_id = categories.id
WHERE isActive=1 AND url='$url'
GROUP BY blog_posts.id";
return mysqli_query($conn, $sql);
}
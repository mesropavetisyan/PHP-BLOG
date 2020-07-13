<?php

function getAllBlogPosts(){
    global $conn;
    $sql = "SELECT blog_posts.id,title,url,author,date,image,LEFT(`text`,400) as 'text' , categories.name as 'category' FROM blog_posts 
JOIN blog_post_categories 
ON blog_posts.id = blog_post_id 
JOIN categories
ON category_id = categories.id
WHERE isActive =1";
    $res = mysqli_query($conn,$sql);
    return $res;
}
<?php
$data = mysqli_fetch_all(getAllBlogPosts(), MYSQLI_ASSOC);
function formatData($data){
    foreach ($data as &$post){
        $post['date'] = date("F d,Y",strtotime($post['date']));
    }
    return $data;
}

$data = formatData($data);
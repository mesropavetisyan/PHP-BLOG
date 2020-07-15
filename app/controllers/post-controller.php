<?php
if(empty($_GET['url'])){
header("location: ?p=home");
}
$data = mysqli_fetch_array(getBlogPost(strip_tags($_GET['url'])),MYSQLI_ASSOC);

function formatData($data){
        $data['date'] = date("F d,Y",strtotime($data['date']));
    return $data;
}

$data = formatData($data);
<?php
if(empty($_GET['url'])){
header("location: ?p=home");
}
$data = mysqli_fetch_array(getBlogPost(strip_tags($_GET['url'])),MYSQLI_ASSOC);
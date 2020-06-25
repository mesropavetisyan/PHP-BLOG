<?php $data = [
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-1.jpg",
        'category' => "Travel",
        'title' => "Home is peaceful place",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2019"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/abc.jpg",
        'category' => "craft",
        'title' => "wooden table is beautiful",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 10, 2019"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-2.jpg",
        'category' => "Lifestyle",
        'title' => "Small work station",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2018"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-3.jpg",
        'category' => "Mission",
        'title' => "Waiting to launch on the sky",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2018"
    ],
    [
        'link' => "blog.html",
        'img' => "assets/images/blog-4.jpg",
        'category' => "Cloth",
        'title' => "A day labour wore jeans",
        'text' => "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.",
        'author' => "Rubel",
        'date' => "February 12, 2018"
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->

    <title><?= $title; ?></title>

    <!-- common css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>

<body>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="?p=home">Homepage</a></li>
                    <li><a href="?p=about">ABOUT ME </a></li>
                    <li><a href="?p=contact">CONTACT</a></li>
                </ul>

                <ul class="nav navbar-nav text-uppercase pull-right">

                    <li><a href="?p=register">Register</a></li>
                    <li><a href="?p=login">Login</a></li>
                    <li><a href="?p=profile">My profile</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->


            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
<?php
include_once("connect.php");
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css3/util.css">
    <link rel="stylesheet" type="text/css" href="css3/main.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <style>
        .row.heading h2 {
            color: #fff;
            font-size: 52.52px;
            line-height: 95px;
            font-weight: 400;
            text-align: center;
            margin: 0 0 40px;
            padding-bottom: 20px;
            text-transform: uppercase;
        }
        ul{
            margin:0;
            padding:0;
            list-style:none;
        }
        .heading.heading-icon {
            display: block;
        }
        .padding-lg {
            display: block;
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .practice-area.padding-lg {
            padding-bottom: 55px;
            padding-top: 55px;
        }
        .practice-area .inner{
            border:1px solid #999999;
            text-align:center;
            margin-bottom:28px;
            padding:40px 25px;
        }
        .our-webcoderskull .cnt-block:hover {
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            border: 0;
        }
        .practice-area .inner h3{
            color:#3c3c3c;
            font-size:24px;
            font-weight:500;
            font-family: 'Poppins', sans-serif;
            padding: 10px 0;
        }
        .practice-area .inner p{
            font-size:14px;
            line-height:22px;
            font-weight:400;
        }
        .practice-area .inner img{
            display:inline-block;
        }


        .our-webcoderskull{
            background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;

        }
        .our-webcoderskull .cnt-block{
            float:left;
            width:100%;
            background:#fff;
            padding:30px 20px;
            text-align:center;
            border:2px solid #d5d5d5;
            margin: 0 0 28px;
        }
        .our-webcoderskull .cnt-block figure{
            width:148px;
            height:148px;
            border-radius:100%;
            display:inline-block;
            margin-bottom: 15px;
        }
        .our-webcoderskull .cnt-block img{
            width:148px;
            height:148px;
            border-radius:100%;
        }
        .our-webcoderskull .cnt-block h3{
            color:#2a2a2a;
            font-size:20px;
            font-weight:500;
            padding:6px 0;
            text-transform:uppercase;
        }
        .our-webcoderskull .cnt-block h3 a{
            text-decoration:none;
            color:#2a2a2a;
        }
        .our-webcoderskull .cnt-block h3 a:hover{
            color:#337ab7;
        }
        .our-webcoderskull .cnt-block p{
            color:#2a2a2a;
            font-size:13px;
            line-height:20px;
            font-weight:400;
        }
        .our-webcoderskull .cnt-block .follow-us{
            margin:20px 0 0;
        }
        .our-webcoderskull .cnt-block .follow-us li{
            display:inline-block;
            width:auto;
            margin:0 5px;
        }
        .our-webcoderskull .cnt-block .follow-us li .fa{
            font-size:24px;
            color:#767676;
        }
        .our-webcoderskull .cnt-block .follow-us li .fa:hover{
            color:#025a8e;
        }

    </style>

    <style type="text/css">
        body{
            background-image: url("uploads/depositphotos_54324565-stock-photo-online-shopping-and-e-commerce.jpg");
        }
        #myNavbar li a{color: white;}
        #myNavbar li a:hover{background-color: white; color: #337ab7;}
        #first{margin-top: 10px;}
        .col-sm-3{padding: 10px 0px 0px 0px;}
        .col-sm-3:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        footer{padding: 2%;background-color: #2a2a2a;}
        footer h4{color: white;}
        footer a{color: white;}
        footer a:hover{color:orange;}
    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <a style="font-family: Algerian" href="index.php" class="navbar-brand">Electronic-Buy</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span>
    </button>
    <form>
        <div class="input-group">
            <input type="text" name="search" id="search" placeholder="Search.." class="form-control" size="90">
            <div class="input-group-append">
                <button type="b utton" class="btn btn-default"><span class="fa fa-search"></span></button>
            </div>
        </div>
    </form>
    <div id="myNavbar" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">


            <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-youtube"></span></a></li>
            <li class="nav-item" style="margin-right: 360px;"><a class="nav-link px-2" href="#"><span class="fa fa-linkedin"></span></a></li>
            <li class="nav-item active"><a class="nav-link" href="aboutus.php">Our Team</a></li>
            <li class="nav-item active"><a class="nav-link" href="contactus.php">Contact Us</a></li>
            <li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Sign up</a></li>
        </ul>
    </div>
    </div>
</nav>



<section class="our-webcoderskull padding-lg">
    <div class="container">
        <div class="row heading heading-icon">
            <h2>Our Team</h2>
        </div>
        <ul class="row">
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                    <h3>Fatih Mercan</h3>
                    <p>Freelance Web Developer</p>
                    <ul class="follow-us clearfix">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/fatih-mercan-920974176/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="https://lanwan-technologies.com/wp-content/uploads/2017/04/our-goal.png" class="img-responsive" alt=""></figure>
                    <h3>Our Goal</h3>
                    <p>We are here to serve you and we will not you let disappoint</p>
                    <ul class="follow-us clearfix">
                        <li>* Working Hard</li>
                        <li>* Quality</li>
                    </ul>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
                    <h3>Reis Tana </h3>
                    <p>Freelance Web Developer</p>
                    <ul class="follow-us clearfix">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://mobile.twitter.com/ghaithtana"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="https://lanwan-technologies.com/wp-content/uploads/2017/04/our-goal.png" class="img-responsive" alt=""></figure>
                    <h3>Our Goal</h3>
                    <p>We are here to serve you and we will not you let disappoint</p>
                    <ul class="follow-us clearfix">
                        <li>* Best Price</li>
                        <li>* Popularity</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section>
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Categories
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="index.php" class="stext-107 cl7 hov-cl1 trans-04">
                            Computers
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="index.php" class="stext-107 cl7 hov-cl1 trans-04">
                            Phones
                        </a>
                    </li>


                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know in store at 8th floor,   Istanbul,Turkey
                    <br>
                    Sümbül sokak N17, Levent, Beşiktaş-İstanbul
                </p>

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>










</body>
</html>
<?php
include_once("connect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css3/util.css">
    <link rel="stylesheet" type="text/css" href="css3/main.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
	<style type="text/css">
		body{background-color: #18193f;}
		.card{margin-top: 20px;
        }
        form{
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;;
        }
	</style>

    <style type="text/css">

        #myNavbar li a{color: white;}
        #myNavbar li a:hover{background-color: white; color: #337ab7;}
        #first{margin-top: 10px;}
        .col-sm-3{padding: 10px 0px 0px 0px;}
        .col-sm-3:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        footer{padding: 2%;background-color: #2a2a2a;margin-top: 330px;}
        footer h4{color: white;}
        footer a{color: white;}
        footer a:hover{color:orange;}
    </style>
	<title>Electronic-Buy</title>
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


<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="card shadow-lg p-3 mb-5 btn-group-sm rounded" style="padding: 2%; background: #ffffff;">
				<h2 class="text-center">Log in Here</h2>
				<form method="POST">
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"><b>Phone</b></label>
						<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Enter Phone" name="phone">
					    </div>
					</div>
				    <div class="form-group row">
				    	<label for="password" class="col-sm-2 col-form-label"><b>Password</b> </label>
				    	<div class="col-sm-10">
				    	<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
				        </div>
				    </div>
				    <button type="submit" class="btn btn-primary" style="margin-left: 17%">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

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




<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$sql = mysqli_query($con,"SELECT phone FROM users WHERE phone = '$phone' and password = '$password'");
	$row = mysqli_num_rows($sql);
	if($row>0){
		$_SESSION['phone'] = $phone;
		header("Location: home.php");
	}else{
		echo '<p style="color:red;">Try again !!!</p>';
	}

}


?>
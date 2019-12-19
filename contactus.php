<?php
include_once("connect.php");
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>

        <style type="text/css">
            body{background-color: #18193f;}
            .card{margin-top: 20px;
            }
            form{
                font-family: "-apple-system";
            }
        </style>
        <title>ShoppingCart</title>
        <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css3/util.css">
	<link rel="stylesheet" type="text/css" href="css3/main.css">
<!--===============================================================================================-->
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
                                	
                              Istanbul,Turkey
                              <br>
                              Sümbül sokak N17, Levent, Beşiktaş-İstanbul
								
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+90212343570
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
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
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo =  "fatihmercan7991@gmail.com";
    $headers = "From : ".$email;
    $txt = "You have recieved an e-mail from: ".$name.".\n\n".$message;


    mail($mailTo, $subject,$txt,$headers);
    header("Location: index.php?mailsend");
}

?>
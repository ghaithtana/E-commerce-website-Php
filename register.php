<!DOCTYPE html>
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
	<title>Electronic-Buy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    body{background-color: #18193f;}
    .card{margin-top: 20px;}
    form{font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;}
    h2{text-align: center;}
    label{text-align: right;}

  </style>

    <style type="text/css">

        #myNavbar li a{color: white;}
        #myNavbar li a:hover{background-color: white; color: #337ab7;}
        #first{margin-top: 10px;}
        .col-sm-3{padding: 10px 0px 0px 0px;}
        .col-sm-3:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        footer{padding: 2%;background-color: #2a2a2a;margin-top: 57px;}
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
                <button type="button" class="btn btn-default"><span class="fa fa-search"></span></button>
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

<div class="container" >
	<div class="card shadow-lg p-3 mb-5 btn-group-sm rounded" style="padding: 2%; background: #ffffff" ;>
  <h2>Create Account</h2>
  <form method="POST" action="insert_data.php">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label"><b>Name</b> </label>
      <div class="col-sm-10">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label"><b>Email</b></label>
      <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label"><b>Password</b></label>
      <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="gender" class="col-sm-2 col-form-label"><b>Gender</b></label>
      <div  class="col-sm-10">
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="gender" name="gender" value="Male">
        <label class="custom-control-label" for="gender"> Male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="fgender" name="gender" value="female">
        <label class="custom-control-label" for="fgender"> Female</label>
      </div></div>
    </div>
    <div class="form-group row">
      <label for="address" class="col-sm-2 col-form-label"><b>Address</b></label>
      <div class="col-sm-10">
      <input type="text" name="address" class="form-control" placeholder="Address.." required="">
      </div>
    </div>
    <div class="form-group row">
          <label for="pincode" class="col-sm-2 col-form-label"><b>Pincode</b></label>
          <div class="col-sm-4">
          <input type="text" name="pincode" required="" placeholder="Pincode.." class="form-control" required="">
          </div>
          <label for="country" class="col-sm-2 col-form-label"><b>Country</b></label>
          <div class="col-sm-4">
          <select name="country" class="form-control" required="">
            <option value="uk">United Kingdom</option>
              <option value="Syria">Syria</option>
            <option value="Turkey">Turkey</option>
            <option value="Chaina">Chaina</option>
            <option value="US">United States</option>
          </select>
          </div>
    </div>
    <div class="form-group row">
      <label for="landmark" class="col-sm-2 col-form-label"><b>Landmark</b></label>
      <div class="col-sm-10">
      <input type="text" name="landmark" class="form-control" placeholder="Landmark.." required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="phone" class="col-sm-2 col-form-label"><b>Phone</b></label>
      <div class="col-sm-10">
      <input type="text" name="phone" class="form-control" placeholder="+9053..." required="">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 17%;">Submit</button>
  </form>
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

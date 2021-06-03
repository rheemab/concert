<?php
session_start();

    include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
	    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			
			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
			
		}
		else
		{
			echo "Please Enter Some Valid Information";

		}
	
	}
	
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Page Login - X-Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href='assets/images/favicon.png' />
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/font-awesome.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/themify-icons.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/flaticon.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/owl.carousel.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/slick.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.mmenu.all.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/lightbox.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/chosen.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/animate.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.scrollbar.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.bxslider.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700|Great+Vibes|Montserrat:400,700|Open+Sans:400,400i,600,600i,700,800i" rel="stylesheet">
</head>
<body class="login-page">
         <header class="header header-basic header-style_16 header-sticky menu-no-transparent">
          <div class="header-top">

                          </div>
          <div class="main-header">
              <div class="container">
                  <nav id="primary-navigation" class="site-navigation">
                      <div id="main-menu" class="main-nav main-menu">
                          <ul class="menu-nav">
                              <li class="menu-item menu-item-has-children megamenu-menu-item active">
                              <li class="menu-item"><a href="index.php">Home</a></li>
                              <li class="menu-item"><a href="about-us.php">About us</a></li>
                              <li class="menu-item"><a href="contact.php">Contact</a></li>
                              
                              </li>
                          </ul>
                      </div>
                  </nav>
                  <!-- End Main Nav Menu -->
                  <!-- Header Search -->
                  <div class="header-search-main-header">
                      <form role="search" method="get" action="/search" class="search-form">
                          <input type="text" value="" placeholder="Search" name="q" class="search">
                          <button type="submit" class="search-form-submit">
                              <i class="flaticon-search"></i>
                          </button>
                      </form>
                  </div>
                  <!-- End Header Search -->

              </div>
          </div>
      </header>
       
    <div class="main-content">
        <div class="site-content-inner">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div class="content-area col-xs-12 col-sm-12 col-md-12">
                        <div id="main" class="site-main">
                            <div id="customer_login">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                        <h5 class="title-login">Register</h5>
                                        <form class="register" method="post">
                                            <p class="form-row form-row-wide">
                                                <label for="text">Username or Email address <span class="required">*</span></label>
                                                <input type="text" value="" id="text" name="user_name" class="input-text">
                                            </p>

                                            <p class="form-row form-row-wide">
                                                <label for="reg_password">Password <span class="required">*</span></label>
                                                <input type="password" id="reg_password" name="password" class="input-text">
                                            </p>
                                            <p class="form-row">
                                                <label class="inline" >
                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme"> Sign me up for events!			
                                                </label>
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" value="Register" name="register" class="button-submit">
                                            </p>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Main content -->
                </div><!-- / End row content -->
            </div>
        </div>
    </div>

    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/slick.js'></script>
    <script type='text/javascript' src='assets/js/wow.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mmenu.all.min.js'></script>
    <script type='text/javascript' src='assets/js/lightbox.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.scrollbar.js'></script>
    <script type='text/javascript' src='assets/js/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery-ui.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.bxslider.min.js'></script>
    <script type='text/javascript' src='assets/js/frontend.js'></script>
    <script type='text/javascript' src='assets/js/frontend-plugin.js'></script>
</body>
</html>
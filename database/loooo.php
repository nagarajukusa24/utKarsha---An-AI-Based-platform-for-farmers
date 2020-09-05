<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <a href="img/logo.png" />
        <title>jai Kisan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/slick.css" type="text/css">
		<link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" href="css/f1.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css "/>

    </head>
    <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                <br><br><br><br><br><br>
                  <a href="/kisan/index" class="nav-link">Home</a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                <br><br><br><br><br><br>
                  <a href="/hub/default/support" class="nav-link">Contact</a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <!-- Messages Dropdown Menu -->
               
               <!-- Notifications Dropdown Menu -->
               <li class="nav-item dropdown">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-sign-in-alt"></i> Log In
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <div class="dropdown-divider"></div>
                     
                     <div class="dropdown-divider"></div>
                     <a href="/hub/default/user/request_reset_password?_next=%2Fhub%2Fnotice%2Findex" class="dropdown-item">
                     <i class="fas fa-key mr-2"></i> Forgot Password?
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="/hub/default/user/retrieve_username?_next=%2Fhub%2Fnotice%2Findex" class="dropdown-item">
                     <i class="fas fa-user mr-2"></i> Forgot Username?
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="/hub/default/user/login?_next=%2Fhub%2Fnotice%2Findex" class="dropdown-item">
                     <i class="fas fa-sign-in-alt"></i> Log In
                     </a>
                  </div>
               </li>
               
               <!--
                  <li class="nav-item">
                     <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                     <i class="fas fa-th-large"></i>
                     </a>
                  </li>
                  -->
            </ul>
          </nav>
    <div>
    <body background="b2.gif">
    	
	<div class="outer-wrapper">
		<div class="topbar"></div>
		<div class="topbar-section">
		<div id="tt">
			</div>
		</div>
        <div>
           <?php
            require 'header.php';
           ?>
           </div>
		<div class="clear"></div>
		<hr>
		<div>
			<div class="image-slider">
				<div>
					<img src="img/farm2.jpg" alt="Banner image " >
				</div>
				<div>
					<img src="img/f1.jpg" alt="Banner image " >
				</div>
				<div>
					<img src="img/f3.png" alt="Banner image " >
				</div>
			</div>
		</div>
		
		<div id="all">
			<div class="dropdown">
  <button class="dropbtn">Schemes</button>
  <div class="dropdown-content">
    <a href="schemes.php">Central</a>
    <a href="stateschemes.php">State</a>
  </div>
</div>

  <div class="dropdown">
  <button class="dropbtn">Soil Health Card</button>
  
 
</div>

<div class="dropdown">
  <button class="dropbtn">Organic Farming</button>
  
</div>

<div class="dropdown">
  <button class="dropbtn">Minimum Sale Price</button>
  
</div>
<div class="dropdown">
  <button class="dropbtn">Crop Prediction </button>
  
</div>
<div class="dropdown">
  <button class="dropbtn">Buying & Selling </button>
  <div class="dropdown-content">
    <a href="cart/index.php">Agents</a>
    <a href="products1.php">Farmers</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Forum</button>
  
</div>


			
			
		<div align="center"><h2>Our Services</h2><br><br></div>
			<div class="categories">
				<div>
					<img src="img/s1.png"><a href="https://cropify.herokuapp.com">Disease Detection</a>
				</div>
				<div>
					<img src="img/s2.jpg" alt="Category image "><a href="women.html">Soil Prediction</a>
				</div>
				<div>
					<img src="img/s3.jpeg" alt="Category image "><a href="swimming.html">Location Tracking</a>
				</div>
				<div>
					<img src="img/s4.jpg"   alt="Category image "><a href="badminton.html">Weather Forecasting</a>
				</div>
        <div>
          <img src="img/s1.png"><a href="https://cropify.herokuapp.com">Disease Detection</a>
        </div>
        <div>
          <img src="img/s2.jpg" alt="Category image "><a href="women.html">Soil Prediction</a>
        </div>
        <div>
          <img src="img/s3.jpeg" alt="Category image "><a href="swimming.html">Location Tracking</a>
        </div>
        <div>
          <img src="img/s4.jpg"   alt="Category image "><a href="badminton.html">Weather Forecasting</a>
        </div>

</div>				
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript">
			$('.image-slider').slick({
			  dots: true,
			  arrows:false,
			  autoplay:true,
			  infinite: true,
			  speed: 500,
			});
		 
			$('.categories').slick({
			  infinite: true,
			  slidesToShow: 4,
			  arrows:false,
			  autoplay:true,
			  slidesToScroll: 1
			});
		</script>
     <div align="center"><h2>About Us
      <div><h4 align="left">In this modernised world the technology has almost replaced every aspect in every field with more advancement and automation in regard of technology. It is providing a better and efficient outcomes which has been a great asset for mankind.Technology has touched every sector even agriculture sector has also been trespassed by it as it is one of the biggest needs of humankind.</h4></h2></div><br>
  <div align="center"><h2>Contact Us</h2>
<div class="container">
    <div class="row">
       <!-- <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-globe"></i></span>
                    </div>
                    <h3 class="title">Officer1</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>-->
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox green">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <h3 class="title">Officer1</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox green">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <h3 class="title">Officer2</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox green">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <h3 class="title">Officer3</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox green">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <h3 class="title">Officer4</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div></div>
<br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>

</body>
</html>
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
 <a href="shc.php"> <button class="dropbtn">Soil Health Card</button></a>
  
 
</div>

<div class="dropdown">
  <a href="description.php"><button class="dropbtn" >Organic Farming</button></a>
  
</div>

<div class="dropdown">
  <a href="msp2.php"><button class="dropbtn">Minimum Sale Price</button></a>
  
</div>
<div class="dropdown">
  <button class="dropbtn">Crop Prediction </button>
  
</div>
<div class="dropdown">
  <button class="dropbtn">Buying & Selling </button>
  <div class="dropdown-content">
    <a href="login.php">Agents</a>
    <a href="products1.php">Farmers</a>
  </div>
</div>
<div class="dropdown">
  <a href="forum/forumin.php"><button class="dropbtn">Forum</button></a>
  
</div>


			
			
		<div align="center"><h2>Our Services</h2><br><br></div>
			<div class="categories">
				<div>
					<img src="img/s1.png"><a href="https://cropify.herokuapp.com">Disease Detection</a>
				</div>
				<div>
					<img src="img/s2.jpg" alt="Category image "><a href="">Soil Prediction</a>
				</div>
				<div>
					<img src="img/s3.jpeg" alt="Category image "><a href="">Location Tracking</a>
				</div>
				<div>
					<img src="img/s4.jpg"   alt="Category image "><a href="">Weather Forecasting</a>
				</div>
        <div>
          <img src="img/s1.png"><a href="https://cropify.herokuapp.com">Disease Detection</a>
        </div>
        <div>
          <img src="img/s2.jpg" alt="Category image "><a href="">Soil Prediction</a>
        </div>
        <div>
          <img src="img/s3.jpeg" alt="Category image "><a href="">Location Tracking</a>
        </div>
        <div>
          <img src="img/s4.jpg"   alt="Category image "><a href="">Weather Forecasting</a>
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
                    <p class="description"></p>
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
                    <p class="description"></p>
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
                    <p class="description"></p>
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

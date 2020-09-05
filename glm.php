<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>Jai Kisan</title>
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
        <link rel="stylesheet" href="css/p1.css" type="text/css">`
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
<!DOCTYPE html>
<html>
 <style>
body {
  background-image: url('p1.jpg');
  background-repeat: no-repeat;
}
</style> 
<head>
	<link rel="shortcut icon" href="img/logo.png" />
        <title>Jai Kisan</title>
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
    </head>
<nav class="navbar navbar-inverse navbar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">Jai Kisan
                       </a></div>
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"> Home</a>
                          
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
                           
                           <li><a href=""><span class="glyphicon glyphicon-log-out"></span>Contact </a></li>
                           <?php
                           }else{
                            ?>
                            <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> Home</a>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-user"></span>   About Us</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Contact </a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>
</head>
<br><br><br><br><br><br>
<body><font size="5">
	<h1 style="color: blue">Green Leaf Manures</h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Green leaf manures (GLMs) are organic manures made from leaves collected from all available sources and used to supply essential plant nutrients to the soil and increase soil fertility in a healthy manner. Using GLMs to grow crops is not a recent concept at all and has been used in many South Asian countries for centuries. Green leaf manuring can be defined as the pruning and collecting of green leaves and twigs from various trees, herbs and shrubs and then applying them elsewhere as fertilizers. Forest tree leaves are major sources of these manures while herbs and shrubs growing in field bunds, wastelands etc. are some other mentionable sources. Using green leaf manures is very useful practice especially in hilly areas.<br>
<br>
<h3><b>Advantages of using GLMs</b></h3><br>

Using GLMs instead of chemical fertilizers gives a number of advantages-<br><br>

• GLM plants add a huge quantity of N to the soil. Around 120 kg N can be added to the soil from 400 trees placed 2 m apart on the bund.<br><br>

• GLMs ensure balanced nutrition for plants and improve soil fertility to a great extent.<br><br>

• GLM trees are perennial and supply leaves 2-3 times in a year for manuring; so, they need not to replant.<br><br>

• GLMs are slow releasing fertilizers and act as plant nutrient source for a long time after their application.<br><br>

• Soil structure is improved to a great extent due to the application of GLM.<br><br>

• GLMs encourage the development of earthworms by acting as food material to them.<br><br>

• GLMs produce very high quality and safe food materials.<br><br>

• GLMs possess no threat to water and air quality.<br><br>

• GLMs stimulate the growth of various beneficial microorganisms in soil and thus improve the soil biodiversity.<br><br>

• GLMs are very useful in reclaiming salinity affected soils.<br><br>

• The woody branches of GLM trees are used as fuel.<br><br>

• They are cheap and easily affordable.<br><br>

• GLMs are readily available and very easy to use.<br><br></font>
</body>
<br><br><br><br><br><br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
</html>
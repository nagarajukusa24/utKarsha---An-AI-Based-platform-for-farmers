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
<br><br><br><br>
<body><font size="5">
	<h1 style="color:blue;text-align: center;">Crop Rotation</h1>
Crop rotation is the systematic planting of different crops in a particular order over several years in the same growing space. This process helps maintain nutrients in the soil, reduce soil erosion, and prevents plant diseases and pests.

There is no universally accepted rotation schedule as the types of plants in a particular farm or garden depend on the local soil, climate, and resources available. The length of rotation time between different plants will also vary depending on the needs of the gardener.
<h2 style="color: blue;">Advantages of Crop Rotation</h2>

    Increases soil fertility.<br><br>
    Increases crop yield.<br><br>
    Increase in soil nutrients.<br><br>
    Reduces soil erosion.<br><br>
    Limits concentration of pests and diseases.<br><br>
    Reduces the stress of weeds.<br><br>
    Improves the soil structure.<br><br>
    Reduces pollution.<br><br></font>
</body>
<br><br><br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
</html>
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
<html>
 <style>
body {

  background-image: url('organic/back1.jpg');
 
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
<br><br><br><br><br><br><br><br>
<h1 align="center">ORGANIC FARMING</h1>
</head>
<body>
	<div><p align="middle"><img src="organic/vermi.jpg" align="left"><h1><b><u>VERMICOMPOST</b></u></h1><h3>Vermicomposting is a type of composting in which certain species of earthworms are used to enhance the process of organic waste conversion and produce a better end-product. It is a mesophilic process utilizing microorganisms and earthworms. Earthworms feeds the organic waste materials and passes it through their digestive system and gives out in a granular form (cocoons) which is known as vermicompost.
  <a href="vermi.php">know more</a></h3></p></div>
	<br><br><br><br><br><br><br>
	<br><hr>
	<div>
	<p style="font-size: 20px"><img src="organic/cp.jpg" align="right"><h1 align="right"><u>CROP ROTATION</u></h1><h3>Crop rotation is the practice of growing a series of dissimilar or different types of crops in the same area in sequenced seasons. It is done so that the soil of farms is not used for only one set of nutrients.<a href="cp.php">know more</a></h3></p></div>
	<br><br><br><br><br><br><br><br><br><hr>
	<p style="font-size: 20px"><img src="organic/glm.jpg" align="left"><h1><u>GREEN LEAF MANURES</u></h1><h3>Green leaf manures (GLMs) are organic manures made from leaves collected from all available sources and used to supply essential plant nutrients to the soil and increase soil fertility in a healthy manner.<a href="glm.php">know more</a></h3></p><br><br><br><br><br><br><br><br><br><hr>
	<p style="font-size: 20px"><img src="organic/anumal.jpg" align="right"><h1 align="right"><u>ANIMAL HUSBANDRY</u></h1><h3>Animal husbandry is the branch of agriculture concerned with animals that are raised for meat, fibre, milk, eggs, or other products.<a href="ah.php">know more</a></h3></p><br><br><br><br><br><br><br><br><br><br><br><hr>
	<p style="font-size: 20px"><img src="organic/bio.jpg" align="left"><h1><u>BIOFERTILIZERS</u></h1><h3>A biofertilizer (also bio-fertilizer) is a substance which contains living microorganisms which, when applied to seeds, plant surfaces, or soil, colonize the rhizosphere or the interior of the plant and promotes growth by increasing the supply or availability of primary nutrients to the host plant.<a href="bio.php">know more</a></h3></p><br><br><br><br><br><br><br><br><hr>
	<p style="font-size: 20px"><img src="organic/manure.jpg" align="right"><h1 align="right"><u>MANURES</u></h1><h3>Manure is organic matter that is used as organic fertilizer in agriculture. Most manure consists of animal feces; other sources include compost and green manure. Manures contribute to the fertility of soil by adding organic matter and nutrients, such as nitrogen, that are utilised by bacteria, fungi and other organisms in the soil. Higher organisms then feed on the fungi and bacteria in a chain of life that comprises the soil food web<a href="manure.php">know more</a></h3></p><br><br><br><br><br><br><br><br><br><hr>
</body>
</html>
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
<br><br><br><br><br>
<body bgcolor="red"><font size="5">
	<h1 style="color: blue;text-align: center;">Manure</h1>
Manure is the decomposed form of dead plants and animals which is applied to the soil to increase the production. It is a natural form of fertilizer and is cost-effective. The human and animal excreta is also used as manure. The livestock manure is rich in nitrogen, phosphorus, and potassium.<br><br>

Manure is highly rich in organic matter and humus and thus improves the soil fertility. These are better in the long run and does not cause any pollution. It is a valuable and renewable resource.<br><br>
Manuring<br><br>

<b>Manure can be obtained from various sources. The different sources of manure are mentioned below:</b><br><br>

    Cattle dung, urine, and slurry from biogas plants.<br><br>

    Wastes from human habitation such as human urine, night soil, sludge, sewage, domestic waste.<br><br>

    Droppings of goat and sheep<br><br>

    Waste from the slaughterhouses such as bones, meat, horn and hoof meal, fish waste<br><br>

    By-products of agricultural industries<br><br>

    Crop waste<br><br>

    Weeds, water hyacinth<br><br>


<b><h2 style="color:blue;">Types of Manure</h2></b>

Manure can be grouped as farmyard manure, green manure and compost manure. Following are the different types of manure used by the farmers:<br>
Green Manure<br><br>

Green manure increases the percentage of organic matter in the soil. The roots of such manures go deep into the soil. These help in the suppression of weeds and the prevention of soil erosion.<br><br>
Farmyard Manure<br><br>

Farmyard manure improves the soil structure and is used as a natural fertilizer in farming. It increases the soil capacity to hold more water and nutrients. It also increases the microbial activity of the soil to improve its mineral supply and also the plant nutrients.<br><br>
Compost Manure<br><br>

It improves the soil structure and water and nutrient holding capacity of the soil. Thus, it increases the nutrient value and thereby improves the health of the plants.<br><br>
<h2 style="color: blue">Advantages of Manure</h2><br>

    These are a good source of macronutrients.<br><br>

    Improves soil fertility.<br><br>

    Cost-effective<br><br>

    Reduces soil erosion and leaching.<br><br>

    Improves the physical properties of the soil and aerates the soil.<br><br>

    Improves the water and nutrient holding capacity of the soil.<br><br>

    It helps in killing weeds and pests.<br><br>

    It can be transported easily.<br><br>

    Methane gas is evolved as the by-product of manure that can be used for cooking and heating purposes.<br><br>

    The crops grown on the land treated with manure produces healthy crops.<br><br>
</font>
</body>
<br><br><br><br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
</html>
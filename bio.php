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
<br><br><br><br><br>
</head>
<h1 style="color: blue;text-align: center;">Biofertilizers</h1>
<body><font size="5">
Biofertilizers are the substance that contains microbes,  which helps in promoting the growth of plants, trees by increasing the supply of essential nutrients to the plants. It comprises living organisms which include mycorrhizal fungi, blue-green algae, and bacteria. Mycorrhizal fungi preferentially withdraw minerals from organic matter for the plant whereas cyanobacteria are characterized by the property of nitrogen fixation.

Nitrogen fixation is defined as a process of converting the di-nitrogen molecules into nitrogen compounds. For instance, some bacteria convert insoluble forms of soil phosphorus into soluble forms. As a result, phosphorus will be available for plants.
<h2 style="color: blue;">Components of Biofertilizers</h2><br>
Bio Compost<br><br>
Tricho-Card<br><br>
Azotobacter<br><br>
Phosphorus<br><br>
Vermicompost<br><br>
<h2 style="color: blue;">Importance of Biofertilizers</h2><br>

Biofertilizers are important for the following reasons:<br><br>

    Biofertilizers improve soil texture and yield of plants.<br><br>
    They do not allow pathogens to flourish.<br><br>
    They are eco-friendly and cost-effective.<br><br>
    Biofertilizers protect the environment from pollutants since they are natural fertilizers.<br><br>
    They destroy many harmful substances present in the soil that can cause plant diseases.<br><br>
    Biofertilizers are proved to be effective even under semi-arid conditions.<br><br>
</font>
</body>
<br><br><br><br><br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
</html>
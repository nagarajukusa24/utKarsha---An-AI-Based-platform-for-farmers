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
<body >
	<h1 align="center" style="color: blue">Vermicompost</h1>
<p><font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vermicomposting is the scientific method of making compost, by using of earthworms which are commonly found living in soil, feeding on biomass and excreting it in a digested form.

Vermiculture means “worm-farming”. Earthworms feed on the organic waste materials and give out excreta in the form of “vermicasts” that are rich in nitrates and minerals such as phosphorus, magnesium, calcium and potassium. These are used as fertilizers and enhance soil quality.
<br><br>
<b>Vermicomposting comprises two methods:</b>
<br><br>
    <b>Bed Method:</b> This is an easy method in which beds of organic matter are prepared.<br>
    <b>Pit Method:</b> In this method, the organic matter is collected in cemented pits. However, this method is not prominent as it involves problems of poor aeration and waterlogging.


<h1 style="color:blue;">Materials Required</h1>

    Water.<br>
    Cow dung.<br>
    Thatch Roof.<br>
    Soil or Sand.<br>
    Gunny bags.<br>
    Earthworms.<br>
    Weed biomass<br>
    A large bin (plastic or cemented tank).<br>
    Dry straw and leaves collected from paddy fields.<br>
    Biodegradable wastes collected from fields and kitchen.<br>

<h3 style="color:blue;">Procedure</h3>

    To prepare compost, either a plastic or a concrete tank can be used. The size of the tank depends upon the availability of raw materials.
    Collect the biomass and place it under the sun for about 8-12 days. Now chop it to the required size using the cutter.
    Prepare a cow dung slurry and sprinkle it on the heap for quick decomposition.
    Add a layer (2 – 3 inch) of soil or sand at the bottom of the tank.
    Now prepare a fine bedding by adding partially decomposed cow dung, dried leaves and other biodegradable wastes collected from fields and kitchen. Distribute them evenly on the sand layer.
    Continue adding both the chopped bio-waste and partially decomposed cow dung layer-wise into the tank up to a depth of 0.5-1.0 ft.
    Once, after adding all the bio-wastes, release the earthworm species over the mixture and cover the compost mixture with dry straw or gunny bags.
    Sprinkle water on a regular basis to maintain the moisture content of the compost.
    Cover the tank with a thatch roof to prevent the entry of ants, lizards, mouse, snakes, etc. and protect the compost from rainwater and direct sunshine.
    Have a frequent check to avoid the compost from overheating. Maintain proper moisture and temperature.


<h3 style="color:blue;">Result</h3>

After the 24th day, around 4000 to 5000 new worms are introduced and the entire raw material is turned into the vermicompost.</font></p>
</body>
<br><br>
<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
</html>
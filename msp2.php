<?php
 
    require 'qwerty/bar.html';
?>
<?php
$conn=mysqli_connect("localhost:3306","root","","store");
/*if($conn)
{
	echo "connection established";
}
else
{
	echo "connection not established";
}*/
?>
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
<br><br><br>
<h1 style="color: blue;text-align: center;">Minimum Sales Price</h1>
<head>
	<style type="text/css">
		table,th,tr,td{
			border:2;
			padding: 5px;
			border-color: red;
			height: 20px;
			width: 20px;
			border: 1px solid black;
			 border-color: red;
			 border-spacing: 5px;

		}
	</style>
</head>
<table align="center">
	<tr>
		<th>Crops</th>
		<th>2008-09</th>
		<th>2009-10</th>
		<th>2010-11</th>
		<th>2011-12</th>
		<th>2012-13</th>
		<th>2013-14</th>
		<th>2014-15</th>
		<th>2015-16</th>
		<th>2016-17</th>
		<th>2017-18</th>
		<th>2018-19</th>
		<th>2019-2020</th>
	</tr>
	<?php
$v=mysqli_query($conn,"select * from of");
while($row=mysqli_fetch_assoc($v))
{
	?>
	
		
		<tr>
			<td>
				<?php echo $row['crops'];?>
			</td>
			<td>
				<?php echo $row['2008-09'];?>
			</td>
			<td>
				<?php echo $row['2009-10'];?>
			</td>
			<td>
				<?php echo $row['2010-11'];?>
			</td>
			<td>
				<?php echo $row['2011-12'];?>
			</td>
			<td>
				<?php echo $row['2012-13'];?>
			</td>
			<td>
				<?php echo $row['2013-14'];?>
			</td>
			<td>
				<?php echo $row['2014-15'];?>
			</td>
			<td>
				<?php echo $row['2015-16'];?>
			</td>
			<td>
				<?php echo $row['2016-17'];?>
			</td>
			<td>
				<?php echo $row['2017-18'];?>
			</td>
			<td>
				<?php echo $row['2018-19'];?>
			</td>
			<td>
				<?php echo $row['2019-2020'];?>
			</td>
		</tr>
	<?php } ?>
</table>
	<footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
	<?php

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>bar</title>
</head>

    	
<span><img src="qwerty/paddy.png"><img src="qwerty/jowar.png"><img src="qwerty/bajra.png"><img src="qwerty/maize.png"><img src="qwerty/ragi.png"><img src="qwerty/cotton.png"><img src="qwerty/groundnut.png"><img src="qwerty/sunflower.png"><img src="qwerty/soyabean.png"><img src="qwerty/wheat.png"></span>
</body>
</html>
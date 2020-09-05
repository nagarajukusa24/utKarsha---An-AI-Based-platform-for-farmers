<?php
	require('header.php');
	session_start();
	?>
	<!DOCTYPE html>
	<html>
	<head>
        <link rel="shortcut icon" href="img/logo.png" />
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
		<link rel="stylesheet" href="css/custom1.css" type="text/css">
    <link rel="stylesheet" href="css/f1.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css "/>
	</head>
	<body>
	
	   
    	
	<div class="outer-wrapper">
		<div class="topbar"></div>
		<div class="topbar-section" style="background-color: none">
		<div id="tt">
			</div>
		</div>
        <div>
           <?php
            require 'header.php';
           ?>
           </div>
		<div class="clear"></div>

	<form action="click.php" method="POST">
	<center><textarea rows="5" cols="120" name="post"></textarea><br><br>
		<!--<a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>-->
	<input type="submit" class="btn btn-primary" id="post" value="post" width="10" height="5" ></button>
	</center>
<?php
	$conn=mysqli_connect("localhost","root","","store");
	$sql="select * from forum order by post_id desc";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['id']==$_SESSION['id'])
			echo "<h5><b><input type='text' value='You' readonly></b></h5><br><h4><textarea rows='5' cols='60' readonly>".$row['post']."</textarea></h4><br>";
		else
			echo "<h5 style='text-align:right'><b><input type='text' value=".$row['id']." readonly></b></h5><br><h4 style='text-align:right'><textarea rows='5' cols='60' readonly>".$row['post']."</textarea></h4><br>";
	}
	?>
	</form>
<script type="text/javascript">
	function myfun(x)
	{
	
		alert(x);
	}
</script>
</body>
	</html>
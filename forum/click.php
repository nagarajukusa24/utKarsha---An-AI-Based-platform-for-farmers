<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","store");
	$post=$_POST['post'];
	$fid=$_SESSION['id'];
	echo $fid;
	echo $post;
	$sql="insert into forum(post_id,id,post,likes) values(now(),'$fid','$post','0')";
	mysqli_query($conn,$sql);
	header('location:forumin.php');
	?>

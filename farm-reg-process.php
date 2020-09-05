<?php
$con = mysqli_connect('localhost','root','','student') or die("could not connect");
if(isset($_POST['save'])){
	// if(getimagesize($FILES['image']['tmp_name'])==FALSE)
	// {
	// 	echo "check file...";
	
		move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
			$f="uploads/". $_FILES['image']['name'];
	
	$fname=$_POST['fname'];
	$surname=$_POST['surname'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$checkbox=$_POST['crops'];
	$employ=$_POST['employ'];
	$str1="";
	for($i=0;$i<$checkbox;$i++)
	{
		$str1 = $str1 . " ";
	}
	//$sql1="INSERT INTO register(Image,Fname,Surname,Gender,Qualification,Contact,EmploymentStatus,Address,Crops) VALUES('$f','$fname','$surname','$gender','$qualification','$contact',$employ','$address','$str1')";
	
	echo "$qualification";
	$query=mysqli_query($con,"insert into register values('$f','$fname','$surname','$gender','$qualification','$contact','$employ','$address','$str1')");
	
	if($query){
		echo "insertedd";
	}else{
		echo "not inserted"	;
	}
}
?>
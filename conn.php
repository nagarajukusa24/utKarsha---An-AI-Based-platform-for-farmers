<?php
$servername='localhost';
$dbname='student';
$username='root';
$password='';
$sql = mysqli_connect($servername, $username, $password, $dbname);
if($sql){
	echo "conn success";
}else{
	echo "check conn";
}
?>
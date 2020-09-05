<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'try';
$conn = mysqli_connect($host, $username, $password, $dbname);
if($conn)
{
	echo "conn estab";
}

$id=$_POST['fid'];
echo "$id";
$ins = "insert into farm(id) values('$id')";
$res = mysqli_query($conn,$ins);
?>
<?php session_start();
 require("header.php");
require("checkUser.php")?>


<?php
$stid = $_POST['stid'];
$ta = $_POST['ta'];
$hd=$_POST['head'];
$uid = $_SESSION["uid"];

$sql="INSERT INTO question( `heading`,`question_detail`, `user_id`, `subtopic_id`,`views`) VALUES ( '$hd','$ta', $uid, $stid,0)	";
$result=ExecuteQuery($sql);

if ($result == 1)
	header ("location:questions.php?id=$stid");
else
	echo "$stid $ta $hd $stid";
?>
<?php require("footer.php")?>
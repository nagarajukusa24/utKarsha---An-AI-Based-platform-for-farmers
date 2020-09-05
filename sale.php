<?php
    require 'connection.php';
    session_start();
    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$_FILES["photo"]["name"]))
       {
        echo "uploaded";
       }
       else echo "not uploaded";
       $target="photo/".$_FILES["photo"]["name"];
   $crop= mysqli_real_escape_string($con,$_POST['crop']);
    $des= mysqli_real_escape_string($con,$_POST['des']);
    $price=mysqli_real_escape_string($con,$_POST['price']);
    $pid = $_POST['cropid'];
    $quan=$_POST['qun'];
    $unit=$_POST['u1'];
    $id = $_SESSION['id'];
    $code=rand(100,10000);
    
    
        $user_registration_query="insert into fsale(id,photo,crop,des,price,quan,unit,product_id,code) values ('$id','$target','$crop','$des','$price','$quan','$unit',$pid,$code)";


        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        header('location:products.php');

    
?>
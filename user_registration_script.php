<?php
    require 'connection.php';
    session_start();
    $id= mysqli_real_escape_string($con,$_POST['fid']);
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $contact=$_POST['contact'];
    
    $village=mysqli_real_escape_string($con,$_POST['village']);
    $mandal=mysqli_real_escape_string($con,$_POST['mandal']);
    $district=mysqli_real_escape_string($con,$_POST['district']);
    $photo=mysqli_real_escape_string($con,$_POST['photo']);
    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$_FILES["photo"]["name"]))
       {
        echo "uploaded";
       }
       else echo "not uploaded";
       $target="photo/".$_FILES["photo"]["name"];
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        if($_POST['r1']=="r1"){

        $user_registration_query="insert into Agents(id,name,email,password,contact,village,mandal,district,photo) values ('$id','$name','$email','$password','$contact','$village','$mandal','$district','$target')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "<script laguage='javascript'>";
        echo"alert('You are successfully registered');location.href='login.php'";
        echo"</script>";


        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        //$_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
    else {
        
    	$user_registration_query="insert into users(id,name,email,password,contact,village,mandal,district,photo) values ('$id','$name','$email','$password','$contact','$village','$mandal','$district','$photo')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
         echo "<script laguage='javascript'>";
        echo"alert('You are successfully registered');location.href='login.php'";
        echo"</script>";
        echo "$id";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        //$_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
}


    
?>
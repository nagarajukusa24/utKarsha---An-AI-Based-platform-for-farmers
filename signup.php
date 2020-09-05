<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
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
        <link rel="stylesheet" href="css/custom.css" type="text/css">
        <script type="text/javascript">
            function check(){
                if(document.getElementById('r2').checked==true)
                {
                    x=document.getElementById('fid').value
                   y = x.replace('FA','AG')
                   document.getElementById('fid').value=y
                
                }
                else
                {
                    x=document.getElementById('fid').value
                   y = x.replace('AG','FA')
                   document.getElementById('fid').value=y
                }

            }

        </script>
        
    </head>
    
    
        <body background="b2.gif">
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php" enctype="multipart/form-data">
                        	
                            <b>Select</b>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="r1" id= "r1"value="r2" checked onchange="check()" >  Farmer
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="radio" name="r1" id="r2" value="r1" onchange="check()" >  Agent

                            <div class="form-group">
                                <br>
                                <input type="text" class="form-control" name="fid" id='fid' value="<?php echo "FA" . rand(1000,100000)?>" readonly>
                            </div>          
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="village" placeholder="Village" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mandal" placeholder="Mandal" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="district" placeholder="District" required="true">
                            </div>
                            <div class="form-group">
                                  <input type="text" class="form-control" name="photo" placeholder="  Photo Upload" required="true">
                              <div id="f1"><input type="file" name="photo" id="fileToUpload" placeholder="Photo Upload" required="true"></div>
                                    
                                </div>   
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Jai Kisan</a>  All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>

        </div>
    </body>
</html>

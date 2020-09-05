<?php
    require 'connection.php';
    session_start();
   
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
                        <h1><b>Crop-Sale</b></h1>
                        <form method="post" action="sale.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Crop-Photo</label> 
                              <input type="file" name="photo" id="photo" placeholder="Photo Upload" required="true"></div> 
                               
                            <div class="form-group">
                                <label>Crop-Name</label> 
                                <input type="text" class="form-control" name="crop" placeholder="Crop-Name" required="true">
                            </div>
                             <div class="form-group">
                                <label>Crop-ID</label> 
                                <input type="text" class="form-control" name="cropid" placeholder="Crop-ID" required="true" value="<?php echo rand(1000,100000)?>" readonly>
                            </div>
                            <label>Description</label> 
                            <div><textarea cols="40" rows="5" placeholder="Description" name="des"></textarea></div>
                            
                            <div class="form-group">
                                <label>Price</label> 
                                <input type="tel" class="form-control" name="price" placeholder="Price" required="true">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label> 
                                <input type="text" class="form-control" name="qun" placeholder="Quantity" required="true">
                            </div>
                            <div class="form-group">
                                <label>Units</label> 
                                <select name="u1">
                                   <option value="grams" >GRAMS</option>
                                  <option value="kg" >KG</option>
                                  <option value="tones">TONES</option>
                                </select>
                            </div>
                            
                                    
                                   
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Upload">
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

<nav class="navbar navbar-inverse navbar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <link rel="shortcut icon" href="img/logo.png" />
                       <a href="index.php" class="navbar-brand">Jai Kisan
                       </a></div>
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                          <li> <a href="index.php"><span class="glyphicon glyphicon-home"> Home</a></span></a></li>
                          <li><a href=""><span class="glyphicon glyphicon-globe"></span> Weather Forcatsing</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-leaf"></span> Disease Prediction</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-map-marker"></span>Location Tracking </a></li>
                           <li><a href=""><span class="glyphicon glyphicon-grain"></span> Soil Testing </a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-log-out"></span>Contact </a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                           <li>
                           <!-- <a><span id="all" class="glyphicon glyphicon-user"></span></a>
                            <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
            
  
            <ul class="navbar-nav ml-auto">
               
               
              
               <li class="nav-item dropdown">
                <br><br><br><br><br><br><br><br>
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-sign-in-alt"></i> Log In
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <div class="dropdown-divider"></div>
                     
                     <div class="dropdown-divider"></div>
                     <a href="/hub/default/user/request_reset_password?_next=%2Fhub%2Fnotice%2Findex" class="dropdown-item">
                     <i class="fas fa-key mr-2"></i> Forgot Password?
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="/hub/default/user/retrieve_username?_next=%2Fhub%2Fnotice%2Findex" class="dropdown-item">
                     <i class="fas fa-user mr-2"></i> Forgot Username?
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="/hub/default/user/login?_next=%2Fhub%2Fnotice%2Findex" class="dropdown-item">
                     <i class="fas fa-sign-in-alt"></i> Log In
                     </a>
                  </div>
               </li>
                  
            </ul>
          </nav>-->
                           </li>
 
                           <?php
                           }else{
                            ?>
                           <li> <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-globe"></span> Weather Forcatsing</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-leaf"></span> Disease Prediction</a></li>
                           <li><a href=""><span class="glyphicon glyphicon-map-marker"></span>Location Tracking </a></li>
                           <li><a href=""><span class="glyphicon glyphicon-grain"></span> Soil Testing </a></li>
                           
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           
                           <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Contact </a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>
</html>
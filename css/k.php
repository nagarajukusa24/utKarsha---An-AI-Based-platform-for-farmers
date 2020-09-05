<!DOCTYPE html>
<html lang="en">
<head>
  <title>OnlineQuiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.pixabay.com/photo/2017/03/18/09/01/question-mark-2153514__340.jpg" rel="icon" type="image/ico">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}
#avtar {
  padding-right: 10px;
  padding-left: 10px;
}
</style>
</head>
<body background="https://wallpapercave.com/wp/wp2478973.png">
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"></a>
    <img src="https://oakspro.com/img/bg-img/oakspro-logo.png" alt="Logo" style="width:40px;">
    <center><span class="navbar-text text-white float-center"><h1>Welcome to RGUKT-CSE</h1></span></center>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
                    &nbsp;&nbsp;
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        </ul>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <ul class="navbar-nav"><li class="nav-item">
               <a href="https://kavyathirumala.000webhostapp.com/myfirstproject/User/settings.php?sm=<?php echo $sm; ?>"><font color="white"><i class="fa fa-user fa-3x" aria-hidden="true"></i></font>
                 </a> </li></ul>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <ul class="navbar-nav"><li class="nav-item">
               <a href="https://kavyathirumala.000webhostapp.com/myfirstproject/User/logout.php"><font color="red"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></font>
    </a> </li></ul>
  </nav>
  <div class="container"><br>
            <div class="row">
       
                 <?php
             require_once "connection.php";
             $query4="select count(*) from createquiz";
             $query5=mysqli_query($con,$query4);
             $query6=mysqli_fetch_array($query5);
            $i=1;
            $num=$query6['0'];
            $cd=date("Y-m-d");
             date_default_timezone_set('Asia/Kolkata');
            $ct =  date('h:i A',time()) ;
            while($i<=$num)
            { 
            ?>
               
               <?php $query="select * from createquiz where qid='$i' ";
             $query1=mysqli_query($con,$query);
             $query2=mysqli_fetch_array($query1);
            $image=$query2['0'];
             $qid=$query2['1'];
             $quizname=$query2['2'];
            $date1=$query2['6'];
              $fromtime=$query2['4'];
              $totime=$query2['5'];
              $i++;
            ?>
            
           <div class='col-md-4'> <?php echo "<form method='GET' action='./takequiz.php' >"; ?><div class='card' style='width:300px; height:400px; background-color:rgba(0,0,0,0);'><h2><i><?php echo $quizname;?></i></h2><br><?php echo "<img src=".$image." style='width:300px; height:200px;'>"; ?>Date:<?php echo $date1; ?><br>Fromtime:<?php echo $fromtime; ?><br>Totime:<?php echo $totime; 
          if($cd==$date1){ 
          if($fromtime<=$ct && $totime>=$ct){?>
          <input type='button' class='btn btn-success' name='sm' onclick="change()" id='mine' value='Takequiz'>
            <script language="javascript">
            function change(){
            location.href="https://kavyathirumala.000webhostapp.com/myfirstproject/User/Home/takequiz.php?sm=<?php echo $sm; ?>&n=<?php echo $qid; ?>&k=1"
            }</script>
            <?php } else if($totime<=$ct) { ?>
            <input type='button' class='btn btn-success' name='sm' id='mine' value='Registrations Closed'>
            <?php } else { ?>
            <input type='button' class='btn btn-success' name='sm' id='mine' value='Takequiz' disabled>
            <?php } ?>
            <?php } else if($cd<$date1) {?>
           <input type='button' class='btn btn-success' name='sm' id='mine' value='Pending'>
            <?php } else { ?>
            <input type='button' class='btn btn-success' name='sm' id='mine' value='Expired'>
            <?php } ?>
            <?php echo "</form>"; ?><br><br></div><br></div>
            <?php } ?></div><br></div>
            </body>
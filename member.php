<?php
   include('session.php');
   $login_session=$_SESSION['login_user'];
   $abhi=$_SESSION['pfj'];


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Diet Planner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Diet planner,web app,onlinesam" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link rel="stylesheet" href="css/font-awesome.css"><!--fontawesome-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="//fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"><!--online fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online fonts-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"> </script>
  <script  src="my_script.js" type="text/javascript"></script>
    </head>

    <body>
      <!--NAV BAR -->
          <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Diet Planner</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="w3ls-main">
        <div class="wthree-heading">
            <h1>Diet Planner</h1>
        <span style="align:center"
            <div class="wthree-container">
                <div class="wthree-form">
                    <div class="agileits-2">
                        <div>
                            <H3 style="color:#fff"> Hi! Your diet plan is here  </H3>
                            <h4 style="color: #fff ; text-align: center;">
                            <?php
                            $abhi=$_SESSION['pfj'];
                            echo $abhi;
                            $sql="SELECT * FROM diesease WHERE Diesease_name='$abhi'";
                            $query=mysqli_query($conn,$sql);
                           $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
                           
                            echo $row['Diet']; 
                            
                           ?>
                           </h4>
                        </div>
                        <br> <br>
                     <h2>GET WELL SOON</h2>
                     <a href="index.php">
                        <button class="btn btn-primary pull-center btn-lg">Home</button>
                    </a>
                      <a href="logout.php">
                        <button class="btn btn-primary pull-right btn-lg">logout</button>
                    </a>
                    </div>
               
                    
                    
                </div>
            </div>
    </div>

        <div class="agileits-footer">
            <p>&copy; Diet Planner. All Rights Reserve</p>
        </div>

        <script type="text/javascript" src="cordova.js"></script>

    </body>
</html>

<?php
        include_once('db.php');
 
        $Username = $_POST['Email'];
        $pass= $_POST['Password'];
        $Disease=$_POST['disease'];
 
     $sql="INSERT INTO login VALUES('$Username','$pass','$Disease')";
     if(mysqli_query($conn,$sql))
          echo "Sign up Successful";
      else
          echo "Ooops! You can't make it";

      mysqli_close($conn);
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
      <a class="navbar-brand" href="index.php">Diet Planner</a>
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
    </div>
      <div class="wthree-container">
        <div class="wthree-form">
          <div class="agileits-2">
         <div class="col-lg-12" style="text-align:center">
                <a href="index.php">
                        <button class="btn btn-primary btn-lg">Back</button>
                    </a>
                    </div> <br> <br>
            <h2>Sign Up Successful</h2>
          </div>

          <form action="#" method="post">

          </form>
      </div>
      </div>
  </div>
    <div class="agileits-footer">
      <p>&copy; Diet Planner. All Rights Reserve</p>
    </div>

        <script type="text/javascript" src="cordova.js"></script>



    </body>
</html>

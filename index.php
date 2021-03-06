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
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
  </script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=126341764800967';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
            <?php
             session_start();
            $error = "";
            if(isset($_SESSION["error"])){
               $error = $_SESSION["error"];
            session_destroy();
  }
?>
			   <div class="col-lg-12" style="text-align:center"> 
                <a href="signup.php">
                        <button class="btn btn-primary btn-lg">Sign up</button>
                    </a>
                    </div> <br> <br> <br>
                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
                  
                  <h4 style="color: #fff"><?php  echo $error; ?></h4>
      
						<h2>Login</h2>

					<form action="login.php" method="POST">

						<div class="w3-user">
							<span><i class="fa fa-user-o" aria-hidden="true"></i></span>
							<input type="text" name="Email" placeholder="Username" required="">
						</div>
						<div class="clear"></div>
						<div class="w3-psw">
							<span><i class="fa fa-key" aria-hidden="true"></i></span>
							<input type="password" name="Password" placeholder="Password" required="">
						</div>
            <div class="clear"></div>
						<div class="w3-psw">
							<span><i class="fa fa-key" aria-hidden="true"></i></span>
							<input type="text" name="Disease" placeholder="Disease" required="">
						</div>
						<div class="clear"></div>
						<div class="w3l">
							<span><a href="#">forgot password ?</a></span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-12" style="text-align:center"> 
             <button id="login" class="btn btn-primary btn-lg" value="Login">Login</button>
                    
                    </div>

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

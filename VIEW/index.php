<?php
        session_start();
        session_destroy();    
?>
<!DOCTYPE html>
<html lang="en">
    
    
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Schedule Shark</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet"> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>        
	</head>
    
    
    
    
<body class="background">
    
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    
    <div class="modal-dialog">
    <br><br>
        
    <br><br>
    <div class="modal-content">
      
      
      <div class="modal-header">
          <h1 class="text-center">Schedule Shark</h1>
      </div>
      
      <br><br>
      <div class="modal-body">
          
          <form class="form col-md-12 center-block" action="login.php" method="post">
            <div class="form-group">
              <input type="email" class="form-control input-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <br>
              <button class="btn btn-info btn-lg btn-block" type="submit" value="Send">Sign-In</button>
                <br>
            </div>
          </form>
                <span id="registerButton">
                    <form action="register.php">
                        <button class="btn btn-info btn-lg btn-block">Register</button>
                    </form>
                </span>
      </div>
        

        
    </div>
  </div>
</div>
</body>
</html>
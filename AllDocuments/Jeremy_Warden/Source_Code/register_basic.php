<!DOCTYPE html>
<html lang="en">
    
    
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		  <title>Schedule Shark</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
    </head>
    
<body class="background">

    
    
<div class="container">
    
    <?php        
            include 'registrationFunctions.php';
            session_start();
            Secure_Page();
    ?>
<div class="row">
    
    
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
    <form role="form" action="register_contact.php" id="center" method="post">
			
            <div id="center">
                <b></b><h1>Step 2 of 4</h1>
                <h4>Please give us some information about yourself</h4></b>
			</div>
                
            <hr class="colorgraph">
        
            <br><br>
            <h6 id="Formlabel">Name</h6>
            <hr class="colorgraph">

        
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <h6 id="label">First Name:</h6>
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <h6 id="label">Last Name:</h6>
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
        
    
            <br><br>
    
            <h6 id="Formlabel">Birthday</h6>
            <hr class="colorgraph">
            <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="date" name="birthday" id="birthday" class="form-control input-lg" placeholder="" tabindex="2">
					</div>
				</div>
			</div>    
    
    
            <br><br>
            <h6 id="Formlabel">Password</h6>
            <hr class="colorgraph">
        
        
        <div class="row">
            <br>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
    
			<hr class="colorgraph">
    <br><br><br>
			<div class="row">
				<div class="col-xs-12 col-md-20"><input type="submit" value="Next" class="btn btn-default btn-block btn-lg" tabindex="7"></div>
			</div>
     <br><br><br>
		</form>
	</div>
</div>
    
    
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
    
    
    
    
    
</body>
    
    
    
    
</html>
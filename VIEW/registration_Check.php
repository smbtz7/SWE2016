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
    
<div class="row">
    
    <div id="center">
                <b></b><h2>Please confirm all of your information</h2>
    </div>
    
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
    <form role="form" action="registration_Employee.php" method="post">
                
            <hr class="colorgraph">
            <?php
                include 'registrationFunctions.php';
                session_start();
                #First Test For variables being passed from register_basic Page
                echo "You have Successfully given us data from the previous page<hr>";
                echo"Availability <br>";
                echo "<hr class=" . "colorgraph" . ">";
                CheckAvailability();
                passingVariablesTest3();    
            ?>
        
        
        
        
        
        </-- WE NEED TO CREATE THE MASTER FORM FOR THE USER TO TRIPLE CHECK ALL OF THEIR INFORMATION BEFORE WE INSERT IT INTO THE DATABASE --/>
        
        
        
            
        <br><br><br>
            <hr class="colorgraph">
    <br><br><br>
			<div class="row">
				<div class="col-xs-12 col-md-20"><input type="submit" value="Confirm" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
			</div>
     <br>
    
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
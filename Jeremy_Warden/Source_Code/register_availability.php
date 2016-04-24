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
        #First Test For variables being passed from register_basic Page
        echo "You have Successfully given us data from the previous page<hr>";
        passingVariablesTest2();
        echo "<hr>";
    ?>
    
<div class="row">
    
    
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
    <form role="form" action="registration_Check.php" id="center" method="post">
			
            <div id="center">
                <b></b><h1>Step 4 of 4</h1>
                <h4>Please provide us with your availability.</h4></b>
			</div>
                
            <hr class="colorgraph">
        
            <br><br>
            <h6 id="Formlabel">Availability</h6>
            <hr class="colorgraph">

        
        <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <h6 id="label">Are you available Monday? (Earliest in Time)</h6>
					<div class="form-group">
                        <select name="Monday" id="Monday" class="form-control input-lg" tabindex="6">
                            <option value="N/A">Not Available</option>
                            <option value="3:00:00PM">3:00 PM</option>
                            <option value="4:00:00PM">4:00 PM</option>
                            <option value="5:00:00PM">5:00 PM</option>
                        </select>				
				    </div>
                </div>
        </div>
    
        <br><br><br>
    
       <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <h6 id="label">Are you available Tuesday? (Earliest in Time)</h6>
					<div class="form-group">
                        <select name="Tuesday" id="Tuesday" class="form-control input-lg" tabindex="6">
                            <option value="N/A">Not Available</option>
                            <option value="3:00:00PM">3:00 PM</option>
                            <option value="4:00:00PM">4:00 PM</option>
                            <option value="5:00:00PM">5:00 PM</option>
                        </select>				
				    </div>
                </div>
        </div>
    
        <br><br><br>
    
        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h6 id="label">Are you available Wednesday? (Earliest in Time)</h6>
                        <div class="form-group">
                            <select name="Wednesday" id="Wednesday" class="form-control input-lg" tabindex="6">
                                <option value="N/A">Not Available</option>
                                <option value="3:00:00PM">3:00 PM</option>
                                <option value="4:00:00PM">4:00 PM</option>
                                <option value="5:00:00PM">5:00 PM</option>
                            </select>				
                        </div>
                    </div>
            </div>
    
        <br><br><br>
    
        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h6 id="label">Are you available Thursday? (Earliest in Time)</h6>
                        <div class="form-group">
                            <select name="Thursday" id="Thursday" class="form-control input-lg" tabindex="6">
                                <option value="N/A">Not Available</option>
                                <option value="3:00:00PM">3:00 PM</option>
                                <option value="4:00:00PM">4:00 PM</option>
                                <option value="5:00:00PM">5:00 PM</option>
                            </select>				
                        </div>
                    </div>
        </div>
    
        <br><br><br>
    
        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h6 id="label">Are you available Friday? (Earliest in Time)</h6>
                        <div class="form-group">
                            <select name="Friday" id="Friday" class="form-control input-lg" tabindex="6">
                                <option value="N/A">Not Available</option>
                                <option value="3:00:00PM">3:00 PM</option>
                                <option value="4:00:00PM">4:00 PM</option>
                                <option value="5:00:00PM">5:00 PM</option>
                            </select>				
                        </div>
                    </div>
        </div>
    
        <br><br><br>
    
        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h6 id="label">Are you available Saturday? (Earliest in Time)</h6>
                        <div class="form-group">
                            <select name="Saturday" id="Saturday" class="form-control input-lg" tabindex="6">
                                <option value="N/A">Not Available</option>
                                <option value="3:00:00PM">3:00 PM</option>
                                <option value="4:00:00PM">4:00 PM</option>
                                <option value="5:00:00PM">5:00 PM</option>
                            </select>				
                        </div>
                    </div>
        </div>
    
        <br><br><br>
    
        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h6 id="label">Are you available Sunday? (Earliest in Time)</h6>
                        <div class="form-group">
                            <select name="Sunday" id="Sunday" class="form-control input-lg" tabindex="6">
                                <option value="N/A">Not Available</option>
                                <option value="3:00:00PM">3:00 PM</option>
                                <option value="4:00:00PM">4:00 PM</option>
                                <option value="5:00:00PM">5:00 PM</option>
                            </select>				
                        </div>
                    </div>
        </div>

        <br><br><br>
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

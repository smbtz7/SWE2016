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
        passingVariablesTest();
        echo "<hr>";
    ?>
    
<div class="row">
    
    
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
    <form role="form" action="register_availability.php" id="center" method="post">
			
            <div id="center">
                <b></b><h1>Step 3 of 4</h1>
                <h4>Please provide us, and your co-workers some contact information.</h4></b>
			</div>
                
            <hr class="colorgraph">
        
            <br><br>
            <h6 id="Formlabel">Email</h6>
            <hr class="colorgraph">

        
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <h6 id="label">Email:</h6>
					<div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Adress" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <h6 id="label">Confirm Email:</h6>
					<div class="form-group">
						<input type="email" name="email2" id="email2" class="form-control input-lg" placeholder="Confirm Email" tabindex="2">
					</div>
				</div>
			</div>
            
            <br><br>
    
            <h6 id="Formlabel">Phone Number</h6>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h6 id="label">Cell Phone Number:</h6>
					<div class="form-group">
						<input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="(XXX)-XXX-XXXX" tabindex="2">
					</div>
				</div>
			</div>    
    
    
            <br><br>
            <h6 id="Formlabel">State and Zip code</h6>
            <hr class="colorgraph">
        
        
        <div class="row">
            <br>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="zipcode" id="zipcode" class="form-control input-lg" placeholder="ZipCode" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <select name="state" id="state" class="form-control input-lg" tabindex="6">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>				
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

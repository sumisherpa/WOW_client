<?php 
	session_start();
	require_once('./dbconfig/2.php');


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form </title>

	<meta charset="utf-8">
	<title>WashonWheelsnyc: Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="wow.css">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro|Poiret+One|Raleway|Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="images/logo2.png"/>
	
	

	<?php 
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btn btn-primary'])){
  	$fname = trim($_POST['fname']);
	$lname  = trim($_POST['lname']);
	$address1   =trim($_POST['address1']);
	$address2   =trim($_POST['address2']);
	$city      =  trim($_POST['city']);
	$state     = trim($_POST['state']);
	$zipcode       = trim ($_POST['zipcode']);
	$country       = trim ($_POST['country']);
	$fullName      = trim ($_POST['fullName']);
	$creditNum       = trim($_POST['creditNum']);
	$cvv      = trim($_POST['cvv']);
	$phone    = trim($_POST['phone']);
	$email     = trim($_POST['email']);
	$password  = trim($_POST['password']);
	$cpassword = trim($_POST['cpassword']);
	
	$isValid = true;

				 // Check fields are empty or not
		   if($fname == '' || $lname == '' || $addres1 == '' || $addres2 == '' || $city == '' || $state == '' || $zipcode == '' || $country == '' || $fullName == '' || $creditNum == '' || $cvv == '' || $phone == '' || $email == '' || $password == '' || $cpassword == ''){
			 $isValid = false;
			 $error_message = "Please fill all fields.";
		   }

		   // Check if confirm password matching or not
		   if($isValid && ($password != $cpassword) ){
			 $isValid = false;
			 $error_message = "Confirm password not matching";
		   }

		   // Check if Email-ID is valid or not
		   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 $isValid = false;
			 $error_message = "Invalid Email-ID.";
		   }


			if($isValid){

			// Check if Email-ID already exists
			$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
			if($result->num_rows > 0){
				$isValid = false;
				$error_message = "Email-ID is already existed.";
			}
			
		}

		// Insert records
		   if($isValid){
			 $insertSQL = "INSERT INTO users(fname,lname,address1, address2, city, state,zipcode, country, fullName, creditNum, cvv, phone, email, password ) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			 $stmt = $con->prepare($insertSQL);
			 $stmt->bind_param("ssss",$fname,$lname,$address1, $address2, $city, $state, $zipcode, $country, $fullName, $creditNum, $cvv, $phone, $email, $password);
			 $stmt->execute();
			 $stmt->close();

			$success_message = "Account created successfully.";
		}
	}
	?>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<h2></h2>
			</div>

			<div class='col-md-6' >
					
				<form method='post' action=''>

					<h1>Sign Up</h1>
					<?php 
					// Display Error message
					if(!empty($error_message)){
					?>
						<div class="alert alert-danger">
						  	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
						</div>

					<?php
					}
					?>
				
					<div class="form-group">
					    <label for="fname">First Name:</label>
					    <input type="text" class="form-control" name="fname" id="fname" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="lname">Last Name:</label>
					    <input type="text" class="form-control" name="lname" id="lname" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="address1">Address 1 :</label>
					    <input type="text" class="form-control" name="address1" id="address1" required="required" 								maxlength="80">
					</div>
					<div class="form-group">
					    <label for="address2">Address 2 :</label>
					    <input type="text" class="form-control" name="address2" id="address2" required="required" 								maxlength="80">
					</div>
						<div class="form-group">
					    <label for="city">City :</label>
					    <input type="text" class="form-control" name="city" id="city" required="required" 									maxlength="80">
					</div>
					<div class="form-group">
					    <label for="state">State :</label>
					    <input type="text" class="form-control" name="state" id="state" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="zipcode">Zip Code :</label>
					    <input type="text" class="form-control" name="zipcode" id="zipcode" required="required" 						maxlength="80">
					</div>
					<div class="form-group">
					    <label for="country">Country :</label>
					    <input type="text" class="form-control" name="country" id="country" required="required" 						maxlength="80">
					</div>
					<div class="form-group">
					    <label for="fullName">Name on Card :</label>
					    <input type="text" class="form-control" name="fullName" id="fullName" required="required" 									maxlength="80">
					</div>
					<div class="form-group">
					    <label for="creditNum">Credit Card Number :</label>
					    <input type="text" class="form-control" name="creditNum" id="creditNum" required="required" 									maxlength="80">
					</div>
					<div class="form-group">
					    <label for="cvv">Security Number :</label>
					    <input type="text" class="form-control" name="cvv" id="cvv" required="required" 									maxlength="80">
					</div>
					<div class="form-group">
					    <label for="phone">Phone Number :</label>
					    <input type="text" class="form-control" name="phone" id="phone" required="required" 									maxlength="80">
					</div>



					<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" name="password" id="password" required="required" 					maxlength="80">
					</div>
					<div class="form-group">
					    <label for="cpassword">Confirm Password:</label>
					    <input type="password" class="form-control" name="cpassword" id="cpassword" required="required" 					maxlength="80">
					</div>
					
					<button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
				</form>
			</div>
			
			
		</div>
	</div>
</body>
</html>

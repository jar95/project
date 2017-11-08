<?php

	require "user.dbase.php";
	
	$userLoginEmail = $_GET["loginemail"];
	$userLoginPassword = $_GET["loginpassword"];

	$userChecking =  new Connect;
	$sql = "SELECT * FROM accounts WHERE email='$userLoginEmail' AND password='$userLoginPassword'";
	$resultOfChecking = $userChecking->runQuery($sql);
	
	$flag=null;
	if (count($resultOfChecking)>0) {
		foreach ($resultOfChecking as $row) {
			$userEmail = $row["email"];
			$userFname = $row["fname"];
			$userLname = $row["lname"];
			$flag = '0';
		}

	} else {
		$sql = "SELECT * FROM accounts WHERE email='$userLoginEmail'";
		$result1 = $userChecking->runQuery($sql);
		
		if (count($result1)<=0) {
			$flag='1';  // email is bad
		} else {
			$flag ='2'; // probable password malo
		}
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<lang="en">
		<title>SignUp Page</title>
 		<meta charset="utf-8"> 

  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	 
  		<link rel="stylesheet" href="librarySignIn.css">
	 </head>

	<body>
		<?php switch ($flag) { 
			case '0' : ?>
				<div class="container">
					<br><br>
					<h2> Personal Information </h2>
					<div class="list-group">
  						<a href="#" class="list-group-item">
    						<h4 class="list-group-item-heading">First Name</h4>
							<p class="text-primary"><strong><?php echo $userFname?></strong></p>
						</a>
  						<a href="#" class="list-group-item">
 				    	    <h4 class="list-group-item-heading">Last tName</h4>
  							<p class="text-primary"><strong><?php echo $userLname?></strong></p>
  						</a>
    					<a href="#" class="list-group-item">
 				    		<h4 class="list-group-item-heading">Email</h4>
  							<p class="text-primary" class="list-group-item-text"><strong><?php echo $userEmail?></strong></p>
  						</a>
						<a href="index.php" class="list-group-item active">
    						<h4 class="glyphicon glyphicon-hand-left" class="list-group-item-heading">  Back</h4>							
    					</a>
					</div> 
				</div>
				<?php break; ?>
			<?php case '1': ?>
				<div class="container">
					<br><br>
					<h2> Username Error !! </h2>
					<div class="list-group">
  						<a href="index.php" class="list-group-item active">
    						<p class="glyphicon glyphicon-hand-left" class="list-group-item-text">  Please, try again   or  log Up</p>
						</a>
					</div>
				</div>
				<?php break; ?>
			<?php case '2': ?>
				<div class="container">
					<br><br>
					<h2> Password Error !! </h2>
					<div class="list-group">
  						<a href="index.php" class="list-group-item active">
    						<h3 class="glyphicon glyphicon-hand-left" class="list-group-item-text">  Please, try again   or  log Up</h3>
						</a>
					</div>
				</div>
				<?php break; ?>
		<?php } ?>
	</body>
</html>


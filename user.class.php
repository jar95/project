<?php
	
	require 'user.dbase.php';
	$userLogUpEmail = $_GET["useremail"];

	$goChecking = new Connect;
	$mysql = "SELECT email FROM accounts WHERE email='$userLogUpEmail'";
    
    $resultOfChecking = $goChecking->runQuery($mysql);

?>


<!DOCTYPE html>
<html>
	<head>
			
    	<title>Login Page</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
   	</head>
  	<body>
  		<?php
  			if (count($resultOfChecking)>0) { ?>
  				<div class="alert alert-warning fade in">
  					<strong>email already created</strong>  Click here <a href="index.php" class="alert-link"> To return</a> 
  				</div>
  			<?php } else { 
  				header("Location:user.logup.php?$emailpassed=$resultOfChecking");
  		 } ?>
  	</body>
</html>

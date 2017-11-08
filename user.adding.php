<?php
	require "user.dbase.php";
	
	$userNewEmail = $_GET["email"];
	$userNewFname = $_GET["fname"];
	$userNewLname = $_GET["lname"];
	$userNewPhone = $_GET["phone"];
	$userNewBirthday = $_GET["birthday"];
	$userNewGender = $_GET["gender"];

	$goAdding = new Connect;
	$mysql = "INSERT INTO accounts (email,fname,lname,phone,birthday,gender,password)
				VALUES('$userNewEmail','$userNewFname','$userNewLname','$userNewPhone','$userNewBirthDay','$userNewGender','123456');";
	$resultAdding = $goAdding->runQuery($mysql);
	header("Location:index.php");
?>







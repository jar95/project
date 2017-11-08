
<?php

	require "user.dbase.php";
	$emailPredefined = $_GET["emailpassed"];

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!--  ******************************************************** Include boostrap Libraries ******************* -->
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
    <link rel="stylesheet" href="librarySignIn.css">                               
  </head>
  
  <body>
    
    <header>  
      <div class="container">
       <div id="logo">
          <h2>NJIT</h2>
          <h3><span class="remark">IS218</span> C o u r s e</h3>
        </div>
        <div id="signInHeading">
          <h2>Sign Up Page</h2>
        </div>
        <div class="buttonR">
         <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
        </div>
    </header>
  
    <div class="container">
        <br />
        <br />
       
        <form  action="user.adding.php" class="form-signin">
       
          Email:
          <input type="text" class="form-control" name="email" value="<?php echo $emailpredefined ?>"/><br>
          First Nmame:
          <input type="text" class="form-control" name="fname" required /><br>
          Last Name:
          <input type="text" class="form-control" name="lname" required/><br>
          Phone Number:
          <input type="text" class="form-control" name="phone" required /><br>
          BirthDay
          <input type="date" class="form-control" name="date" required /><br>
          Gender:
          <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
          <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
          <br />
          <br />
          <button type="submitt" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign In</button>
    
        </form>
    </div>      

 </body>
</html>

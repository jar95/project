

<!DOCTYPE html>
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
 	<header>  
   	 <div class="container">
       
       <div id="logo">
          <h2>NJIT</h2>
          <h3><span class="remark">IS218</span> C o u r s e</h3>
       </div>
       <nav>
         
          <ul>
            <li class="out"><a href="#" data-toggle="modal" data-target="#mySign"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
              
              <div id="mySign" class="modal fade" data-keyboard="false" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!--header-->
                    <div class="modal-header">                                                      <!--close the modal -->
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 style="color:black;" class="modal-title">Sign In</h3>
                    </div>
                    
                    <!--body form-->
                    <div class="modal-body">
                      <form action="user.login.php" role="form"> 
                        <div class="form-group">
                          <input type="email" name="loginemail" class="form-control" placeholder="email"> 
                        </div>
                        <div class="form-group">
                          <input type="password" name="loginpassword" class="form-control" placeholder="password"><br> 
                          <button class="btn btn-primary btn-block">submitt</button> 
                        </div>
                      </form>
                    </div>
                    
                   <!--submit section-->
                         
                  </div>
                </div>
              </div>
            
            <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Task</a></li>
          </ul>
       </nav>
    </div>
  </header>

  <section id="showcase">
    <div class="container">
      <h1>IS218 class -Sign Up page</h1>
      <p>A web page to create a new user to a sql database. To create a new account Go to Log up option and enter your new information </p>
    </div>
  </section>

  <section id="taskcase">
      <div class="container">
        <h3> New Users registration</h3>
        <form action="user.class.php">
          <input type="email" name="useremail" placeholder="email here">
          <button type="submit" class="button-1">log up</button>
        </form>
      </div>
  </section>

  <footer>
    <p>Assigment:Sign Up     /Web Design Page  Copyrigth &copy; .2017</p>
  </footer>
   
</body>
</html>

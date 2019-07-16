<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>user registration system</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style7.css">
	
	<style>
	  body {
	  background: #F8F8FF;
	  background: url("images/im.jpg") no-repeat ;
	  background-size:cover;

	}

	</style>

  </head>
  
  <body>
   <!-- <div class="container">
	  <div class="row">
	    <div class="col-lg-6">
		  <div class="left">
		    <br><br><br>
		    <h1>Become an Insider!</h1><br><br>
             <h2>Be the first to know about out awesome services.</h2>
		  </div>
		</div>
		
		<div class="col-lg-6">
		        <form action="register.php" method="post">
				<?php include('errors.php'); ?>
				
				<br><br><br><br><br><br><br><br><br><br><br>
				
				<div class="col-lg-12">
				<div class="col-lg-6">
				<div class="input_group">
				  <div class="label font-weight=lighter"><label>Username</label></div>
				  <input type="text" name="username">
				  <br>
				</div>
				</div>
				<div class="col-lg-6">
				<div class="input_group">
				  <div class="label font-weight=lighter"><label>Email</label></div>
				  <br>
				  <input type="text" name="email">
				  <br>
				</div>
				</div>
				</div>
				
				<div class="col-lg-12"><br></div>
				
				<div class="col-lg-12">
				<div class="col-lg-6">
				<div class="input_group">
				  <div class="label font-weight=lighter"><label>Password</label></div>
				  <input type="password" name="password_1">
				</div>
				</div>
				<div class="col-lg-6">
				<div class="input_group">
				  <div class="label font-weight=lighter"><label>Confirm Password</label></div>
				  <input type="password" name="password_2">
				</div>		
				
				</div>
				</div>
				
				<div class="col-lg-12"><br></div>
				<div class="col-lg-offset-1">
				<div class="input-group">
		        <button type="submit" name="register" class="btn">Register</button>
	            </div>
				</div>
				
               </form>
		</div>
	  </div>
	</div> -->
	
	<div class="login-form">
     
     
	 <form method="POST">
	   <div class="form-group">
       <input type="text" class="form-control" placeholder="Username " id="UserName" name="username" required>
       <i class="fa fa-user"></i>
	   
    </div>
	
	<div class="form-group">
       <input type="email" class="form-control" placeholder="email " id="email" name="email" required>
       <i class="fa fa-user"></i>
	   
    </div>
	
	<div class="form-group">
       <input type="password" class="form-control" placeholder="Password " id="password" name="password_1" required>
       <i class="fa fa-user"></i>
	   
    </div>
     
	 <div class="form-group">
       <input type="password" class="form-control" placeholder="Confirm Password" id="Passwod" name="password_2" required>
       <i class="fa fa-lock"></i>
	   
	   </div>
     
     <input type="submit" class="log-btn" value="Sign up" name="register">
     </form>
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="index.js"></script>
	
  </body>
</html>
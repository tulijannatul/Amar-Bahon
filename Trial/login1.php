<?php  
session_start();//session starts here  
  
?>  
  
  <!--
<html>  
<head>  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Login</title>  
</head>  

  
<body>  
  
  
                    <form  method="post" action="login.php">    
                                <input placeholder="Username" name="username" type="text" >  
                            
                            
                                <input placeholder="Password" name="password" type="password" value="">  
                          
  
                                <input type="submit" value="login" name="login" >   
                    </form>  
  
  
</body>  
  
</html> -->

<!--<html>
<head>
  <link href="style1.css" rel="stylesheet">
</head>
<div id="bg">
   
</div>

<div id="heading">
    <h2>Welcome! Please login..</h2>
</div>

<form action="login.php" method="POST">
    
  <label for=""></label>
  <input type="text" name="username"  placeholder="username" class="user">
    
  <label for=""></label>
  <input type="password" name="password"  placeholder="password" class="pass">
    
  <input type="submit" name="login" value="login" class="button">
    
</form>
</html> -->

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login page</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="style7.css">
 <style>
	  body {
	  background: #F8F8FF;
	  background: url("images/im.jpg") no-repeat ;
	  background-size:cover;
	}
	
	 a{
		 color: white;
		 text-decoration: none;
		 text-align:right-side;
	 }

</style>

</head>

<body>
  <div class="login-form">
     
     
	 <form method="POST">
	   <div class="form-group">
       <input type="text" class="form-control" placeholder="Username " id="UserName" name="username" required>
       <i class="fa fa-user"></i>
	   
    </div>
     
	 <div class="form-group">
       <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" required>
       <i class="fa fa-lock"></i>
	   
	   </div>
     
      
      <a class="link" href="#">Lost your password?</a>
     <input type="submit" class="log-btn" value="Log in" name="login">
     </form>
	 
	 <div class="sign"><p>Not a member yet?<a href="register.php"> Signup...</a></p></div>
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="index.js"></script>

</body>
</html>

  
<?php 
   
  
if(isset($_POST['login']))  
{  
    $user_name=$_POST['username'];  
    $user_pass=$_POST['password'];  
  
    $check_user="select * from user WHERE username='$user_name' AND password='$user_pass'";  
	$dbcon=mysqli_connect("localhost","root","","vehicle");  
  
    $run=mysqli_query($dbcon,$check_user); 
    
    
  
    if(mysqli_num_rows($run))  
    {  
        //echo "login is successful";
		//echo "<script>alert('login is successful!')</script>"; 
        echo "<script>window.open('show1.php','_self')</script>"; 
        		
  
        $_SESSION['username']=$user_name;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      //echo "<script>alert('username or password is incorrect!')</script>"; 
      echo "<script language=\"JavaScript\">\n";
		echo "alert('Username or Password was incorrect!');\n";
		echo "window.location='login.php'";
		echo "</script>";
    }  
}  
?>  
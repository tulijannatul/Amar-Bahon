<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>W3.CSS Login Modal</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="sign.php" method="POST">
        <div class="w3-section">

          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>

          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>

          <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" name="login" value="Login">

        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
            
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
        //echo "<script>window.open('show1.php','_self')</script>"; 
                
  
        $_SESSION['username']=$user_name;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      //echo "<script>alert('username or password is incorrect!')</script>"; 
      echo "<script language=\"JavaScript\">\n";
        echo "alert('Username or Password was incorrect!');\n";
        echo "window.location='sign.php'";
        echo "</script>";
    }  
}  
?>  
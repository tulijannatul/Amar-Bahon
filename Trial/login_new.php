<?php  
session_start();//session starts here  
  
?>  

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  <style type="text/css">
    body{
    margin:0;
    color:#6a6f8c;
    background:#c8c8c8;
    font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
    width:100%;
    margin:auto;
    max-width:525px;
    min-height:670px;
    position:relative;
    background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
    box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
    width:100%;
    height:100%;
    position:absolute;
    padding:90px 70px 50px 70px;
    background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
    top:0;
    left:0;
    right:0;
    bottom:0;
    position:absolute;
    -webkit-transform:rotateY(180deg);
            transform:rotateY(180deg);
    -webkit-backface-visibility:hidden;
            backface-visibility:hidden;
    -webkit-transition:all .4s linear;
    transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
    display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
    text-transform:uppercase;
}
.login-html .tab{
    font-size:22px;
    margin-right:15px;
    padding-bottom:5px;
    margin:0 15px 10px 0;
    display:inline-block;
    border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
    color:#fff;
    border-color:#1161ee;
}
.login-form{
    min-height:345px;
    position:relative;
    -webkit-perspective:1000px;
            perspective:1000px;
    -webkit-transform-style:preserve-3d;
            transform-style:preserve-3d;
}
.login-form .group{
    margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
    width:100%;
    color:#fff;
    display:block;
}
.login-form .group .input,
.login-form .group .button{
    border:none;
    padding:15px 20px;
    border-radius:25px;
    background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
    text-security:circle;
    -webkit-text-security:circle;
}
.login-form .group .label{
    color:#aaa;
    font-size:12px;
}
.login-form .group .button{
    background:#1161ee;
}
.login-form .group label .icon{
    width:15px;
    height:15px;
    border-radius:2px;
    position:relative;
    display:inline-block;
    background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
    content:'';
    width:10px;
    height:2px;
    background:#fff;
    position:absolute;
    -webkit-transition:all .2s ease-in-out 0s;
    transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
    left:3px;
    width:5px;
    bottom:6px;
    -webkit-transform:scale(0) rotate(0);
            transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
    top:6px;
    right:0;
    -webkit-transform:scale(0) rotate(0);
            transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
    color:#fff;
}
.login-form .group .check:checked + label .icon{
    background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
    -webkit-transform:scale(1) rotate(45deg);
            transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
    -webkit-transform:scale(1) rotate(-45deg);
            transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
    -webkit-transform:rotate(0);
            transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
    -webkit-transform:rotate(0);
            transform:rotate(0);
}

.hr{
    height:2px;
    margin:60px 0 50px 0;
    background:rgba(255,255,255,.2);
}
.foot-lnk{
    text-align:center;
}
  </style>
  
</head>

<body>
  <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
            <form method="POST" action="login_new.php">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input name="username" type="text" class="input" required>
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input name="password" type="password" class="input" data-type="password" required>
                </div>
                
                <div class="group">
                    <input type="submit" class="button" value="Sign In" name="login">
                </div>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-2">Not yet a Member?</a>
                </div>

                <br><br><br>

                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            <div class="sign-up-htm">
            <form method="POST" action="login_new.php">

                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input name="username" type="text" class="input" required>
                </div>

                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input name="email" type="email" class="input" required>
                </div>

                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input name="password_1" type="password" class="input" data-type="password" required>
                </div>

                <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input name="password_2" type="password" class="input" data-type="password" required>
                </div>
                
                <div class="group">
                    <input type="submit" class="button" value="Sign Up" name="register">
                </div>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</a>
                </div>
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
        echo "<script>window.open('show1.php','_self')</script>"; 
                
  
        $_SESSION['username']=$user_name;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      //echo "<script>alert('username or password is incorrect!')</script>"; 
      echo "<script language=\"JavaScript\">\n";
        echo "alert('Username or Password was incorrect!');\n";
        
        echo "</script>";
    }  
}  

?>

<?php

    $username="";
    $email="";
    $errors=array();
    
    $db = mysqli_connect('localhost','root','','vehicle');
    
    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);

        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
               
        if($password_1!=$password_2){
            array_push($errors,"passwords don't match");
        }
        
        if(count($errors)==0){
            $password = $password_1;
            $sql="insert into user(username,email,password)values('$username','$email','$password')";
            mysqli_query($db,$sql);
           
             echo "<script language=\"JavaScript\">\n";
                echo "alert('successfully registered!');\n";
                echo "window.location='login_new.php'";
                echo "</script>";
      
        }

        else 
        {
             echo "<script language=\"JavaScript\">\n";
        echo "alert('Passwords don't match!');\n";
        echo "window.location='login_new.php'";
        echo "</script>"; 

        }
    }
    
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:login_new.php');
    }
?>

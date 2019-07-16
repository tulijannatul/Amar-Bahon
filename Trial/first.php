<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
          * {
        margin: 0;
        padding: 0;
      }
      body {
        font-family: Calibri, sans-serif;
      }
      .background-wrap {
        position: fixed;
        z-index: -1000;
        width: 100%;
        height: 100%;
        overflow: hidden;
        top: 0;
        left: 0;
      }
      
     @import url(https://fonts.googleapis.com/css?family=Open+Sans);

.search {
  width: 100%;
  position: relative;
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid black;
  padding: 10px;
  height: 30px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: black;
}

.SearchBar {
    position:absolute;
    left:40%;
    top:40%;
    width:30%;
    size: 30px;
    background-color:white;
    color:grey;
}


.searchButton {
  position: absolute;  
  right: -40px;
  width: 40px;
  height: 38px;
  border: 1px solid black;
  background: green;
  text-align: center;
  color: white;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}
/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


  a {
      text-transform: uppercase;
      text-decoration: none;
      color: #151515;
      
      transition-delay: .3s;
      transition-duration: 0.36s;
      transition-property: all;
      transition-timing-function: line;
    }

nav a:hover { font-weight: 400; }

nav,
nav:hover { padding: 1em; }

nav a {  }

nav:hover a {

  }



nav {
  position: fixed;
  right: 0;
  top: 0;
  bottom: 0;
  display: block;
  height: auto;
  min-width: 40px;
  width: 70px;
  background-color: #ccc;
  
  transition-delay: 0s;
  transition-duration: 0.5s;
  transition-property: all;
  transition-timing-function: line;
}

nav:hover {
  position: fixed;
  right: 0;
  top: 0;
  bottom: 0;
  height: auto;
  width: 180px;
  background-color: #9ED29E;
}

nav a {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  opacity:0;
  margin-left: 1em;
  text-indent: -200px;
}

nav:hover a {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity:1;
  text-indent:0px;
  color: #EEFFE5;

}

nav button {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  opacity:0;
  margin-left: 1em;
}

nav:hover button {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity:1;
}


li {
  display: block;
  padding:0.2em;
  height:32px;
}

    #submit{
      padding:7px;
      border:1px solid #366;
      background: #607d8b;
      margin-left:-5px;
      color:white;
      cursor:pointer;
      height:40px;
    }
    #submit:hover{
      background: #333;
      transition: all 0.40s;
    }
    #back{
      color:white;
        opacity:0.5;
    }
    
    video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}


input[type=text], input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.extra {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 1; /* Sit on top */
    /*left: 100;*/
    top: 0;
    width: 50%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

  <video poster id="bgvid" playsinline autoplay muted loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="images/background.mp4" type="video/webm">
<source src="images/background.mp4" type="video/mp4">
</video>
    
    <nav>
    <h2 color="Black" font-family="Cursive"><i>Menu</i></h2>
    <h3>
  <ul>
    <li></li>
    <li><a href="show1.php">My vehicles</a></li>
    <li><a href="add_vehicle.php">Add vehicles</a></li>
    <li><a href="news.php">Stolen vehicles</a></li>
    <li><a href="sell_news.php">Buy vehicles</a></li>
    <li><a href="about.php">About us</a></li>

  </ul>

    <button onclick="document.getElementById('id01').style.display='block'" >Login</button>  
    <button onclick="document.getElementById('id02').style.display='block'" >Signup</button>  


  </h3>
  </nav>

     <div class="wrap">
   <div class="search">
   <form method="POST" action="search_result.php">
      <input type="text" class="searchTerm" placeholder="Search any vehicle" name="chassis_no">
      <input type="submit" class="searchButton" name="search" value="Go">
     
     </form>
   </div>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="first.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <input type="submit" class="extra" name="login" value="login">
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="first.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_1" required>

      <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="password_2" required>

        
      <input type="submit" class="extra" name="register" value="signup">

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



</script>

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
        echo "<script>alert('login is successful!')</script>"; 
        echo "<script>window.open('first.php','_self')</script>"; 
                
  
        $_SESSION['username']=$user_name;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      //echo "<script>alert('username or password is incorrect!')</script>"; 
      echo "<script language=\"JavaScript\">\n";
        echo "alert('Username or Password was incorrect!');\n";
        echo "window.location='first.php'";
        echo "</script>";
    }  
}  
?>  

<?php

      
  $db = mysqli_connect('localhost','root','','vehicle');

  $errors=array();
  
  if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

   if($password_1==$password_2){
      $password = $password_1;
      $sql="insert into user(username,email,password)values('$username','$email','$password')";
      mysqli_query($db,$sql);
      $_SESSION['username']=$username;
      $_SESSION['success']="You are now logged in";

       echo "<script language=\"JavaScript\">\n";
        echo "alert('You are sucessfully registered!');\n";
        echo "window.location='first.php'";
        echo "</script>";

    }

    else
    {
      echo "<script language=\"JavaScript\">\n";
        echo "alert('passwords don't match!');\n";
        echo "window.location='first.php'";
        echo "</script>";
    }
    
  }
?>

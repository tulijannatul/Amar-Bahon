<?php include('server.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>

    <style type="text/css">

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
  padding: 5px;
  height: 20px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 36px;
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

nav a { text-indent: -200px; }

nav:hover a {
  text-indent:0px;
  color: #EEFFE5;
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
}

nav:hover a {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity:1;
}

li {
  display: block;
  padding:0.2em;
  height:32px;
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



    #search{
      width:250px;
      height:40px;
      padding:7px;
      border:1px solid #366;

      z-index: 2;
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


input[type=text], input[type=password] {
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
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
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
    
  </head>
  
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
    <li> </li>

    <li><a href="register.php">Signup</a></li>
    <li><a href="show1.php">My vehicles</a></li>
    <li><a href="add_vehicle.php">Add vehicles</a></li>
    <li><a href="news.php">Stolen vehicles</a></li>
    <li><a href="sell_news.php">Buy vehicles</a></li>
    <li><a href="about.php">About us</a></li>

  </ul>

    <button onclick="document.getElementById('id01').style.display='block'" >Login</button>  

  </h3>
  </nav>
             
   <div class="wrap">
   <div class="search">
   <form method="POST" action="search_result.php">
      <input type="text" class="searchTerm" placeholder="Search any vehicle?" name="chassis_no">
      <input type="submit" class="searchButton" name="search" value="Go">
     
     </form>
   </div>
</div>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
      

      <form class="w3-container" action="try.php" method="POST">
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
    
    <script>
// Get the modal
var modal = document.getElementById('id01');

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
  if(isset($_POST['search'])){
      header('location: search_result.php');
  }
?>

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
        echo "window.location='try.php'";
        echo "</script>";
    }  
}  
?>  


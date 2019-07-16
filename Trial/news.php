<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login_new.php");
}  
  
?>  

<html>
 <head>
   <style>
       body{
      background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1HTT0nCogRm1jJMaPMcKmsHduHFKH4hU0PNrGeHWAjQsnBkX8Iw);
      background-repeat: no-repeat;
      //background-color: grey;
      //text-align: center;
       -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    #content{
      width: 60%;
      margin: 20px auto;
      border: 1px solid #cbcbcb;
      background: white;
      padding: 70px;
    }

    #start{
      top: 10;
      left: 10;
    }

    form{
      width: 50%;
      margin: 20px auto;
    }
    form div{
      margin-top: 5px;
    }
    #img_div{
      width: 80%;
      padding: 5px;
      left: 0px;
      margin: 15px auto;
      border: 1px solid #cbcbcb;
    }
    #img_div:after{
      content: "";
      display: block;
      clear: both;
    }
    img{
      float: left;
      margin: 5px;
      width: 300px;
      height: 190px;
    }

    a{
      text-decoration: none;
      color: black;
    }
    
      nav{
    position:fixed;
    width: 99%;
    height:50px;
    background-color: rgba(0,0,0,.5);
    z-index:99;
    text-align:right;
    }
    
    nav .left{
      text-align:left;
    }

   nav a{
    text-decoration:none;
    color:#fff;
    margin-left:30px;
    line-height:50px;
    position: right-side;
   }     


   
   #navbar {
    width:500px;
    display:block;
    margin-left:auto;
    margin-right:auto;
  }
         .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 75%;
    height: 50%;
    margin: 20px auto;

  }

    ul {
    list-style-type: none;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    padding: 2px 16px;
    //margin : 2px;
  }

   .card:hover a {
        text-decoration:none;
        color: #EEFFE5;
      }
    .container {
    padding: 2px 16px;
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
      //padding: 9px 20px;
      //margin: 8px 0;
      border: none;
      cursor: pointer;
      //width: 100%;
      height: 97%;
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

 </head>
  <body>
  
  <div></div>


  <div id="content">
    <?php
    $con = mysqli_connect("localhost","root","","vehicle") or die('Unable To connect');
    $name= $_SESSION['username'];
     $res=mysqli_query($con,"select * from gari where stolen_status=1 ");
    
    
    while($row=mysqli_fetch_array($res))
    {
      echo "<div class='card'>
      
            <ul>
            <li><img src={$row['image']} </li>

            <br><br>
           
       
           
            <li><strong> chassis number : {$row['chassis_no']} </li></strong>
       
            <li><strong>registration number : {$row['reg_no']}  </li></strong>    
        
      
      </div>";
    }
?>
  </div>


  
  <!--
  <div style="position: absolute; top: 0; right: 6; width: 500px; text-align:right;">
  <h2><a href="#"><?php echo $_SESSION['username']; ?></a></h2>
  <h2><a href="logout.php">Logout</a> </h2> 
  </div> -->
  
  </body>

</html>
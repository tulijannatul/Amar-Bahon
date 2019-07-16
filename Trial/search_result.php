
<html>
 <head>
   <style>
			 body{
			background-image: url('back4.jpg');
			background-repeat: no-repeat;
			//background-color: grey;
			//text-align: center;
			 -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}

		#content{
			//width: 60%;
			//margin: 20px auto;
			//border: 1px solid #cbcbcb;
			//background: white;
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
			margin: 15px auto;
			border: 1px solid #cbcbcb;
		}
		#img_div:after{
			content: "";
			display: block;
			clear: both;
		}
		img{
			float: center;
			//margin: 5px;
			width: 500px;
			height: 340px;
		}

		a{
			text-decoration: none;
			color: black;
		}
		
			nav{
		position:fixed;
		width: 99%;
		height:50px;
		background-color: #cbcbcb;
		z-index:99;
		text-align:center;
	  }
	  
	  nav .left{
		  text-align:left;
	  }

	 nav a{
		text-decoration:none;
		color:#fff;
		margin-left:30px;
		line-height:50px;
		position: left-side;
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
		width: 80%;
		height: 80%;
	}

	  ul {
	  list-style-type: none;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		padding: 2px 16px;
		margin : 2px;
	}

	 .card:hover a {
			  text-decoration:none;
			  color: #EEFFE5;
			}
	  .container {
		padding: 2px 16px;
	}

   </style>

 </head>
  <body>
  
  <nav>
     
     <a href="first.php">Home</a>
	 <a href="add_vehicle.php">Add Vehicles</a>
	 <a href="news.php">Stolen Vehicles</a>
	 <a href="sell_news.php">Buy Vehicles</a>
	 <a href="about.php">About Us</a>
	 <a href="login.php">Login</a><a href="register.php">Signup</a>
  </nav>

  
  <div></div>
  <div id="content">
    <?php
		$con = mysqli_connect("localhost","root","","vehicle") or die('Unable To connect');
		$chassis_no= $_POST['chassis_no'];
		 $res=mysqli_query($con,"select * from gari where chassis_no='$chassis_no' or reg_no='$chassis_no'");
		
		while($row=mysqli_fetch_array($res))
		{
			
			echo "<div class='card'>
			<ul>
			<li>
	          <img src={$row['image']}
	         </li>
			 
	         <li>
	          chassis number : {$row['chassis_no']}
	         </li>
			 
			 <li>
	          registration number : {$row['reg_no']}
	         </li>

	         <li>
	          owner name : {$row['username']}
	         </li>
			 
	        </ul>
			
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
<html>
  <style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 30%;
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

	a {
		  text-transform: uppercase;
		  text-decoration: none;
		  text-align: left;
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
		  background-color: ;
		  
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
		  
		  padding:0.2em;
		  //height:32px;
		}
		
</style>

  <body>
  <nav>
	<h2 color="Black" font-family="Cursive"><i>Menu</i></h2>
	<h3>
  <ul>
  	<li> </li>

    <li><a href="register.php">Signup</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="show1.php">My vehicles</a></li>
    <li><a href="add_vehicle.php">Add vehicles</a></li>
	<li><a href="news.php">Stolen vehicles</a></li>
    <li><a href="sell_news.php">Buy vehicles</a></li>
    <li><a href="about.php">About us</a></li>
  </ul></h3></nav>
 </body>

</html>



<?php
$con = mysqli_connect("localhost","root","","vehicle") or die('Unable To connect');
		
		 $res=mysqli_query($con,"select * from gari where sell=1");
		 
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
			 
	        </ul>
			
			</div>";
		
		} 
?>
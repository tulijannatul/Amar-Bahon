<?php
  $output="";
  
  if(isset($_POST['submit'])){
	  $mysqli=mysqli_connect("localhost","root","","vehicle");
	  $search=$mysqli->real_escape_string($_POST['search']);
	  
	  $resultSet=$mysqli->query("select * from gari where chassis_no='$search' or reg_no='$search'");
	  
	  if($resultSet->num_rows > 0){
		  while($rows=$resultSet->fetch_assoc())
		  {
			  $id=$rows['id'];
			  $chassis_no=$rows['chassis_no'];
			  $reg_no=$rows['reg_no'];
			  $username=$rows['username'];
			  $stolen_status=$rows['stolen_status'];
			  $output="$id<br/>$chassis_no<br/>$reg_no<br/>$username<br/>$stolen_status";
		  }
	  }else{
		  $output = "no result";
	  }
  }
?>

<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<div class="header">
<h1>Welcome to vehicle management system!</h1>
</div>

<div class="header1">
<h3>search vehicle with chassis number or registration number!</h3>
</div>

<div class="form">
<form method="POST">
<input type="text" name="search" />
<input type="submit" name="submit" value="Search" />
</form>
</div>

<div class="header1">
<?php 
echo $output; 
$output=""; 
?>
</div>



<br/>

<div class="header1">
<p>Want to add vehicle/update info/change ownership?<br/>please login<a href="index.php"> here</a></p>
</div>
</html>
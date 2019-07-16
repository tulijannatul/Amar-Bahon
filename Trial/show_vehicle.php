<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");
}  
  
?>  

<html>
 <head>
   <link href="style4.css" rel="stylesheet" style="text/css">
 
 </head>
  <body>
  <div id="content">
    <?php
	  $chassis="";
	  
	  $mysqli=mysqli_connect("localhost","root","","vehicle");
	  $name= $_SESSION['username'];
	  $result=$mysqli->query("select * from gari where username='$name'");
      $result = $result OR DIE(mysqli_error($mysqli));

		//code change here...Following structure is plain and simple...avoid using html inside echo

		while($row = mysqli_fetch_array($result))
		{
		    echo '<div id="img-div">
			<img src=<?php echo $row['image']?> >
			<p><?php echo $row['username']?></p>
			<p><?php echo $row['chassis_no']?></p>
			<form method="post" action="show_vehicle.php">
				<input type="hidden" name="vehicleToUpdate" value=<?php echo $row['chassis_no']?>>
				<input type="submit" name="updateVehicles">
			</form>
		    </div>'
	
		}
	
	
	</div>
	<h1><a href="logout.php">Logout here</a> </h1> 
	
  </body>

</html>

<?php
  if(isset($_POST['update'])){
      
	  $username= $_SESSION['username'];
	  $update_Query="update gari set stolen_status=1 where username='$username' and chassis_no='$chassis' or reg_no='$chassis'";
	  try{
		  $update_Result=mysqli_query($connect, $update_Query);
		  
		  if($update_Result){
			  if(mysqli_affected_rows($connect) > 0)
			  {
				  echo 'data updated';
				  header('location:show_vehicle.php');
			  }else echo 'data not updated';
		  }
	  }catch(Exception $ex){
		  echo 'error update ';
	  }
  }

?>


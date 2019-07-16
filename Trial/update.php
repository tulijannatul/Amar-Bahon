
<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login_new.php");
}  
  
?>  


<?php
  $id="";
  $chassis_no="";
  
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $connect=mysqli_connect('localhost','root','','vehicle');
  
   
  if(isset($_POST['submit'])){

	  $user=$_SESSION['username'];
	  $chassis=$_POST['chassis_no'];

	  echo $user ;
	  echo $chassis;

	  $update_Query="update gari set stolen_status=1 and sell=1 where username='$user' and chassis_no='$chassis' ";
	  try{
		  $update_Result=mysqli_query($connect, $update_Query);
		  
		  if($update_Result){
			  if(mysqli_affected_rows($connect) > 0)
			  {
				  echo 'data updated';
			  }else echo 'data not updated';
		  }
	  }catch(Exception $ex){
		  echo 'error update ';
	  }
  }
 ?>
<html>
  <head><title>update info</title></head>
    <body>
    <h2>update your info</h2>
	  <form action="update.php" method="POST">
	    price<input type="text" name="price"><br/>
		chassis number<input type="text" name="chassis_no"><br/>
		
		<input type="submit" name="submit" value="update">
	  </form>
	</body>

</html>
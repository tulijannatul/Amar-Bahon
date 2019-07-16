<?php
    session_start();
    $username="";
	$email="";
	$errors=array();
	
	$db = mysqli_connect('localhost','root','','vehicle');
	
	if(isset($_POST['register'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		
		if(empty($username)){
			array_push($errors,"username is required");
		}
		if(empty($email)){
			array_push($errors,"email is required");
		}
		if(empty($password_1)){
			array_push($errors,"password is required");
		}
		if($password_1!=$password_2){
			array_push($errors,"passwords don't match");
		}
		
		if(count($errors)==0){
			$password = $password_1;
			$sql="insert into user(username,email,password)values('$username','$email','$password')";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			echo 'Welcome!';
		}
	}
	
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}
	
?>
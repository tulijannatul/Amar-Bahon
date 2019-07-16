<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  

<html>
<?php
$conn = mysqli_connect("localhost","root","","vehicle");

function outout_errors($error) {
    echo '<ul><li>',$error.'</li></ul>';
}

if(isset($_POST['submit']) ){
    $chassis_no = $_POST['chassis_no'];
    $reg_no = $_POST['reg_no'];
   
    $picture_tmp = $_FILES['img']['tmp_name'];
    $picture_name = $_FILES['img']['name'];
    $picture_type = $_FILES['img']['type'];

    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');

    if(in_array($picture_type, $allowed_type)) {
        $path = 'images/'.$picture_name; //change this to your liking
    } else {
        $error[] = 'File type not allowed';
    }


    if(!empty($error)) {
        echo '<font color="red">'.output_errors($error).'</font>';

    } else if(empty($error)) {

    	 $username= $_SESSION['username'];


         $sql = "insert into gari(id,chassis_no,reg_no,username,image) values('','$chassis_no','$reg_no','$username','$path')";

        move_uploaded_file($picture_tmp, $path);

        if (mysqli_query($conn, $sql)) {
            echo 'ok';
        } else {
            echo 'ko';
        }
    }
}


?>


  <head>
   <style>
		     @import url(https://fonts.googleapis.com/css?family=Vibur);
		* {
		  box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  -webkit-box-sizing: border-box;
		  font-family: arial;
		}

		body {
		  background: #F8F8FF;
		  background: url("images/im.jpg") no-repeat ;
		  background-size:cover;

		}

		h1 {
		  color: #ccc;
		  text-align: center;
		  font-family: 'Vibur', cursive;
		  font-size: 50px;
		}

		.login-form {
		  width: 350px;
		  padding: 40px 30px;
		  //background: #eee;
		  -moz-border-radius: 4px;
		  -webkit-border-radius: 4px;
		  border-radius: 4px;
		  margin: auto;
		  position: absolute;
		  left: 0;
		  right: 0;
		  top: 50%;
		  -moz-transform: translateY(-50%);
		  -ms-transform: translateY(-50%);
		  -webkit-transform: translateY(-50%);
		  transform: translateY(-50%);
		}

		.form-group {
		  position: relative;
		  margin-bottom: 15px;
		}

		.form-control {
		  width: 100%;
		  height: 50px;
		  border: none;
		  padding: 5px 7px 5px 15px;
		  background: #fff;
		  color: #666;
		  border: 2px solid #ddd;
		  -moz-border-radius: 4px;
		  -webkit-border-radius: 4px;
		  border-radius: 4px;
		}
		.form-control:focus, .form-control:focus + .fa {
		  border-color: #10CE88;
		  color: #10CE88;
		}

		.form-group .fa {
		  position: absolute;
		  right: 15px;
		  top: 17px;
		  color: #999;
		}

		.log-status.wrong-entry {
		  -moz-animation: wrong-log 0.3s;
		  -webkit-animation: wrong-log 0.3s;
		  animation: wrong-log 0.3s;
		}

		.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
		  border-color: #ed1c24;
		  color: #ed1c24;
		}

		.log-btn {
		  background: #0AC986;
		  dispaly: inline-block;
		  width: 100%;
		  font-size: 16px;
		  height: 50px;
		  color: #fff;
		  text-decoration: none;
		  border: none;
		  -moz-border-radius: 4px;
		  -webkit-border-radius: 4px;
		  border-radius: 4px;
		}

		.link {
		  text-decoration: none;
		  color: #C6C6C6;
		  float: right;
		  font-size: 12px;
		  margin-bottom: 15px;
		}
		.link:hover {
		  text-decoration: underline;
		  color: #8C918F;
		}

		.alert {
		  display: none;
		  font-size: 12px;
		  color: #f00;
		  float: left;
		}

		@-moz-keyframes wrong-log {
		  0%, 100% {
		    left: 0px;
		  }
		  20% , 60% {
		    left: 15px;
		  }
		  40% , 80% {
		    left: -15px;
		  }
		}
		@-webkit-keyframes wrong-log {
		  0%, 100% {
		    left: 0px;
		  }
		  20% , 60% {
		    left: 15px;
		  }
		  40% , 80% {
		    left: -15px;
		  }
		}
		@keyframes wrong-log {
		  0%, 100% {
		    left: 0px;
		  }
		  20% , 60% {
		    left: 15px;
		  }
		  40% , 80% {
		    left: -15px;
		  }
		}

  </style>  
  
     <div class="login-form">
	 <form action="" method="post" enctype="multipart/form-data"
	   <div class="form-group">
       <input type="text" class="form-control" placeholder="chassis number " id="chassis_no" name="chassis_no" required>
       <i class="fa fa-user"></i>
	   
    </div>
     
	 <div class="form-group">
       <input type="text" class="form-control" placeholder="registration number" id="reg_no" name="reg_no" required>
       <i class="fa fa-lock"></i>
	   
	   </div>

	   <input type="hidden" name="size" value="1000000">

	   <div class="form-group">
          <input type="file" name="img">
	   </div>
     
     <input type="submit" name="submit">
     </form>
    
   </div>

  </head>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="index.js"></script>

 </html>
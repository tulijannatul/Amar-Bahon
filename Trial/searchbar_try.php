<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
  	<style type="text/css">
	  #search{
		  width:250px;
		  height:40px;
		  padding:7px;
		  border:1px solid #366;
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
	  
	</style>
</head>

<body>

    <div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="SearchBar">
		    
		    <form method="POST">
            <input type="text" name="search" id="search"/>
            <input type="submit" name="submit" value="Search" id="submit"/>
            </form>
	</div>
    </div>
	
    <div class="col-lg-6">
      
    </div>
  </div>
</div>
   
</body>

</html>
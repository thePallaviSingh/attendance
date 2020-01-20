<?php
session_start();
include("connection.php");
include("dashboard.php");
?>
 <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div class="container">
  <div class="panel panel-default container">
    <div class="panel-heading">
	<center><h1> User Login form</h1></center>
	</div>
    <div class="panel-body">
	</div>
<form action="" method = "POST">
  <div class="form-group">
<input  type ="text" name="email" class="form-control"  placeholder="email">

</div>
<div class="form-group">
<input type="text" name="password" class="form-control" placeholder="password">

</div>
 <center><button type="btn" name="login" class="btn btn-success">Login</button></center>
<!--<center><input type="submit" name="insert"></center>-->
</form>
  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['login']))
	{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from employee where email='$email' && password='$password'";
	 $q=mysqli_query($con,$sql) or die(mysqli_error($con));
	  if(mysqli_num_rows($q) > 0){
	    $result = mysqli_fetch_assoc($q); 
	  $_SESSION['LOGIN']="YES"; 
	  $_SESSION['email'] =$result['email'];
	  $_SESSION['empid'] =$result['id']; 
	  header("location:dashboard.php");
	  } else {
    ?>
  <script>
  alert("Invalid Username or Password");
  </script>
  <?php
  
  }
  }
?>



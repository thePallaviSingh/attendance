/* 	$email=$_POST['email'];
 	$password=$_POST['password'];
	$sql="select * from restaurant where  res_email='$email' && res_password='$password'";
 
 	$result=mysqli_query($con,$sql);
    $total=mysqli_num_rows($result);
    
	if(	$total==1)
 	{
 	    echo $result;exit;
	    	$_SESSION['Login']="yes";
	   $_SESSION['resemail']=$email;
		 
	
	    
      ?>
 	            <script>
				window.location = "dashboard.php";
				</script>*/
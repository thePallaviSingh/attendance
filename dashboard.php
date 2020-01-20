
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <a class="navbar-brand" href="userdetails.php">User Profile</a>
    </div>
    <ul class="nav navbar-nav">
     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">AttendanceInfo.<span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li><a href="attendancedetails.php">Attendancedetails</a></li>
          <li><a href=""></a></li>
        </ul>
      </li>
	  
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Leave<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="userleave.php">Leave</a></li>
		    <li><a href="leavedetails.php">Leavedetails</a></li>
		    <li><a href=""></a></li>
        
        </ul>
      </li>
	 <li class=""><a class="" href="usersalary.php">My Salary<span class=""></span></a>
	   
	 </li>
	 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MyAccount<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Logout</a></li>
		 <li><a href="#">Changepassword</a></li>
    </ul>
	 </li>
  </div>
</nav>
</body>
</html>

<?php
session_start();
$empid=$_SESSION['empid'];
include("connection.php");
include("dashboard.php");
?>
<form action="" method = "POST">
<!--<label for="valid from">Assign Leave </label>
<button type="btn" name="All Leave" class="btn btn-success">All Leave</button>-->

<div class="form-group">
<input type="hidden" name="employee" value="<?=$empid?>" placeholder="">

<label for="Type of leave"> Type of Leave :-</label>
     <input type="radio" name="type" value="halfday"> HalfDay
  <input type="radio" name="type" value="fullday">FullDay
  <input type="radio" name="type" value="multiday">multiDay<br><br>
  <div class="form-group">
  <label for="valid from">Start date:</label>
  <input  type="Date" name="startdate" id="Date" class="form-control" />
  </div>
  <div class="form-group">
  <label for="valid from">End date:</label>
  <input  type="Date" name="enddate" id="Date" class="form-control" />
  </div>
</div>

<div class="form-group">
<label for="earningleave">Reason:</label>
<input type="text" name="reason" class="form-control" placeholder="reason">
</div>
 <center><button type="btn" name="submit" class="btn btn-success">Apply</button>
</center>
 </form>
<?php
if(isset($_POST['submit']))
{ 
    $empid=$_POST['employee'];
	//$empemail=$_POST['empemail'];
	$type=$_POST['type'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $reason=$_POST['reason'];
    $sql="insert into userleave(employeeid,startdate,enddate,Type,reason,status) values('$empid','$startdate','$enddate','$type','$reason','pending')";
    $result=mysqli_query($con,$sql); 
}
?> 
 
 
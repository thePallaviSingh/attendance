<?php
session_start();
$useremail=$_SESSION['email'];
include("connection.php");
include("dashboard.php");
?>
<form action="" method = "POST">
<!--<label for="valid from">Assign Leave </label>
<button type="btn" name="All Leave" class="btn btn-success">All Leave</button>-->
<label for="">Employee Name</label>
<select name="employee" >
    <option value="">--Employee Name--</option>
     <?php
        $query="select * from employee where email='$useremail'";
        $result= mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result))
        { ?> 
   <option value="<?php echo $row['empid'];?>"><?php echo $row['name'];?></option>
  <?php } ?>  
</select>
<div class="form-group">
<label for="valid from">valid from:</label>
    <input  type="Date" name="date" id="Date" class="form-control" />
</div>
<div class="form-group">
<label for="valid from">valid To:</label>
    <input  type="Date" name="date" id="Date" class="form-control" />
</div>
  <div class="form-group">
  <label for="earningleave">earning leave:</label>
<input  type ="text" name="earningleave" class="form-control"  placeholder="e_leave">
</div>
<div class="form-group">
<label for="earningleave">medical leave:</label>
<input type="text" name="medicalleave" class="form-control" placeholder="m_leave">
</div>
<div class="form-group">
<label for="earningleave">casual leavel:</label>
<input type="text" name="casualleave" class="form-control" placeholder="c_leave">
</div>
 <center><button type="btn" name="submit" class="btn btn-success">submit</button>
<button type="btn" name="cancel" class="btn btn-success">cancel</button></center>
 </form>
<?php
if(isset($_POST['submit']))
{
	$empid=$_POST['employee'];
    $dt=$_POST["date"];
    $date=$_POST["date"];
    $eleave=$_POST['earningleave'];
    $mleave=$_POST['medicalleave'];
    $cleave=$_POST['casualleave'];
    $sql="insert into assign_leave(empid,v_from,v_to,e_leave,m_leave,c_leave) values('$empid','$dt','$date','$eleave','$mleave','$cleave')";
    $result=mysqli_query($con,$sql); 
}
?> 
 
 
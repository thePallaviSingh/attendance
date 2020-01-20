<?php
session_start();
$useremail=$_SESSION['email'];
include("connection.php");
include("dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
    <style>
    .ui-datepicker-calendar {
        display: none;
    }
    </style>
</head>
<body>
<form action="" method="POST">
    <label for="startDate">Date:</label>
<input name="Date"id="Date" class="date-picker" />	
	<button type="btn" name="submit" class="btn btn-success">submit</button>

	</form>
</body>
 <script type="text/javascript">
        $(function() {
            $('#Date').datepicker( {
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
             dateFormat: 'MM yy',
            onClose: function(dateText, inst) { 
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
            });
        });
    </script>
</html>
<?php
$sql="select empid,attendance,count(case when attendance ='Present' then 1 end) as present_count
 from attendance as a group by empid";  
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{	
 $presentday= $row['present_count'];
?>
<?php
$salary="select empsal from employee group by empid";
$result=mysqli_query($con,$salary);
while($row=mysqli_fetch_assoc($result))
{
$employeesal=$row['empsal'];
?>
<?php
if(isset($_POST['submit']))
{
//$date=date($_POST['Date']);
/*$date=date('Y-M',strtotime($_POST['Date']));	
$day=date('d',strtotime($date));
$m=date('m', strtotime ($date));
$y=date('y', strtotime ($date));
$d=cal_days_in_month(CAL_GREGORIAN,$m,$y );
echo "There are " .$d ." .";	
echo $tsalary=($presentday*$employeesal/$d);
$result=mysqli_query($con,$tsalary);
/while($row=mysqli_fetch_assoc($result))
{
$getsalary= $row['tsalary'];
}*/
?>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">empid</th>
<th scope="col">name</th>
<th scope="col">empsal</th>
<th scope="col">getsalary</th>
</tr>
</thead>
<tbody>
<?php
$sql="select * from employee where email='$useremail'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
$date=date('Y-M',strtotime($_POST['Date']));	
$day=date('d',strtotime($date));
$m=date('m', strtotime ($date));
$y=date('y', strtotime ($date));
$d=cal_days_in_month(CAL_GREGORIAN,$m,$y );	
  
$tsalary=round($presentday*$row['empsal']/$d);
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['empid'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['empsal'];?></td>
<td><?php echo $tsalary;?></td>
</tr>
<?php
}}}}
?>
</tbody>
</table>
</form>






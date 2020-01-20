<?php
include("connection.php");
include("dashboard.php");
?>
<form action="" method="POST">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
 <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
    <style>
    .ui-datepicker-calendar {
        display: none;
    }
    </style>
</head>
<!-- <input type="date"  name="showdate"> -->


<label for="">Select MONTH</label>
<select name="month">
	 <option value=''>--Select Month--</option>
    <option value='01'>Janaury</option>
    <option value='02'>February</option>
    <option value='03'>March</option>
    <option value='04'>April</option>
    <option value='05'>May</option>
    <option value='06'>June</option>
    <option value='07'>July</option>
    <option value='08'>August</option>
    <option value='09'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
</select>
  <label for="startDate">Date:</label>
    <input name="Date" id="Date" class="date-picker" />
	<!--<input type="submit" name="submit">-->
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
<button type="submit"class="btn btn-success" name="show">show</button>
<br>
<br>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">empid</th>
<th scope="col">month</th>
<th scope="col">attendance</th>
<th scope="col">absent_count</th>
<th scope="col">present_count</th>
<th scope="col">no of days</th>
</tr>
</thead>
<tbody>
<?php
if (isset($_POST['show']))
	{	
$date=date('Y-M',strtotime($_POST['Date']));
$day=date('d', strtotime($date));
$m=date('m', strtotime ($date));
$y=date('y', strtotime ($date));
$d=cal_days_in_month(CAL_GREGORIAN,$m,$y );
//echo "There are " .$d ." .";	
$mdate= $_POST['month'];
$query="select * from attendance where MONTH(date)='$mdate' ";
$result= mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{	
?>
<?php
//$sql=select attendance.id,attendance.empid,attendance.attendance,employee.name,employee.email from attendance inner join employee on attendance.id=employee.id where email='$useremail'"
$sql="select id,empid,attendance,count(case when attendance ='Absent'then 1 end) as absent_count,count(case when attendance ='Present' then 1 end) as present_count
 from attendance as a group by empid";  
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{	
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['empid'];?></td>
<td><?php echo $mdate;?></td>
<td><?php echo $row['attendance'];?></td>
<td><?php echo $row['absent_count'];?></td>
<td><?php echo $row['present_count'];?></td>
<td><?php echo $d;?></td>
</tr>
<?php 
}}}
?>
</tbody>
</table>
</form>
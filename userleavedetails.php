<?php
session_start();
$useremail=$_SESSION['email'];
include("connection.php");
include("dashboard.php");
?>
<form action="" method="POST">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">employeeid</th>
<th scope="col">Apply_Date</th>
<th scope="col">Start_Date</th>
<th scope="col">End_Date</th>
<th scope="col">Type</th>
<th scope="col">Reason</th>

</tr>
</thead>
<tbody>
<?php
$query="select assign_leave.id,assign_leave.empid,assign_leave.v_from,assign_leave.v_to,assign_leave.e_leave,assign_leave.m_leave,assign_leave.c_leave,employee.email from assign_leave inner join employee on assign_leave.empid=employee.empid where email='$useremail'";
$result= mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['empid'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['v_from'];?></td>
<td><?php echo $row['v_to'];?></td>
<td><?php echo $row['e_leave'];?></td>
<td><?php echo $row['m_leave'];?></td>
<td><?php echo $row['c_leave'];?></td>
</tr>

</tbody>
</table>
</form>
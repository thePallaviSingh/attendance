<?php
session_start();
$id=$_SESSION['empid'];
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
<th scope="col">Status</th>

</tr>
</thead>
<tbody>
<?php
$query="select * from userleave where employeeid='$id'";
$result= mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
//$row=mysqli_fetch_assoc($result);
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['employeeid'];?></td>
<td><?php echo $row['Applydate'];?></td>
<td><?php echo $row['startdate'];?></td>
<td><?php echo $row['enddate'];?></td>
<td><?php echo $row['Type'];?></td>
<td><?php echo $row['reason'];?></td>
<td><?php echo $row['status'];?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</form>
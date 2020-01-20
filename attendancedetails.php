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
<th scope="col">empid</th>
<th scope="col">name</th>
<th scope="col">email</th>
<th scope="col">date</th>
<th scope="col">attendance</th>
</tr>
</thead>
<tbody>
<?php
$query="select attendance.id,attendance.empid,attendance.date,attendance.attendance,employee.name,employee.email from attendance inner join employee on attendance.id=employee.id where email='$useremail'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);	
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['empid']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['attendance'];?></td>
</tr>
</tbody>
</table>
</form>
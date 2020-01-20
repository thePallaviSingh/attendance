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

<th scope="col">mobile</th>
<th scope="col">salary</th>

</tr>
</thead>
<tbody>
<?php
$query="select * from employee where email='$useremail' ";
$result= mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);	
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['empid']?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>

<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['empsal'];?></td>

</tr>

</tbody>
</table>
</form>
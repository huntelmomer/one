



<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
		
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 



</head>
<body >

	<table class="table table-hover">
	  <thead>
	   <tr>
	    <th>ID</th>
		<th>Fname</th>
		<th>Lname</th>
		<th>Gender</th>
		<th>Day</th><th>age</th><th>Citizen</th><th>Blood tye</th><th>address</th><th>city</th>
		<th>zipcode</th>
		<th>phone</th><th>Email</th><th>Shirt size</th>
		<th>Congenital disease</th>
	   </tr>
     	   </thead>
	<tbody>
 <?php
  include("conn/mysqlcon.php");

$sql ="SELECT * FROM tt";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	
	while($row=mysqli_fetch_assoc($result))
	{ 
?>

<tr>
  <td><?php echo $row["id"];?></td>
  <td><?php echo $row["fname"];?></td>
  <td><?php echo $row["lname"];?></td>
  <td><?php echo $row["gender"];?></td>
  <td><?php echo $row["day"];?></td>
  <td><?php echo $row["age"];?></td>
  <td><?php echo $row["citizen"];?></td>
  <td><?php echo $row["blood_type"];?></td>
  <td><?php echo $row["address"];?></td>
  <td><?php echo $row["city"];?></td>
  <td><?php echo $row["zipcode"];?></td>
  <td><?php echo $row["phone"];?></td>
  <td><?php echo $row["e_mail"];?></td>
  <td><?php echo $row["shirt_size"];?></td>
  <td><?php echo $row["con_dis"];?></td>
  
</tr>





<?php





    }
}else {
echo "0 result";}


?>




</tbody>
  </table>
 <li><a href="index.php">Home</a></li>
    </body>
</html>

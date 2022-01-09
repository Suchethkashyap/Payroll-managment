<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>emp details</title>
	<style>
		.display tr{
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 10%;
		}

		.display th .display td{
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}
		.display th{
			background-color: blue;
		}


		.display tr:nth-child(even) {
		background-color: #dddddd;
		}
</style>
 <script src="emp_search.js" async></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<form action="">
	   <input type="text" id="myInput" placeholder="Search for names.." title="Type in a name">
	   <input type="submit" onclick="myFunction();" placehoder="Search">
	</form>

<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM emp ");
?>

<table id="emp_search" class="display">
	<tr>
	<th>Employee <br> id</br></th>
	<th>Employee<br> Title</br></th>
	<th>Employee<br> Name</br></th>
	<th>Date<br>Of<br>Birth</br></th>
	<th>Date<br>Of<br>Joining</br></th>
	<th>Address</th>
	<th>City</th>
	<th>State</th>
	<th>Pincode</th>
	<th>Mobile<br>No.</br></th>
	<th>Email_id</th>
	<th>Pan car no.</th>
	</tr>
	<tbody id="body">

	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr id="tr" class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["emp_id"]; ?></td>
	<td><?php echo $row["emp_title"]; ?></td>
	<td id="empname"><?php echo $row["emp_name"]; ?></td>
	<td><?php echo $row["emp_dob"]; ?></td>
	<td><?php echo $row["emp_doj"];?></td>
	<td><?php echo $row["emp_address"];?></td>
	<td><?php echo $row["emp_city"];?></td>
	<td><?php echo $row["emp_state"];?></td>
	<td><?php echo $row["emp_pincode"];?></td>
	<td><?php echo $row["emp_mobno"];?></td>
	<td><?php echo $row["emp_mailid"];?></td>
	<td><?php echo $row["emp_panno"];?></td>

	<td><a href="delete_emp.php?id=<?php echo $row["emp_id"]; ?>">Delete</a></td>
	</tr>
	</tbody>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
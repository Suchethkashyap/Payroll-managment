<!DOCTYPE html>
<html lang="en">
<head>
<?php include('templates/displaycss.php'); ?>
 <script src="emp_search.js" async></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<form action="" style="padding:20px 530px 20px;">
	   <input type="text" id="myInput" placeholder="Search for names.." title="Type in a name">
	   <input type="submit" onclick="myFunction();" placehoder="Search">
	</form>

<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM emp ");
?>

<table id="emp_search" class="display">
	<tr  class="tagLine">
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
	<th></th>
	</tr>
	<tbody id="body">

	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr id="tr" class="<?php if(isset($classname)) echo $classname;?>">
	<th><?php echo $row["emp_id"]; ?></th>
	<th><?php echo $row["emp_title"]; ?></th>
	<th id="empname"><?php echo $row["emp_name"]; ?></th>
	<th><?php echo $row["emp_dob"]; ?></th>
	<th><?php echo $row["emp_doj"];?></th>
	<th><?php echo $row["emp_address"];?></th>
	<th><?php echo $row["emp_city"];?></th>
	<th><?php echo $row["emp_state"];?></th>
	<th><?php echo $row["emp_pincode"];?></th>
	<th><?php echo $row["emp_mobno"];?></th>
	<th><?php echo $row["emp_mailid"];?></th>
	<th><?php echo $row["emp_panno"];?></th>

	<th><a href="delete_emp.php?id=<?php echo $row["emp_id"]; ?>">Delete</a></th>
	</tr>
	</tbody>
	<?php
	$i++;
	}
	?>
</table>
<div><p></p></div>
</body>
<?php include('templates/footer.php'); ?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('templates/displaycss.php'); ?>
 <script src="emp_search.js" async></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM dep ");
?>

<table  class="display">
	<tr  class="tagLine">
	<th>Department_id</th>
	<th>Department_name</th>
	<th></th>
	</tr>
	<tbody id="body">

	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr id="tr" class="<?php if(isset($classname)) echo $classname;?>">
	<th><?php echo $row["depid"]; ?></th>
	<th><?php echo $row["depname"]; ?></th>
	<th><a href="delete_dep.php?id=<?php echo $row["depid"]; ?>">Delete</a></th>
	</tr>
	</tbody>
	<?php
	$i++;
	}
	?>
</table>
<div><p></p></div>
</body>
</html>
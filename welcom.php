<?php
session_start();
// include "header.php";
?>
<!doctype html>
<html>
<head>
<?php include('templates/header.php'); ?>
<style>
.button {
 background-color: #000000;
 color: #FFFFFF;
 padding: 10px;
 border-radius: 10px;
 -moz-border-radius: 10px;
 -webkit-border-radius: 10px;
 margin:10px
 }
 
 .small-btn {
 width: 50px;
 height: 25px;
 }
 
 .medium-btn {
 width: 70px;
 height: 30px;
 }
 
 .big-btn {

 width: 250px;
 height: 40px;
 }
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body class="bg">
<center>
<br>
<form action="emp_master.php" align= "center">
<!--<div class="button big-btn">This is a big button</div>-->
<button type="submit" class="button big-btn" value="emp_master" name="add" ><font size="3"><strong>Add New 
Employee</strong></font></button>
</form>
<br>
<form action="dep_master.php">
<button type="submit" class="button big-btn" value="" name="add" ><font size="3"><strong>Add New 
Department</strong></font></button>
</form>
<br>
<form action="grad_master.php">
<button type="submit" class="button big-btn" value="#" name="add" ><font size="3"><strong>Add New 
Grade</strong></font></button>
</form>
<br>
<form action="emp_grad_detail.php">
<button type="submit" class="button big-btn" value="#" name="add" ><font size="3"><strong>Employee Grade 
Details</strong></font></button>
</form>

<br>
<form action="salary_detail.php">
<button type="submit" class="button big-btn" value="#" name="add" ><font size="3"><strong>Prepare Monthly 
Salary</strong></font></button>
</form>
<br>
<form action="report.php">
<button type="submit" class="button big-btn" value="#" name="add" ><font size="3"><strong>Generate 
Report</strong></font></button>
</form>
</table>
</form>
</center>
</body>
<?php include('templates/footer.php'); ?>
</html>
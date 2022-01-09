<?php

include("config.php");

  if(isset($_POST['save']))
{
    $emptitle=$_POST['emptitle'];
	$empname=$_POST['empname'];
	$empdob=$_POST['empdob'];
  

  
    $sql = "INSERT INTO emp(emp_title,emp_name,emp_dob) VALUES ('$emptitle','$empname','$empdob')";

    $result = mysqli_query($conn,$sql);
    echo "inserted successfully..!";
}



?>

<form action="" method="post" > 
<label id="first"><b>First name:</b></label><br/>
<input type="text" name="emptitle"><br/>

<label id="first"><b>lifespan:</b></label><br/>
<input type="text" name="empname"><br/>

<!-- <label id="first"><b>category:</b></label><br/>
<input type="text" name="empdob"><br/> -->
<label id="dob"><b>Date Of Birth</b></label>
<input type="date" placeholder="Enter dob" name="empdob" required>



<button type="submit" name="save">save</button>

</form>
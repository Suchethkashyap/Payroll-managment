<?php

include("config.php");
// include("templates/header.php");

  if(isset($_POST['submit']))
{
    $depname=$_POST['depname'];

  
    $sql = "INSERT INTO dep (depname) VALUES ('$depname')";

    $result = mysqli_query($conn,$sql);
    echo "inserted successfully..!";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('templates/header.php'); ?>
<?php include('templates/css-tags.php'); ?>
<?php include('templates/stylecss.php'); ?>
    <title>Department</title>
</head>

<body>
    <div><p></p></div>
    <div class="emp_table">
    <h3><center>Add Department</center> </h3>
     <hr>
    <form action="" method="post" id="dep-details">
        <table>
            <tr>
              <td><label id="Emp_title"><b>Department Name :</b></label></td>
              <td><input type="text" placeholder="Enter Department" name="depname"required></td>
            </tr>
            <tr> 
              <td></td>
              <td style=padding-left:100px;>
                   <input id="btn" type="submit" name="submit" value="submit" >
                   <input type="button" onclick="myFunction()" value="Clear">
              </td>
          </tr>
        </table>
    </form>
    </div>
    <div class="emp_record">
        <h2><center>Records Inserted</center></h2>
        <?php include ("dep_display.php");?>
    </div>
    <script>
function myFunction() {
  document.getElementById("dep-details").reset();
}
</script>
    <?php include('templates/footer.php'); ?>
</body>
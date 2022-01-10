<?php

include("config.php");
// include("templates/header.php");

  if(isset($_POST['submit']))
{
    $grade_name=$_POST['grade_name'];
	$grade_basic=$_POST['grade_basic'];
	$grade_da=$_POST['grade_da'];
    $grade_ta=$_POST['grade_ta'];
    $grade_hra=$_POST['grade_hra'];
    $grade_ma=$_POST['grade_ma'];
    $grade_bonus=$_POST['grade_bonus'];
    $grade_pf=$_POST['grade_pf'];
    $grade_pt=$_POST['grade_pt'];

  
    $sql = "INSERT INTO grade (grade_name,grade_basic,grade_da,grade_ta,grade_hra,grade_ma,grade_bonus,grade_pf,grade_pt) VALUES ('$grade_name','$grade_basic','$grade_da','$grade_ta','$grade_hra','$grade_ma','$grade_bonus','$grade_pf','$grade_pt')";

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
    <title>New employee</title>
</head>

<body>
    <div><p></p></div>
    <div class="emp_table">
    <h3><center>Grade Details</center> </h3>
     <hr>
    <form action="" method="post" id="grade-details">
        <table >
          <tr>
            <td>
              <label id="name"><b> Grade Name :</b></label><br>
              <input type="text" placeholder="Enter Name" name="grade_name"required>
            </td>
            <td class="right">
             <label id="name"><b> Basic :</b></label><br>
             <input type="text" placeholder="Enter Name" name="grade_basic"required>

            </td>
            
          </tr>
          <tr>
            <td>
              <label id="name"><b> Dearness Allowance :</b></label><br>
              <input type="text" placeholder="Enter Name" name="grade_da"required>
            </td>
            <td class="right">
             <label id="name"><b> Travel Allowance :</b></label><br>
             <input type="text" placeholder="Enter Name" name="grade_ta"required>
            </td>
          </tr>
          <tr>
            <td>
              <label id="name"><b>HRA :</b></label><br>
              <input type="text" placeholder="Enter Name" name="grade_hra"required>
            </td>
            <td class="right">
             <label id="name"><b>Medical Allowance : </b></label><br>
             <input type="text" placeholder="Enter Name" name="grade_ma"required>
            </td>
          </tr>
          <tr>
            <td>
              <label id="name"><b>Bonus :</b></label><br>
              <input type="text" placeholder="Enter Name" name="grade_bonus"required>
            </td>
            <td class="right">
             <label id="name"><b>Provident Fund : </b></label><br>
             <input type="text" placeholder="Enter Name" name="grade_pf"required>
            </td>
          </tr>
          <tr>
            <td>
              <label id="name"><b>Professional Tax :</b></label><br>
              <input type="text" placeholder="Enter Name" name="grade_pt"required>
            </td>
            
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
    <script>
function myFunction() {
  document.getElementById("grade-details").reset();
}
</script>

</body>

</html>
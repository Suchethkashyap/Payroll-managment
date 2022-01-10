<?php

include("config.php");
// include("templates/header.php");

  if(isset($_POST['submit']))
{
    $emptitle=$_POST['emptitle'];
	$empname=$_POST['empname'];
	$empdob=$_POST['empdob'];
    $empdoj=$_POST['empdoj'];
    $empaddress=$_POST['empaddress'];
    $empcity=$_POST['empcity'];
    $empstate=$_POST['empstate'];
    $emppincode=$_POST['emppincode'];
    $empmobno=$_POST['empmobno'];
    $empmailid=$_POST['empmailid'];
    $emppanno=$_POST['emppanno'];

  
    $sql = "INSERT INTO emp (emp_title,emp_name,emp_dob,emp_doj,emp_address,emp_city,emp_state,emp_pincode,emp_mobno,emp_mailid,emp_panno) VALUES ('$emptitle','$empname','$empdob','$empdoj','$empaddress','$empcity','$empstate','$emppincode','$empmobno','$empmailid','$emppanno')";

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
    <h3><center>Add Employee</center> </h3>
     <hr>
    <form action="" method="post" id="emp-details">
        <table >
          <tr>
            <td>
                <label id="Emp_title"><b> Employee Title</b></label><br>
                <select id="select-title" name="emptitle" placeholder="select-title" required>
                    <option value="">Select title</option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>
                </select>
            </td>
            <td class="right">
             <label id="name"><b> Employee Name</b></label><br>
             <input type="text" placeholder="Enter Name" name="empname"required>

            </td>
            
          </tr>
          <tr>
              <td>
                 <label id="dob"><b>Date Of Birth</b></label><br>
                 <input type="date" placeholder="Enter dob" name="empdob" required>
              </td>
              <td class="right">
              <label id="doj"><b>Date of joining</b></label><br>
                 <input type="date" placeholder="Enter joining date..." name="empdoj" required>
              </td>
          </tr>
           <tr>
              <td>
                  <label id="address"><b>Address</b></label><br>
                  <input type="text" placeholder="House no, Street" name="empaddress" required>
              </td>
              <td class="right">
                  <label id="city-title"><b>City</b></label><br>
                    <input type="city" 
                    class="city-name" 
                    id="inputCity" 
                    placeholder="Employee city" name="empcity">
              </td>
          </tr>
          <tr>
              <td>
                 <label for="state"><b>State</b></label><br>

                  <select id="select-state"name="empstate" placeholder="Pick a state..." required>
                        <option value="">Select a state...</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andamans</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">J & K</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        
                 </select>
              </td>
              <td class="right">
                  <label id="pincode"><b>Pincode</b></label><br>
                  <input type="number" placeholder="Employee pincode..." name="emppincode"required>
              </td>
          </tr>
          <tr>
              <td>
                  <label id="number"><b>Mobile No.</b></label><br>
                  <input type="number" placeholder="Employee mobile no.." name="empmobno"required>
              </td>
              <td class="right">
                  <label id="email"><b>Email-id</b></label><br>
                  <input type="text" placeholder="Employee email id.."name="empmailid"required>
              </td>
          </tr>
          <tr>
              <td>
                  <label id="pan-no"><b>Pan card no.</b></label><br>
                  <input type="text"placeholder="Employee Pan no." name="emppanno" required>
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
    <div class="emp_record">
        <h2><center>Records Inserted</center></h2>
        <?php include ("emp_display.php");?>
    </div>
    <script>
function myFunction() {
  document.getElementById("emp-details").reset();
}
</script>

</body>

</html>
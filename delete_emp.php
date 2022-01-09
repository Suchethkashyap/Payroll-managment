<?php
include_once 'config.php';
$sql = "DELETE FROM emp WHERE emp_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:emp_master.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

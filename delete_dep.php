<?php
include_once 'config.php';
$sql = "DELETE FROM dep WHERE depid='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:dep_master.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
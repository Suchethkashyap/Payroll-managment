<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:welcom.php'); die();
    }
?>
<html>
    <head>
    <?php include('templates/header.php'); ?>
        <title>Admin Page</title>
    </head>
    <body>
        This is admin page viewable only by logged in users.
    </body> 
</html>
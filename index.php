<?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
        
      }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<!-- JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" ></script>
</head>
<body>
	<h1>Welcome </h1>
  <h2>My Employee Manager</h2>
  <h2>Administrator Login</h2>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="container">
    <h3 class="text-center">Login</h3>
   
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-default">Login</button>
      </div>
    </form>
  </div>
      
    </div>
  </div>
</div>
</body>
</html>
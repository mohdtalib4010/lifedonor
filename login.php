<?php
session_start();
include("connection.php");

if(isset($_POST['submit']))
 {
    $user = $_POST['username'];
    $pass = $_POST['pass']; 
  //  $query = SELECT * FROM data WHERE  password='$pass';

    $u_check =mysqli_query($con,"SELECT * FROM data WHERE username='$user' && password='$pass' ");
   // $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($u_check);
   // $total = mysqli_num_rows($query);
    
    if($total==1)
    {   
       $_SESSION['user_name']=$user;
       
            header('Location: home.php');
 
    }else{
        echo " check your username or password";
    }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css"  href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<br><br>
		<h4 class="text-info text-center">
		Login Here </h4><br>
	<form action="" method="post">
		<div class="form-group box">
			<input type="text" name="username" class="form-control" placeholder="username" required="">
		</div><br>
		<div class="form-group box">
			<input type="password" name="pass" class="form-control" placeholder="Password" required="">
		</div>
		<input type="submit" name="submit"  value="Login" class="btn btn-primary"><br><br>
		    
          <a href="signup.php" class="btn btn-primary">Signup  </a>
		
		
		
	</form>
    </div>

</body>
</html>




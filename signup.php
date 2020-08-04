<?php
include("connection.php");



if(isset($_POST['submit'])){
  $fname = strip_tags($_POST['name']) ;
  
  $pass = strip_tags($_POST['pass1']);
  $group = strip_tags($_POST['bgroup']);
  $phone = strip_tags($_POST['phone']);
  $add =  strip_tags($_POST['address']);
 // $gender = strip_tags($_POST['gender']);
  $username = strip_tags($_POST['user']) ;
  $email = strip_tags($_POST['email']);
  $check =mysqli_query($con,"SELECT username FROM data WHERE username='$username'");

         //count nu of rows return
   $num_rows = mysqli_num_rows($check);

   if($num_rows < 1){
  
   
   $query = "INSERT INTO data VALUES ('$username','$fname','$pass','$group','$add','$phone','gender','images/pic1.jpg','$email')";
   $data = mysqli_query($con, $query);

   if($data){
    echo("<script>location.href = 'https://lifedonor.000webhostapp.com/login.php';</script>");

   }else{
    echo "Try again";
   }
  }else{
      echo "username is already taken";
  }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blooddonation</title>
        
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
        <div class="bgimge">
            <div class="container">
                <br><br>
                <h5 class="text-info text-center">
                   REGISTER YOURSELF AND Be A HERO
                </h5>
                <br><br>
                <form action="" method="post">
                <div class="form-group box">
                 
                    <input type="text" name="name"class="form-control " id="firstname" placeholder="Enter Your Name" required="">
                  
                </div>
                <div class="form-group box">

                    <input type="text" name="user" class="form-control" id="lastname" placeholder="Enter Your Username" required="">
                </div>
            
                  <div class="form-group box">
  
                    <input type="password" name="pass1" class="form-control" id="pwd" placeholder="Generate Password" required="">
                 
                  </div>
                
               
                <div class="form-group box">
                          <label class="text-secondary">Chose your blood group </label><br>
                          <select class="form-control" name="bgroup">
                        
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                          </select>
                         
                    </div>
                    
                   
                     <div class="form-group box">
                   <input type="text" name="phone" class="form-control" placeholder="Enter your Phone" required=""></div>
                    <div class="form-group box">
                   <input type="email" name="email" class="form-control" placeholder="Enter your email" required=""></div>
                     <div class="form-group box">
                   <input type="text" name="address" class="form-control" placeholder="Enter your Address" required=""></div>
                 

                  <input type="submit" name="submit" value="sign up" class="btn btn-primary">
                  
                </form>
                     
                   
                <br>  <a href="login.php" class="btn btn-primary">LOGIN  </a>
                
                
                </div>
        </div>

    </body>
</html>


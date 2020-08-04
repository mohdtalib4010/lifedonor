<?php
session_start();
include('connection.php');

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}else{
     echo("<script>location.href = 'https://lifedonor.000webhostapp.com/index.html';</script>");
}

      error_reporting(0); 
     

      if(isset($_POST[submit])) {

        $files=$_FILES['file'];
       // print_r($files);
        
        $username = $_POST['user'];  
        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];
        $destinationfile ='images/'.$filename;
        move_uploaded_file($filetmp, $destinationfile);
        
       // echo " pass2";
        $query = "update data set profilepic='$destinationfile' where username='$userprofile' ";
     //   echo "pass3";
        $data =  mysqli_query($con, $query);
         
         if($data)
   {
     
       echo("<script>location.href = 'https://lifedonor.000webhostapp.com/donor_profile.php';</script>");
   }else{
    echo "try again";
   }
      
       

       }

 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
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
        <h1 class="text-white bg-dark text-center">
            Upload your pic
        </h1>
        <form action="" method="post" enctype="multipart/form-data">
           
             <div class="form-group">
                <label for="user"> Profile pic</label>
                <input type="file" name="file" id="file" class="form-control" >
                <input type="submit" name="submit" value="submit" class="btn btn-success">
            </div>
            
        
            
            
        </form>
    


</body>
</html>
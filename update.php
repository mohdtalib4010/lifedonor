<?php
session_start();
include('connection.php');

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}else{
     echo("<script>location.href = 'https://lifedonor.000webhostapp.com/index.php';</script>");
}
//set variables for values

$query ="SELECT * FROM data WHERE username='$userprofile'";
$data =mysqli_query($con, $query);
$result = mysqli_fetch_assoc($data);

//set variables for values
$name = $result['name'];
$add = $result['address'];
$phone = $result['phone'];
$pass = $result['password'];
$email= $result['email'];

//update data

  if(isset($_POST['submit'])) {

       $phone2 = $_POST['phone2'];
       $name2 = $_POST['name2'];
       $email2 = $_POST['email2'];
       $add2 = $_POST['add2'];
       $pass2 = $_POST['pass2'];
       
       echo $name2 ;
        $query2 = "update data set  phone ='$phone2' , name ='$name2' , email ='$email2' , password ='$pass2', address = '$add2' where username='$userprofile' ";
    
        $data2 =  mysqli_query($con, $query2);
         
         if($data2)
                {
     
             echo("<script>location.href = 'https://lifedonor.000webhostapp.com/donor_profile.php';</script>");
        }else{
            echo "try again";
       }
      
}


?>

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

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
<style>
    body{
        background-image: url(img10.jpeg);
        background-size: 100% 100%;
        height: 100%;
        width:100%;
    }
    #same{
        width: 100%;
    }
</style>
    </head>
    <body>
        <br>
        <div class="container text-warning text-center"><b>Update Your Profile Here</b></div>
         <div class="container">
            
             <h1 style="text-align: center;color: white;font-weight: bold;">Update profile</h1>
              <form method="post" style="margin-top: 5px; color: white;">
                <div class="form-group">
                     <label class="text-secondary">Name: </label>
                    <input type="text" name="name2" class="form-control" value="<?php echo $name; ?> " id="same">
                </div>
                  <div class="form-group">
                       <label class="text-secondary">Password: </label>
                      <input type="password" name="pass2" class="form-control" value="<?php echo $pass; ?>"id="same">
                  </div>
                  <div class="form-group">
                     <label class="text-secondary">Phone: </label>
                    <input type="int" name="phone2" class="form-control" value="<?php echo $phone; ?>"id="same">
                </div>
                <div class="form-group">
                     <label class="text-secondary">Email: </label>
                    <input type="email" name="email2" class="form-control" value="<?php echo $email; ?>"id="same">
                </div>
                <div class="form-group">
                     <label class="text-secondary">Address: </label>
                    <input type="adress" name="add2" class="form-control" value="<?php echo $add; ?>"id="same">
                </div>
                <input type ="submit" name = "submit" value = "update"><br
            
              </form><br>
               <input type ="submit" name = "delete" value = "Delete Profile">
         </div>
    </body>
</html>

<?php
// sql to delete a record
if(isset($_POST['delete'])){
$sql = "DELETE FROM data WHERE username= '$userprofile' ";
 $d =  mysqli_query($con, $sql);
if ($d) {
       echo("<script>location.href = 'https://lifedonor.000webhostapp.com/index.php';</script>");
} else {
    echo "Error deleting record: " . $con->error;
}
}


?>

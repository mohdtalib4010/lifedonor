<?php
session_start();
include('connection.php');

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}else{
     echo("<script>location.href = 'https://lifedonor.000webhostapp.com/index.php';</script>");
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
<style type="text/css">
  .data{
    margin-top: 100px;
  }
  .btn {
      margin-left:130px;
  }

</style>


</head>
<body>

<div class="container">
    <h1 class="text-white bg-dark text-center"> FIND YOUR  PERFECT BLOOD MATCH</h1>
   <br>
</div>
<!---modal Button -->  
<button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Find Donor</button>
<br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
         <form action="" method="post">
            <label for="blood">Choose your blood type :</label>
            <select class="form-control " name="btype">
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
            
            </select>
            <br>
             <input type="submit" value="Search" name="submit"> 
         </form> 
      </div>
      <div class="modal-footer">
       
      </div>
    </div>

  </div>
</div>















  <div class="container data">
  
   <div class="table-responsive ">
    <table class="table table-bordered table-striped table-hover table-sm">
      <thead>
      <th>Name</th>
      <th>Username</th>
      <th>Blood Type </th>

            </thead>

            <tbody>
             <?php
 include("connection.php");

if(isset($_POST['submit'])){
 $blood = $_POST['btype'];
             
error_reporting(0);
$query = "select * from data where bgroup = '$blood' ";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{   



  while ($result = mysqli_fetch_assoc($data)) {
      ?>

      <tr>
          
           
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['address']; ?></td>
               <td>
            <button> <a href="other_profile.php?ad=<?php echo $result['address'] ?> &em=<?php echo $result['email'] ?> &bt=<?php echo $result['bloodtype'] ?> &nm=<?php echo $result['name'] ?> &ln=<?php echo $result['lname'] ?> &un=<?php echo $result['username'] ?>  &pp=<?php echo $result['profilepic'] ?>  &pn=<?php echo $result['phone'] ?> ">View Profile </a> </button> </td>
               
             
      </tr>
      
       

          
     <?php
  }
}
}
?>

           
           
            
            </tbody> 
      
    </table>
    
   </div> 


  </div>

</body>
</html>
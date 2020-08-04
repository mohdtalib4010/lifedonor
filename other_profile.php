<?php
session_start();
include('connection.php');

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}else{
       header('Location: home.php');
 
}

/*
$query ="SELECT * FROM data WHERE username='$userprofile'";
$data =mysqli_query($con, $query);
$result = mysqli_fetch_assoc($data); */

//set variables for values

 $user = $_GET['un'];
 $name=  $_GET['nm'];
 $add=  $_GET['ad'];
 $email=  $_GET['em'];
 $pic=  $_GET['pp'];
 $phone= $_GET['pn'];


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
  .box{
    margin-top: 10px;
  }
  .card {
 /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
  max-width: 300px;
  margin: 20px;
  text-align: center;
  font-family: arial;
  border:none;
}

.title {
  color: grey;
  font-size: 18px;
}



.card a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
.container{
  height: 300px;
  width: 300px;
}
.box3{
  height: 150px;
}
.about{
  margin-left: 5px;
}
</style>
</head>
<body>
  <div class="container-fluid  box ">
    <div class="row">
      <div class="col-xl-3 bg-light">
            <div class="container">
          <img  src="<?php echo $pic; ?>"  class="rounded" alt="Chania" width="280" height="280"> 
          </div>
      </div>
      <div class="col-sm-9 ">
        
               
               <div class="col-sm-10 bg-light">
         <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#Profile">Profile</a>
                  </li>
                   
                   <li class="nav-item">
                      <a href="home.php" class="nav-link ">Home</a>
                  </li>
                
                   <li class="nav-item">
                      <a href="#msg.php" class="nav-link ">Message</a>
                  </li>
                 
                  </ul>
     
                 </div>
                 <div class="col-sm-10">
                   <div class="" style="border-bottom:1px solid black">
                            <h2><?php  echo $name ?></h2>
                          </div>
                            <hr>
                   <div class="col-md-8">  
                          <ul class=" details">
                            <li><p><span class="fa fa-phone"></span>&nbsp;<?php echo $phone ?></p></li>
                            <li><p><span class="fa fa-envelope-o"></span>&nbsp;<?php echo $email; ?></p></li>
                            <li><p><span class="fa fa-address-book-o"></span>&nbsp;<?php echo $add ?></p></li>
                            <li><p><span class="fa fa-calendar" ></span>&nbsp;DOB:&nbsp6/04/1998</p></li>
                          </ul>
                          </div>
                          
                    </div>





                 
           </div>
      </div>
      
    </div>
<!--  section 2 -->
    <div class="row">
             <div class="col-sm-3 bg-"> 
              <div class="container box3">
                  
                       
                            <p class="text-center text-info">Important Link</p>
                            <a href="#">Facebook</a><br/>
                            <a href="#">Linkdin</a><br/>
                            <a href="#">Instagram</a>
                           
                       
                   

              </div>  
             </div>
 
             <div class="col-sm-8 bg-light">
                <h1 class="about text-center text-info id= about "><i>Be a Hero</i></h1>
                <br>
                <div class="about">
                <p><i>“Blood Donation will cost you nothing, but it will save a life!”</i></p>
                <p><i> “If you really want to lend a hand, lend an arm.”</i></p>
                <p><i>“Never feel yourself weak, you have the ability to save a life. Just donate blood.”</i></p>
                </div>
            </div>
        </div>
        
        

  </div><br><br>
  <div class="col-sm-12 bg-dark"><br><br>
              <P class="text-center text-white" > Copyright @ 2020, by mtm4010</P>
    
  </div>
   

</body>
</html>
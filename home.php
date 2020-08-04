<?php
session_start();
include('connection.php');

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}else{
     echo("<script>location.href = 'https://lifedonor.000webhostapp.com/index.php';</script>");
}
?>


<html>
  <head>
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <style>
    *{
      padding: 0%; margin: 0%; box-sizing: border-box;
      font-family: 'Josefin Slab', serif;
   }
   html{
       scroll-behavior: smooth;
   }
       body {
     font-family: "Lato", sans-serif;

   }
   .box1{
       width: 100%;
       height: 900px;
       
       background-size: 100% 100%;
   }
   nav {
       height: 8vh;
       width: 100%;
       background-color: #aeb6bf;
       font-weight: 900;font-size: large; display: flex; justify-content: space-between; align-items: center; text-transform: uppercase;
       }
   nav .logo{
       width: 25%;
       text-align: center;
       margin-top: 20px;
       font-style: italic;
       font-size: 20px;
      
       
   }
   
   .sidenav {
     height: 100%;
     width: 0;
     position: fixed;
     z-index: 1;
     top: 0;
     right: 0;
     background-color: #111;
     overflow-x: hidden;
     transition: 0.5s;
     padding-top: 60px;
   }
   
   .sidenav a {
     padding: 8px 8px 8px 32px;
     text-decoration: none;
     font-size: 25px;
     color:#818181;
     display: block;
     transition: 0.3s;
   }
   
   .sidenav a:hover {
     color: #f1f1f1;
   }
   
   .sidenav .closebtn {
     position: absolute;
     top: 0;
     right: 25px;
     font-size: 36px;
     margin-left: 50px;
   }
   
   @media screen and (max-height: 450px) {
     .sidenav {padding-top: 15px;}
     .sidenav a {font-size: 18px;}
     nav .logo{margin-left: 20px;}
     .text {font-size: 11px}
     #col1{
       width: 50px;
     }
      nav {
       height: 9vh;
      }
   }
   .mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.icon{
                margin-right: 30px;
                font-size: 40px;
               
            }
            
            #contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;}
  #contact{
    background-color: white;
  }
  .card-body{
    background: white;
  }
  
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn { 
  background: rgba(0,0,0,0.5);
  color: white;
  padding: 15px 20px;
  margin-left: 80px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  width: 85%;
  text-align:center;
}

.btn:hover {
  opacity: 1;
}
#col1{
  width:390px;
  height:400px;
  margin-left: 100px;
}
/*code for teem mates8*/
.rowsetting{
 
 margin:80px 0px;
}
.rowsetting h2{
 margin: 10px;
 font-weight: bold;
 font-size: 30px;
}
.rowsetting p{
 padding: 10px;
 color: #6c757d!important;

}
/*.portfolio {
 height: 1100px;
 width: 100%;
 padding: 100px 0px 50px;

}*/
.portfolio h1{
 font-size: 50px;
 font-weight: bold;

}
.card{
 margin-top: 40px;
}
/*.ourteam{
 height: 700px;
 padding-top: 300px;
 width: 100%;
}*/
.ourteam h1{
 font-size: 50px;
 font-weight: bold;
}
.teamsetting{
 margin-top: 70px;
}
.ourteam p{
 color: red;
}
.footer{
 height: 50px;
}
.footer h6{
 line-height: 50px;
}

@media(min-width:459px ){
 
 .ourteam{
     height: 1000px;
 }

}
#contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;
}
#team {
  background-color: white;
}
#about{
  background-color:white;
}
#bg{
  background-image: url('img6.jpeg');

}
#foot{
  background:black;
}

   </style>
  </head>
  <body>
    <header>
      <nav>
      <div class="logo animated infinite heartBeat delay-2s text-light" style="margin-right: 10px;">LifeDonor</div>
      <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="donor_profile.php">Profile</a>
          <a href="filter.php">Find Donor</a>
          <a href="#about">Our Vission</a>
          <a href="#contact">Contact</a>
          <a href="#team">Our Teams</a>
          <a href="logout.php">Logout</a>
        </div>
        <span class="icon" style="cursor:pointer" onclick="openNav()">&#9776; </span>
        </nav>


          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="pics/bgslide1.jpeg" alt="First slide" style="height: 600px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="pics/bgslide2.jpeg" alt="Second slide" style="height: 600px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="pics/bgslide3.jpeg" alt="Third slide" style="height: 600px;">
              </div>
            </div>
        <!--    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>--->
          </div> 
         
          
         
           </header>
           </div><br>
 <div class="container-fluid bg-light" >
                <br><br>
               
                  
                <div class="container-fluid " id="about" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <br>
                  <h1 style="text-align: center;">Our Vision</h1>
                  <br><br>
                  <div class="row">
                   
                      <div class="col-l-12 col-12">
                         <h3 style="font-style: italic;font-weight: bold;text-align: center;"> <p>“Anybody can give blood”</p>
                        <p>“Bring a life back to power. ... </p>
                      <p>“Spare only 15 minutes and save one life” ... </p>
                    <p>“Heroes come in all types and sizes” ... </p>
                  <p>“Anybody can save lives”</p> </h3> 
                      </div>
                  </div>
                  </div>
                
                <br><br><br>
               
                <section id="contact">
                  <div class="container-fluid " style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      <br>
                      <h3 class="text-center text-uppercase">contact us</h3>
                     
                      <p class="text-center w-75 m-auto"style="font-weight:bold;">You can contact our team whenever you need by giving below details </p>
                      <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                          <div class="card border-0">
                             <div class="card-body text-center">
                               <i class="fa fa-phone fa-3x mb-3" aria-hidden="true"></i>
                               <h4 class="text-uppercase mb-5">call us</h4>
                               <p>8318057891, 9721300396</p>
                             </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                          <div class="card border-0">
                             <div class="card-body text-center">
                               <i class="fa fa-map-marker fa-3x mb-3" aria-hidden="true"></i>
                               <h4 class="text-uppercase mb-5">office loaction</h4>
                              <address>Kalyanpur ,Kanpur UP </address>
                             </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                          <div class="card border-0">
                             <div class="card-body text-center">
                               <i class="fa fa-map-marker fa-3x mb-3" aria-hidden="true"></i>
                               <h4 class="text-uppercase mb-5">office loaction</h4>
                               <address>Fathegarh , Farukhabad UP </address>
                             </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                          <div class="card border-0">
                             <div class="card-body text-center">
                               <i class="fa fa-globe fa-3x mb-3" aria-hidden="true"></i>
                               <h4 class="text-uppercase mb-5">email</h4>
                               <p>mohdtalib4010@gmail.com , Saifulmansoori777@gmail.com</p>
                             </div>
                           </div>
                        </div>
                      </div>
                  </div>
               </section>         
                <br><br><br>
                      
                     <div class="container-fluid text-center " id="team" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <h1>Our team mates</h1>
                        <div class="row teamsetting">
                           <div class="col-lg-6 col-md-4 col-sm-10 col-12 d-block m-auto" id="team">
                              <figure class="figure">
                                  <img src="pics/mohi.jpeg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
                                  <figcaption>
                                      <h4> Mohd Talib</h4>
                                      <p class="figure-caption">Web developer</p>
                                  </figcaption>
                              </figure>
                          </div>
                          <div class="col-lg-6 col-md-4 col-sm-10 col-12 d-block m-auto" id="team">
                            <figure class="figure">
                                <img src="pics/saiful.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
                                <figcaption>
                                    <h4> Saiful Mansoori</h4>
                                    <p class="figure-caption">Web developer</p>
                                </figcaption>
                            </figure>
                        </div>
                      </div>
                    </div>
                    
                 
                  
              <br><br>
            </div>  
              <footer class="footer" id="foot">
                  <h6 class="text-center bg-light text-dark">
                  Copyright @ 2020, by mtm4010</h6>
              </footer>
               
               
          </body>
        <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
       
      </script>
  </body>
</html>
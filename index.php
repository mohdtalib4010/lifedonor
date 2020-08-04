<html>
    <head>
        <title>
        </title>
        
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
<style>
   *{
   padding: 0%; margin: 0%; box-sizing: border-box;
   font-family: 'Josefin Slab', serif;
}
    body {
  font-family: "Lato", sans-serif;
}
header{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)), url(pics/bg.jpeg);
    background-size: 100% 100%;
}
nav {
    height: 15vh;
    width: 100%;
    background-color: rgba(0,0,0,0.2);
    color: white; display: flex; justify-content: space-between; align-items: center; text-transform: uppercase;
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
  color: #818181;
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
  .change_content{font-size: 30px;}
  .icon{font-size: 30px;}
  nav .logo{margin-left: 20px;}

}
main{
                width: 100%;
                height: 85vh;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                color: white;
            }
            section {
            
            }
            section h3{
                font-size: 35px; font-weight: 300px; letter-spacing: 3px;
                text-shadow: 1px 1px 2px black;
            }
            section h1{
                font-size: 55px; font-weight: 700px; letter-spacing: 3px;
                text-shadow: 2px 1px 5px black;
                margin: 30px 0px 20px 0px;
                text-transform: uppercase;
            }
            /**section p{
                font-size: 25px; word-spacing: 2px;
                margin-bottom: 25px;
                text-shadow: 1px 1px 1px black;
            }**/
            section a{
                padding: 12px 30px;
                border-radius: 4px;
                outline: none;
                text-transform: uppercase;
                font-size: 13px;
                font-weight: 300;
                text-decoration: none;
                letter-spacing: 1px;
                transition: all .5s ease;
            }
            section .btnone{
                background: #fff;
                color: #000;
            }
            .btnone:hover{
                background: #fff;
                color: #000;
            }
            section .btntwo{
                background: #00b894;
                color: white; 
            }
            .btntwo:hover{
                background: #fff;
                color: #000;
            }
            .change_content::after{
                content: '';
                animation: changetext 10s infinite linear;
                color: #00b894;
                font-size: 60px;
                text-shadow: 2px 1px 5px black;
            }
            @keyframes changetext{
                0%{content: "Give blood Save a life";}
                30%{content: "Be a hero donate blood" ;}
                60%{content: "Every drop count";}
                100%{content: "India needs more donors";}
            }
            .icon{
                margin-right: 30px;
                font-size: 40px;
               
            }

</style>
</head>    
    <body>
        <header>
            <nav>
        <div class="logo animated infinite heartBeat delay-2s">Life donor</div>
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           
            <p class="text-white text-center">
            Plz login or signup to
            know more..
                
                
                
            </p>
           
           
            <!--    <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a> -->
              </div> 
              <span class="icon" style="cursor:pointer" onclick="openNav()">&#9776; </span> 
              </nav>
              <main>
                <section>
                    <h3 class="logo animated infinite zoomIn delay-2s">Save a life give blood</h3>
                    <span class="change_content"></span>
                    <p>india once not a enough</p>
                    <a href="login.php" class="btnone">log in</a>
                    <a href="signup.php" class="btntwo">sign up</a>
                </section>
            </main>
              </header>
              
              
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
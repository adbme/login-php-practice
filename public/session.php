<?php

session_start();
  if (@$_SESSION["autoriser"] != "oui"){
    header('Location: index.php');
    exit();

  }      
   $username = $_SESSION['user'];
  $password = $_SESSION['pass'];

//  echo "Le username est : "  .$username;
//  echo "Votre mot de passe ultra sécur est : " .$password;


  ?>
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- container -->
<div class="container-fluid">

<!-- row -->
<div class="row h-100">

    <!-- 25% -->
    <div class="col-3 p-3 d-flex flex-column" style="background-color: #101010;">
    
    <div class="text-center py-4 hoverGeneral">
    <h1 class="text-white">Portal</h1>
    </div>

    <div class="text-center py-3 hoverGeneral">
    <?php require "pp.php" ?>
    <!-- <img src="/images/session/pp.svg" class="rounded-circle" style="width: 100px; height: 100px;"> -->
    </div>

    <div class="text-center py-2 bg-dark hoverGeneral"  style="margin-top:40px; border-radius : 6px;">
    <div class="text-white" style="font-size:20px"><?php echo $username ?></div>
    </div>

    <div class="text-center py-2 bg-dark hoverGeneral" style="margin-top:40px; border-radius : 6px;">
    <div class="text-white"> 
      <input style="background-color: transparent; border: none; color:white; font-size:20px" style="text-decoration:none; background-color: ; width:40%" type="password" id="password" value="<?php echo $password ?>" readonly> 
      <input style="height:20px; width:20px" type="checkbox" id="showPassword" onclick="togglePassword()">
    </div>
 
    </div>
   

<script>
  let showPassword = false;

  function togglePassword() {
    let passwordField = document.getElementById("password");
    let checkbox = document.getElementById("showPassword");
    showPassword = checkbox.checked;

    if (showPassword) {
      passwordField.type = "text";
      console.log("visible")
    } else {
      passwordField.type = "password";
      console.log("pass")
    }
  }
</script>





   
    <div class="text-center py-3 hover" style="transition:0.3s">
      <style>
        .hover:hover{
          transform: scale(1.2)
        }
      </style>
     <a href="https://github.com/adbme"><img src="/images/session/github.svg" class="rounded" style="width: 80px; height: 80px;">
      </a></div>
  

    <div class="text-center mt-auto mb-3 align-items-end hoverLogout">
    <a href="deconnexion.php">
    <style>
      .hoverLogout{
        transition:0.3s
      }
        .hoverLogout:hover{
          transform: scale(1.9)
        }
      </style>
    <button class="btn btn-danger">Logout</button></a>
    </div>



    </div>



<!-- 75% -->

<style>
         .hoverGeneral{
          transition:0.3s
        }
        .hoverGeneral:hover{
          transform: scale(1.049)
        }

      </style>
       
    <div class="col-9 p-3" style="background-color: black;">

    <div class="row">
            
        <div class="col-sm-6 mt-4" >
          <a href="/pages/page.php">
        <div class="card text-center bg-dark text-white hoverGeneral">
            <img src="/images/session/ttsrooms.svg" class="card-img img-fluid  mx-auto mt-3" style="background-color: transparent; border: none; width:88px">
            <div class="card-body">
                
            </div>
        </div>
          </a>
        </div>

        <div class="col-sm-6 mt-4">
          <a href="/pages/page.php">
        <div class="card text-center bg-dark text-white hoverGeneral">
            <img src="/images/session/sharestorm.svg" class="card-img img-fluid mx-auto mt-3" style="background-color: transparent; border: none; width:100px">
            <div class="card-body">
                
            </div>
        </div>
          </a>
        </div>    

        </div>


        <div class="row">
            
        <div class="col-sm-6 mt-4">
          <a href="/pages/page.php">
        <div class="card text-center bg-dark text-white hoverGeneral">
            <img src="/images/session/gherbi.svg" class="card-img img-fluid  mx-auto mt-3" style="background-color: transparent; border: none; width:140px">
            <div class="card-body">
                
            </div>
        </div>
          </a>
        </div>

        <div class="col-sm-6 mt-4" >
          <a href="/pages/page.php">
        <div class="card text-center bg-dark text-white hoverGeneral">
            <img src="/images/session/tts.svg" class="card-img img-fluid  mx-auto mt-3" style="background-color: transparent; border: none;width:88px">
            <div class="card-body">
                
            </div>
        </div>
          </a>
        </div>    

        </div>


        <div class="row">
            
        <div class="col-sm-6 mt-4">
          <a href="/pages/page.php">
        <div class="card text-center bg-dark text-white hoverGeneral">
            <img src="/images/session/shonentime.svg" class="card-img img-fluid  mx-auto mt-3" style="background-color: transparent; border: none; width:190px; padding:20px">
            <div class="card-body">
                
            </div>
        </div>
          </a>
        </div>

        <div class="col-sm-6 mt-4">
          
        <div class="card text-center bg-dark text-white hoverGeneral" style="height:150px;">
            <h1>...</h1>
            <div class="card-body">
 
            </div>
        </div>
         
        </div>    
         </div>



    </div>
   
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

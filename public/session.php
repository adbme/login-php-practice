<?php

// if (isset($_POST['submit']))
// {
//     $username = ($_POST['username']);
//     $password = ($_POST['password']);

//     echo "Le username est : "  .$username;
//     echo "Votre mot de passe ultra sécur est : " .$password;

// }
session_start();
  if (@$_SESSION["autoriser"] != "oui"){
    header('Location: index.php');
    exit();
  }
  ?>

  <h1>page session</h1>

  <a href="deconnexion.php"><h1>déco</h1>
</a>
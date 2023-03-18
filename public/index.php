<?php
session_start();

if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == "ad" && $password == "test"){
    $_SESSION["autoriser"] = "oui";
    header('Location: session.php');

    exit();
  } else {
    $message = "Nom d'utilisateur ou mot de passe incorrect.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>php practice 1 / login</title>
  <link rel="stylesheet" href="/style/main.css">
</head>
<body>
  <header>
    <h1>php practice 1 / login</h1>
    <img src="../images/pig.gif" alt="">
  </header>

  <form method="POST" action="">
            <h3>LOGIN</h3>

            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">

            <button type="submit" name="submit">Log In</button>
           
        </form>
        
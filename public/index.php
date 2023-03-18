<?php
session_start();

if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == "adil" && $password == "test"){
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

  <div class="container">
    <div class="form">
      <form method="POST" action="">
        <div class="form-group">
          <div class="input-div"></div>
          <img class="images-input"  src="/images/user.png" />
          <input type="text" name="username" placeholder="Nom d'utilisateur" />
        </div>
        <div class="form-group">
          <div class="input-div"></div>
          <img  src="/images/password.png" />
          <input type="password" name="password" placeholder="Mot de passe" />
        </div>
        <button type="submit" name="submit">Se connecter</button>
      </form>
      <div class="signup-link">
        <a href="#">Créer un compte</a>
      </div>
      <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
    </div>
  </div>
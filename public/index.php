<?php



?>
<header><h1>php practice 1 / login</h1> <img src="../images/pig.gif" alt=""></header>


<link rel="stylesheet" href="/style/main.css
">

<div class="container">

  <div class="form">
    <form method="POST" action="/login.php">
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
  </div>
</div>



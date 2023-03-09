<?php

if (isset($_POST['submit']))
{
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    echo "Le username est : "  .$username;
    echo "Votre mot de passe ultra sécur est : " .$password;

}

?>
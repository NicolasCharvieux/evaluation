<?php
include "template/header.php";
?>

<h1>ACCUEIL</h1>

<form action="/db/users.php" method="POST">
    <label for="username">Nom :</label><br>
    <input type="text" placeholder="Votre nom" name="username" required><br><br>

    <label for="username">Email :</label><br>
    <input type="email" placeholder="Email" name="email" required><br><br>

    <label for="username">Mot de passe :</label><br>
    <input type="password" placeholder="Mot de passe" name="password" required><br><br>

    <label for="username">Numéro de téléphone :</label><br>
    <input type="number" placeholder="Numéro de téléphone" name="phone" required><br><br>

    <input type="submit" value="Envoyer">
</form>
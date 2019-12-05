<?php

        //todo   Variable de connexion.
$user = 'root';
$password = 'ohio2805';
        
        //todo   Essayez de vous connecter à notre base de données.
$dbConnect = new PDO('mysql:host=localhost;dbname=eval', $user, $password);
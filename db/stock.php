<?php
//if(isset($_POST) && !empty($_POST)) {
    include "connect.php";

            //! Requête SQL permettant d'insérer des données dans notre table users, en utilisant des données de substitution.
    $query = "insert into users (name, email, phone, role_id) values (:name, :email, :phone, :role_id)";

    $createUser = $dbConnect->prepare($query);

            //! Remplacement des données de substitution par les données de formulaire reçues.
    $createUser->bindParam(":name", $_POST['name']);
    $createUser->bindParam(":email", $_POST['email']);
    $createUser->bindParam(":phone", $_POST['phone']);
    $createUser->bindParam(":role_id", $_POST['role_id']);

            //! Envoie en base de donnée.
    $createUser->execute();
//} else {
            //! Redirection une fois l'utilisteur inséré en DB.
    header('Location: users.php');
//}
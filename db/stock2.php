<?php
//if(isset($_POST) && !empty($_POST)) {
    include "connect.php";

            //! Requête SQL permettant d'insérer des données dans notre table roles, en utilisant des données de substitution.
    $query = "insert into roles (name, id) values (:name, :id)";

    $createRole_id = $dbConnect->prepare($query);

            //! Remplacement des données de substitution par les données de formulaire reçues.
    $createRole_id->bindParam(":name", $_POST['name']);
    $createRole_id->bindParam(":id", $_POST['id']);
//var_dump($_POST);die;
            //! Envoie en base de donnée.
    $createRole_id->execute();
//} else {
            //! Redirection une fois le rôle inséré en DB.
    header('Location: role.php');
//}
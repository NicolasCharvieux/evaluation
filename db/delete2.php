<?php
//if(isset($_POST) && !empty($_POST)) {
    include 'connect.php';

            //! Requete SQL qui permet de supprimer une donnée dans la table users dont l'ID est == à l'ID récupéré dans l'input hidden.
    $query = "DELETE FROM roles WHERE id = :role_id";

    $deleteRole_id = $dbConnect->prepare($query);

            //! Liaison de la donnée reçue en POST avec la donnée de substitution.
    $deleteRole_id->bindParam(":role_id", $_POST['role_id']);

    $deleteRole_id->execute();
//} else {
    header('Location: role.php');
//}
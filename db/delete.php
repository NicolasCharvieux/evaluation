<?php
//if(isset($_POST) && !empty($_POST)) {
    include 'connect.php';

            //! Requete SQL qui permet de supprimer une donnée dans la table users dont l'ID est == à l'ID récupéré dans l'input hidden.
    $query = "DELETE FROM users WHERE id = :user_id";

    $deleteUser = $dbConnect->prepare($query);

            //! Liaison de la donnée reçue en POST avec la donnée de substitution.
    $deleteUser->bindParam(":user_id", $_POST['user_id']);

    $deleteUser->execute();
//} else {
    header('Location: users.php');
//}
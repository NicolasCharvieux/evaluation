<?php

include '../template/header.php';
include 'connect.php';

        //todo   Créez une requête qui affiche tous les utilisateurs de notre table 'users'.
$query = "SELECT * FROM users";

        //todo   Préparez cette requête avant de l'exécuter.
$preparedQuery = $dbConnect->prepare($query);

        //todo   Exécuter la requête.
$preparedQuery->execute();

        //todo Afficher tous les utilisateurs et stock dans une variable $users.
$users = $preparedQuery->fetchAll();
?>

<h1>UTILISATEURS</h1>

<h2>Tableau des Utilisateurs</h2>
​
<table>
  <tr>
    <th>Nom</th>
    <th>Email</th>
    <th>Numéro de téléphone</th>
    <th>Rôle_id</th>
    <th>Modification</th>
    <th>Suppression</th>
  </tr>
<?php
    foreach($users as $user) { ?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><?php echo $user['role_id']; ?></td>
            <td>
              <form action="modif.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <input type="submit" value="Modifier">
              </form>
            </td>
            <td>
            <form action="delete.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <input type="submit" value="X">
              </form>
            </td>
        </tr>
<?php } ?>
</table>

<?php
include "../template/footer.php";
?>
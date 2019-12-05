<?php

include '../template/header.php';
include 'connect.php';

        //todo   Créez une requête qui affiche tous les utilisateurs de notre table 'users'.
$query = "SELECT * FROM roles";

        //todo   Préparez cette requête avant de l'exécuter.
$preparedQuery = $dbConnect->prepare($query);

        //todo   Exécuter la requête.
$preparedQuery->execute();

        //todo Afficher tous les utilisateurss et stock dans une variable $users.
$roles = $preparedQuery->fetchAll();
?>

<h1>RÔLES</h1>

<h2>Tableau des Rôles</h2>
​
<table>
  <tr>
    <th>ID</th>
    <th>Nom du rôle</th>
    <th>Modification</th>
    <th>Suppression</th>
  </tr>
<?php
    foreach($roles as $role) { ?>
        <tr>
            <td><?php echo $role['id']; ?></td>
            <td><?php echo $role['name']; ?></td>
            <td>
              <form action="modif2.php" method="POST">
                <input type="hidden" name="role_id" value="<?php echo $role['id']; ?>">
                <input type="submit" value="Modifier">
              </form>
            </td>
            <td>
            <form action="delete.php" method="POST">
                <input type="hidden" name="role_id" value="<?php echo $role['id']; ?>">
                <input type="submit" value="X">
              </form>
            </td>
        </tr>
<?php } ?>
</table>

<?php
include "../template/footer.php";
?>
<?php

if(isset($_POST) && !empty($_POST)) {
    include "../template/header.php";
    include "connect.php";

    $query = "SELECT * FROM roles WHERE id = :role_id";

    $modifRole_id = $dbConnect->prepare($query);

    $modifRole_id->bindParam(":role_id", $_POST['role_id']);

    $modifRole_id->execute();

    $role_id = $modifRole_id->fetch();

    ?>

    <h1>MODIFICATION DES RÔLES</h1>


    <form action="maj2.php" method="POST">
        <input type="hidden" name="role_id" value="<?php echo $role_id['id']; ?>">
        <div class="form-group">
            <label for="name">Nom du rôle : </label>
            <input class="form-control" type="text" required name="name" value="<?php echo $role_id['name']; ?>"><br><br>
        </div>
        <div class="form-group">
            <label for="id">ID : </label>
            <input class="form-control" type="number" required name="id" value="<?php echo $role_id['id']; ?>"><br><br>
        </div>

        <input class="btn btn-primary" type="submit" value="Modifier">
    </form>
<?php
} else {
    header('Location: role.php');
}
?>

<?php
include "../template/footer.php";
?>
<?php

if(isset($_POST) && !empty($_POST)) {
    include "../template/header.php";
    include "connect.php";

    $query = "SELECT * FROM users WHERE id = :user_id";

    $modifUser = $dbConnect->prepare($query);

    $modifUser->bindParam(":user_id", $_POST['user_id']);

    $modifUser->execute();

    $user = $modifUser->fetch();

    ?>

    <h1>MODIFICATION DES UTILISATEURS</h1>


    <form action="maj.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="name">Nom de l'utilisateur : </label>
            <input class="form-control" type="text" required name="name" value="<?php echo $user['name']; ?>"><br><br>
        </div>
        <div class="form-group">
            <label for="email">Email : </label>
            <input class="form-control" type="email" required name="email" value="<?php echo $user['email']; ?>"><br><br>
        </div>
        <div class="form-group">
            <label for="phone">Numéro de téléphone : </label>
            <input class="form-control" type="number" required name="phone" value="<?php echo $user['phone']; ?>"><br><br>
        </div>
        <div class="form-group">
            <label for="role_id">ID du role : </label>
            <input class="form-control" type="text" required name="role_id" value="<?php echo $user['role_id']; ?>"
            ><br><br>
        </div>

        <input class="btn btn-primary" type="submit" value="Modifier">
    </form>
<?php
} else {
    header('Location: users.php');
}
?>

<?php
include "../template/footer.php";
?>
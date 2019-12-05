<?php
include "../template/header.php";
?>

<h1>CRÉATION</h1>

<form action="stock.php" method="POST">
    <div class="form-group">
        <label for="name">Nom de l'utilisateur : </label>
        <input class="form-control" type="text" required name="name"><br><br>
    </div>
    <div class="form-group">
        <label for="email">Email de l'utilisateur : </label>
        <input class="form-control" type="email" required name="email"><br><br>
    </div>
    <div class="form-group">
        <label for="phone">Numéro de téléphone : </label>
        <input class="form-control" type="number" required name="phone"><br><br>
    </div>
    <div class="form-group">
        <label for="role_id">ID du rôle : </label>
        <input class="form-control" type="text" required name="role_id"><br><br>
    </div>

    <input class="btn btn-primary" type="submit" value="Créer">
</form>

<?php
include "../template/footer.php";
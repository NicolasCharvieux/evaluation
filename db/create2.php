<?php
include "../template/header.php";
?>

<h1>CRÉATION DU RÔLE</h1>

<form action="stock2.php" method="POST">
    <div class="form-group">
        <label for="name">Nom du rôle : </label>
        <input class="form-control" type="text" required name="name"><br><br>
    </div>
    <div class="form-group">
        <label for="id">ID du rôle : </label>
        <input class="form-control" type="number" required name="id"><br><br>
    </div>

    <input class="btn btn-primary" type="submit" value="Créer">
</form>

<?php
include "../template/footer.php";
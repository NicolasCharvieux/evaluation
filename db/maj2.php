<?php

include "connect.php";

$query = "UPDATE roles SET
    name = :name,
    id = :id
WHERE id = :role_id;";

$updateRole_id = $dbConnect->prepare($query);

$updateRole_id->bindParam(":name", $_POST['name']);
$updateRole_id->bindParam(":id", $_POST['id']);
$updateRole_id->bindParam(":role_id", $_POST['role_id']);

$updateRole_id->execute();

header('Location: role.php');
<?php

include "connect.php";

$query = "UPDATE users SET
    name = :name,
    email = :email,
    phone = :phone,
    role_id = :role_id
WHERE id = :user_id;";

$updateUser = $dbConnect->prepare($query);

$updateUser->bindParam(":name", $_POST['name']);
$updateUser->bindParam(":email", $_POST['email']);
$updateUser->bindParam(":phone", $_POST['phone']);
$updateUser->bindParam(":role_id", $_POST['role_id']);
$updateUser->bindParam(":user_id", $_POST['user_id']);

$updateUser->execute();

header('Location: users.php');
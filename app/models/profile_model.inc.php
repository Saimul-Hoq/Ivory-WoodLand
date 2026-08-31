<?php

function getUser($pdo, $id){

    $query = "SELECT * FROM user WHERE id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function updatePassword(Object $pdo, string $id, string $password){

    $options = ["cost" => 12];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

    $query = "UPDATE user SET password = :password WHERE id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":password", $hashed_password);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

}
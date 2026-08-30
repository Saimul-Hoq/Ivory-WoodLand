<?php

function getMobile(Object $pdo, string $mobile){

    $query = "SELECT mobile FROM user WHERE mobile = :mobile;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":mobile", $mobile);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(Object $pdo, string $email){

    $query = "SELECT email FROM user WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(Object $pdo, string $id, string $email, string $password, string $name, string $mobile, string $address, int $amount, string $avatar, int $role, string $registered_by){

    $options = ["cost" => 12];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

   

    $query = "INSERT INTO user (id, email, password, name, mobile, address, amount, avatar, role, registered_by) VALUES (:id, :email, :password, :name, :mobile, :address, :amount, :avatar, :role, :registered_by);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashed_password);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":mobile", $mobile);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":amount", $amount, PDO::PARAM_INT);
    $stmt->bindParam(":avatar", $avatar);
    $stmt->bindParam(":role", $role, PDO::PARAM_INT);
    $stmt->bindParam(":registered_by", $registered_by);

    $stmt->execute();

}
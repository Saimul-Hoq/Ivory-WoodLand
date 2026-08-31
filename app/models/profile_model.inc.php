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


function updateName(Object $pdo, string $id, string $name){

    $query = "UPDATE user SET name = :name WHERE id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

}

function mobileExists($pdo, $id, $mobile){

    $query = "SELECT id FROM user WHERE mobile = :mobile AND id != :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":mobile", $mobile);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
}

function updateMobile(Object $pdo, string $id, string $mobile){

    $query = "UPDATE user SET mobile = :mobile WHERE id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":mobile", $mobile);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

}

function updateAddress(Object $pdo, string $id, string $address){

    $query = "UPDATE user SET address = :address WHERE id = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

}
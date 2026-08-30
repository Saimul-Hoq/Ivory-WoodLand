<?php

function is_input_empty(&$errors, $email, $password){
    $flag = false;
    if(empty($email)){
        $errors["email"] = "Email Required";
        $flag = true;
    }
    if(empty($password)){
        $errors["password"] = "Password Required";
        $flag = true;
    }

    return $flag;
}


function is_credentials_invalid(&$errors, $pdo, $email, $password){

    $user = get_user($pdo, $email);
    if(!$user){
        $errors["email"] = "Email is not registered.";
        return true;
    }
    if(!password_verify($password, $user["password"])){
        $errors["password"] = "Incorrect Password";
        return true;
    }
    $_SESSION["name"] = $user["name"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["id"] = $user["id"];
    return false;
}   
<?php

function isInputEmpty(&$errors, $currentPassword, $newPassword, $confirmPassword){
    $flag = false;
    if(empty($currentPassword)){
        $errors["currentPassword"] = "Current Password Required";
        $flag = true;
    }
    if(empty($newPassword)){
        $errors["newPassword"] = "New Password Required";
        $flag = true;
    }
    if(empty($confirmPassword)){
        $errors["confirmPassword"] = "Confirm Password Required";
        $flag = true;
    }

    return $flag;
}

function isUserInvalid(&$errors, $pdo, $id, $currentPassword){
    $user = getUser($pdo, $id);
    if(!password_verify($currentPassword, $user["password"])){
        $errors["currentPassword"] = "Incorrect Password";
        return true;
    }
    else{
        return false;
    }
}

function isPasswordInvalid(&$errors, $newPassword){
    if(strlen($newPassword) < 4){
        $errors["newPassword"] = "Password must be at least 4 characters";
        return true;
    }
    else{
        return false;
    }

}

function isConfirmPasswordInvalid(&$errors, $newPassword, $confirmPassword){
    if($newPassword !== $confirmPassword){
        $errors["confirmPassword"] = "Confirm Password is not matched";
        return true;
    }
    else{
        return false;
    }
}

function changePassword($pdo, $id, $password){
    updatePassword($pdo, $id, $password);
}

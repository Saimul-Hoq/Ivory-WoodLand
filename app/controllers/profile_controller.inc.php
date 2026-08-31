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

function isNameEmpty(&$errors, $newName){
    if(empty($newName)){
        $errors["editName"] = "Name Required";
        return true;
    }
    return false;
}

function isNameInvalid(&$errors, $newName){
    if(strlen($newName) < 2){
        $errors["editName"] = "Name must be at least 2 characters";
        return true;
    }
    if(strlen($newName) > 50){
        $errors["editName"] = "Name must be less than 50 characters";
        return true;
    }
    if(!preg_match("/^[a-zA-Z\s.'-]+$/", $newName)){
        $errors["editName"] = "Name contains invalid characters";
        return true;
    }
    return false;
}

function changeName($pdo, $id, $name){
    updateName($pdo, $id, $name);
}

function isMobileEmpty(&$errors, $newMobile){
    if(empty($newMobile)){
        $errors["editMobile"] = "Mobile Number Required";
        return true;
    }
    return false;
}

function isMobileInvalid(&$errors, $newMobile){
    if(!preg_match('/^01\d{9}$/', $newMobile)){
        $errors["editMobile"] = "Enter a valid Mobile Number";
        return true;
    }
    return false;
}

function isSameMobile($pdo, $id, $newMobile){
    $user = getUser($pdo, $id);
    return $user["mobile"] === $newMobile;
}

function isMobileTaken(&$errors, $pdo, $id, $newMobile){
    if(mobileExists($pdo, $id, $newMobile)){
        $errors["editMobile"] = "This Mobile Number is already in use";
        return true;
    }
    return false;
}

function changeMobile($pdo, $id, $mobile){
    updateMobile($pdo, $id, $mobile);
}

function isAddressEmpty(&$errors, $newAddress){
    if(empty($newAddress)){
        $errors["editAddress"] = "Address Required";
        return true;
    }
    return false;
}

function changeAddress($pdo, $id, $address){
    updateAddress($pdo, $id, $address);
}

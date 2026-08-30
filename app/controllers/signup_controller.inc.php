<?php

function generateUnqId() {
    $data = random_bytes(16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // version 4
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // variant

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

// signup_controller.inc.php

function isAvatarInvalid(&$errors, &$avatarFilename, $id, $avatarTmpPath, $avatarOriginalName, $avatarSize, $avatarMimeFromClient){
    $realMime = mime_content_type($avatarTmpPath);
    $allowedMimes = [
        "image/jpeg" => "jpg",
        "image/png"  => "png",
        "image/webp" => "webp",
    ];
    if (!array_key_exists($realMime, $allowedMimes)) {
        $errors["avatar"] = "Invalid file type";
        return true;
    }
    if ($avatarSize > 2 * 1024 * 1024) {
        $errors['avatar'] = "File too large. File must be within 2MB";
        return true;
    }

    $ext = $allowedMimes[$realMime];
    $avatarFilename = "user_".$id.".".$ext;
   
    return false;
}

function saveAvatarFile($avatarTmpPath, &$avatarFilename){
    $destination = __DIR__."/../../public/uploads/profiles/".$avatarFilename;
    if(!move_uploaded_file($avatarTmpPath, $destination)){
       $avatarFilename = "default.png";
    }
}


function isInputEmpty(&$errors, $name, $email, $password, $mobile, $address){
    $flag = false;
    if(empty($name)){
        $errors['name'] = "Name is required";
        $flag = true;
    }
    if(empty($email)){
        $errors['email'] = "Email is required";
        $flag = true;
    }
    if(empty($password)){
        $errors['password'] = "Password is required";
        $flag = true;
    }
    if(empty($mobile)){
        $errors['mobile'] = "Mobile Number is required";
        $flag = true;
    }
    if(empty($address)){
        $errors['address'] = "Address is required";
        $flag = true;
    }

    return $flag;
}

function isMobileInvalid(&$errors, $mobile){

    if(!preg_match('/^01\d{9}$/', $mobile)){
        $errors["mobile"] = "Invalid Mobile Number";
        return true;
    }else{
        return false;
    }
}

function isEmailInvalid(&$errors, $email){

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Invalid Email";
        return true;
    }else{
        return false;
    }
}

function isEmailTaken(&$errors, $pdo, $email){
    if(getEmail($pdo, $email)){
        $errors["email"] = "This email is already registered";
        return true;
    }
    else{
        return false;
    }
}

function isMobileTaken(&$errors, $pdo, $mobile){
    if(getMobile($pdo, $mobile)){
        $errors["mobile"] = "This mobile number is already registered.";
        return true;
    }
    else{
        return false;
    }
}

function isPasswordInvalid(&$errors, $password){
    if(strlen($password)<4){
        $errors["password"] = "Password must be at least 4 characters";
        return true;
    }
    else{
        return false;
    }
}

function createUser( $pdo,  $id,  $email,  $password,  $name,  $mobile,  $address,  $amount,  $avatar,  $role,  $registered_by){
    setUser($pdo,  $id,  $email,  $password,  $name,  $mobile,  $address,  $amount,  $avatar,  $role,  $registered_by);
}
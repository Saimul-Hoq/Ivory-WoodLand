<?php
require_once(__DIR__."/../config/session.inc.php");
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid Request Method"]);
    die();
}

$name = trim($_POST["name"]?? "");
$email = trim($_POST["email"]?? "");
$password = trim($_POST["password"]?? "");
$mobile = trim($_POST["mobile"]?? "");
$address = trim($_POST["address"]?? "");
$amount = 0;
$role = 1;
$avatarFilename = null;
try{

    require_once(__DIR__."/../config/database.inc.php");
    require_once(__DIR__."/../models/signup_model.inc.php");
    require_once(__DIR__."/../controllers/signup_controller.inc.php");
    $id = generateUnqId();
    $registered_by = $id;

    $errors = [];
    if(isInputEmpty($errors, $name, $email, $password, $mobile, $address)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }
    
    if(isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] === UPLOAD_ERR_OK){
        $avatarTmpPath = $_FILES["avatar"]["tmp_name"];
        $avatarOriginalName = $_FILES["avatar"]["name"];
        $avatarSize = $_FILES["avatar"]["size"];
        $avatarMimeFromClient = $_FILES["avatar"]["type"];

        if(isAvatarInvalid($errors, $avatarFilename, $id, $avatarTmpPath, $avatarOriginalName, $avatarSize, $avatarMimeFromClient)){
            echo json_encode(["success" => false, "errors" => $errors]);
            die();
        }
    }
    else{
        $avatarFilename =  "default.png";
    }

    if(isEmailInvalid($errors, $email) || isMobileInvalid($errors, $mobile) || isPasswordInvalid($errors, $password)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }


    if(isEmailTaken($errors, $pdo, $email) || isMobileTaken($errors, $pdo, $mobile)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

    if(isset($avatarTmpPath)){
        saveAvatarFile($avatarTmpPath, $avatarFilename);
    }
    createUser($pdo,  $id,  $email,  $password,  $name,  $mobile,  $address,  $amount,  $avatarFilename,  $role,  $registered_by);
    echo json_encode(["success" => true]);

}
catch(PDOException $e){
    error_log("Signup Error: ".$e->getMessage());
    echo json_encode(["success" => false, "message" => "Something Went Wrong"]);
    die();
}




<?php

require_once(__DIR__."/../config/session.inc.php");
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid Request Method"]);
    die();
}

$currentPassword = trim($_POST["currentPassword"]?? "");
$newPassword = trim($_POST["newPassword"]?? "");
$confirmPassword = trim($_POST["confirmPassword"]?? "");

try{

    require_once(__DIR__."/../config/database.inc.php");
    require_once(__DIR__."/../models/profile_model.inc.php");
    require_once(__DIR__."/../controllers/profile_controller.inc.php");

    $errors = [];

    //isEmpty:
    if(isInputEmpty($errors, $currentPassword, $newPassword, $confirmPassword)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

    //is Current Password Invalid:
    if(isUserInvalid($errors, $pdo, $_SESSION["id"], $currentPassword)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

    //Is New Password Invalid:
    if(isPasswordInvalid($errors, $newPassword)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

    //Is Confirm Password Invalid:
    if(isConfirmPasswordInvalid($errors, $newPassword, $confirmPassword)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

    //Edit Password:
    changePassword($pdo, $_SESSION["id"], $newPassword);

    echo json_encode(["success" => true]);
    

}
catch(PDOException $e){
    error_log("Login Error: ".$e->getMessage());
    echo json_encode(["success" => false, "message" => "Something Went Wrong"]);
    die();
}



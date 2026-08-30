<?php

require_once(__DIR__."/../config/session.inc.php");
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid Request Method"]);
    die();
}

$email = trim($_POST["email"]?? "");
$password = trim($_POST["password"]?? "");

try{

    require_once(__DIR__."/../config/database.inc.php");
    require_once(__DIR__."/../models/login_model.inc.php");
    require_once(__DIR__."/../controllers/login_controller.inc.php");

    $errors = [];

    //isEmpty:
    if(is_input_empty($errors, $email, $password)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }
    //Check credentials
  
    if(is_credentials_invalid($errors, $pdo, $email, $password)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

   
    echo json_encode(["success" => true]);
    

}
catch(PDOException $e){
    error_log("Login Error: ".$e->getMessage());
    echo json_encode(["success" => false, "message" => "Something Went Wrong"]);
    die();
}
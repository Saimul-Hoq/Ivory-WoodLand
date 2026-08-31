<?php

require_once(__DIR__."/../config/session.inc.php");
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid Request Method"]);
    die();
}
if(!isset($_SESSION["id"])){
    echo json_encode(["success" => false, "auth" => true, "message" => "Authentication Failed. Please login again."]);
    die();
}

$newAddress = trim($_POST["newAddress"]?? "");

try{

    require_once(__DIR__."/../config/database.inc.php");
    require_once(__DIR__."/../models/profile_model.inc.php");
    require_once(__DIR__."/../controllers/profile_controller.inc.php");

    $errors = [];

    //isEmpty:
    if(isAddressEmpty($errors, $newAddress)){
        echo json_encode(["success" => false, "errors" => $errors]);
        die();
    }

    //Edit Address:
    changeAddress($pdo, $_SESSION["id"], $newAddress);

    echo json_encode(["success" => true]);


}
catch(PDOException $e){
    error_log("Login Error: ".$e->getMessage());
    echo json_encode(["success" => false, "message" => "Something Went Wrong"]);
    die();
}
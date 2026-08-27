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



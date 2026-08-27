<?php

class Database{

    private $host = "localhost";
    private $dbName = "ivorywoodland";
    private $dbUsername = "root";
    private $dbPassword = "";

    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->dbUsername, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die("Connection Failed: ".$e->getMessage());
        }
    }
    
} 

$db = new Database();
$pdo = $db->conn;
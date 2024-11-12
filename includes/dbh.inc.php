<?php 

$dsn = "mysql:host=localhost;dbname=banking_system";
$dbusername = "root";
$dbpassword = "";

try{
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection Lost: " .$e->getMessage());
}
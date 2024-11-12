<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];


    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO bank_signups (name, username, email, password, address) VALUES (:name, :username, :email, :password, :address);";

        $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' => 12
        // ];

        // $pwdHashing = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":address", $address);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../main.php?message=successfull");
        exit();

        die();
    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }
}
else{
    header("Location: ../main.php?message=successfull");
    exit();
}
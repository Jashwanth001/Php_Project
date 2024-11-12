<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO contact_us (name, email, message) VALUES (:name, :email, :message);";

        $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' => 12
        // ];

        // $pwdHashing = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":message", $message);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../Portfolio.php");

        die();
        

    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }

}
else{
    header("Location: ../Portfolio.php");
}
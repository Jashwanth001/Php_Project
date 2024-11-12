<?php 

if([$_SERVER["REQUEST_METHOD"] == "POST"]){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";
        $query = "UPDATE users SET Username = :Username, Email = :Email, Pwd = :Pwd WHERE id = 2;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":Username",$username);
        $stmt->bindParam(":Pwd", $password);
        $stmt->bindParam(":Email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../LoginIndex.php");

        die();

    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }

}
else{
    header("Location: ../LoginIndex.php");
}
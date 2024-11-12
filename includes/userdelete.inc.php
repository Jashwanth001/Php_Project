<?php 

if([$_SERVER["REQUEST_METHOD"] == "POST"]){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try{
        require_once "dbh.inc.php";
        $query = "DELETE FROM users WHERE Username = :Username AND Pwd = :Pwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":Username",$username);
        $stmt->bindParam(":Pwd", $password);

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
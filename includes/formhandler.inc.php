<?php 

if([$_SERVER["REQUEST_METHOD"] == "POST"]){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO users (Username, Pwd, Email) VALUES (:Username, :Pwd, :Email);";

        $stmt = $pdo->prepare($query);

        $options = [
            'cost' => 12
        ];

        $pwdHashing = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":Username",$username);
        $stmt->bindParam(":Pwd", $pwdHashing);
        $stmt->bindParam(":Email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../hashIndex.php");

        die();

    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }

}
else{
    header("Location: ../hashIndex.php");
}
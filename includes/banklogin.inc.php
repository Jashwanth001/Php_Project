<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $accno = $_POST["accno"];
    $password = $_POST["password"];

    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO bank_logins (email, account_no, password) VALUES (:email, :account_no, :password);";

        $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' => 12
        // ];

        // $pwdHashing = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":account_no", $accno);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../main.php?message=success");
        exit();

        die();
    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }

}
else{
    header("Location: ../main.php?message=success");
    exit();
}
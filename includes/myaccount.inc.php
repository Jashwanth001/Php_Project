<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $account_no = $_POST["accno"];
    $branch = $_POST["branch"];
    $address = $_POST["address"];


    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO myaccounts (name, account_no, branch, address) VALUES (:name, :account_no, :branch, :address);";

        $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' => 12
        // ];

        // $pwdHashing = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":account_no", $account_no);
        $stmt->bindParam(":branch", $branch);
        $stmt->bindParam(":address", $address);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../acc.php?message=successfully");
        exit();

        die();
    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }
}
else{
    header("Location: ../acc.php?message=successfully");
    exit();
}
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $accno = $_POST["accno"];
    $rupee = $_POST["rupee"];
    $cards = $_POST["cards"];
    $cardno = $_POST["cardno"];
    $cardname = $_POST["cardname"];
    $cvv = $_POST["cvv"];

    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO fixed_deposits (account_no, amount, cards, card_no, card_name, cvv) VALUES (:account_no, :amount, :cards, :card_no, :card_name, :cvv);";

        $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' => 12
        // ];

        // $pwdHashing = password_hash($password, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":account_no",$email);
        $stmt->bindParam(":amount",$email);
        $stmt->bindParam(":cards",$email);
        $stmt->bindParam(":card_no",$email);
        $stmt->bindParam(":card_name",$email);
        $stmt->bindParam(":cvv", $accno);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../fixDep.php?message=successed");
        exit();

        die();
    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }

}
else{
    header("Location: ../fixDep.php?message=successed");
    exit();
}
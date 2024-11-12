<?php 

declare(strict_types=1);

function getUsername(object $pdo, string $Username){
    $query = "SELECT Username FROM users WHERE Username = :Username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":Username", $Username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;

}

function getEmail(object $pdo, string $Email){
    $query = "SELECT Email FROM users WHERE Email = :Email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":Email", $Email);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;

}

function setUser(object $pdo, string $Username,string $Pwd,string $Email){
    $query = "INSERT INTO users (Username, Pwd, Email) VALUES (:Username, :Pwd, :Email);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashPassword = password_hash($Pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":Username", $Username);
    $stmt->bindParam(":Pwd", $hashPassword);
    $stmt->bindParam(":Email", $Email);
    $stmt->execute();
}
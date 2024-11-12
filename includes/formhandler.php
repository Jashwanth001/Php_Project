<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname1 = htmlspecialchars($_POST["firstname"]);
    $lastname1 = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["emailid"]);
    $degree1 = htmlspecialchars($_POST["degree"]);
    

    if(empty($firstname1)){
        header("Location: ../index.php");
        exit();
    }
    
    echo "This is the data submitted by the user:" ."<br>";
    echo "Firstname:" .$firstname1. "<br>";
    echo "Lastname:" .$lastname1. "<br>";
    echo "EmailId:" .$email. "<br>";
    echo "Degree:" .$degree1. "<br>";
}
else{
    header("Location: ../index.php");
    exit();
}
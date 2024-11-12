<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $Username = $_POST['username'];
    $Pwd = $_POST['password'];
    $Email = $_POST['email'];

    try{
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';
        // Error Handling
        $errors = [];

        if(isEmpty($Username,$Pwd,$Email)){
            $errors["emptyInput"] = "You Missed Something!";
        }
        if(validateEmail($Email)){
            $errors["invalidEmail"] = "Ohh Invalid Email!";
        }
        if(validateUsername($pdo, $Username)){
            $errors["usernameExist"] = "Ohh Sorry! Username Already Exist";
        }
        if(emailRegistered($pdo, $Email)){
            $errors["emailUsed"] = "Ohh Sorry! Email Already Exist";
        }
        
        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errorSignup"] = $errors;
            header("Location: ../signup.php");
            die();
        }

        createUser($pdo, $Username, $Pwd, $Email);
        header("Location: ../signup.php?signup = success");

        $pdo = null;
        $stmt = null;

        die();

    }catch(PDOException $e){
        die("Connection Lost: " .$e->getMessage());
    }
}
else{
    header("Location: ../signup.php");
    die();
}
<?php 

declare(strict_types=1);

function isEmpty(string $Username,string $Pwd,string $Email){
    if(empty($Username) || empty($Pwd) || empty($Email)){
        return true;
    }
    else{
        return false;
    }
}

function validateEmail(string $Email){
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

function validateUsername(object $pdo, string $Username){
    if(getUsername($pdo, $Username)){
        return true;
    }
    else{
        return false;
    }
}

function emailRegistered(object $pdo, string $Email){
    if(getEmail($pdo, $Email)){
        return true;
    }
    else{
        return false;
    }
}


function createUser(object $pdo, string $Username,string $Pwd,string $Email){
    setUser( $pdo, $Username, $Pwd, $Email);
}
<?php 

declare(strict_types=1);

function checkErrors(){
    if(isset($_SESSION["errorSignup"])){
        $errors =  $_SESSION["errorSignup"];

        echo "<br>";

        foreach($errors as $error){
            echo "<p class='error'>" . $error . "</p>";
        }

        unset( $_SESSION["errorSignup"]);
    }
    else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<br>";
        echo "<p class ='hello'> Signup Success!</p>";
    }
}

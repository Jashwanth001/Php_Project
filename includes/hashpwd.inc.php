<?php 

$pwdName = "Jashwanth";

$options = [
    'cost' => 12
];

$pwdHash = password_hash($pwdName, PASSWORD_BCRYPT, $options);

$pwdLogin = "Jashwanth1";

if(password_verify($pwdLogin, $pwdHash)){
    echo "Password are Same!";
}
else{
    echo "Password are not Same!";
}
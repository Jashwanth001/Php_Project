<?php 

ini_set('session.use_only_cookies', 1);
ini_set('session.use_script_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if(!isset($_SESSION['last_regeneration'])){
    session_regenerate();
}
else{
    $interval = 60 * 30;

    if (time() - $_SESSION['last_regeneration'] >= $interval){
        session_regenerate();
    }

}

function session_regenerate(){
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}
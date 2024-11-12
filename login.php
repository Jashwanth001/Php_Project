<?php 
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="CSS/index.css">
</head>
<body>
    <main>
        <h2>Login</h2 >
        <div class="container-center">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username"><br>
                <input type="text" name="password" placeholder="Password"><br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </main>

    <?php 
        checkErrors();
    ?>

</body>
</html>
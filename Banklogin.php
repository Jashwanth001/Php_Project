<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login | Online Banking Website</title>
        <link href="../Php/CSS/loginCSS.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <script src="../Java Script/loginJS.js"></script>
    </head>

    <body onload="load();">
        <div id="header">
            <h1>Yeshwanth Banking Website</h1>
            <a href="home.php"><img src="../Php/Images/logo.png" alt="Online Banking Website"
                    title="Yeshwanth Banking Website"></a>
        </div>
        <form action="includes/banklogin.inc.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <input type="email" placeholder="Enter your Email Address:" name="email" required><br />
                <p>OR</p>
                <input type="text" placeholder="Enter your Account Number:" name="accno" required><br />
                <input type="password" accept="number" placeholder="Enter your Password:" required name="password"
                    onblur="return validForm();"><br />
                <p id="result"></p>
                <button type="submit" style="cursor: pointer;">Login In</button>
            </fieldset>
            
        </form>
    </body>

</html>
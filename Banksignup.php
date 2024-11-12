<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up | Online Banking Website</title>
        <link href="../Php/CSS/signupCSS.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <script src="../Java Script/signupJS.js"></script>
    </head>

    <body onload="load();">
        <div id="header">
            <h1>Yeshwanth Banking Website</h1>
            <a href="home.php"><img src="../Php/Images/logo.png" alt="Yeshwanth Banking Website" title="Online Banking Website"></a>
        </div>
        <form  action="includes/banksignup.inc.php" method="post">
            <fieldset>
                <legend>Sign Up</legend>
                <input type="text" name="name" placeholder="Enter your Name:" required><br />
                <input type="text" name="username" placeholder="Enter valid Username:" required><br />
                <input type="email" name="email" placeholder="Enter your Email Address:" required><br />
                <input type="password" name="password" placeholder="Password:" required><br />
                <input type="text" name="address" placeholder="Address:" required><br />
                <p id="result"></p>
                <p><input type="checkbox" name="tnc" id="tnc" required><span>I agree to the <a
                            href="#">Term and Conditions</a></span></p>
                <button type="submit" style="cursor: pointer;">Sign Up</button>
            </fieldset>
        </form>
    </body>

</html>
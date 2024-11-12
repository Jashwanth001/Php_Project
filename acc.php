<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Account | Online Banking Website</title>
        <link href="../Php/CSS/accCSS.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

    </head>

    <body>
        <?php 
        if (isset($_GET['message']) && $_GET['message'] === 'successfully') {
            echo "
            <div id='popup' class='popup'>
                <div class='popup-content'>
                    <p>Account Created Successfully</p>
                    <button onclick='closePopup()'>OK</button>
                </div>
            </div>
            <script>
                function closePopup() {
                    document.getElementById('popup').style.display = 'none';
                }
                window.onload = function() {
                    document.getElementById('popup').style.display = 'block';
                };
            </script>
            <style>
                /* Popup styling */
                #popup {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    display: none;
                    justify-content: center;
                    align-items: center;
                    z-index: 1000;
                }
                .popup-content {
                    background: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    text-align: center;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                }
                .popup-content p {
                    font-size: 1.2em;
                    margin: 0 0 20px;
                }
                .popup-content button {
                    padding: 8px 16px;
                    background: #4CAF50;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
                .popup-content button:hover {
                    background: #45a049;
                }
            </style>
            ";
        }
        ?>
        <div id="header">
            <h1>Yeshwanth Banking Website</h1>
            <a href="home.php"><img src="../Php/Images/logo.png" alt="Online Banking System"
                    title="Yeshwanth Banking Website"></a>
        </div>
        <div>
            <h1>My Account</h1>
        </div>
        <div id="pic">
            <img src="../Php/Images/man.png">
            <p>Profile Picture</p>
        </div>
        <div id="info">
            <form action="includes/myaccount.inc.php" method="post">
                <label>Name:</label><input type="text" name="name" placeholder="Name..."><br/>
                <label>Account No:</label><input type="text" name="accno" placeholder="Account No:..."><br/>
                <label>Branch:</label><input type="text" name="branch" placeholder="Branch..."><br/>
                <label>Address:</label><input type="text" name="address" placeholder="Address..."><br/>
                <button type="submit">Add Account</button>
            </form>
        </div>
    </body>

</html>
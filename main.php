<!DOCTYPE html>
<html>

    <head>
        <title>Yeshwanth Banking Website</title>
        <link href="../Php/CSS/homeCSS.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <!-- <script src="../Java Script/homeJS.js"></script> -->
    </head>

    <body style="background-color: black;">
    <?php
    // Check for the success message in the URL
    if (isset($_GET['message']) && $_GET['message'] === 'success') {
        echo "
        <div id='popup' class='popup'>
            <div class='popup-content'>
                <p>Login Successful</p>
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

    if (isset($_GET['message']) && $_GET['message'] === 'successed') {
        echo "
        <div id='popup' class='popup'>
            <div class='popup-content'>
                <p>Deposited Successfully</p>
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

    if (isset($_GET['message']) && $_GET['message'] === 'successfull') {
        echo "
        <div id='popup' class='popup'>
            <div class='popup-content'>
                <p>Signup Successful</p>
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
        <div id="header" class="head">
            <h1>Yeshwanth Banking Website</h1>
            <a href="home.php"><img src="../Php/Images/logo.png" alt="Online Banking System"
                    title="Yeshwanth Banking Website"></a>
        </div>
        <div id="navbar">
            <div id="nav">
                <div id="services">
                    <li><a href="#">Services</a></li>
                    <nav class="content">
                        <li><a href="perIntBank.html">Personal Internet Banking</a></li>
                        <li><a href="corpBank.html">Corprorate Banking</a></li>
                        <li><a href="merBusiness.html">Merchant Bussiness</a></li>
                        <li><a href="onlTax.html">Online Tax</a></li>
                    </nav>
                </div>
                <div id="payment_transfer">
                    <li><a href="#">Payment Transfer</a></li>
                    <nav class="content">
                        <li><a href="intTransfer.html">International Transfer</a></li>
                        <li><a href="natTransfer.html">National Transfer</a></li>
                        <li><a href="billPay.html">Bill Payment</a></li>
                    </nav>
                </div>
                <div id="fixed_deposite">
                    <li><a href="fixDep.html">Fixed Deposite</a></li>
                </div>
                <div id="e_service">
                    <li><a href="eServ.html">E - Services</a></li>
                </div>
                <div id="acc">
                    <li><a href="acc.html">My Account</a></li>
                </div>
            </div>
        </div>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../Php/Images/online banking-1.png">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../Php/Images/online banking-2.png">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../Php/Images/online banking-3.png">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides()
            {
                var i;
                var slides = document.getElementsByClassName( "mySlides" );
                var dots = document.getElementsByClassName( "dot" );
                for ( i = 0; i < slides.length; i++ ) {
                    slides[ i ].style.display = "none";
                }
                slideIndex++;
                if ( slideIndex > slides.length ) { slideIndex = 1 }
                for ( i = 0; i < dots.length; i++ ) {
                    dots[ i ].className = dots[ i ].className.replace( " active", "" );
                }
                slides[ slideIndex - 1 ].style.display = "block";
                dots[ slideIndex - 1 ].className += " active";
                setTimeout( showSlides, 2000 ); // Change image every 2 seconds
            }
        </script>
        <div id="disp">
            <p>Login to see your Details here:</p>
            <div>
            <form>
                <input type="text" name="name" id="name" placeholder="Beneficiary Name">
                <input type="number"  name="accno" id="accno" value="" placeholder="Account No.">
                <input type="text"  name="branch" id="branch" value="" placeholder="Branch Name">
                <input type="text"  name="ifsc" id="ifsc" value="" placeholder="IFSC Code">
            </form>
            </div>
        </div>
    </body>

</html>
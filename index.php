<html>
<title>Online Banking System</title>

<head>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/chase.jpg">

    <style>
        i {
            padding: 2px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }



        /*style for circle aboutus*/
        #spinning-circle {
            animation-name: spinning-circle;
            animation-duration: 5s;
            animation-iteration-count: 1;

        }

        @-webkit-keyframes spinning-circle {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transform-origin: 125% 125%;
                transform-origin: 125% 125%;
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transform-origin: 125% 125%;
                transform-origin: 125% 125%;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <hr>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1</div>
            <img src="img/slideimg/nexsuscard3.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2</div>
            <img src="img/slideimg/cashmachine.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3</div>
            <img src="img/slideimg/agent-banking.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4</div>
            <img src="img/slideimg/christin-hume-Hcfwew744z4-unsplash.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5</div>
            <img src="img/slideimg/some.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6</div>
            <img src="img/slideimg/christin-hume-Hcfwew744z4-unsplash.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7</div>
            <img src="img/slideimg/towfiqu-barbhuiya-joqWSI9u_XM-unsplash.jpg" style="width:100%">
            <div class="text">Online Banking System Feature</div>
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <div class="news_events">
        <h4> Tips | Updates | Events</h4><br>
        <ul>
            <p>First, open an account. Then apply for a debit card to get further details.
            </p>
            <p>And finally, proceed for Internet Banking Registration to create your internet banking account.

            </p>

        </ul>
    </div>


    <div class="online_services">
        <h4>Online Services</h4>
        <ul>
            <a href="customer_reg_form.php">
                <li><i class="fa-solid fa-file-invoice-dollar"></i>Open Account</li>
            </a>
            <a href="debit_card_form.php">
                <li><i class="fa-solid fa-person-running" style="font-size: 15px; padding: 1px"></i></i>Apply Debit Card</li>
            </a><br>
            <a href="#" id="ebanking">
                <li>

                    <div class="ebanking"><i class="fa-solid fa-building-columns"></i>Internet Banking<i class="fa-solid fa-caret-down"></i>
                        <div class="ebanking_options">
                            <ul>
                                <a href="customer_login.php">
                                    <li><i class="fa-solid fa-arrow-right-to-bracket"></i>Login </li>
                                </a>
                                <a href="ebanking_reg_form.php">
                                    <li><i class="fa-solid fa-user-plus"></i>Register</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </li>
            </a>
            <a href="fund_transfer.php">
                <li><i class="fa-solid fa-money-bill-transfer"></i>Fund Transfer</li>
            </a><br>
        </ul>

    </div>

    <div id="aboutus" class="about" style="background-color : skyblue;"><span>Mobile Banking Service</span><br><br>
        <div id="spinning-circle">
            <img src="img/slideimg/mobile-Banking-Billboard1.jpg">
        </div>
    </div>




    <div class="disclaimer">
        <span>Disclaimer !!</spasn><br><br>
            <p>Our bank does not ask for the details of your account/PIN/password. Therefore any one pretending to be asking you for information from the bank/technical team may be fraudulent entities, so please beware.</p>
            <p>You should know how to operate net transactions and if you are not familiar you may refrain from doing so. You may seek bank's guidance in this regard. Bank is not responsible for online transactions going wrong.</p>
            <p>We shall also not be responsible for wrong transactions and wanton disclosure of details by you. Viewing option and transaction option on the net are different. You may exercise your option diligently.</p>
    </div>


    </div>




    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

    <?php include 'footer.php'; ?>

</body>

</html>
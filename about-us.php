<?php 
require_once ("includes/db.connection.php");
include_once ("templates/header.php");
?>
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="CSS/navStyle.css">
    <link rel="stylesheet" href="CSS/content.css">
</head>
   <!--topnav-links-->
   <div class="topnav">
        <a href="index.php" >Home Page</a>
        <a href="Car Care.php" >Car Care</a>
        <a href="Detailing.php" >Detailing</a>
        <a href="locations.php" >Locations</a>
        <a href="about-us.php" >About Us</a>
        <a href="bookNow.php" >Book Now</a>

        <div class="topnav-right">
            <a href="#membership.php" >Membership</a>

    </div>
    </div>

<body>
    <div id="wrapper">
        <div id="content">
<div class="about-section">
        <h1 style="text-align: left;">About us</h1>
        <p>At clean Car Wash, we are passionate about keeping your vehicles clean and shiny.</p>
        <p>Our team of experienced professionals ensures top-notch service and customer satisfaction.</p>
    </div>

    <div class="ceo-card">
        <img src="images/CEO.jpg" alt="Munene">
        <div class="ceo-info">
            <h2>Munene</h2>
            <p class="title">CEO & Founder</p>
            <p>Passionate about cars and customer service.</p>
            <p>Email: dmunene@gmail.com</p>
            <button class="button">Contact</button>
        </div>
    </div>
</body>
</html>

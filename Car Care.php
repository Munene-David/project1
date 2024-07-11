<?php 
require_once ("includes/db.connection.php");
include_once ("templates/header.php");
?>
    <title>Car Care page</title>
    <link rel="stylesheet" href="CSS/navStyle.css">
    <link rel="stylesheet" href="CSS/content.css">
    <link rel="stylesheet" href="CSS/tablestructure.css">
    <link rel="stylesheet" href="CSS/videos.css">

</head>
<body>
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
 <!-- Outside Wash -->
 <div class="outsidewash centered-text">
    <h2>Outside Wash</h2>
    <div class="image-container">
        <img src="images/outside_wash_image.jpg" alt="Outside Wash Image">
    </div>
    <table>
        <tr>
            <th>Service</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Pre-rinse</td>
            <td>Thoroughly rinse the exterior of the car.</td>
        </tr>
        <tr>
            <td>Hand wash</td>
            <td>Use pH Neutral soap for gentle cleaning.</td>
        </tr>
        <tr>
            <td>Chamois Dry</td>
            <td>Dry the car using a soft chamois cloth.</td>
        </tr>
        <tr>
            <td>Wheels & Tyre Cleaning</td>
            <td>Steam clean wheels and apply tire shine.</td>
        </tr>
    </table>
</div>


<!-- FINE SHINE SPECIAL -->
<div class="fineshine centered-text">
    <h2>Fine Shine Special</h2>
   
    <video class="video" width="400" height="400" controls>
        <source src="images/finecar.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>
    <table>
        <tr>
            <th>Service</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Complete Deluxe Wash Package</td>
            <td>Includes thorough cleaning and polish/wax.</td>
        </tr>
        <tr>
            <td>Deodorize Interior</td>
            <td>Freshen up the car's interior.</td>
        </tr>
        <tr>
            <td>Steam Clean of Floor Mats</td>
            <td>Remove dirt and stains from floor mats.</td>
        </tr>
        <tr>
            <td>Clay Cloth</td>
            <td>Use clay cloth for surface contaminants.</td>
        </tr>
    </table>
</div>
</div>
</body>
</html>

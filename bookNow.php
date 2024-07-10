<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="CSS/navStyle.css">
    <link rel="stylesheet" href="CSS/book.css">

</head>
<body>
    <!-- Navigation links -->
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
    </head>
<body>
    <h1>Book Now</h1>
    <form action="process_booking.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="date">Preferred Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Preferred Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="service">Select Service:</label>
        <select id="service" name="service">
            <option value="car-wash">Car Wash</option>
            <option value="detailing">Detailing</option>
        </select>
        <button type="submit">Submit Booking</button>
    </form>
    </body>
</html>

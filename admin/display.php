<!DOCTYPE html>
<html>
    <head>
        <title> Admin Panel</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css">

        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </head>
    <body>
        <!--Navigation Bar -->
    <section class="colored-section" id="title">
              <nav class="navbar navbar-expand-lg navbar-dark">

                    <a class="navbar-brand" href="">PUSHKAR CAMEL SAFARI AND JEEP</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                      

                    </div>
                  </nav>
          </section>

          <div class="safari">
            <span><h3>Bookings Details</h3></span>
          </div>
    </body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tblbook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email, names, mob, loc, adults, child, dtour, tour, msg FROM tblbook";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<b>Email:</b> " . $row["email"]. " |<b>Name:</b> " . $row["names"]. " |<b>Mobile No:</b>" . $row["mob"]. " |<b>Location:</b>" . $row["loc"]. " |<b>Adults:</b>" . $row["adults"]. " |<b>Child:</b>" . $row["child"]. " |<b>DTour:</b>" . $row["dtour"]. " |<b>Tour:</b>" . $row["tour"]. " |<b>Message:</b>" . $row["msg"]."<br> <br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</html>
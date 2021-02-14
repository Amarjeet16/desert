<?php
include_once 'database.php';
if(isset($_POST['send']))
{	 
	 $names = $_POST['names'];
	 $email = $_POST['email'];
	 $mob = $_POST['mob'];
   $tour = $_POST['tour'];
   $dtour = $_POST['dtour'];
   $loc = $_POST['loc'];
   $adults = $_POST['adults'];
   $child = $_POST['child'];
   $msg = $_POST['msg'];
	 $sql = "INSERT INTO tblbook (email,loc,adults,child,msg,names,dtour,mob,tour)
	 VALUES ('$email','$loc','$adults','$child','$msg','$names','$dtour','$mob','$tour')";
	 if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Booking successfully !")</script>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Safari</title>
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/book.css">

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

              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h5 class="top">Call Us at: +91 6376 130 350</h5>
                </li>
                <li class="nav-item">
                    <a href="book.php"><button class="btn">Book Now</button></a>
                </li>
                

              </ul>

            </div>
          </nav>
  </section>
          
          <div class="safari">
              <span>Morning safari</span>
              <span>Evening safari</span>
              <span>Camel Ride Dubai</span>
              <span>Overnight Safari</span>
              <span>Quad Biking Dubai</span>
              <span>Dune Buggy Safari</span>
          </div>
          <marquee><h2>We have different kinds of ride!! Contact us for your JOY</h2></marquee>
          <br></br>
    <div class="mid">
          <h1>Book Your Dream Deser Safari in Pushkar, Rajasthan.</h1>
          <br></br>
          <p>Fill in the form below with accurate information to book your desert safari tour.If you are staying in hotel then please mention your room number. If mention your phone number with country code always.</p>
          <br></br>
          <strong><p>Do you want to book your Desert Safari Tour in Pushkar, Rajasthan <span class="color">within 24 hour!!</span></p></strong>
            <p>Then call us as soon as possible at any time between 9:00 AM to 11:00 PM</p>
            <br></br>
            <blink><h1 style="color:red">Remainder!!</h1></blink><h1>Ask an operator to book for Red Sand Safari</h1>
    <div class="row ">
    <div class="col-md-6 col-sm-12">
    <form method="post" action="book.php">
        <h1>Book Here</h1>
        <br></br>
        <p>YOUR NAME(required)</p>
        <input type = "text" name = "names" required=""/>
        <p>YOUR EMAIL(required)</p>
        <input type = "text" name = "email" required=""/>
        <p>CONTACT NUMBER(required)</p>
        <input type = "text" name = "mob" placeholder = "+91 6376130350" required=""/>
        <p>Choose a Tour(required):</p>
        <select id="tour" name="tour" required="">
            <option value="volvo">Morning safari</option>
            <option value="saab">Evening safari</option>
            <option value="fiat">Camel Ride Dubai</option>
            <option value="audi">Overnight Safari</option>
            <option value="audi">Quad Biking Dubai</option>
            <option value="audi">Dune Buggy Safari</option>
            <option value="audi">Dubai City Tour</option>
            <option value="audi">Hummer Desert safart</option>
            <option value="audi">Hatta Oman Safari</option>
          </select>
            <p>Date of Tour</p>
            <input type="date" name="dtour" />
            <p>PICKUP LOCATION</p>
            <input type = "text" name = "loc"/>
            <p>ADULTS</p>
            <input type = "text" name = "adults" />
            <p>CHILDREN</p>
            <input type = "text" name = "child"/>
            <P>YOUR MESSAGE(required)</P>
            <textarea rows="8" cols="30" name="msg" placeholder="Enter Your Message Here." required=""></textarea>
            <br></br>
            <input type="submit" name="send" value="Send">
        </from>
    </div>
    
    <div class="col-md-6 col-sm-12">

        
        <img class="responsive" src="https://gcs.thesouthafrican.com/2019/03/ea26eaaa-kr6b0826-750x536.jpg" alt="Pushkar Safari" />
        <center>
        <blink>
            <h2>We are Accepting....!!</h2>
        </blink>
        
        <strong><h4 class="Pay" style="color:red">PAYTM</h4></strong>
        <strong><h4  class="Pay" style="color:green">DEBIT CARD</h4></strong>
        <strong><h4 class="Pay" style="color:purple">CREDIT CARD</h4></strong>
        <strong><h4 class="Pay" style="color:blue">GPAY</h4></strong>
        <strong><h4 class="Pay" style="color:greenyellow">UPI TRANSACTION</h4></strong>
        </center>
    </div>
    </div>
</div>
<hr>
<div class="mid">
<div class="last">
<div class="row">
  <div class="col-md-4 col-sm-12">
   <center><h2>PCSAJ</h2></center>
   <ul>
     <li>
       <p>Home</p>
     </li>
     <li>
       Blog
     </li>
     <li>
       About Us
     </li>
     <li>
       Sitemap
     </li>
     <li>
       Contact Us
     </li>
     <li>
       Privacy Policy
     </li>
     <li>
       Terms & Conditions
     </li>
     <li>
       Pushkar Camel Safari and Jeep Gallery
     </li>
   </ul>
  </div>
  <div class="col-md-4 col-sm-12">
    <center><h2>Pushkar Camel Safari and Jeep Tours</h2></center>
    <ul>
      <li>
        Evening Desert Safari
      </li>
      <li>
        Morning Safari Tour
      </li>
      <li>
        Camel Ride Tour
      </li>
      <li>
        Overnight Safari Tour
      </li>
      <li>
        Hummer Desert Safari
      </li>
      <li>
        Quad Biking Safari
      </li>
      <li>
        Dune Buggy Safari
      </li>
    </ul>
  </div>
  <div class="col-md-4 col-sm-12">
    <center><h2>Latest Posts</h2></center>
    <ul>
      <li>
        How Term Paper Writing Services Can Help Students Pass Their Tests       
      </li>
      <li>
        How to Select a Quality Essay Writing Service
      </li>
      <li>
        Essay Writing Service - The Best Choice for Writing An Essay
      </li>
      <li>
        Essay Writing Service - What You Should Know Before Choosing One
      </li>
      <li>
        Essay Writers - What to Search For When Deciding on the Ideal Writer
      </li>
      <li>
        Custom Essay Writing Service - How to Prepare For Your Final Paper
      </li>
    </ul>
  </div>
</div>
</div>
</div>
<div class="call">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h3>To book <strong>Pushkar Desert Safari</strong>Call Us at: +91 6376130350</h3>
      </div>
      <div class="col-md-6 col-sm-12">
        <a href="book.php"><button class="btn">Book Now</button></a>
      </div>
      
    </div>
    
  </div>
<div class="end">
  <h6>© 2020 <strong>Pushakar Camel Safari and Jeep, Rajasthan India</strong> @ +91 6376130350</h6>
</div>
</body>
    </html>
<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'media24db';

$link = "/media24/cart.php";
$connect = mysqli_connect( $server, $username, $password, $db )

    or die("Can not connect");


//$connect->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MEDIA24</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">-->

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/bill_style.css" rel="stylesheet">

</head>

<body>

  <!--
  Header
  -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo4.png" width="200px"  alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#portfolio">Choose Location</a></li>
          <li><a href="#team">Top Clients</a></li>
          <li><a href="#" data-toggle="modal" data-target="#elegantModalForm">Resister</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <div class="md-form mb-5">
                    <input type="email" id="Form-email1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                </div>

                <div class="md-form pb-3">
                    <input type="password" id="Form-pass1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                    <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
                </div>

                <div class="text-center mb-3">
                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                </div>
                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>

                    <div class="row my-3 d-flex justify-content-center">
                        <!--Facebook-->
                        <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook text-center"></i></button>
                        <!--Twitter-->
                        <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-twitter"></i></button>
                        <!--Google +-->
                        <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fa fa-google-plus"></i></button>
                    </div>
            </div>
            <!--Footer-->
            <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1"> Sign Up</a></p>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div> <!-- Modal -->

 <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>BillBoard advertising experts</h1>
      <h2>An amazing way to promote your busniess.</h2>
      <a href="#portfolio" class="btn-get-started"><span class="remove">Choose one for you</span></a>
    </div>
  </section><!-- #hero -->

<main id="main">

<!--==========================
      Portfolio Section
    ============================ -->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Select A Location</h3>
          <p class="section-description">Have a look to some of our amazing offers.</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-all" class="filter-active">All</li>
              <li data-filter=".filter-dhanmondi">Dhanmondi</li>
              <li data-filter=".filter-shahbug">Shahbug</li>
              <li data-filter=".filter-mirpur">Mirpur</li>
              <li data-filter=".filter-uttara">Uttara</li>
            </ul>
          </div>
        </div>
        
        <div class="row" id="portfolio-wrapper ">
          <div class="col-md-12 portfolio-item filter-all" style="overflow: visible !important; height: auto">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Availability</th>
                  <th>Area Name</th>
                  <th>Location</th>
                  <th>Price Per Day</th>
                  <th>Size (Width*Height) ft</th>
                  <th>Order</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                      $result = mysqli_query( $connect, "SELECT * FROM billboard NATURAL JOIN billarea") or die("Can not execute query"); 
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {    
                              echo "<tr>";
                              echo "<td> $row[availability] </td>";
                              echo "<td> $row[areaName] </td>";
                              echo "<td> $row[location] </td>";
                              echo "<td> $row[pricePerDay] </td>";
                              echo "<td> $row[size] </td>";
                              echo '<td><a href="'.$link.'">Add to Cart</a></td>';
                              echo "</tr>";    
                       }
                     }
                     else {
                      echo "0 results";
                      }
                  ?>
                </tbody>
              </table>
          </div>
      </div>

      <div class="row" id="portfolio-wrapper">
          <div class="col-md-12 portfolio-item filter-shahbug" style="overflow: visible !important; height: auto">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Availability</th>
                  <th>Area Name</th>
                  <th>Location</th>
                  <th>Price Per Day</th>
                  <th>Size (Width*Height) ft</th>
                  <th>Order</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                      $area = "Shahbug";
                      $result = mysqli_query( $connect, "SELECT * FROM billboard NATURAL JOIN billarea") or die("Can not execute query"); 
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { 
                            if($row["areaName"] == $area){
                              echo "<tr>";
                              echo "<td> $row[availability] </td>";
                              echo "<td> $row[areaName] </td>";
                              echo "<td> $row[location] </td>";
                              echo "<td> $row[pricePerDay] </td>";
                              echo "<td> $row[size] </td>";
                              echo '<td><a href="'.$link.'">Add to Cart</a></td>';
                              echo "</tr>"; 
                            }
                       }
                     }
                     else {
                      echo "0 results";
                      }
                  ?>
                </tbody>
              </table>
          </div>
      </div>

       <div class="row" id="portfolio-wrapper">
          <div class="col-md-12 portfolio-item filter-dhanmondi" style="overflow: visible !important; height: auto">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Availability</th>
                  <th>Area Name</th>
                  <th>Location</th>
                  <th>Price Per Day</th>
                  <th>Size (Width*Height) ft</th>
                  <th>Order</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                      $area = "Dhanmondi";
                      $result = mysqli_query( $connect, "SELECT * FROM billboard NATURAL JOIN billarea") or die("Can not execute query"); 
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { 
                            if($row["areaName"] == $area){
                              echo "<tr>";
                              echo "<td> $row[availability] </td>";
                              echo "<td> $row[areaName] </td>";
                              echo "<td> $row[location] </td>";
                              echo "<td> $row[pricePerDay] </td>";
                              echo "<td> $row[size] </td>";
                              echo '<td><a href="'.$link.'">Add to Cart</a></td>';
                              echo "</tr>"; 
                            }
                       }
                     }
                     else {
                      echo "0 results";
                      }
                  ?>
                </tbody>
              </table>
          </div>
      </div>


            <div class="row" id="portfolio-wrapper">
          <div class="col-md-12 portfolio-item filter-mirpur" style="overflow: visible !important; height: auto">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Availability</th>
                  <th>Area Name</th>
                  <th>Location</th>
                  <th>Price Per Day</th>
                  <th>Size (Width*Height) ft</th>
                  <th>Order</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                      $area = "Mirpur";
                      $result = mysqli_query( $connect, "SELECT * FROM billboard NATURAL JOIN billarea") or die("Can not execute query"); 
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { 
                            if($row["areaName"] == $area){
                              echo "<tr>";
                              echo "<td> $row[availability] </td>";
                              echo "<td> $row[areaName] </td>";
                              echo "<td> $row[location] </td>";
                              echo "<td> $row[pricePerDay] </td>";
                              echo "<td> $row[size] </td>";
                              echo '<td><a href="'.$link.'">Add to Cart</a></td>';
                              echo "</tr>"; 
                            }
                       }
                     }
                     else {
                      echo "0 results";
                      }
                  ?>
                </tbody>
              </table>
          </div>
      </div>

            <div class="row" id="portfolio-wrapper">
          <div class="col-md-12 portfolio-item filter-uttara" style="overflow: visible !important; height: auto">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Availability</th>
                  <th>Area Name</th>
                  <th>Location</th>s
                  <th>Price Per Day</th>
                  <th>Size (Width*Height) ft</th>
                  <th>Order</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                      $area = "Uttara";
                      $result = mysqli_query( $connect, "SELECT * FROM billboard NATURAL JOIN billarea") or die("Can not execute query"); 
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { 
                            if($row["areaName"] == $area){
                              echo "<tr>";
                              echo "<td> $row[availability] </td>";
                              echo "<td> $row[areaName] </td>";
                              echo "<td> $row[location] </td>";
                              echo "<td> $row[pricePerDay] </td>";
                              echo "<td> $row[size] </td>";
                              echo '<td><a href="'.$link.'">Add to Cart</a></td>';
                              echo "</tr>"; 
                            }
                       }
                     }
                     else {
                      echo "0 results";
                      }
                  ?>
                </tbody>
              </table>
          </div>
      </div>

     <!--==========================
      Team Section
    ============================ -->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Have a look to our top clients</h3>
          <p class="section-description">A gigantic footprint with a 96 sheet billboard from Media24.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/1.jpg" alt="" ></div>
              <h4>Samsung</h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/2.jpg" alt=""></div>
              <h4>Walton</h4>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/3.png" alt="" ></div>
              <h4>Gramen Phone</h4>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/4.png" alt=""></div>
              <h4>Rocket</h4>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->


    <!--==========================
      Contact Section
    ============================ -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">We are willing to know your queries.</p>
        </div>
      </div>

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Dhanmondi 15<br>Dhaka, 1209</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@media24.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+88 0161 478 555</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

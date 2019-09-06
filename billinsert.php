<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'media24db';

$connect = mysqli_connect( $server, $username, $password, $db )

		or die("Can not connect");

$result = mysqli_query( $connect, "SELECT * FROM billboard NATURAL JOIN billarea" )
		or die("Can not execute query");
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

  <!-- Main Stylesheet File -->
  <link href="css/bill_style.css" rel="stylesheet">

</head>

<body>

<main id="main">



    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container ">
        <div class="section-header">
          <h3 class="section-title">Modify Billboard</h3>
          <p class="section-description"></p>
        </div>
        <div class="container wow fadeInUp">
        

        <div class="row">
          
          <div class="col-md-6">
            <h4 style="color: #0d0e0e;">Insert a new billboard</h4>
          	  <form class="form-horizontal" action="/media24/insertsucess.php" method="POST">
				<div class="form-group">
				<label class="control-label col-sm-10" for="area">Area:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="area" placeholder="Enter area">
				</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-10" for="location">Location:</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" name="location" placeholder="Enter location">
				</div>
				</div>

        <div class="form-group">
        <label class="control-label col-sm-10" for="size">Size:</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" name="size" placeholder="Width * Height in ft">
        </div>
        </div>

				<div class="form-group">
				<label class="control-label col-sm-10" for="price">Price Per Day:</label>
				<div class="col-sm-10"> 
				  <input type="number" class="form-control" name="price" placeholder="Enter price per day">
				</div>
				</div>
				<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				<div class="radio">
					  <label><input type="radio" name="optradio" checked value="1"> Available</label>
				</div>
				<div class="radio">
					  <label><input type="radio" name="optradio" value="0"> Not Available</label>
				</div>
				</div>
				</div>
				<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Insert</button>
				</div>
				</div>
			  </form>
	

          </div>


          <div class="col-md-6">
            <h4 style="color: #0d0e0e;">Update a  billboard</h4>
              <form class="form-horizontal" action="/media24/updatesucess.php" method="POST">
        <div class="form-group">
        <label class="control-label col-sm-10" for="billID">Bill ID:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="billID" placeholder="Enter Bill ID">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-10" for="price">Price Per Day:</label>
        <div class="col-sm-10"> 
          <input type="number" class="form-control" name="price" placeholder="Enter price per day">
        </div>
        </div>
        <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Update</button>
        </div>
        </div>
        </form>
        <h4 style="color: #0d0e0e;">Delete a  billboard</h4>
        <form class="form-horizontal" action="/media24/deletesucess.php" method="POST">
        <div class="form-group">
        <label class="control-label col-sm-10" for="billID">Bill ID:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="billID" placeholder="Enter Bill ID">
        </div>
        </div>
        <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Delete</button>
        </div>
        </div>
        </form>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul id="portfolio-flters">
              <li style="background: #2dc997;color: beige;">Current Entries in Database</li>
             
            </ul>
          </div>
        </div>
        
        <div class="row" id="portfolio-wrapper">
          <div class="col-md-12 portfolio-item" style="overflow: visible !important;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Availability</th>
                  <th>Bill ID</th>
                  <th>Aera</th>
                  <th>Location</th>
                  <th>Size (Width*Height) ft</th>
                  <th>Price (per day)</th>  
                </tr>
              </thead>
                <tbody>
              <?php 
                  if ($result->num_rows > 0) {
      				      while($row = $result->fetch_assoc()) {
      					       echo "<tr>";
                      		echo "<td> $row[availability] </td>";
                      		echo "<td> $row[billID] </td>";
                      		echo "<td> $row[areaName] </td>";
                      		echo "<td> $row[location] </td>";
                          echo "<td> $row[size] </td>";
                      		echo "<td> $row[pricePerDay] </td>";
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
    </section>

  </main>  


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

  <!-- Template Main Javascript File
  <script src="js/main.js"></script> -->

</body>
</html>

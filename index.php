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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- For Sign UP Modal -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--
  Header
  -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/media24/index.php"><img src="img/logo4.png" width="200px"  alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">top projects</a></li>
          <li><a href="#team">Our Experts</a></li>
          <li class="menu-has-children"><a href="">login</a>
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#signup">Create a new account</a></li>
              <li><a href="#" data-toggle="modal" data-target="#signin">Sign In</a></li>
              <li><a href="/media24/adminlogin.php" ">Login As Admin</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!-- Modal for sign in-->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                </div>

                <div class="text-center mb-3">
                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                </div>

                    
            </div>
            <!--Footer-->
        </div>
        <!--/.Content-->
    </div>
</div> <!-- Modal for sign in-->


<!-- Modal for sign up-->
           <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                            <h4 class="modal-title reg" id="myModalLabel">Registration</h4>
                        </div>
                        <div class="modal-body">
                            <form class="pb-modalreglog-form-reg">
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">User Name</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" id="inputuserName" placeholder="User Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control" id="inputPws" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control" id="inputConfirmPws" placeholder="Confirm Password">
                                    </div>
                                </div>
                               
                                
                                <div class="form-group">
                                    <input type="checkbox" id="ch" name="chs">
                                    I agree with <a href="#">terms and conditions.</a>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Sign up</button>
                        </div>
                    </div>
                </div>
            </div><!-- Modal for sign up-->

<!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>experts design your idea</h1>
      <h2>An advertising & marketing agency that covering Dhaka city</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About Us</h2>
            <p>
              We can deliver a campaign suited to the needs of any business, large or small, whatever the requirements. Below is a selection of outdoor advertising opportunities that would be beneficial to many clients.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Supersides demand</a></h4>
              <p class="description">Supersides demand attention and communicate your message to urban audiences nationwide.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Streetliners Deliver</a></h4>
              <p class="description">Streetliners deliver high frequency messaging to big brands looking for a community presence and can target individual towns</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Interior Ads</a></h4>
              <p class="description">Interior Ads deliver detailed messages to a captive audience and have a great dwell time. The average bus journey lasts 20 minutes and 11.7 million people.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">We are offering amazing outdoor advertising for your busniess.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href="/media24/billboard.php"><img src="img/bil.png" height="35px" width="35px"></a></div>
              <h4 class="title"><a href="/media24/billboard.php">BillBoard Advertising</a></h4>
              <p class="description">Billboards are ideal for delivering great impact to your message and can be bought individually or in flexible packs in demographic areas, key addresses can be selected.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href="/media24/bus.php"><img src="img/bus.png" height="35px" width="35px"></a></div>
              <h4 class="title"><a href="">Bus Advertising</a></h4>
              <p class="description">Over half the adult population has seen advertising on the side of a bus in the last week and 90% of people live within five minutes of a bus route</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href="/media24/air.php"><img src="img/air.png" height="35px" width="35px"></a></div>
              <h4 class="title"><a href="">Airport Advertising</a></h4>
              <p class="description">Over 24 million people travelled by plane in the Dhaka in 2017</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href="/media24/air.php""><img src="img/rail.png" height="35px" width="35px"></a></div>
              <h4 class="title"><a href="">Rail Advertising</a></h4>
              <p class="description">Over 50 million journeys were made by train during 2015 – 2016 in Dhaka</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href="/media24/van.php"><img src="img/van.png" height="35px" width="35px"></a></div>
              <h4 class="title"><a href="">Ad Vans</a></h4>
              <p class="description">Ad Vans operate nationwide and are used as mobile billboards, but can equally be used in a stationary manner to promote your message.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><img src="img/cin.png" height="35px" width="35px"></a></div>
              <h4 class="title"><a href="/media24/cin.php">Cinema Advertising</a></h4>
              <p class="description"> 45% of people watched advertisements before the main feature</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->



    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">projects</h3>
          <p class="section-description">Have a look to some of our amazing projects.</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">BillBoard</li>
              <li data-filter=".filter-card">Bus</li>
              <li data-filter=".filter-logo">Airport</li>
              <li data-filter=".filter-web">Van</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/b1.jpeg" alt="">
              <div class="details">
                <h4>BillBoard Advetising</h4>
                <span>Location: Simanto Square, Zigatola</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/v1.jpeg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/b2.jpeg" alt="">
              <div class="details">
                <h4>BillBoard Advetising</h4>
                <span>Location: Bijoy Sarani, Tejgong</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/bu1.jpg" alt="">
              <div class="details">
                <h4>Bus Advertising</h4>
                <span>Route: Dhaka to Khulna</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/bu2.jpeg" alt="">
              <div class="details">
                <h4>Bus Advertising</h4>
                <span>Route: Dhaka to Rangpur</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/v2.jpg" alt="">
              <div class="details">
                <h4>Ven Advertising</h4>
                <span>Route: Dhaka to Shylet</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/bu3.jpeg" alt="">
              <div class="details">
                <h4>Bus Advertising</h4>
                <span>Route: Dhaka to Khulna</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/b3.jpg" alt="">
              <div class="details">
                <h4>BillBoard Advetising</h4>
                <span>Location: Bardem Hospital, Shahbug</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/a1.jpg" alt="">
              <div class="details">
                <h4>Airport Advetising</h4>
                <span>Location: Chittagong Airport</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/a2.jpeg" alt="">
              <div class="details">
                <h4>Airport Advetising</h4>
                <span>Location: Shylet Airport</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/v3.jpg" alt="">
              <div class="details">
                <h4>Ven Advertising</h4>
                <span>Route: Dhaka to Chittagong</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/a3.jpeg" alt="">
              <div class="details">
                <h4>Airport Advetising</h4>
                <span>Location: Hajrat Shahjalal Airport</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Have a look to our Team</h3>
          <p class="section-description">We are professioals to promote your ideas.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/t1.jpg" alt="" ></div>
              <h4>Saifullah Mahbub</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/t2.jpg" alt=""></div>
              <h4>Mahedi Hasan</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/t3.jpg" alt="" ></div>
              <h4>Farhad Hossain</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/t4.jpg" alt=""></div>
              <h4>Abdur Rahman</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
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

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Media24</strong>. All Rights Reserved.
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- #style for signup modal -->

  <style>
    .reg
    {
      margin-right: 60px;
    }
    .pb-modalreglog-container
    {
        margin-top: 100px;
    }

    .pb-modalreglog-legend
    {
        text-align: center;
    }

    .pb-modalreglog-input-group
    {
        margin: auto;
    }

    .pb-modalreglog-submit
    {
        margin-left: 5px;
    }

    .pb-modalreglog-form-reg
    {
        text-align: center;
    }

    .pb-modalreglog-footer p
    {
        text-align: center;
        margin-top: 20px;
    }

    #pb-modalreglog-progressbar
    {
        border-radius: 2px;
    }
</style>
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

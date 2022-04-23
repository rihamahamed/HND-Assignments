<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>

<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Wintan - Hospital | Contact</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="Wintan-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
      <!-- Top Header Area -->
      <div class="top-header-area">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-12 h-100">
              <div
                class="
                  h-100
                  d-md-flex
                  justify-content-between
                  align-items-center
                "
              >
                <p>Welcome to <span>Wintan</span> Hospital</p>
                <p>
                  Opening Hours : Monday to Saturday - 8am to 10pm Contact :
                  <span>+94-77-8483320</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Header Area -->
      <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 h-100">
              <div class="main-menu h-100">
                <nav class="navbar h-100 navbar-expand-lg">
                  <!-- Logo Area  -->
                  <a class="navbar-brand" href="index-2.html"
                    ><img src="img/core-img/logo.png" alt="Logo"
                  /></a>

                  <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#WintanMenu"
                    aria-controls="WintanMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="WintanMenu">
                    <!-- Menu Area -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="index.html">Home </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">News</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="about-us.html">About Us</a>
                      </li>

                      <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                    </ul>
                    
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section
      class="breadcumb-area bg-img gradient-background-overlay"
      style="background-image: url(img/bg-img/breadcumb3.jpg)"
    >
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcumb-content">
              <h3 class="breadcumb-title">Contact</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <section class="Wintan-contact-area section-padding-100">
      <div class="container">
        <div class="row">

          <!-- Contact Form Area -->
          <div class="col-12 col-lg-8">
            <div class="contact-form" >
              <h5 class="mb-50">Get in touch</h5>

              <form name="contactus" method="post">
                <div class="form-group">
               
                <input
                    type="text"
                    class="form-control"
                    name="fullname"
                    placeholder="Name"
                    required="true"
                    value=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="emailid"
                    placeholder="Email"
                    required="true"
                    value=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="mobileno"
                    placeholder="Phone No"
                    required="true"
                    value=""
                  />
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="description"
                    cols="30"
                    rows="10"
                    placeholder="Message"
                    required="true"
                  ></textarea>
                </div>
                <input type="submit" class="btn Wintan-btn" name="submit" value="Send Message"/>
              </form>
            </div>
          </div>

          <div class="col-12 col-lg-4">
            <div class="content-sidebar">
              <!-- Contact Card -->
              <div class="Wintan-contact-card mb-50">
                <div class="single-contact d-flex align-items-center">
                  
                  <div class="contact-meta">
                    <p>
                      Lamas Str, no 14-18 <br />
                    41770 Sri lanka
                    </p>
                  </div>
                </div>

                <div class="single-contact d-flex align-items-center">
                  
                  <div class="contact-meta">
                    <p>Phone: 0094778483320</p>
                  </div>
                </div>

                <div class="single-contact d-flex align-items-center">
                  
                  <div class="contact-meta">
                    <p>Email: admin@wintan.lk</p>
                  </div>
                </div>

              <!-- Wintan Emergency Card -->
              <div
                class="Wintan-emergency-card bg-img bg-overlay"
                style="background-image: url(img/bg-img/about1.jpg)"
              >
                <i class="icon-smartphone"></i>
                <h2>For Emergency calls</h2>
                <h3>+94-77-848-3320</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   <!-- ***** Footer Area Start ***** -->
   <footer class="footer-area section-padding-100">
      <!-- Main Footer Area -->
      <div class="main-footer-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-sm-6 col-xl-3">
              <div class="footer-widget-area">
                <div class="footer-logo">
                  <img src="img/core-img/logo.png" alt="" />
                </div>
                <p style="text-align: justify">
                  Wintan Hospital is a leading private hospital in Sri Lanka.
                  The hospital was established in September 2008. The vision of
                  Wintan Hospital is providing ancillary services to the cancer
                  hospital and caters to the growing needs of Maharagama,
                  Kesbewa and Piliyandala electorates. The Wintan Hospital
                  offers its clientele a private, satisfactory and alternative
                  option to traditional medical consultation with eight
                  consulting rooms and 38 visiting specialist doctors.
                </p>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <div class="footer-widget-area">
                <div class="widget-title">
                  <h6>Use full links</h6>
                </div>
                <div class="widget-blog-post">
                  <ul>
                    <li>
                      <a href="#">Link 1 </a>
                    </li>

                    <li>
                      <a href="#">Link 2 </a>
                    </li>

                    <li>
                      <a href="#">Link 3 </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <div class="footer-widget-area">
                <div class="widget-title">
                  <h6>News </h6>
                </div>

                <div class="footer-newsletter-area">
                  <form action="#">
                    <input
                      type="email"
                      class="form-control border-0 mb-0"
                      name="newsletterEmail"
                      id="newsletterEmail"
                      placeholder="Your Email Here"
                    />
                    <button type="submit">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <div class="footer-widget-area">
                <div class="widget-title">
                  <h6>Contact Us</h6>
                </div>


                 <div class="single-contact d-flex align-items-center">
                  <div class="contact-icon mr-30">
                    <i class="icon-placeholder"></i>
                </div>
                  <div class="contact-meta">
                  
                  <p>
                    Lamas Str, no 14-18 <br />
                  41770 Sri lanka
                  </p>
                </div>
              </div>

              <div class="single-contact d-flex align-items-center">
                <div class="contact-icon mr-30">
                  <i class="icon-smartphone"></i>
              </div>  
                <div class="contact-meta">
                  <p>Phone: 0094778483320</p>
                </div>
              </div>

              <div class="single-contact d-flex align-items-center">
                <div class="contact-icon mr-30">
                <img src="img/icons/envelope1.png"></img>
              </div>
                <div class="contact-meta">
                  <p>Email: admin@wintan.lk</p>
                </div>
              </div>
               
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>
  </body>
</html>

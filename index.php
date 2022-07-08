<?php
include './dbh.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $image = $_POST['image'];
  $message = $_POST['message'];

  require './dbh.php';
  $sql = "INSERT INTO users (name, email, subject, message, image) VALUES ('$name', '$email', '$subject', '$message', '$image');"; // Inserting data into the database
  $db->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Restaurant</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0">
        <a href="index.html">
      </h1>
      <a href="./index.php" class="logo me-auto me-lg-0"><img src="assets/img/ornina.png" alt="logo" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li>
            <a class="nav-link scrollto" href="about.php" target="_blank">About</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="menu.php" target="_blank">Menu</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="specials.php" target="_blank">Specials</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="events.php" target="_blank">Events</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="gallery.php" target="_blank">Gallery</a>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Make a RESERVATION</a>
    </div>
  </header>
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Ornina</span></h1>
          <h2>Natural & Green, Made specially For You</h2>

          <div class="btns">
            <a href="menu.html" class="btn-menu animated fadeInUp scrollto" target="_blank">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Make a RESERVATION</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/kRCH8kD1GD0" autoplay="true" class="glightbox play-btn"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choosing Ornina</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>We Care about You</h4>
              <p>
                If you’ve never been to our restaurant before, you should know
                that it's a large dining room that can seat many people. With
                that sort of space, we have the capacity to host a range of
                events and special occasions. Trust that we will make your
                Experience a memorable one.
              </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Planning an Event?</h4>
              <p>
                Ornina Restaurant is happy to be the venue for your next
                presentation, reunion, party, luncheon or banquet. With two
                banquet rooms, presentation screens, an LCD projector and a
                podium, The Spot Restaurant can transform a space into the
                perfect site for your gathering.
              </p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>As You Wish it to be</h4>
              <p>
                Whether you want to have your associates attend a training
                luncheon or you're planning a birthday party, trust that we
                have the space, equipment and menu to accommodate any
                occasion. To reserve a space for your next event, come by the
                restaurant or call today.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= End of Why Us Section ====== -->
    <!-- ======= Make a RESERVATION ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Reservation</h2>
          <p>Make a RESERVATION</p>
        </div>
        <form action="./index.php" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">
              Your booking request was sent. We will call back or send an
              Email to confirm your reservation. Thank you!
            </div>
          </div>
          <div class="text-center">
            <input type="submit" class="form-control" name="submit" type="submit" value="Submit">
          </div>
        </form>
      </div>
    </section>
    <!-- End Make a RESERVATION -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Review</h2>
          <p>Tell Us About Your Experience At Ornina</p>
        </div>
      </div>
      <!-- <div data-aos="fade-up">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1090.1335618462533!2d4.375978606795571!3d50.850103466171035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3a1e4156033%3A0x1727b2758bfe14fc!2sOrnina%20Syrian%20Sweets!5e0!3m2!1sen!2sbe!4v1652960640162!5m2!1sen!2sbe"
            allowfullscreen
            ></iframe>
          </div> -->

      <form action="./index.php" method="POST" role="form" class="php_back_office" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location</h4>
                <p>Brussels - Belguim</p>
              </div>
              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours</h4>
                <p>
                  Monday-Saturday<br />
                  12:00 AM - 2300 PM
                </p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p>omarmaad90@gmail.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call</h4>
                <p>+32 486 060 020</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <!-- <form action="forms/contact.php" method="" role="form" class="php-email-form"> -->
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
            </div>
            <div class="form-group mt-3">
              <input type="file" class="form-control" name="image" id="image" placeholder="Upload Image" />
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <input type="submit" class="form-control" name="submit" type="submit" value="Submit">
            </div>
            <!-- </form> -->
          </div>
        </div>
      </form>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Ornina</h3>
              <p>
                Chaussee de Louvain - 118 <br />
                1210 - Brussels - Belguim <br /><br />
                <strong>Phone:</strong> +32 486 060 020<br />
                <strong>Email:</strong> omarmaad90@gmail.com<br />
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>
              Tamen quem nulla quae legam multos aute sint culpa legam noster
              magna
            </p>
            <form action="" method="">
              <input type="email" name="email" /><input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">&copy; All Rights Reserved</div>
    </div>
  </footer>
  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
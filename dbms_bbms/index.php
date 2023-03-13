<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blood Bank Management System</title>
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">
  <!-- CSS only getbootstrap.com-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <!-- font icons font-awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!-- used for second not working -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php
  $link=mysqli_connect("localhost","root","","dbms_bbms");
  $sql="SELECT * FROM blood_don";
?>
    <section class="colored-section" id="title">
      <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand"href="">e-BloodBank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"id="navbarTogglerDemo01">
              <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                      <a class="nav-link" href="http://localhost/dbms_bbms/contact.php">Contact us</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dbms_bbms/adminlog.php">Admin Login</a>
                  </li>
              </ul>
          </div>
      </nav>
       <!-- Title -->
    <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">Blood Bank System</h1>
        </div>
        <div class="col-lg-6 title-image-container">
          <img class="title-image" src="images/images.jfif" alt="blood">
        </div>
      </div>
    </div>
    </section>
    <!--Features-->
    <section class="white-section" id="features">
        <div class="container-fluid">
          <h2 class="section-heading">Know About The Donation.</h2>
        <div class="row">
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="head">What is constraints on age to donate the blood?</h3>
            <p>Age between 18-65.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="head">Is there any constraints on weights?</h3>
            <p>Weigh 45kgs or more and be fit and healthy.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="head">Where are these blood used?</h3>
            <p>Stomach disease,kidney disease,blood loss,cancer and many more.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="head">How long the red cells are stored?</h3>
            <p>42 days.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="head">How long does it take to donate?</h3>
            <p>15 minutes.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="head">How often can we donate?</h3>
            <p>Every 12 weeks.</p>
          </div>
         </div>
         </div> 
    </section>
 <!-- Testimonials -->
 <section class="colored-section" id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <img class="testimonial-img" src="images/campkar.jfif" alt="kar-profile">
          <h2 class="testimonial-text">Blood Donation Camp in Karkala.</h2>
          <em>50+ donors</em>
        </div>
        <div class="carousel-item container-fluid">
          <img class="testimonial-img" src="images/campman.jfif" alt="mang-profile">
          <h2 class="testimonial-text">Blood Donation Camp in Mangalore.</h2>
          <em>75+ donors</em>
        </div>
        <div class="carousel-item container-fluid">
          <img class="testimonial-img" src="images/campnit.jfif" alt="nitte-profile">
          <h2 class="testimonial-text">Blood Donation Camp in Nitte.</h2>
          <em>70+ donors</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <section class="white-section" id="register">
    <h4 class="section-heading"><b>One</b> Blood donation can save upto <b>Three</b> lives!</h4>
    <br>
    <a class="btn btn-danger register-button" href="http://localhost/dbms_bbms/donate.php">Donate Now</a>
    <br><br>
    <h4 class="section-heading">Click here to request for the blood!</h4>
    <br>
    <a class="btn btn-danger register-button" href="http://localhost/dbms_bbms/request.php">Request Now</a>
  </section> 

  <footer class="foot-section" id="footer">
    <div class="container-fluid">
        <i class="icn fab fa-facebook-f"></i>
        <i class="icn fab fa-instagram"></i>
        <i class="icn fab fa-twitter"></i>
        <i class="icn fas fa-envelope"></i>
        <h6>© Copyright e-BloodBank</h6>
    </div>
  </footer>
</body>
</html>
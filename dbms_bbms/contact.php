<!DOCTYPE html>
<html>
<?php
    $link = mysqli_connect("localhost", "root", "", "dbms_bbms");
?>
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
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
   
<div class="colored-section" id="title">
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
                        <a class="nav-link" href="http://localhost/dbms_bbms/index.php">Home</a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">Blood Bank System</h1>
        </div>
        <div class="col-lg-6 title-image-container">
          <img class="title-image" src="images/images.jfif" alt="blood">
        </div>
      </div>
      </div>
</div>
<section class="white-section">
<div class="contact-us-section2">
<h1 class="adm">Contact us here </h1><br>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName" ><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button class="btn btn-danger"type="submit" name="submit" value="submit">Send your Message</button>
                <?php
                    if(isset($_POST['submit'])){
                        $insert_query = "INSERT INTO 
                        feedback_table ( sender_fname,
                                        sender_lname,
                                        sender_mail,
                                        sender_msg)VALUES ('".$_POST["fName"]."','".$_POST["lName"]."','".$_POST["eMail"]."','".$_POST["feedback"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
           	 </form>
</div>
<br><br><br>
<div class="sect-head">
            <h1 class="adm">Address & Info</h1><br><br>
            <h3>Phone Numbers</h3><br>
            <p>+918971144168<br>
               +919845062101</p><br>
            <h3>Address</h3>
            <p>4 A, 3rd Houston Street, Kundapura</p><br>
            <h3>E-mail</h3>
            <p>ebloodbank@gmail.com</p>
</div>
<br><br><br>
<main>
<h2 class="adm"><center>ABOUT US</h2></center><hr>

<pre><center>
The Blood Bank system is aimed at managing the details of Blood, Donor, BloodGroup, BloodBank and Stocks.
The Blood Bank Management System is an internet based application that can be used by the user to register for the 
donation of blood. 
This project mainly uses mySQL for backend and is designed using some frontend languages. 
</center></pre>
</main>
<footer class="foot-section" id="footer">
            <div class="container-fluid">
              <i class="icn fab fa-facebook-f"></i>
              <i class="icn fab fa-instagram"></i>
              <i class="icn fab fa-twitter"></i>
              <i class="icn fas fa-envelope"></i>
              <h6>© Copyright e-BloodBank</h6>
            </div>
            </footer>
</section>
</body>
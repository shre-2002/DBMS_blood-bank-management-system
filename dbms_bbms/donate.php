<!DOCTYPE html>
<html>
<?php
    $link = mysqli_connect("localhost", "root", "", "dbms_bbms");
?>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
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
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost/dbms_bbms/contact.php">Contact us</a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">Registration Form</h1>
        </div>
        <div class="col-lg-6 title-image-container">
          <img class="title-image" src="images/images.jfif" alt="blood">
        </div>
      </div>
      </div>
</div>
<div class="sect-head" id="form">
<form action="" method="POST">
<center>
<table>
<tr>
<td><br></td>
</tr>
                <tr>
                    <td><font size="4" ><b>First name:</b></font></td>
                    <td><input type="text" name="fname" required></input></td>
                    <br>
                </tr>
                <tr>
                    <td><font size="4"><b>Middle name:</b></font></td>
                    <td><input type="text" name="minit" required></input></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Last name:</b></font></td>
                    <td><input type="text" name="lname"></input></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Age:</b></font></td>
                    <td><input type="text" name="age" required/></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Gender:</b></font></td>
                    <td><select name="gender">
                        <option value="" disabled selected>Gender</option>
                                <option>M</option>
                                <option>F</option>
                        </select></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Blood Group:</b></font></td>
                    <td><select name="b_grp">
                        <option value="" disabled selected>Blood Group</option>
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Address:</b></font></td>
                    <td><input type="text" name="address" required/></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Mobile:</b></font></td>
                    <td><input type="text" name="contact" required pattern="[0-9]{10}"/></td>
                </tr>
                <tr>
                    <td><font size="4" ><b>Email:</b></font></td>
                    <td><input type="email" name="email" required></input></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                <button type="submit" value="submit" name="submit" class="btn btn-danger register-button">Submit</button>
                    </td>
                <tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
</table>
</center>
<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $minit = $_POST['minit'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $b_grp = $_POST["b_grp"];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

     $res = "insert into blood_don(fname,minit,lname,age,gender,b_grp,address,contact,email)values('".$fname."','".$minit."','".$lname."',".$age.",'".$gender."','".$b_grp."','".$address."','".$contact."','".$email."');";
    mysqli_query($link, $res);
}
?>
</form>
</div>
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
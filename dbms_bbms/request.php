<!DOCTYPE html>
<html>
<?php
    $link = mysqli_connect("localhost", "root", "", "dbms_bbms");
?>
<head>
  <meta charset="utf-8">
  <title>Request Form</title>
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
          <h1 class="big-heading">Request Form</h1>
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
                    <td><font size="4" ><b>Hospital name:</b></font></td>
                    <td><input type="text" name="hname" required></input></td>
                    <br>
                </tr>
                <tr>
                    <td><font size="4" ><b>City:</b></font></td>
                    <td><input type="text" name="cname" required></input></td>
                    <br>
                </tr>
                <tr>
                    <td><font size="4" ><b>State:</b></font></td>
                    <td><input type="text" name="sname" required></input></td>
                    <br>
                </tr>
                <tr>
                    <td><font size="4" ><b>Ordered by:</b></font></td>
                    <td><input type="text" name="rname" required></input></td>
                    <br>
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
                    <td><font size="4" ><b>Blood Units:</b></font></td>
                    <td><input type="text" name="bunits" required></input></td>
                    <br>
                </tr>
                <tr>
                    <td><font size="4" ><b>Email:</b></font></td>
                    <td><input type="email" name="email" required></input></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                <button type="submit" value="submit" name="submit" class="btn btn-danger register-button">Request</button>
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
    $hname = $_POST['hname'];
    $cname = $_POST['cname'];
    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $b_grp = $_POST['b_grp'];
    $bunits = $_POST['bunits'];
    $email = $_POST['email'];


    $res = "insert into hospital(hname,cname,sname,rname,b_grp,bunits,email)values('" . $hname . "','" . $cname . "','" . $sname . "','" . $rname . "','" . $b_grp . "'," . $bunits . ",'" . $email . "');";
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
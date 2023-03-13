<!DOCTYPE html>
<html>
<?php
    $link = mysqli_connect("localhost", "root", "", "dbms_bbms");
?>
<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>
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
                      <a class="nav-link" href="http://localhost/dbms_bbms/contact.php">Contact us</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dbms_bbms/index.php">Logout</a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="row">
        <div class="col-lg-6">
          <h4 class="big-heading">Admin Dashboard</h4>
        </div>
        <div class="col-lg-6 title-image-container">
          <img class="title-image" src="images/images.jfif" alt="blood">
        </div>
      </div>
      </div>
</div>
<?php
    $link = mysqli_connect("localhost", "root", "", "dbms_bbms");
    $sql = "SELECT * FROM blood_don";
    $sql1="SELECT * FROM feedback_table";
    $sql2 = "SELECT * FROM hospital";
    $registerNo=mysqli_num_rows(mysqli_query($link, $sql));
    $messagesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM feedback_table"));
    $requestNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM hospital"));
?>
<section class="white-section">
            
            <div class="container-fluid" >
                
                    <h2 class="adm">Donor Registrations</h2><br><br>
                
                    <?php
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<div class=\"column\">\n";
                               
                                echo "                            <table style=\"border: 1px red solid;\" <div class=\"row\">";
                               
                                echo "                                     <h6><b>Name: ". $row['fname'] ." ". $row['minit'] ." ". $row['lname'] ."</h6>\n";
                                echo "                                    <i class=\"icon fas fa-circle\"></i></b>\t";
                                echo "                                    <h6><b>Age: ". $row['age'] ."</h6>\t";
                                echo "                                    <i class=\"icon fas fa-circle \"></i></b>\t";
                                echo "                                    <h6><b>Blood Group: ". $row['b_grp'] ."</h6>\t";
                                echo "                                    <i class=\"icon fas fa-circle \"></i></b>\t";
                                echo "                                    <h6><b>Address: ". $row['address'] ."</h6>\n";
                                echo "                                    <i class=\"icon fas fa-circle \"></i></b>\n";
                                echo "                                    <h6><b>Email: ". $row['email'] ."</h6><b>\n";
                                
                                echo "                                    <h6><b>Contact: ". $row['contact'] ."</h6><b>\n";
                                echo "                                </div>\n";
                                echo "                            <br><div class=\"column\">\n";
                                echo "                                <b><i class=\"icon fas fa-check accept-reg\" title=\"Accept Registration\"></i></b> &nbsp &nbsp &nbsp &nbsp &nbsp <a href='deletereg.php?id=".$row['don_id']."'><i class=\"icon fas fa-times reject-reg\" title=\"Reject Registration\" color=\"rgb(243, 44, 44)\"></i></a>\n";
                               
                                echo "                            </div><br>";
                                
                                echo "                        </table>";
                                echo "                        </div>";
                                
                                echo "                         <br>";
                             }
                            mysqli_free_result($result);
                        } else{
                            echo '<h4 class="no-annot">No Registrations</h4>';
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>
                

<h2 class="adm">Hospital Requests</h2><br>
<?php
if($result = mysqli_query($link, $sql2)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<div class=\"row\">\n";
                                                               
                                    echo "                            <table style=\"border: 1px red solid;\" <div class=\"row\">\n";
                                    echo "                                <div><br>\n";
                                    echo "                                    <h6><b>". $row['hname'] ."</h6>\n";
                                    echo "                                    <h6><b>". $row['cname'] ."</h6>\n";
                                    echo "                                    <h6><b>". $row['sname'] ."</h6>\n";
                                    echo "                                    <i class=\"icon fas fa-circle \"></i>\n";
                                    echo "                                    <h6><b>". $row['rname'] ."</h6>\n";
                                    echo "                                    <i class=\"icon fas fa-circle \"></i>\n";
                                    echo "                                    <h6><b>". $row['b_grp'] ."</h6>\n";
                                    echo "                                    <h6><b>". $row['bunits'] ."</h6>\n";
                                    echo "                                    <h6><b>". $row['email'] ."</h6>\n";
                                    echo "                                </div>\n";
                                    echo "                            <br><div class=\"column\">\n";
                                    echo "                                <b><i class=\"icon fas fa-check accept-reg\" title=\"Accept Request\"></i></b> &nbsp &nbsp &nbsp &nbsp &nbsp <a href='deletereq.php?id=".$row['h_id']."'><i class=\"icon fas fa-times reject-reg\" title=\"Reject Request\" color=\"rgb(243, 44, 44)\"></i></a>\n";
                                    echo "                            </div></table>\n";
                                    echo "                        </div><br>";
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Requests right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>


<h2 class="adm">Feedbacks</h2><br>
<?php
if($result = mysqli_query($link, $sql1)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<div class=\"row\">\n";
                                
                                    echo "                            <table style=\"border: 1px red solid;\" <div class=\"row\">\n";
                                    echo "                                <div><br>\n";
                                    echo "                                    <h6><b>". $row['sender_fname'] ."</h6>\n";
                                
                                    echo "                                    <h6><b>". $row['sender_lname'] ."</h6>\n";
                                    echo "                                    <i class=\"icon fas fa-circle \"></i>\n";
                                    echo "                                    <h6><b>". $row['sender_mail'] ."</h6>\n";
                                    echo "                                </div>\n";
                                    echo "                                <div>\n";
                                    echo "                                    <h6><b>Message:\n". $row['sender_msg'] ."</h6>\n";
                                   
                                    echo "                                </div>\n";
                                    echo "                            </div></table>\n";
                                    echo "                        </div><br>";
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Messages right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                    </div>
</section>

    <div class="column">
    <h2 style="color: red"><?php echo $registerNo ?></h2>
                        <h3>Donor Registrations</h3><br>
    <h2 style="color: red"><?php echo $requestNo ?></h2>
                        <h3>Blood Requests</h3><br>
    <h2 style="color: red"><?php echo $messagesNo ?></h2>
                        <h3>Feedbacks</h3>
    </div>

</body>
</html>
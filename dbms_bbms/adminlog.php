<html>

<head>
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
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
  <h2 class="h1-heading">Welcome Admin!!</h2>
<style>
  .h1-heading{
    font-family: "Montserrat", sans-serif;
    font-size: 3.5rem;
    line-height: 1.5;
    font-weight: bold;
    color:rgb(243, 44, 44);
    text-shadow: #ff6666;
  }
    body {
    background-color: white;
    font-family: "Montserrat";
    }
    .main {
        background-color: rgb(243, 44, 44);
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px #ff6666;
    }
    .sign {
        padding-top: 40px;
        color: white;
        font-family: "Montserrat";
        font-weight: bold;
        font-size: 23px;
    }
    .un {
    width: 76%;
    color: black;
    font-size: 14px;
    background: whitesmoke;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    }
    form.form1 {
        padding-top: 40px;
    }
    .pass {
    width: 76%;
    color: black;
    font-size: 14px;
    background: whitesmoke;
    padding: 10px 20px;
    border-radius: 20px;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 40px;
    }
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #ff6865;
        background: linear-gradient(to right, #fbfcf8, #fff9e3);
        border: 0;
	      padding:10px 40px;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px #ff6666;
        width:120px;
    }
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: black;
        padding-top: 15px;
    }  
</style>
</head>

<body>


  <div class="main">
    <p class="sign" align="center">Admin Login</p>
    <form class="form1" method="GET" action="login_auth.php">
      <input class="un " type="text" align="center" placeholder="Username" name="usn" id="usn">
      <input class="pass" type="password" align="center" placeholder="Password" name="pwd" id="pwd">
      <input type="submit" class="submit" name="signin" value="LOGIN">
   
                
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
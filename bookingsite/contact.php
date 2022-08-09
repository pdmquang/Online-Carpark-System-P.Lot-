<!-- Done By: Alex -->

<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
  session_start();
} ?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'front-libraries.php'; ?>

  <style type="text/css">
    .container {
      margin-top: 90px;
      top: 650px;
      bottom: 250px;
      height: 450px;
    }

    #footer {
      width: 100%;
      position: absolute;
      bottom: 0;
      height: 110px;
    }

    #header {
      position: absolute;
      top: 0;
    }
  </style>
</head>

<body class="size-1140">
  <header id="header">
    <?php include 'navigation-bar.php'; ?>
  </header>
  <section>
    <div class="container">
      <div id="contact">
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
              <img src="img/caroffice.jpg" alt="">
            </div>
            <div class="s-12 m-12 l-4 margin-bottom right-align">
              <h3>Find us here for help</h3><br>
              <address>
                <p><strong>Address:</strong> Somewhere in Singapore</p>
                <p><strong>Office Hours:</strong> 0800 - 1700</p>
                <p><strong>Contact:</strong> 999</p>
                <p><strong>E-mail:</strong> parkinglots@gmail.com</p>
              </address>
            </div>
            <div class="s-12 m-12 l-5">
              <h3>Any Questions? Contact Us here</h3>
              <form class="customform" method="post" enctype="multipart/form-data">
                <div><input name="email" placeholder="Your e-mail" title="e-mail" type="text" required /></div>
                <div><input name="username" placeholder="Your name" title="username" type="text" required /></div>
                <div><textarea placeholder="Your message" name="message" rows="5" required></textarea></div>
                <input type="File" name="file">
                <input type="submit" name="submit">
              </form>
            </div>
            <div>
              <?php
              $localhost = "localhost";
              $dbusername = "root";
              $dbpassword = "";
              $dbname = "ip project";


              $conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

              if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $username = $_POST["username"];
                $message = $_POST["message"];

                $fileError = $_FILES["file"];

                #File name with a random number so similar files dont get replaced
                $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

                #Temporary file name to store file
                $tname = $_FILES["file"]["tmp_name"];

                #Set upload directory path
                $uploads_dir = 'files';

                #Move uploaded file to specific location
                move_uploaded_file($tname, $uploads_dir . '/' . $pname);


                $sql = "INSERT into upload3(email,username,message,file) VALUES('$email','$username','$message','$pname')";


                if (mysqli_query($conn, $sql)) {
                  $alert = "<script>alert('Thank You for your Feedback!');</script>";
                  echo $alert;
                } else {
                  $Error = "<script>alert('There seems to be an error! Please try ');</script>";
                  echo $Error;
                }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="line">
      <div class="s-12 l-6">
        <p>Copyright 2021, TLM2008 - GRP8</p>
      </div>
    </div>
  </footer>
</body>

</html>

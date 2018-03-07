<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Departemen Teknologi Informasi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang Departemen</a></li>
          <li><a href="#facts">Visi Misi</a></li>
          <li><a href="#services2">Fasilitas</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li class="menu-has-children"><a href="#services3">Profil Lulusan</a>
            <ul>
              <li><a href="#services3">Spesialis Keamanan Siber</a></li>
              <li><a href="#services3">Spesialis Internet of Things</a></li>
              <li><a href="#services3">Analis Keamanan Aplikasi</a></li>
              <li><a href="#services3">Pengembangan Layanan Awan</a></li>
              <li><a href="#services3">Spesialis Integrasi Sistem</a></li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Form Pendaftaran Departemen Teknologi Informasi</h3>
          <p class="section-description">Isi form dibawah ini sesuai dengan data diri anda!</p>
        </div>
      </div>
          <div class="col-lg-5 col-md-8">
            <div class="form">
    <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed"; 
            }
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format"; 
            }
          }

          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "Invalid URL"; 
            }
          }

          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }

          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
    ?>
         
        <p><span class="error">* required field.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" class="contactForm">  
        <div class="form-group">
          Name: <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span>
        </div>
          <br><br>
        <div class="form-group">
          E-mail: <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span>
          </div>
          <br><br>
        <div class="form-group">
          Usia : <input type="text" class="form-control" name="website" value="<?php echo $website;?>">
          <span class="error"><?php echo $websiteErr;?></span>
          </div>
          <br><br>
        <div class="form-group">
          Alasan Mendaftar: <textarea name="comment" class="form-control" rows="5" cols="40"><?php echo $comment;?></textarea>
          </div>
          <br><br>
          Gender:
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
        ?>

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
          
          <span>Web Visitors : <?php 
            include ("counter.php");
            echo $kunjungan[0];
            ?></span><br>
         <p>Today is <?php
          echo date("Y/m/d") ." " . date("l");
        ?> </p>
          
        &copy; Copyright <strong>Gienzka Azzahra Wibowo Putri</strong>. 05211640000151
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>


      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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

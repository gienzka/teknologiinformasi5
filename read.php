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
        <a href="index.php"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
         
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Panel Admin</h3>
          <p class="section-description"></p>
        </div>
      </div>
          <div class="col-lg-5 col-md-8">
            <div class="form">
     
                <h4>Update Data</h4>
            <form action="update.php" method="post">
                Status : <input type="text" name="status" class="form-control"><br>
                Email : <input type="text" name="email" class="form-control"><br>
                <input type="submit">
            </form>

            <br/>
            <br/>

            <h4>Delete Data</h4>
            <form action="delete.php" method="post">
                Email  : <input type="text" name="email" class="form-control"><br>
                <input type="submit">
            </form>

            <br/>
            <br/>
            <br/>

        <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "teknologiinformasi";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM pengajuanformulir";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "Nama: " . $row["nama"]. " - Email: " . $row["email"]. " - Usia: " . $row["usia"]. " - Alamat: " . $row["alamat"]. " - Status: " . $row["status"].  "<br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();

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

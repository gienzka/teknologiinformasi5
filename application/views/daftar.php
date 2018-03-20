<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Departemen Teknologi Informasi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(). 'img/favicon.ico'; ?>" rel="icon"> 
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url(). 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700'; ?>" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(). 'lib/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(). 'lib/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo base_url(). 'lib/animate/animate.min.css'; ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(). 'css/style.css'; ?>" rel="stylesheet">



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
          <h3 class="section-title">Pengajuan Formulir Pendaftaran Departemen Teknologi Informasi</h3>
          <p class="section-description">Isi form dibawah ini sesuai dengan data diri anda!</p>
        </div>
      </div>
          <div class="col-lg-5 col-md-8">
            <div class="form">
        <!--
        <form action="insert.php" method="post"  class="contactForm">  
        <div class="form-group">
          Name: <input type="text" class="form-control" name="nama">
        </div>
          <br><br>
        <div class="form-group">
          E-mail: <input type="text" class="form-control" name="email">
          </div>
          <br><br>
        <div class="form-group">
          Usia : <input type="text" class="form-control" name="usia">
          </div>
          <br><br>
        <div class="form-group">
          Alamat: <input type="text" name="alamat" class="form-control"></textarea>
          </div>
          <input type="hidden"  name="status" value="Pending">
          <input type="submit" >  
        </form>-->
      
      
        <form action="<?php echo base_url(). 'Crud/insert'; ?>" method="post"> 
                Nama   : <input type="text" name="nama" class="form-control"><br>
                Email  : <input type="text" name="email" class="form-control"><br>
                Usia   : <input type="text" name="usia" class="form-control"><br>
                Alamat : <input type="text" name="alamat" class="form-control"><br>
                        <input type="hidden" name="status" value="Pending"><br>
        
        <input type="submit">
    </form>


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
  <script src="<?php echo base_url(). 'lib/jquery/jquery.min.js'; ?>"></script>   
  <script src="<?php echo base_url(). 'lib/jquery/jquery-migrate.min.js'; ?>"></script> 
  <script src="<?php echo base_url(). 'lib/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
  <script src="<?php echo base_url(). 'lib/easing/easing.min.js'; ?>"></script> 
  <script src="<?php echo base_url(). 'lib/wow/wow.min.js'; ?>"></script> 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="<?php echo base_url(). 'lib/waypoints/waypoints.min.js'; ?>"></script> 
  <script src="<?php echo base_url(). 'lib/counterup/counterup.min.js'; ?>"></script> 
  <script src="<?php echo base_url(). 'lib/superfish/hoverIntent.js'; ?>"></script> 
  <script src="<?php echo base_url(). 'lib/superfish/superfish.min.js'; ?>"></script> 

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(). 'contactform/contactform.js'; ?>"></script> 

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(). 'js/main.js'; ?>"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Estudiantes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
<style>
th{text-align:center;
text-transform:uppercase;
background:white;
color:blue;
padding:7px;}  
td{padding:7px;
border:1px solid white;}
</style>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="#">Estudiantes</a></h1>      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Inicio</a></li>
          <li><a class="nav-link" href="#estudiantes">Estudiantes registrados</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="estudiantes" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

     

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Estudiantes registrados</h3>
          <p class="fst-italic">
            Los siguientes estudiantes estan registrados en el sistema
          </p>     
          <div>
            <table width='100%' >
              <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>correo</th>
                <th>celular</th>
                <th>genero</th>
                <th>ciudad</th>
                <th>fecha</th>
              </tr>
              <?php
              include('conexion.php');
              $sql = "SELECT * FROM students;";
              $res = mysqli_query($conn,$sql);

              $html='';
              while($row=mysqli_fetch_array($res)){
                $id = $row['student_id'];
                $nombres = $row['student_name'];
                $correo = $row['email_address'];
                $celular = $row['contact'];
                $genero = $row['gender'];
                $ciudad = $row['country'];
                $fecha = $row['datetime'];
                
                $html.='<tr>
                  <td>'.$id.'</td>
                  <td>'.$nombres.'</td>
                  <td>'.$correo.'</td>
                  <td>'.$celular.'</td>
                  <td>'.$genero.'</td>
                  <td>'.$ciudad.'</td>
                  <td>'.$fecha.'</td></tr>';                
              }
              echo $html;
              ?>             
            </table>
          </div>     
        </div>
      </div>

    </div><!-- End About Me -->

    
    

  </section>


  <div class="credits">    
  <p>Paola Garcia Rios - CIPEC</p>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>
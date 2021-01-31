<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PPI Edufest | Detail</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
      <div class="container-fluid h-100">
        <div class="row h-100">
          <div class="col-12 h-100">
            <nav class="h-100 navbar navbar-expand-lg align-items-center">
              <a class="navbar-brand" href="index.php"
                ><img src="img/logo-edufest.png" width="150" alt=""
              /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#fancyNav"
                aria-controls="fancyNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="ti-menu"></span>
              </button>

              <!-- TODO add hover animation bottom line -->
              <div class="collapse navbar-collapse" id="fancyNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Home </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="pembicara.php">Pembicara</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Agenda.php">Agenda</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Content Area Start ***** -->
    <?php
    include "config/connection.php"; 
    $id = $_REQUEST['id']; 
    $sql = "SELECT * FROM event WHERE id_event=$id";
    $query = mysqli_query($conn, $sql); 
    $sql2 = "SELECT*FROM speaker WHERE id_event=$id"; 
    $query2 = mysqli_query($conn, $sql2); 
    $data = mysqli_fetch_assoc($query); 
    $speakers = array();
    $pics = array(); 
    while($loop = mysqli_fetch_assoc($query2)){
        array_push($pics, $loop['img_speaker']); 
        array_push($speakers, $loop['nama_speaker']); 
    } 

    ?>
    <div class="container-fluid mt-content">
      <div class="row">
          <div class="col-sm-6 px-5">
            <div class="">
              <h1 class="mb-2"><?php echo $data['judul_event']; ?></h1>
              <h3 class="mb-2"><?php echo join(", ", $speakers); ?></h3>
              <?php 
              for($i=0; $i<sizeof($pics); $i++){ 
                echo "<img class='mb-2' src='img/uploads/speaker/".$pics[$i]."' alt='' style='width:200px; height:200px;'>"; 
              }  
              ?>
              <p class="mb-2"><?php echo $data['detail_event']; ?></p>
            </div>
          </div>
          <!-- /.col-sm-6 -->
          <div class="col-sm-6 text-center">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScbKvMQBIzkKQo0rDaIvLE3PdUfymCEv5ldcRoZ-6Z_-5XUhA/viewform?embedded=true" width="640" height="720" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
          </div>
          <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
       </div>
       <!-- /.container -->

    <!-- ***** Content Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer>
      <div class="d-flex justify-content-around p-5 footer-area">
        <div class="m-4">
          <div class="text-center">
            <img class="mb-4" width="50" src="img/logo.png" alt="Logo" />
            <p class="">© Copyright 2020 PPI DUNIA</p>
            <p class="">All rights reserved.</p>
          </div>
        </div>
        <div class="m-4 text-center">
          <div class="">
            <p class="font-weight-bold">Halaman</p>
          </div>
          <div class="">
            <a href="pembicara.php"><p>Pembicara</p></a>
            <a href="Agenda.php"><p>Agenda</p></a>
            <a href="faq.php"><p>FAQ</p></a>
          </div>
        </div>
        <div class="m-4">
          <div class="">
            <p class="font-weight-bold text-center">Folow Us</p>
          </div>
          <div class="d-flex flex-row bd-highlight mb-3 w-">
            <img
              width="30"
              class="mr-2"
              src="img/facebook.svg"
              alt="facebook"
              srcset=""
            />
            <img
              width="30"
              class="mx-2"
              src="img/twitter.svg"
              alt="facebook"
              srcset=""
            />
            <img
              width="30"
              class="mx-2"
              src="img/linkedin.svg"
              alt="facebook"
              srcset=""
            />
            <img
              width="30"
              class="mx-2"
              src="img/instagram.svg"
              alt="facebook"
              srcset=""
            />
          </div>
        </div>
      </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
  </body>
</html>

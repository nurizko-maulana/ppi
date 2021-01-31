<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PPI Edufest</title>

    <!-- Icon-->
    <link rel="icon" href="favicon-32x32.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet" />
    <link href="multiitemslider.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

  <body>
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
                aria-label="Toggle navigation">
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

    <!-- ***** Hero Area Start ***** -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/bg-img/about-1.jpg" alt="PPI EDUFEST" style="width:100%;">
        </div>
     
  
        <div class="item">
          <img src="img/bg-img/country.jpg" alt="PPI EDUFEST" style="width:100%;">
        </div>
      
        <div class="item">
          <img src="img/bg-img/hero-1.jpg" alt="PPI EDUFEST" style="width:100%;">
        </div>
        <div class="item">
          <img src="img/bg-img/hero-2.jpg" alt="PPI EDUFEST" style="width:100%;">
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- ***** Hero Area End ***** -->
 
    <!-- ***** About Us Area ***** -->
    <section class="fancy-skills-area section-padding-100">
      <!-- Side Thumb -->
      <div class="skills-side-thumb">
          <img src="img/bg-img/ppi.png" alt="">
      </div>
      <!-- Skills Content -->
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-6 col-xl-6 ml-auto">
                  <div class="section-heading">
                    <h2><center>PPI EDUFEST 2021</center></h2>
                    
                  </div>
                  <div class="skills-content">
                    <center><p>PPI Edufest 2021: Journey of The World’s Education across Indonesia adalah program yang mempertemukan pelajar Indonesia 
                      di luar negeri dan pelajar Indonesia dalam negeri yang ingin melanjutkan pendidikan ke luar negeri melalui pameran pendidikan yang diinisiasi oleh
                      Festival Luar Negeri (FELARI) Perhimpunan Pelajar Indonesia Dunia (PPI Dunia) dan didukung oleh Duta Felari PPI Dunia di 34 provinsi di seluruh Indonesia</P>
                    </center>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Skills Area End ***** -->

  <section class="fancy-skills-area">
        <div class="row">
              <iframe class ="col-12" height = 500px src="https://www.youtube.com/embed/73CQ4pkrauA?autoplay=1&mute=1">
              </iframe>
            </section>
            
    <!-- ***** Agenda Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>AGENDA</h2>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                <!--Agenda -->
            <?php 
            include "config/connection.php"; 
            $today = date("Y-m-d"); 
            $sql = "SELECT*FROM event WHERE tanggal_event >= date(now()) ORDER BY tanggal_event ASC LIMIT 6"; 
            $query = mysqli_query($conn, $sql); 
            while($data = mysqli_fetch_assoc($query)){ ?>
                <div class="col-12 col-md-4 text-center">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/uploads/event/<?php echo $data['img_event']; ?>" alt="" style="height:200px;width:200px;">
                        <div class="blog-content">
                            <h5><a href="#"><?php echo $data['judul_event']; ?></a></h5>
                            <a href="#"><button type="button" class="btn btn-danger">Daftar Sekarang</button></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    
    <!--Pembicara Start-->
    <section class="fancy-about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Pembicara</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="carousel carousel-showmanymoveone slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                            <?php 
                            $sql_speaker = "SELECT * FROM event LEFT JOIN speaker ON speaker.id_event = event.id_event WHERE tanggal_event >= date(now()) ORDER BY tanggal_event ASC LIMIT 6"; 
                            $query_speaker = mysqli_query($conn, $sql_speaker); 
                            $x = 0; 
                            function fill($source){
                                if (!empty($source)){
                                    echo $source; 
                                } else {
                                    echo "<br>"; 
                                }
                            }
                            while ($data_speaker = mysqli_fetch_assoc($query_speaker)){
                                if($x == 0){
                                    $y = "active"; 
                                } else {
                                    $y = ""; 
                                }
                                if(!empty($data_speaker['nama_speaker'])){
                            ?>

                                <div class="item <?php echo $y; ?>">
                                    <div class="col-12 col-md-4">
                                        <!-- Card -->
                                        <div class="card testimonial-card">
                                            <!-- Background color -->
                                            <div class="card-up indigo lighten-1"></div>
                                            <!-- Avatar -->
                                            <div class="avatar mx-auto white">
                                                <img src="img/uploads/speaker/<?php echo $data_speaker['img_speaker']; ?>" class="rounded-circle" alt="woman avatar" style="width:200px; height: 200px;">
                                            </div>
                                            <!-- Content -->
                                            <div class="card-body">
                                                <!-- Name -->
                                                <h4 class="card-title"><?php echo $data_speaker['nama_speaker']; ?></h4>
                                                <hr>
                                                <!-- Quotation -->
                                                <p> <?php fill($data_speaker['lingkup_jurusan']); ?></p>
                                                <p> <?php fill($data_speaker['ppi_speaker']); ?></p>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                </div>
                            <?php 
                                }
                                $x++; 
                            } 
                            ?>
                        </div>
                        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Of Pembicara Section-->
  
    <!-- ***** Sponsor & Partner Area ***** -->
    <div class="col-12" style="padding: 60px">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Slider 1-->
        <div class="carousel-item active">
          <div class = "row" style="margin-left: 70px; margin-right: 70px;" >
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/spotify.png" alt="Sponsor"></div>
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/ms.png" alt="Sponsor"></div>
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/google.png" alt="Sponsor"></div>
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/webflow.png" alt="Sponsor"></div>
          </div>
        </div>
        <!-- end of slider 1-->

        <!-- Slider 2-->
        <div class="carousel-item">
          <div class = "row" style="margin-left: 70px; margin-right: 70px">
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/spotify.png" alt="Sponsor"></div>
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/ms.png" alt="Sponsor"></div>
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/google.png" alt="Sponsor"></div>
            <div class = "col-3"><img class="d-block w-100" src="img/sponsor/webflow.png" alt="Sponsor"></div>
          </div>
        </div>
        <!-- end of Slider 2-->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <i class="fas fa-chevron-left" style="color: grey; font-size: 50px;"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <i class="fas fa-chevron-right" style="color: grey; font-size: 50px;"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </div>

    <!-- ***** Footer Area Start ***** -->
    <footer>
        <div class="d-flex justify-content-around p-5">
          <div class="mx-5">
            <div class="">
              <img class="mb-4" width="50" src="img/logo.png" alt="Logo" />
              <p class="">© Copyright 2020 PPI DUNIA</p>
              <p class="">All rights reserved.</p>
            </div>
          </div>
          <div class="mx-5">
            <div class="text-center">
              <p class="font-weight-bold">Halaman</p>
            </div>
            <div class="text-center">
              <a href="pembicara.php"><p>Pembicara</p></a>
              <a href="Agenda.php"><p>Agenda</p></a>
              <a href="faq.php"><p>FAQ</p></a>
            </div>
          </div>
          <div class="mx-5">
            <div class="">
              <p class="font-weight-bold">Follow Us</p>
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
    <!--Slider Js-->
    <script src="js/slider.js"></script>

</body>

</html>
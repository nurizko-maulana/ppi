<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PPI Edufest | Agenda</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet" />
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.php">PPI DUNIA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav"
                            aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
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

    <!-- ***** Trending Topic Start ***** -->
    <?php 
    include "config/connection.php";
    $sql = "SELECT * FROM event ORDER BY tanggal_event ASC"; 
    $query = mysqli_query($conn, $sql);
    //arrays 
    $arr_month_num = array(); 
    //uniques
    while($data = mysqli_fetch_assoc($query)){
        $month_num = date("n", strtotime($data['tanggal_event'])); 
        if (!in_array($month_num, $arr_month_num,)){
            array_push($arr_month_num, $month_num); 
        }
    } 
    //fx 
    function date_indo($date, $input){
        $bulan = array (
            1 =>   'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        );
        $split = explode('-', $date);
        if($input=='full'){
            echo $split[2].' '.$bulan[ (int)$split[1] ].' '.$split[0];
        } else if($input =='month'){
            echo strtoupper($bulan[$date]); 
        }
    }

    function isi($mth){
        include "config/connection.php"; 
        $sql_isi = "SELECT*FROM event WHERE MONTH(tanggal_event) = $mth ORDER BY tanggal_event ASC"; 
        $query_isi = mysqli_query($conn, $sql_isi); 
        $today = date("Y-m-d"); 
        while ($data_isi = mysqli_fetch_assoc($query_isi)){
    ?>
            <div class="col-12 col-md-4 text-center">
                <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                    <img src="img/uploads/event/<?php echo $data_isi['img_event'];?>" alt="" style='width: 200px; height: 200px;'>
                    <div class="blog-content">
                        <h5><a href="#"><?php echo $data_isi['judul_event']; ?></a></h5>
                        <p><?php date_indo($data_isi['tanggal_event'], "full"); ?></p>
                    <?php 
                        if($data_isi['tanggal_event'] < $today){ 
                            echo "<p style='color: #B3321D'><i>Event sudah lewat</i></p>"; 
                        } else {
                            echo "<a href='#'><button type='button' class='btn btn-danger'>Daftar Sekarang</button></a>"; 
                        }
                    ?>
                    </div>
                </div>
            </div>
        <?php
        }
    }
    //loops
    if(sizeof($arr_month_num) > 0){
        for($i=0; $i<sizeof($arr_month_num); $i++){
        ?>
        <section class="fancy-about-us-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <br>
                            <h2><?php date_indo($arr_month_num[$i], "month"); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    <!-- isi backend -->
                    <?php isi($arr_month_num[$i]); ?>
                    <!-- end of backend -->
                </div>
            </div>
        </section>
    <?php 
        }    
    } else {
    ?>
        <section class="fancy-about-us-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <br>
                            <h2>Agenda</h2>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-12 col-md-4 text-center">
                        <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/comingsoon/cmg soon.jpeg" alt="" style='width: 200px; height: 200px;'>
                            <div class="blog-content">
                                <h5>Coming Soon!</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/comingsoon/festival.jpeg" alt="" style='width: 200px; height: 200px;'>
                            <div class="blog-content">
                                <h5>Coming Soon!</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/comingsoon/luarnegeri.jpeg" alt="" style='width: 200px; height: 200px;'>
                            <div class="blog-content">
                                <h5>Coming Soon!</h5>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- ***** Trending Topic End ***** -->

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
</body>

</html>
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
                        <a class="navbar-brand" href="index.html">PPI DUNIA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav"
                            aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="pembicara.html">Pembicara</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Agenda.html">Agenda</a>
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
    $sql = "SELECT * FROM event"; 
    $query = mysqli_query($conn, $sql);
    //arrays
    $arr_month_word = array();  
    $arr_month_num = array(); 
    //uniques
    while($data = mysqli_fetch_assoc($query)){
        $month_word  = date("F",strtotime($data['tanggal_event'])); 
        $month_num = date("n", strtotime($data['tanggal_event'])); 
        if (!in_array($month_word, $arr_month_word,)){
            array_push($arr_month_word, $month_word); 
            array_push($arr_month_num, $month_num); 
        }
    } 
    //fx 
    function isi($mth){
        include "config/connection.php"; 
        $sql_isi = $GLOBALS['sql']." WHERE MONTH(tanggal_event) = $mth"; 
        $query_isi = mysqli_query($conn, $sql_isi); 
        while ($data_isi = mysqli_fetch_assoc($query_isi)){
    ?>
            <div class="col-12 col-md-4">
                <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                    <img src="img/uploads/event/<?php echo $data_isi['img_event'];?>" alt="">
                    <div class="blog-content">
                        <h5><a href="static-page.html"><?php echo $data_isi['judul_event']; ?></a></h5>
                        <p><?php echo $data_isi['detail_event']; ?></p>
                        <a href="static-page.html">Learn More</a>
                    </div>
                </div>
            </div>
        <?php
        }
    }
    //loops
    for($i=0; $i<sizeof($arr_month_word); $i++){
    ?>
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2><?php echo strtoupper($arr_month_word[$i]); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- isi backend -->
                <?php isi($arr_month_num[$i]); ?>
                <!-- end of backend -->
            </div>
         </div>
    </section>
    <?php } ?>
    <!-- ***** Trending Topic End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="single-footer-widget">
                            <h6>Health Pet</h6>
                            <div class="single-tweet">
                                <a href="#">With the
                                    popularity of podcast shows growing with each year, you
                                    might consider starting it yourself as well.
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Contact Us</h6>
                            <p>1 (800) 686-6688 <br />info.deercreative@gmail.com</p>
                            <p>40 Baria Sreet 133/2 <br />NewYork City, US</p>
                            <p>Open hours: 8.00-18.00 Mon-Fri</p>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Our Newsletter</h6>
                            <p>
                                Subscribe to our mailing list to get the updates to your email
                                inbox.
                            </p>
                            <div class="footer-social-widegt d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
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
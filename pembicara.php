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
    <title>PPI Edufest | Pembicara</title>

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
              <a class="navbar-brand" href="index.html"
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
                    <a class="nav-link" href="index.html">
                      Home
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Pembicara</a>
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

    <!-- ***** Content Area Start ***** -->
    <div class="container-fluid"></div>
    <!-- First Container Start -->
    <div class="container-fluid bg-1 text-center mb-5">
      <img
        class=""
        src="img/celebrate.png"
        alt="celebrate"
        id="banner"
        width="600"
      />
      <h1 id="headline" class="margin font-weight-bold">
        Bintang Tamu <br />
        Special
      </h1>
    </div>
    <!-- First Container End -->

    <!-- Photo Section Start -->
    <!-- TODO add guest name animation hover -->
    <div class="grid-container containter-fluid mb-5 galery">
      <div class="left">
        <img
          src="https://uploads-ssl.webflow.com/5ff202b90d901fbd6d262fb2/5ff202b90dfbf411540c8c2d_christian.jpg"
          width=""
          alt=""
          class=""
        />
      </div>
      <div class="right-top">
        <img
          src="https://uploads-ssl.webflow.com/5ff202b90d901fbd6d262fb2/5ff202b90dfbf471d60c8c30_jan.jpg"
          alt=""
          class=""
        />
      </div>
      <div class="right-bottom">
        <img
          src="https://uploads-ssl.webflow.com/5ff202b90d901fbd6d262fb2/5ff202b90dfbf43fb00c8c28_charlette.jpg"
          alt=""
          class=""
        />
      </div>
    </div>
    <!-- Photo Section End -->

    <!-- Delegation Start -->
    <div class="container-fluid bg-1 text-center mb-5">
      <h1 class="margin font-weight-bold">Delegasi PPI Negara</h1>
    </div>

    <div class="p-5">
      <div class="container-fluid">
        <?php 
        include "config/connection.php"; 
        $sql = "SELECT*FROM speaker"; 
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
        $current = 1;
        while($data = mysqli_fetch_assoc($query)){
            //sql
            $id = $data['id_speaker']; 
            $id_event = $data['id_event']; 
            $asal_speaker = $data['asal_speaker']; 
            $sql_event = "SELECT*FROM event WHERE id_event = $id_event"; 
            $query_event = mysqli_query($conn, $sql_event); 
            $data_event = mysqli_fetch_assoc($query_event); 
            if(empty($asal_speaker)){
                $prov = ""; 
            } else {
                $sql_prov = "SELECT*FROM provinsi WHERE id_provinsi=$asal_speaker"; 
                $query_prov = mysqli_query($conn, $sql_prov); 
                $data_prov = mysqli_fetch_assoc($query_prov); 
                $prov = $data_prov['provinsi']; 
            }
            if(empty($data['tentang_speaker'])){
                $note = ""; 
            } else {
                $note = $data['tentang_speaker']; 
            }
            //application
            if (($current-1)%3 == 0){
                echo "<div class='col'>"; 
                    echo "<div class='row'>"; 
            }
                        echo "<div class='col-sm-4'>"; 
                            echo "<div class='d-flex flex-column align-items-center'>";
                                echo "<img
                                src='img/uploads/speaker/".$data['img_speaker']."'
                                loading='lazy'
                                alt=''
                                class='mb-2'
                                />"; 
                                echo "<span>".$data['nama_speaker']."</span>"; 
                                echo "<p class='text-secondary'>$note</p>"; 
                            echo "</div>"; 
                        echo "</div>"; 
            if($current%3 == 0){
                    echo "</div>"; 
                echo "</div>"; 
                $current = 0; 
            }
            $current++; 
        } 
        if($count%3!=0){
            echo "</div></div>"; 
        }
        ?>
      </div>
      <!-- /.container -->
    </div>

    <!-- Delegation End -->

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
            <a href="pembicara.html"><p>Pembicara</p></a>
            <a href="Agenda.html"><p>Agenda</p></a>
            <a href="#"><p>FAQ</p></a>
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

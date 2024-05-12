
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Beranda</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="" href="index.html">
                          
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt" style="color: #76453B; text-decoration: none;" 
                            onmouseover="this.style.textDecoration='underline'"  
                            onmouseout="this.style.textDecoration='none'"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datakaryawan.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-table"></i>Data user</a>
                        </li>

                        <li>
                            <a href="datajabatan.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                       <li>
                            <a href="data_keterangan.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-table"></i>data Keterangan
                            </a>
                        </li>
                       
                       
                    </ul>
                </div>
            </nav>

        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2 style="text-transform: none; font-family: Lucida Handwriting, Cursive; color: #76453B; cursor: pointer; text-align: right;" 
                    onmouseover="this.style.textShadow='3px 3px 5px #43766C'; this.style.color= 'black'" 
                    onmouseout="this.style.textShadow='none'; this.style.color='#76453B'">
                    Admin
                </h2>


                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                        <a class="js-arrow" href="#" style="color: #76453B; text-decoration: none;" 
                            onmouseover="this.style.textDecoration='underline'"  
                            onmouseout="this.style.textDecoration='none'">
                                <i class="fas fa-tachometer-alt"></i>Beranda
                            </a>
                        </li>
                        <li>
                        <a href="datakaryawan.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                        <i class="fas fa-chart-bar"></i>Data Karyawan
                    </a>

                        </li>
                        <li>
                            <a href="datauser.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-table"></i>Data user
                            </a>
                        </li>


                        <li>
                            <a href="datajabatan.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li>
                            <a href="data_keterangan.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-map-marker-alt"></i>Data Keterangan</a>
                        </li>
                        <li>
                            <a href="logout.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1 style="text-transform: none; font-family: Lucida Handwriting, Cursive; color: #76453B; cursor: pointer; text-align: right;" 
                    onmouseover="this.style.textShadow='3px 3px 5px #43766C'; this.style.color= 'black'" 
                    onmouseout="this.style.textShadow='none'; this.style.color='#76453B'">MUKRI</h1>


                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <center>
                              <img src="img/logokaryawan.gif" width="1000" class="img img-responsive" height="1000">
                        </center>
                           
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

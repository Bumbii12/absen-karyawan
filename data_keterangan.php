<?php
error_reporting(0); 
require_once("koneksi.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Idiot-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Keterangan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
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
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->
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
                        <a class="logo" href="admin2.php">
                            <h1>admin</h1>
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
                            <a class="js-arrow" href="admin2.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datauser.php" style="color: #43766C; text-decoration: none;" 
                                            onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                                            onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-table"></i>Data user</a>
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
                            <a href="data_keterangan.php" style="color: #76453B; text-decoration: none;" 
                            onmouseover="this.style.textDecoration='underline'"  
                            onmouseout="this.style.textDecoration='none'">
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
                  <h1 style="text-transform: none; font-family: Lucida Handwriting, Cursive; color: #76453B; cursor: pointer; text-align: right;" 
                    onmouseover="this.style.textShadow='3px 3px 5px #43766C'; this.style.color= 'black'" 
                    onmouseout="this.style.textShadow='none'; this.style.color='#76453B'">Admin</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="admin2.php" style="color: #43766C; text-decoration: none;" 
                    onmouseover="this.style.color='#76453B'; this.style.textDecoration='underline'"  
                    onmouseout="this.style.color='#43766C'; this.style.textDecoration='none'">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                          
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
                        <li class="active has-sub">
                            <a href="data_keterangan.php" style="color: #76453B; text-decoration: none;" 
                            onmouseover="this.style.textDecoration='underline'"  
                            onmouseout="this.style.textDecoration='none'"><i class="fas fa-table"></i>Data Keterangan</a>
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
                           
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">

                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                <th>no</th>   
                                 <th>id karyawan</th>
                                 <th>Nama</th>
                                 <th>keterangan</th>
                                 <th class="text-right">alasan</th>
                                 <th class="text-right">waktu</th>
                                 <th>bukti</th>
                               
                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                            

                                            $no = 1;
                                          
                                                
                                            
                                         ?>
                                        <tbody>
                                           
                                           <?php 
                                           $no++;
                                            include 'paging_ket.php';

                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
        
            <!-- Modal -->

            <!-- End Modal -->
                        <div class="row">
                            <div class="col-lg-6">
                                
                            </div>
                            <div class="col-lg-6">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <!--modal -->
                      
                            
                        <!-- END MODAL-->

            
                </div>
            </div>
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

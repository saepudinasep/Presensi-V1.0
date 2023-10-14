<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../dist/img/brand.png">
    <title>Baak | Nama Baak</title>

    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../dist/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto me-md-3 me-0 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <?php
                    @$url = $_GET['url'];
                    ?>
                    <div class="nav">
                        <hr>
                        <a class="nav-link <?php if ($url == "") {
                                                echo "active";
                                            } ?>" href="?url=">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <hr>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link <?php if ($url == "akademik" || $url == "prodi" || $url == "kelas") {
                                                echo "active";
                                            } ?>" href="?url=akademik">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            Akademik
                        </a>
                        <a class="nav-link <?php if ($url == "dosen") {
                                                echo "active";
                                            } ?>" href="?url=dosen">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Dosen
                        </a>
                        <a class="nav-link <?php if ($url == "mata_kuliah" || $url == "sesi_mk") {
                                                echo "active";
                                            } ?>" href="?url=mata_kuliah">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Mata Kuliah
                        </a>
                        <hr>
                        <div class="sb-sidenav-menu-heading">PRESENSI</div>
                        <a class="nav-link <?php if ($url == "presensi_dosen") {
                                                echo "active";
                                            } ?>" href="?url=presensi_dosen">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                            Dosen
                        </a>
                        <a class="nav-link <?php if ($url == "presensi_mahasiswa") {
                                                echo "active";
                                            } ?>" href="?url=presensi_mahasiswa">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                            Mahasiswa
                        </a>
                        <hr>
                    </div>
                </div>
                <div class="sb-sidenav-footer bg-primary">
                    <div class="small">Logged in as:</div>
                    BAAK
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php

                error_reporting(0);
                switch ($url) {
                    case 'akademik':
                        include "menu/akademik.php";
                        break;

                    case 'prodi':
                        include "menu/prodi.php";
                        break;

                    case 'kelas':
                        include "menu/kelas.php";
                        break;

                    case 'dosen':
                        include "menu/dosen.php";
                        break;

                    case 'mata_kuliah':
                        include "menu/mata_kuliah.php";
                        break;

                    case 'sesi_mk':
                        include "menu/sesi_mk.php";
                        break;

                    case 'presensi_dosen':
                        include "menu/presensi_dosen.php";
                        break;

                    case 'presensi_mahasiswa':
                        include "menu/presensi_mahasiswa.php";
                        break;

                    default:
                        include "menu/dashboard.php";
                        break;
                }
                ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; STMIK IKMI Cirebon 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="../dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/scripts.js"></script>
</body>


</html>
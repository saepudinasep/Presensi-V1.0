<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../dist/img/brand.png">
    <title>Dosen | Nama Dosen</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../dist/css/styles.css" rel="stylesheet" />


    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


    <!-- My CSS -->
    <style>
        /* Wadah */
        .wadah {
            min-height: 500px;
            padding-top: 60px;
        }

        .navbar-brand {
            font-family: Viga;
            font-size: 24px;
        }

        .nav-link {
            text-transform: uppercase;
            margin-right: 30px;
        }

        footer {
            padding-top: 20px;
        }

        footer p {
            color: #acacac;
            font-size: 18px;
        }

        .text {
            color: #379FE0;
            transition: .2s;
            cursor: pointer;
        }

        .text:hover {
            letter-spacing: 1px;
            margin: 0 3px;
            color: blue;
            text-transform: uppercase;
        }

        .list {
            font-family: 'century gothic';
            font-size: 11pt;
            color: #666;
        }

        @media (min-width: 992px) {
            .kanan {
                text-align: right;
            }
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">PresLine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <?php
                @$url = $_GET['url'];
                ?>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?php if ($url == "") {
                                            echo "active";
                                        } ?>" href="?">Home</a>
                    <a class="nav-link <?php if ($url == "matkul" || $url == "sesi_kuliah") {
                                            echo "active";
                                        } ?>" href="?url=matkul">Mata Kuliah</a>
                    <a class="nav-link <?php if ($url == "profile" || $url == "edit_password" || $url == "presence") {
                                            echo "active";
                                        } ?>" href="?url=profile">Profile</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Wadah -->
    <div class="wadah">
        <?php

        error_reporting(0);
        switch ($url) {
            case 'matkul':
                include "menu/matkul.php";
                break;

            case 'sesi_kuliah':
                include "menu/sesi_kuliah.php";
                break;

            case 'profile':
                include "menu/profile.php";
                break;

            case 'edit_password':
                include "menu/edit_password.php";
                break;

            case 'presence':
                include "menu/kehadiran.php";
                break;

            default:
                include "menu/dashboard.php";
                break;
        }


        ?>

    </div>
    <!-- akhir Wadah -->



    <!-- footer -->
    <footer class="bg-primary">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy; 2022/2023 STMIK IKMI Cirebon</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->
    <script src="../dist/js/bootstrap.bundle.min.js"></script>

    <script src="../dist/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../dist/js/charts.js"></script>
</body>

</html>

<!-- 
Dian Ade Kurnia, M.Kom
Dasar Artificial Intelligence Semester 1
Algoritma dan Pemrograman Semester 1


Ahmad Faqih, M.Sc
Kalkulus Semester 1
Statistika Semester 3
-->
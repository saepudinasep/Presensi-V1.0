<?php
include "inc/config.php";
session_start();
// if (@$_SESSION['userweb'] != "") {
//     if ($_SESSION['status'] == 1) {
//         header('location:mahasiswa/index.php');
//     } else if ($_SESSION['status'] == 2) {
//         header('location:dosen/index.php');
//     } else if ($_SESSION['status'] == 3) {
//         header('location:baak/index.php');
//     }
// }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="dist/img/brand.jpeg">
    <title>Presensi Online | STMIK IKMI Cirebon</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


    <!-- My CSS -->
    <link rel="stylesheet" href="dist/css/my_style.css">
</head>

<body>

    <!-- Content -->
    <!-- Navbar -->
    <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">PresLine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#faq">Faq</a>
                    <a class="nav-link" href="login.php">Join Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"> -->

    <!-- Jumbotron -->
    <div class="jumbotron p-5 mb-4 bg-light rounded-3" id="home">
        <div class="container-fluid py-5">
            <h1 class="display-4">Selamat Datang di <span>Presensi Online</span> STMIK IKMI Cirebon</h1>
            <a href="login.php" class="btn btn-primary tombol">Join Us</a>
        </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- info panel -->
    <!-- <section id="info-panel"> -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-md">
                    <img src="dist/img/student.png" alt="Mahasiswa Aktif" class="float-start">
                    <h4>20</h4>
                    <p>Mahasiswa Aktif</p>
                </div>
                <div class="col-md">
                    <img src="dist/img/student.png" alt="Mahasiswa Aktif" class="float-start">
                    <h4>20</h4>
                    <p>Mahasiswa Cuti</p>
                </div>
                <div class="col-md">
                    <img src="dist/img/lecturer.png" alt="Mahasiswa Aktif" class="float-start">
                    <h4>20</h4>
                    <p>Dosen Aktif</p>
                </div>
            </div>
        </div>
    </div>
    <!-- </section> -->
    <!-- akhir Info panel -->

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">About</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <p class="pKiri">Presensi online memudahkan mahasiswa, dosen, dan manajemen akademik dalam pengisian data e-learning dan memotivasi keaktifan mahasiswa maupun keaktifan dosen. Dalam Presensi Online dosen melakukan presensi dengan menambah sesi perkuliahan baru sesuai dengan jadwal kuliah dan setelah membuka sesi pada sistem barulah mahasiswa dapat mengisi presensi.</p>
                </div>
                <div class="col-md-5">
                    <p class="pKanan">Saat sesi perkuliahan berlangsung, mahasiswa dapat mengajukan pertanyaan atau masukan pada fitur chat dan sistem akan mencatat secara otomatis memberikan poin awal untuk nilai keaktifan disisi lain, dosen dapat memberikan poin tambahan atau pengurangan atas pertanyaan atau masukan dari mahasiswa tersebut sesuai dengan bobot pertanyaan atau masukan dan diakhir sesi mahasiswa wajib mengisi poin-poin kesimpulan dari apa yang dosen sampaikan, mahasiswa juga dapat mengerjakan beberapa challenges (latihan) yang telah dibuat oleh dosen.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,218.7C384,181,480,107,576,80C672,53,768,75,864,117.3C960,160,1056,224,1152,208C1248,192,1344,96,1392,48L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir About -->


    <!-- rangking -->
    <section id="rank" class="rank">
        <div class="container">
            <div class="row workingspace" id="rank">
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped text-center">
                            <thead>
                                <tr class="table-dark">
                                    <th scope="col">Rank</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-info">
                                    <th scope="row">1<sup>st</sup></th>
                                    <td><img src="dist/img/gold.png" alt="Rank 1" height="30px" width="30px"> Asep Saepudin</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">2<sup>nd</sup></th>
                                    <td><img src="dist/img/silver.png" alt="Rank 2" height="30px" width="30px"> Arum Sari</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">3<sup>rd</sup></th>
                                    <td><img src="dist/img/bronze.png" alt="Rank 3" height="30px" width="30px"> Fina Raudotul Jannah</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">4<sup>th</sup></th>
                                    <td>Ali Ikbal</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">5<sup>th</sup></th>
                                    <td>Siti Saropah</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">6<sup>th</sup></th>
                                    <td>Krisna Mulyana</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">7<sup>th</sup></th>
                                    <td>Novi Laelatul Azizah</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">8<sup>th</sup></th>
                                    <td>Nurzaman</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">9<sup>th</sup></th>
                                    <td>Rani Kurniasih</td>
                                    <td>1000 Point</td>
                                </tr>
                                <tr>
                                    <th scope="row">10<sup>th</sup></th>
                                    <td>Dede Setiadi</td>
                                    <td>1000 Point</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>Mahasiswa terbaik dalam <span>presensi online</span>.</h3>
                    <p>Kurang cerdas dapat diperbaiki dengan belajar, kurang cakap dapat dihilangkan dengan pengalaman. Namun, tidak jujur sulit diperbaiki.</p>
                    <a href="" class="btn btn-primary tombol">View More</a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,0L48,37.3C96,75,192,149,288,170.7C384,192,480,160,576,128C672,96,768,64,864,74.7C960,85,1056,139,1152,154.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir rangking -->


    <!-- faq -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="row workingspace">
                <div class="col-md-6">
                    <h2 class="text-center">Frequently Asked Questions</h1>
                        <img src="dist/img/faq.png" alt="FAQ" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Apa itu Presline?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Presline adalah aplikasi presensi online yang memudahkan mahasiswa, dosen, dan manajemen akademik dalam pengisian data e-learning dan diimplementasikan untuk memotivasi keaktifan mahasiswa maupun keaktifan dosen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa kelebihan Aplikasi ini?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Aplikasi ini terdapat forum chat dimana dosen dapat memberikan pertanyaan dan mahasiswa dapat langsung menjawabnya, sehingga dosen dapat mengetahui keaktifan dan pemahaman mahasiswa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Berapa lama waktu absensi yang dapat diakses mahasiswa?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absensi dapat diakses selama jam perkuliahan berlangsung.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana cara mahasiswa mendapatkan point?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Mahasiswa join tepat waktu dan mahasiswa menjawab pertanyaan yang diberikan oleh dosen dengan benar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Apakah poin dapat mempengaruhi absensi?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Ya tentu akan mempengaruhi, nilai absensi tidak maksimal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana jika mahasiswa berhalangan hadir dalam perkuliahan dikarenakan sakit dan sebagainya?
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Jika berhalangan hadir segera konfirmasi ke Baak.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,122.7C384,107,480,117,576,106.7C672,96,768,64,864,74.7C960,85,1056,139,1152,133.3C1248,128,1344,64,1392,32L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir faq -->

    <!-- Team Development -->
    <section id="myteam" class="myteam">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Team Development</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md box">
                    <img src="dist/img/iin.jpg" alt="Mahasiswa Aktif" class="rounded-circle">
                    <h4>Iin, M.Kom</h4>
                    <p>Project Manager</p>
                </div>
                <div class="col-md box">
                    <img src="dist/img/fina.jpeg" alt="Mahasiswa Aktif" class="rounded-circle">
                    <h4>Fina R. Jannah</h4>
                    <p>UI/UX Development</p>
                </div>
                <div class="col-md box">
                    <img src="dist/img/arum.jpeg" alt="Mahasiswa Aktif" class="rounded-circle">
                    <h4>Arum Sari</h4>
                    <p>Frontend Development</p>
                </div>
                <div class="col-md box">
                    <img src="dist/img/asep.png" alt="Mahasiswa Aktif" class="rounded-circle">
                    <h4>Asep Saepudin</h4>
                    <p>Backend Development</p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir team development -->

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


    <!-- </div> -->
    <!-- akhir Content -->






    <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
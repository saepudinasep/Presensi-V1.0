<?php
include "inc/config.php";
session_start();

// cek cookie
// if (isset($_COOKIE['userweb'])) {
//     if ($_COOKIE['userweb'] == 'true') {
//         $_SESSION['userweb'] = 'true';
//     }
// }

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Presline</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/my_style.css">

    <!-- Jquery -->
    <!-- <link rel="stylesheet" href="dist/js/jquery-3.3.1.slim.min.js"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".forgot_pass").hide();

            $(".muncul").click(function() {
                $(".forgot_pass").show(1000);
                $("html , body").animate({
                        scrollTop: $(".forgot_pass").offset().top,
                    },
                    1250,
                    "easeInOutExpo"
                );
            });
        });
    </script>
</head>


<body class="bg-info">

    <div class="container mt-4 pt-4">
        <div class="row">
            <div class="col-md-7">
                <img src="dist/img/logo13.png" class="img-fluid d-block w-75" alt="gambar hero">
            </div>
            <div class="col-md-5">
                <div class="card shadow p-3 mb-4 bg-light rounded">
                    <div class="card-header">
                        <h3 class="text-center text-primary font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php
                            if (isset($_POST['flogin'])) {
                                $user = $_POST['username'];
                                $pass = $_POST['password'];

                                // jika yang diketikan kosong
                                if (empty($user) || empty($pass)) {
                            ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Aku tau hati kamu sedang kosong tapi tolong jangan sampai kosong username dan password ini.</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                } else {
                                    $q = mysqli_query($koneksi, "SELECT *,
                                (SELECT nama_mhs FROM tb_mhs WHERE username=tb_user.username) as nama_mhs,
                                (SELECT nama_dosen FROM tb_dosen WHERE username=tb_user.username) as nama_dosen
                                FROM tb_user WHERE username = '$user' OR password = md5('$pass')");
                                    $cek = mysqli_num_rows($q);
                                    $data = mysqli_fetch_array($q);
                                    // cek apakah data ada
                                    if ($cek < 1) {
                                    ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Maaf Username atau Password Tidak Cocok</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <?php
                                    } else {
                                        $_SESSION['userweb'] = $data['username'];
                                        $_SESSION['status'] = $data['admin_level'];

                                        if ($user == $data['username']) {
                                            if (md5($pass) == $data['password']) {

                                                // cek remember me
                                                // if (isset($_POST['remember'])) {
                                                //     // buat cookies
                                                //     setcookie('login', 'true', time() + 60);
                                                // }

                                                if ($user == $pass) {
                                                    $_SESSION['passweb'] = $data['password'];

                                                    if ($data['admin_level'] == 1) {
                                                        $_SESSION['nama'] = $data['nama_mhs'];
                                                        header('location:ubah_password.php');
                                                    } elseif ($data['admin_level'] == 2) {
                                                        $_SESSION['nama'] = $data['nama_dosen'];
                                                        header('location:ubah_password.php');
                                                    } elseif ($data['admin_level'] == 3) {
                                                        $_SESSION['nama'] = $data['username'];
                                                        header('location:ubah_password.php');
                                                    }
                                                } else {
                                                    if ($data['admin_level'] == 1) {
                                                        header('location:mahasiswa/index.php');
                                                    } elseif ($data['admin_level'] == 2) {
                                                        header('location:dosen/index.php');
                                                    } elseif ($data['admin_level'] == 3) {
                                                        header('location:baak/index.php');
                                                    }
                                                }
                                            } else {
                                        ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Maaf Password Tidak Cocok</strong>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            <?php
                                                session_destroy();
                                            }
                                        } else {
                                            ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Maaf Username Tidak Cocok</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                            <?php
                                            session_destroy();
                                        }
                                    }
                                }
                            }
                            ?>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" name="username" type="text" placeholder="412xxxxx" />
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                <label for="password">Password</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="remember" name="remember" type="checkbox" />
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <!-- <a href="" id="muncul" class="small">Forgot Password</a> -->
                                <button type="button" class="btn btn-outline-dark muncul">Forgot Password</button>
                                <input type="submit" name="flogin" value="Login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row forgot_pass">
            <div class="col-md-5">
                <div class="card bg-transparent border-dark mb-4">
                    <div class="card-header">Cara reset Password:</div>
                    <div class="card-body">
                        <li>Ketik NIM kamu dahulu (harus 8 digit)</li>
                        <li>klik Reset Password [NIM]</li>
                        <li>Isi pernyataan bahwa kamu memang lupa password dengan mencantumkan identitas</li>
                        <li>Sistem akan meneruskan request ke WhatsApp Dosen</li>
                        <li>Tunggu hingga dosen memverifikasinya (fast-reply pada jam kerja)</li>
                        <input class="form-control mt-2 mb-4 text-center" id="nim_pass" type="text" placeholder="NIM Anda" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <script type="text/javascript" src="dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="dist/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/script.js"></script>


</body>

</html>
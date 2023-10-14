<?php
include "inc/config.php";
session_start();
if ($_SESSION['userweb'] == "") {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>

    <div class="container m-3 p-3">
        <h2 class="text-black-50">Hallo <?= $_SESSION['nama']; ?></h4>
            <h4 class="text-black-50">Silahkan ubah password terlebih dahulu !</h4>
            <?php
            if (isset($_POST['ubah_pass'])) {
                $pass_default = $_POST['pass_default'];
                $pass_new = $_POST['pass_new'];
                $pass_confirm = $_POST['pass_confirm'];

                if (empty($pass_default) || empty($pass_new) || empty($pass_confirm)) {
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Masih Ada yang kosong, silahkan isi dengan benar!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                } else {
                    if (md5($pass_default) != $_SESSION['passweb']) {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Password default Salah!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    } else {
                        if ($pass_new != $pass_confirm) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Password confirm Salah!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
            <?php
                        } else {
                            $user = $_SESSION['userweb'];
                            $pass = md5($pass_new);
                            mysqli_query($koneksi, "UPDATE tb_user SET password = '$pass' WHERE username = '$user'");
                            header('location:upload_foto.php');
                        }
                    }
                }
            }
            ?>
            <form action="" method="post">
                <div class="form-group mt-3 pt-3">
                    <label for="pass_default" class="col-sm-2 control-label">
                        <b>Password default</b>
                    </label>
                    <div class="col-sm-8">
                        <input size="40" class="form-control form-control" id="pass_default" name="pass_default" type="tex" />
                    </div>
                </div>
                <div class="form-group mt-3 pt-3">
                    <label for="pass_new" class="col-sm-2 control-label">
                        <b>New password</b>
                    </label>
                    <div class="col-sm-8">
                        <input size="40" class="form-control form-control" id="pass_new" name="pass_new" type="password" />
                    </div>
                </div>
                <div class="form-group mt-3 pt-3">
                    <label for="pass_confirm" class="col-sm-2 control-label">
                        <b>Confirm password</b>
                    </label>
                    <div class="col-sm-8">
                        <input size="40" class="form-control form-control" id="pass_confirm" name="pass_confirm" type="password" />
                    </div>
                </div>
                <div class="form-group mt-3 pt-3">
                    <input type="submit" name="ubah_pass" value="Change Password" class="btn btn-primary">
                </div>
            </form>

    </div>


    <script type="text/javascript" src="dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="dist/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/script.js"></script>

</body>

</html>
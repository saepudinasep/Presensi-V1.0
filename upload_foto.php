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
    <title>Presline - Upload Foto</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>


    <div class="container mt-3 pt-3">
        <h2 class="text-black-50">Hallo <?= $_SESSION['nama']; ?></h4>
            <h4 class="text-black-50">Silahkan Upload Foto Profile terlebih dahulu !</h4>
            <div class="form-group">
                <div class="col-sm-8">
                    <?php
                    if (isset($_POST['upload_foto'])) {
                        // $rand = rand();
                        $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
                        $filename = $_FILES['gambar']['name'];
                        $ukuran = $_FILES['gambar']['size'];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);

                        if (!in_array($ext, $ekstensi)) {
                    ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Yang anda upload bukan foto!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                        } else {
                            if ($ukuran < 1044070) {
                                $user = $_SESSION['userweb'];
                                $xx = $user . '_' . $filename;
                                mkdir('profile/' . $user);
                                move_uploaded_file($_FILES['gambar']['tmp_name'], 'profile/' . $user . '/' . $xx);
                                mysqli_query($koneksi, "UPDATE tb_user SET folder_uploads = '$xx' WHERE username = '$user'");
                                if ($data['admin_level'] == 1) {
                                    header('location:mahasiswa/index.php');
                                } elseif ($data['admin_level'] == 2) {
                                    header('location:dosen/index.php');
                                } elseif ($data['admin_level'] == 3) {
                                    header('location:baak/index.php');
                                }
                            } else {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Ukuran terlalu besar!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="gambar" class="form-label">Pilih Foto</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                </div>
                <div class="form-group">
                    <input type="submit" name="upload_foto" value="Upload Foto" class="btn btn-primary">
                </div>
            </form>

            <script type="text/javascript" src="dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="dist/js/sweetalert.min.js"></script>

            <script type="text/javascript" src="dist/js/jquery.min.js"></script>
            <script type="text/javascript" src="dist/js/script.js"></script>


</body>

</html>
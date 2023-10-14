<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../dist/img/brand.png">
    <title>Mahasiswa | Nama Mahasiswa</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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

        .img_zoom {
            transition: .2s;
            opacity: 50%;
        }

        .img_zoom:hover {
            cursor: pointer;
            transform: scale(2.0);
            opacity: 100%;
        }

        .mk_list {
            font-family: 'century gothic';
            font-size: 12pt;
            color: #479EFF;
        }

        .timer {
            text-align: center;
            border: solid 1px #ddd;
            border-radius: 5px;
            width: 30px;
            font-family: consolas;
        }

        .img_btn {
            transition: .5s;
        }

        .img_btn:hover {
            cursor: pointer;
            transform: scale(1.5);
            margin: 0 2px;
        }

        .link {
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <div class="container mt-4">
        <h3><a href=""><img src="../dist/img/home_presline.png" class="img_btn" alt="" height="40px"></a><span>Presline Session</span></h3>
        <p><a href="../dosen/" onclick="return confirm('Anda ingin leave sesi kuliah?')" class="text-decoration-none"><span class="text">Leave</span></a> | Halo Asep Saepudin! Anda sedang Join Sesi : Pertemuan Ke 1</p>

        <!-- Mata Kuliah -->
        <div class="row mb-3">
            <div class="col">
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-3">
                            <div><small>Mata Kuliah :</small></div>
                            <span class="mk_list">Jaringan Komputer 2</span>
                        </div>
                        <div class="col-md-3">
                            <div><small>Sesi :</small></div>
                            <span class="mk_list">Pertemuan Ke 1</span>
                        </div>
                        <div class="col-md-3">
                            <div><small>Berakhir dalam :</small></div>
                            <div class="rounded border p-1 text-center">
                                <input type="text" placeholder="1" class="timer" disabled>
                                :
                                <input type="text" placeholder="30" class="timer" disabled>
                                :
                                <input type="text" placeholder="00" class="timer" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div><small>Ready?</small></div>
                            <button type="button" class="btn btn-warning">Belum Mulai</button>
                        </div>
                    </div>

                    <div class="row pt-2">
                        <div class="col-md-12">
                            <div class="shadow-sm rounded border m-4 text-center">
                                <h3>
                                    Point Presensi : <span class="text-primary h1">1000</span> LP
                                </h3>
                                <p>
                                    <small><a href="" class="text-decoration-none text-danger" data-bs-toggle="tooltip" data-bs-title="Setiap sesi diberi waktu 1:30:00 Jika dosen sudah memulai sesi dalam 10 menit maka dianggap tidak hadir" data-bs-placement="bottom">Dianggap telat dalam : <span>10</span> Menit</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir mata kuliah -->

        <!-- Mahasiswa Online -->
        <div class="card mb-3">
            <div class="row m-2">
                <div class="col-4 text-center">
                    <div class="border border-3 bg-success bg-opacity-10 rounded-5 mb-1" style="width: 100%; height: 60px;">
                        <h1 class="text-success">0</h1>
                    </div>
                    <p>of 31 Mahasiswa</p>
                </div>
                <div class="col-8">
                    <div class="row overflow-auto" style="max-height: 400px;">
                        <div class="col-md-2 text-center">
                            <img src="../dist/img/asep.png" alt="" class="rounded-circle border border-5 img_zoom" height="50px">
                            <p><a href="" class="link">41200125</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- akhir mahasiswa online -->

        <!-- wadah chat -->
        <div class="card mb-3">
            <div class="card-header">
                -- Chat Session Started -- 2022-11-28 15:50:54
            </div>
            <div class="card-body">
                <div class="row overflow-auto" style="max-height: 500px;">
                    <!-- Jika chat punya orang -->
                    <div class="col-12">
                        <div class="card m-2 p-1">
                            <div class="row g-0">
                                <div class="col-2 pt-3 text-center">
                                    <a href=""><img src="../dist/img/asep.png" alt="Asep Saepudin" width="75px" class="img-fluid rounded-circle img_btn"></a>
                                </div>
                                <div class="col-10">
                                    <div class="card-title p-1">
                                        <a href="" class="text-decoration-none">Asep Saepudin</a><span class="text-secondary"> - 17:38 - 0 poin - 0 likes</span>
                                        <a href=""><img src="../dist/img/set_point.png" alt="Point" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/medal.png" alt="Medal" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/like.png" alt="Like" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/delete.png" alt="Delete" class="img_btn" height="20px"></a>
                                    </div>
                                    <p class="card-text p-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jika chat punya kita -->
                    <div class="col-10 offset-2">
                        <div class="card m-2 p-1">
                            <div class="row g-0">
                                <div class="col-2 pt-3 text-center">
                                    <a href=""><img src="../dist/img/asep.png" alt="Asep Saepudin" width="75px" class="img-fluid rounded-circle img_btn"></a>
                                </div>
                                <div class="col-10">
                                    <div class="card-title p-1">
                                        <a href="" class="text-decoration-none">Asep Saepudin</a><span class="text-secondary"> - 17:38 - 0 poin - 0 likes</span>
                                        <a href=""><img src="../dist/img/set_point.png" alt="Point" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/medal.png" alt="Medal" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/like.png" alt="Like" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/delete.png" alt="Delete" class="img_btn" height="20px"></a>
                                    </div>
                                    <p class="card-text p-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jika chat punya orang -->
                    <div class="col-12">
                        <div class="card m-2 p-1">
                            <div class="row g-0">
                                <div class="col-2 pt-3 text-center">
                                    <a href=""><img src="../dist/img/asep.png" alt="Asep Saepudin" width="75px" class="img-fluid rounded-circle img_btn"></a>
                                </div>
                                <div class="col-10">
                                    <div class="card-title p-1">
                                        <a href="" class="text-decoration-none">Asep Saepudin</a><span class="text-secondary"> - 17:38 - 0 poin - 0 likes</span>
                                        <a href=""><img src="../dist/img/set_point.png" alt="Point" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/medal.png" alt="Medal" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/like.png" alt="Like" class="img_btn" height="20px"></a>
                                        <a href=""><img src="../dist/img/delete.png" alt="Delete" class="img_btn" height="20px"></a>
                                    </div>
                                    <p class="card-text p-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jika chat punya orang -->
                    <div class="col-12">
                        <div class="card m-2 p-1">
                            <div class="row g-0">
                                <div class="col-2 pt-3 text-center">
                                    <a href=""><img src="../dist/img/asep.png" alt="Asep Saepudin" width="75px" class="img-fluid rounded-circle img_btn"></a>
                                </div>
                                <div class="col-10">
                                    <div class="card-title p-1">
                                        <a href="" class="text-decoration-none">Asep Saepudin</a><span class="text-secondary"> - 17:38 - 0 poin - 0 likes</span> <img src="../dist/img/set_point.png" alt="Point" class="img_btn" height="20px"> <img src="../dist/img/medal.png" alt="Medal" class="img_btn" height="20px"> <img src="../dist/img/like.png" alt="Like" class="img_btn" height="20px"> <img src="../dist/img/delete.png" alt="Delete" class="img_btn" height="20px">
                                    </div>
                                    <p class="card-text p-1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- akhir wadah chat -->

        <!-- Upload Bertanya -->
        <div class="row mb-3" style="height: 300px;">
            <div class="col">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" data-bs-target="#pills-chat" type="button" role="tab" aria-controls="pills-chat" aria-selected="true">Normal Chat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tanya-tab" data-bs-toggle="pill" data-bs-target="#pills-tanya" type="button" role="tab" aria-controls="pills-tanya" aria-selected="false">Bertanya</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-upload-tab" data-bs-toggle="pill" data-bs-target="#pills-upload" type="button" role="tab" aria-controls="pills-upload" aria-selected="false">Upload</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-pl-tab" data-bs-toggle="pill" data-bs-target="#pills-pl" type="button" role="tab" aria-controls="pills-pl" aria-selected="true">Polling</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tf-tab" data-bs-toggle="pill" data-bs-target="#pills-tf" type="button" role="tab" aria-controls="pills-tf" aria-selected="false">TF</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-pg-tab" data-bs-toggle="pill" data-bs-target="#pills-pg" type="button" role="tab" aria-controls="pills-pg" aria-selected="false">PG</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab" tabindex="0">
                        <form action="">
                            <div class="row">
                                <div class="col-10">
                                    <input type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success col-2">Post</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-tanya" role="tabpanel" aria-labelledby="pills-tanya-tab" tabindex="0">
                        <div class="card p-3">
                            <div style="display: grid; grid-template-columns: 130px 70px auto; grid-gap: 10px;">
                                <div>Durasi Menjawab:</div>
                                <div>
                                    <input type="text" class="form-control text-center" id="durasi_jawab" value="1200" maxlength="3" minlength="2">
                                </div>
                                <div>
                                    detik
                                </div>
                            </div>

                            <form action="">
                                <div class="row mt-3">
                                    <div class="col-10">
                                        <input type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success col-2 disabled">Tanyakan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab" tabindex="0">
                        <form action="">
                            <div class="row">
                                <div class="col-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <button type="submit" class="btn btn-success col-2">Upload</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-pl" role="tabpanel" aria-labelledby="pills-pl-tab" tabindex="0">
                        <div class="card bg-success bg-opacity-50 bg-gradient p-3">
                            <div class="mb-3">
                                <label for="durasi_polling" class="form-label">Durasi Polling <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="durasi_polling" value="600">
                            </div>
                            <div class="mb-3">
                                <label for="pertanyaan_polling" class="form-label">Pertanyaan Polling <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="pertanyaan_polling">
                            </div>
                            <div class="row border-dark rounded">
                                <div class="col-4 mb-3">
                                    <label for="Opsi1" class="form-label">Opsi 1 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="Opsi1">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="Opsi2" class="form-label">Opsi 2 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="Opsi2">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="Opsi3" class="form-label">Opsi 3</label>
                                    <input type="text" class="form-control" id="Opsi3">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="Opsi4" class="form-label">Opsi 4</label>
                                    <input type="text" class="form-control" id="Opsi4">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="Opsi5" class="form-label">Opsi 5</label>
                                    <input type="text" class="form-control" id="Opsi5">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="Opsi6" class="form-label">Opsi 6</label>
                                    <input type="text" class="form-control" id="Opsi6">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tf" role="tabpanel" aria-labelledby="pills-tf-tab" tabindex="0">
                        <form action="">
                            <div class="row mt-3">
                                <div class="col-10">
                                    <input type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success col-2 disabled">Post TF</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-pg" role="tabpanel" aria-labelledby="pills-pg-tab" tabindex="0">
                        <form action="">
                            <div class="row mt-3">
                                <div class="col-10">
                                    <input type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success col-2 disabled">Post PG</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir upload bertanya -->

    </div>



    <script src="../dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>
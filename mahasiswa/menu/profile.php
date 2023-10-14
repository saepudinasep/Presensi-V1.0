<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="?url=profile" class="link-secondary"> Edit Profile </a></li>
                <li class="list-group-item"><a href="?url=edit_password" class="link-primary"> Ubah Password </a></li>
                <li class="list-group-item"><a href="?url=presence" class="link-primary"> Kehadiran </a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="row mb-3 mt-3">
                            <div class="col-md-4 kanan">
                                <img src="../profile/41200125/asep.png" class="rounded-circle" style="max-height: 50px" alt="">
                            </div>
                            <div class="col-md-8">
                                41200125 <br>
                                <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah Foto Profile</a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="prodi" class="col-form-label">Program Studi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="prodi" class="form-control" aria-describedby="passwordHelpInline" placeholder="Teknik Informatika" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="kelas" class="col-form-label">Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="kelas" class="form-control" aria-describedby="passwordHelpInline" placeholder="TI-2020-KI-B1" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="nim" class="col-form-label">NIM</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" id="nim" class="form-control" aria-describedby="passwordHelpInline" placeholder="41200125" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="name" class="col-form-label">Nama</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="name" class="form-control" aria-describedby="passwordHelpInline" placeholder="Asep Saepudin" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="nama_panggilan" class="col-form-label">Nama Panggilan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="nama_panggilan" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="email" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input type="email" id="email" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="no_telp" class="col-form-label">No Telepon</label>
                            </div>
                            <div class="col-md-8">
                                <input type="telp" id="no_telp" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 kanan">
                                <label for="gender" class="col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-primary" id="exampleModalLabel">Infomation!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input class="form-control" type="file" id="formFile">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="join_sesi.php" class="btn btn-primary">Kirim</a>
            </div>
        </div>
    </div>
</div>
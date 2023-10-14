<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?url=matkul">Mata Kuliah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nama Mata Kuliah</li>
        </ol>
    </nav>

    <div class="card mb-2 shadow">
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In laborum laudantium ratione doloribus? Modi maxime necessitatibus ut placeat rem, quis natus nulla ipsa veritatis consectetur, minima quibusdam provident nam, labore magni fugit praesentium ipsum tenetur sit dolorem? Enim maiores esse aliquid suscipit quibusdam, itaque necessitatibus voluptates obcaecati debitis. Iure, placeat.</p>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-3">
                    <p><span class="text">1</span> ~ <span class="text">Pertemuan Ke 1</span></p>
                </div>
                <div class="col-md-5 list">
                    <p>Pengajar : <span class="text">Nama Dosen</span> | Tanggal Mata Kuliah</p>
                </div>
                <div class="col-md-4">
                    <!-- Jika Mata Kuliah Belum Jadwalnya -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" style="width: 130px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Belum Mulai
                    </button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    <p><span class="text">2</span> ~ <span class="text">Pertemuan Ke 2</span></p>
                </div>
                <div class="col-md-5 list">
                    <p>Pengajar : <span class="text">Nama Dosen</span> | Tanggal Mata Kuliah</p>
                </div>
                <div class="col-md-4">
                    <!-- Jika Mata Kuliah Sudah Jadwalnya -->
                    <a href="" class="btn btn-sm btn-warning disabled" style="width: 130px;">Belum Mulai</a>

                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    <p><span class="text">3</span> ~ <span class="text">Pertemuan Ke 3</span></p>
                </div>
                <div class="col-md-5 list">
                    <p>Pengajar : <span class="text">Nama Dosen</span> | Tanggal Mata Kuliah</p>
                </div>
                <div class="col-md-4">
                    <!-- Jika Mata Kuliah Sudah Selesai -->
                    <a href="../leaderboard/" class="btn btn-sm btn-success" style="width: 130px;">Leaderboard</a>
                    <a href="" class="btn btn-sm btn-danger disabled" style="width: 130px;">Berakhir</a>
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
                Sesi belum dimulai. Yakin akan masuk?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a href="../join_sesi" class="btn btn-primary">Ya</a>
            </div>
        </div>
    </div>
</div>
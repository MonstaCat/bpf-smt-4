                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Mahasiswa</h6>
                        </div>
                        <div class="card-body">

                            <h2 class="card-title"><?= $mahasiswa['nama'] ?></h2>
                            <h6 class="card-subtitle mb-5 text-muted"><?= $mahasiswa['email'] ?></h6>

                            <div class="row">
                                <div class="col-2">NIM</div>
                                <div class="col-1 text-right">:</div>
                                <div class="col-9"><?= $mahasiswa['nim'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-2">Jenis Kelamin</div>
                                <div class="col-1 text-right">:</div>
                                <div class="col-9"><?= $mahasiswa['jenis_kelamin'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-2">Prodi</div>
                                <div class="col-1 text-right">:</div>
                                <div class="col-9"><?= $mahasiswa['prodi'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-2">Asal Sekolah</div>
                                <div class="col-1 text-right">:</div>
                                <div class="col-9"><?= $mahasiswa['asal_sekolah'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-2">No HP</div>
                                <div class="col-1 text-right">:</div>
                                <div class="col-9"><?= $mahasiswa['no_hp'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-2">Alamat</div>
                                <div class="col-1 text-right">:</div>
                                <div class="col-9"><?= $mahasiswa['alamat'] ?></div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
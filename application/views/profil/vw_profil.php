                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Profil Mahasiswa</h6>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $user['nama'] ?></h5>
                                    <p class="card-text"><?= $user['email'] ?></p>
                                    <p class="card-text"><small class="text -muted">Anggota Sejak <?= $user['date_created'] ?></small></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
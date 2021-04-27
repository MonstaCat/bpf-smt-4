                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Jurusan</h6>
                                </div>
                                <div class="col">
                                    <button onclick="window.location='Jurusan/tambah'" class="btn btn-sm btn-success float-right">Tambah Jurusan</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jurusan</th>
                                            <th>Singkatan</th>
                                            <th>Kepala Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jurusan</th>
                                            <th>Singkatan</th>
                                            <th>Kepala Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($jurusan as $data) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $data['nama']; ?></td>
                                                <td><?= $data['singkatan']; ?></td>
                                                <td><?= $data['nama_kajur']; ?></td>
                                                <td>
                                                    <button onclick="window.location='jurusan/edit/<?= $data['id'] ?>'" class="btn btn-sm btn-warning">Edit</button>
                                                    <button onclick="window.location='jurusan/hapus/<?= $data['id'] ?>'" class="btn btn-sm btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php $i++ ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
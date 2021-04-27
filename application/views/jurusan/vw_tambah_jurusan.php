                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Jurusan</h6>
                        </div>
                        <div class="card-body">

                            <?= form_open('jurusan/tambah_aksi') ?>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Nama Jurusan</span>
                                        </div>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Singkatan</span>
                                        </div>
                                        <input type="text" name="singkatan" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Kepala Jurusan</label>
                                        </div>
                                        <select class="custom-select" name="nama_kajur" id="inputGroupSelect01">
                                            <option selected>Pilih...</option>
                                            <?php foreach ($dosen as $d) : ?>
                                                <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <?= form_close() ?>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Jurusan</h6>
                        </div>
                        <div class="card-body">

                            <?= form_open('jurusan/edit_aksi') ?>
                            <input type="hidden" name="id" value="<?= $jurusan['id'] ?>" class="form-control">

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Nama Jurusan</span>
                                        </div>
                                        <input type="text" name="nama" value="<?= $jurusan['nama'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Singkatan</span>
                                        </div>
                                        <input type="text" name="singkatan" value="<?= $jurusan['singkatan'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Kepala Jurusan</span>
                                        </div>
                                        <select class="custom-select" name="jurusan" id="inputGroupSelect01">
                                            <option <option <?= ($prodi['nama_kajur'] == "Dosen A" ? 'selected="selected"' : '') ?> value="Dosen A">Dosen A</option>
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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Prodi</h6>
                        </div>
                        <div class="card-body">

                            <?= form_open('prodi/edit_aksi'); ?>
                            <input type="hidden" name="id" value="<?= $prodi['id'] ?>" class="form-control">

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Nama Prodi</span>
                                        </div>
                                        <input type="text" name="nama" value="<?= $prodi['nama'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Ruangan</span>
                                        </div>
                                        <input type="text" name="ruangan" value="<?= $prodi['ruangan'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" name="jurusan" for="inputGroupSelect01">Jurusan</label>
                                        </div>
                                        <select class="custom-select" name="jurusan" id="inputGroupSelect01">
                                            <option <option <?= ($prodi['jurusan'] == "JTI" ? 'selected="selected"' : '') ?> value="JTI">JTI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Akreditasi</span>
                                        </div>
                                        <input type="text" name="akreditasi" value="<?= $prodi['akreditasi'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Nama Kaprodi</span>
                                        </div>
                                        <select class="custom-select" name="nama_kaprodi" id="inputGroupSelect01">
                                            <option <option <?= ($dosen['nama_kaprodi'] == "Dosen A" ? 'selected="selected"' : '') ?> value="Dosen A">Dosen A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Tahun Berdiri</span>
                                        </div>
                                        <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Output Lulusan</span>
                                        </div>
                                        <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <?= form_close(); ?>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
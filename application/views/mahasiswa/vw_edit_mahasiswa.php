                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Mahasiswa</h6>
                        </div>
                        <div class="card-body">

                            <?= form_open('mahasiswa/edit_aksi'); ?>
                            <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>" class="form-control">

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Nama</span>
                                        </div>
                                        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">NIM</span>
                                        </div>
                                        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
                                        </div>
                                        <select class="custom-select" name="jenis_kelamin" id="inputGroupSelect01">
                                            <option selected>Pilih...</option>
                                            <option <?= ($mahasiswa['jenis_kelamin'] == "Laki-Laki" ? 'selected="selected"' : '') ?> value="Laki-Laki">Laki-Laki</option>
                                            <option <?= ($mahasiswa['jenis_kelamin'] == "Perempuan" ? 'selected="selected"' : '') ?> value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Email</span>
                                        </div>
                                        <input type="text" name="email" value="<?= $mahasiswa['email'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Prodi</label>
                                        </div>
                                        <select class="custom-select" name="prodi" id="inputGroupSelect01">
                                            <option <?= ($mahasiswa['prodi'] == "Teknik Informatika" ? 'selected="selected"' : '') ?> value="Teknik Informatika">Teknik Informatika</option>
                                            <option <?= ($mahasiswa['prodi'] == "Sistem Informasi" ? 'selected="selected"' : '') ?> value="Sistem Informasi">Sistem Informasi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Asal Sekolah</label>
                                        </div>
                                        <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">No Hp</span>
                                        </div>
                                        <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Alamat</label>
                                        </div>
                                        <input type="text" name="alamat" value="<?= $mahasiswa['alamat'] ?>" class="form-control">
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
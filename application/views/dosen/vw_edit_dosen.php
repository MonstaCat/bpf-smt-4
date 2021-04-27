                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul ?></h1>
                    <p class="mb-4">Bengkel Pemrograman Framework 2 TI D</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Dosen</h6>
                        </div>
                        <div class="card-body">

                            <?= form_open('dosen/edit_aksi') ?>
                            <input type="hidden" name="id" value="<?= $dosen['id'] ?>" class="form-control">

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Nama</span>
                                        </div>
                                        <input type="text" name="nama" value="<?= $dosen['nama'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">NIP</span>
                                        </div>
                                        <input type="text" name="nip" value="<?= $dosen['nip'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Program Studi</label>
                                        </div>
                                        <select class="custom-select" name="prodi" id="inputGroupSelect01">
                                            <option <option <?= ($dosen['prodi'] == "Teknik Informatika" ? 'selected="selected"' : '') ?> value="Teknik Informatika">Teknik Informatika</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Email</span>
                                        </div>
                                        <input type="text" name="email" value="<?= $dosen['email'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Inisial</span>
                                        </div>
                                        <input type="text" name="inisial" value="<?= $dosen['inisial'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Kompetensi</span>
                                        </div>
                                        <input type="text" name="kompetensi" value="<?= $dosen['kompetensi'] ?>" class="form-control">
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
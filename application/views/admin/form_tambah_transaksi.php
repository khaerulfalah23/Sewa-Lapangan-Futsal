<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Form Tambah Data Lapangan Matras
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Pemesan</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lapangan">Lapangan</label>
                            <select class="form-control" name="lapangan">
                                <option>--Pilih--</option>
                                <option value="Matras">Matras</option>
                                <option value="Sintetis">Sintetis</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('lapangan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam_main">Jam Main</label>
                            <select class="form-control" id="jam_main" name="jam_main">
                                <option>--pilih--</option>
                                <option value="09.00">09.00</option>
                                <option value="10.00">10.00</option>
                                <option value="11.00">11.00</option>
                                <option value="12.00">12.00</option>
                                <option value="13.00">13.00</option>
                                <option value="14.00">14.00</option>
                                <option value="15.00">15.00</option>
                                <option value="16.00">16.00</option>
                                <option value="17.00">17.00</option>
                                <option value="18.00">18.00</option>
                                <option value="19.00">19.00</option>
                                <option value="20.00">20.00</option>
                                <option value="21.00">21.00</option>
                                <option value="22.00">22.00</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="selesai">Selesai</label>
                            <select class="form-control" id="selesai" name="selesai">
                                <option>--pilih--</option>
                                <option value="09.00">09.00</option>
                                <option value="10.00">10.00</option>
                                <option value="11.00">11.00</option>
                                <option value="12.00">12.00</option>
                                <option value="13.00">13.00</option>
                                <option value="14.00">14.00</option>
                                <option value="15.00">15.00</option>
                                <option value="16.00">16.00</option>
                                <option value="17.00">17.00</option>
                                <option value="18.00">18.00</option>
                                <option value="19.00">19.00</option>
                                <option value="20.00">20.00</option>
                                <option value="21.00">21.00</option>
                                <option value="22.00">22.00</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
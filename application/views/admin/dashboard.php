<div class="container" style="overflow: auto;">
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2 bg-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Penyewa</div>
              <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('admin/get_user'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2 bg-warning">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jadwal Lapangan Matras</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $totalLapanganMatras; ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('admin/get_lapangan_matras'); ?>"><i class="fas fa-fw fa-life-ring fa-3x text-primary"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2 bg-danger">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jadwal Lapangan Sintetis</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $totalLapanganSintetis?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user/get_lapangan_sintetis'); ?>"><i class="fas fa-fw fa-life-ring fa-3x text-success"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2 bg-success">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Total Transaksi</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $totalTransaksi; ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user/get_transaksi'); ?>"><i class="fas fa-shopping-cart fa-3x text-danger"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- end row ux-->

  <!-- Divider -->
  <hr class="sidebar-divider">

  <div class="row">
    <div class="col-12">
        <h2>Transaksi Terbaru</h2>
    </div>
  </div>

<div class="flash-data" title="Transaksi" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="table-responsive mb-3">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
            <th>No</th>
            <th>Id Sewa</th>
            <th>Nama Pemesan</th>
            <th>Lapangan </th>
            <th style="width: 130px;">Tanggal</th>
            <th>Jam main</th>
            <th>selesai</th>
            <th style="width: 70px;">lama main</th>
            <th style="width: 110px;">harga</th>
            <th>status</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($transaksi as $t): ?>
        <tr>
            <th scope="row"><?= ++$start; ?></th>
            <td><?= $t['id_sewa']; ?></td>
            <td><?= $t['nama_pemesan']; ?></td>
            <td><?= $t['lapangan']; ?></td>
            <td><?= $t['tanggal']; ?></td>
            <td><?= $t['jam_main']; ?></td>
            <td><?= $t['selesai']; ?></td>
            <td><?= $t['lama_main']; ?> Jam</td>
            <td>Rp. <?= $t['harga_sewa']; ?></td>
            <td><?= $t['status']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
    <?= $this->pagination->create_links(); ?>
</div>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand" href="#">SE<span class="text-primary">LA</span>FUT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/penyewaan'); ?>">Penyewaan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lapangan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('user/lapangan_sintetis'); ?>">Lapangan Sintetis</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('user/lapangan_matras'); ?>">Lapangan Matras</a>
          </div>
        </li>
        <li class="nav-item">   
          <a class="nav-link" href="<?= base_url('user/cara_penyewaan'); ?>">Cara Penyewaan</a>
        </li>
      </ul>
      
      <?php if($this->session->userdata('email')): ?>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <div class="d-flex align-items-center">
              <img class="rounded-circle" width="30" height="30" src="<?= base_url('assets/image/profile/' . $user['image']); ?>" alt="<?= $user['image']; ?>">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $user['nama']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('autentifikasi/logout'); ?>">Keluar</a>
              </div>
            </div>
          </li>
        </ul>
      <?php else: ?>
        <div class="d-flex">
         <a href="<?= base_url('autentifikasi'); ?>"><button class="btn btn-primary">LOGIN</button></a> 
         <a href="<?= base_url('autentifikasi/registrasi'); ?>"><button class="btn btn-success">DAFTAR AKUN</button></a>  
        </div>
      <?php endif; ?>
  </div> 
  </div>
</nav>
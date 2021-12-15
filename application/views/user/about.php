  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Laporan</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url('assets/img/theme/team-4-800x800.jpg') ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?= ucwords($this->session->userdata('username')) ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="<?= base_url('logout') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">    
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
               
        </div>
      </div>
      <div class="row mt-5">
        <div class="col mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">About</h3>
                  
                  <img alt="Image placeholder" src="<?= base_url('assets\img\brand\blue.png') ?>">
<p><strong>Autokuntansi</strong> adalah sistem informasi akuntansi yang membantu mencatat transaksi keuangan perusahaan
    atau usaha Anda secara online melalui website.</p>
<p>Dengan bantuan sistem ini, Anda tidak perlu membuat laporan keuangan secara manual, karena catatan transaksi yang
    telah Anda input dalam sistem langsung dapat di cetak atau di download dalam format .pdf</p>
<hr />
<h2>Daftar Divisi</h2>
<hr />
<h4>Project Leader : Faaza Bil Amri</h4>
<h3>Tim Analyst</h3>
<ul>
    <li>Muhamad Irsyad</li>
    <li>Cut Aja Anis Layyinna</li>
    <li>Afrida Chaerunnisa</li>
    <li>Nanda Putri Styaningrum</li>
</ul>
<h3>Tim Desain</h3>
<ul>
    <li>Ari Lathifah</li>
    <li>Nurul Islah</li>
    <li>Ucha Aprilia</li>
    <li>Ani Rosidah</li>
    <li>Amanda Putri Rahayu</li>
    <li>Dewi Syifa</li>
</ul>
<h3>Tim Programmer</h3>
<ul>
    <li>Faaza Bil Amri</li>
    <li>Fahar Muharram</li>
    <li>Insan Kamil</li>
    <li>Nur Ihsan Fajar Ramadhan</li>
    <li>Rijal Khatami</li>
    <li>Muhammad Noor Rokhim</li>
    <li>Muhammad Syauqi Hazimi</li>
    <li>Jihan Fadhillah</li>
</ul>
<h3>Tim Dokumentasi</h3>
<ul>
    <li>Syfa Aula</li>
    <li>Muhamad Rizky</li>
</ul>
<hr />
<h2>Cara Penggunaan Aplikasi</h2>
<hr />
<h3>Cara Install</h3>
<ul>
    <li>Nyalakan XAMPP pada Laptop</li>
    <li>Jalankan perintah pada prompt atau terminal composer install</li>
    <li>Buatlah database siak, kemudian import database yang ada pada folder database</li>
</ul>
<hr />
<h3>Akses Login</h3>
<ul>
    <li>Username: kelas5a</li>
    <li>Username: finance</li>
    <li>Username: accountant</li>
    <li>Password: 12345678</li>
</ul>

              <!-- ISI DISINI BROW!! -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
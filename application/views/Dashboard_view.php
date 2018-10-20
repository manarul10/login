<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
 <!--    <link href="<?php echo base_url('assets/js/style.js');?>" rel="stylesheet"> -->
  </head>
  <body>
    
    <div class="container-fluid">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>   
 
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/js/bootstrap.min.js" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/style.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- Ini adalah bagian Judul Navbar-->
  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">Aplikasi Pengarsipan Data Alumni MAN Purwakarta</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Ini adalah bagian Sidebar -->
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" title="Beranda"><i class="fa fa-home"></i> Beranda <i class="fa fa-home shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/login/index.php/Biodata" title="Tambah"><i class="fa fa-plus-circle"></i> Tambah Data<i class="fa fa-plus-circle shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Verifikasi"><i class="fa fa-check"></i> Verifikasi Data<i class="fa fa-check shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Cetak"><i class="fa fa-print"></i> Cetak Data<i class="fa fa-print shortmenu animate"></i></a>
          </li>
        </ul>
        <!-- Ini adalah bagian Navbar -->
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/login"><i class="fas fa-key"></i>  Logout</a>
          </li>
        </ul>
      </div>
    </nav>
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Alumni</h5>
                <p>
                  <table class="table">
                    <tr>No.</tr>
                    <tr>NK</tr>
                    <tr>NAMA LENGKAP</tr>
                    <tr>ALAMAT</tr>
                  </table>  
                </p>
            </div>
          </div>
        </div>

      </div>
    </div>


  </div>
  <script defer src="<?php echo base_url('assets/js/all.js');?>"></script>
 
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
               <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/js/bootstrap.min.js" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/style.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->

  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">Aplikasi Pengarsipan Data Alumni MAN Purwakarta</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" title="Beranda"><i class="fa fa-home"></i> Beranda <i class="fa fa-home shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Cetak"><i class="fa fa-print"></i> Cetak Data<i class="fa fa-print shortmenu animate"></i></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/login"><i class="fas fa-key"></i>  Logout</a>
          </li>
        </ul>
      </div>
    </nav>
      </div>
    </div>
  </div>
  <script defer src="<?php echo base_url('assets/js/all.js');?>"></script>

                <?php endif;?>
      
                 
          
       
 
     
    </div>
  </body>
</html>
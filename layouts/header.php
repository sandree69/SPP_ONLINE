<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      #loginB {
        float: right;
      }
    </style>
    <title>SPP Online</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" >Pembayaran SPP Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <?php
      if(!isset($_SESSION['data']) &&!isset($_SESSION['siswa'])){ ?>
            <li class="nav-item <?= $_GET['aksi'] == 'home' ? "active" : "" ?>">
        <a class="nav-link" href="index.php?aksi=home">Petugas</a>
      </li>
      <li class="nav-item <?= $_GET['aksi'] == 'siswa' ? "active" : "" ?>">
        <a class="nav-link" href="index.php?aksi=siswa">Siswa</a>
      </li>
     
     <?php }
      ?>

      <?php
      if(isset($_SESSION['data'])){
        if($_SESSION['data']['level'] == 'admin'){?>
             
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="admin.php?page=datakelas">Data Kelas</a>
          <a class="dropdown-item" href="admin.php?page=dataspp">Data SPP</a>
          <a class="dropdown-item" href="admin.php?page=datapetugas">Data Petugas</a>
          <a class="dropdown-item" href="admin.php?page=datasiswa">Data Siswa</a>

        </div>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php?page=laporan"> Laporan </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?aksi=logout"> Logout </a>
          </li>
          
         <?php }
       }
       ?>
      <?php 
       if(isset($_SESSION['data'])){
        if($_SESSION['data']['level'] == 'petugas'){?>

      

      <li class="nav-item">
                <a class="nav-link" href="petugas.php?page=datasiswa">Data Siswa</a>
              </Ii>

        <li class="nav-item">
          <a class="nav-link" href="index.php?aksi=logout">Logout</a>
        </Ii>



      <?php   }
       }
      ?>
      <?php 
       if(isset($_SESSION['siswa'])){ ?>
    
        <li class="nav-item">
          <a class="nav-link" href="index.php?aksi=logout">Logout</a>
        </Ii>



    
       <?php }
      ?>
      
      </ul>
      </div>
      </div>
      </nav>

     





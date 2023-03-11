<?php
include('system/auth.php');
include('system/fungsi.php');
$auth = new Login;
$fungsi = new Fungsi;


session_start();
if(isset($_SESSION['data'])){
    if($_SESSION['data']['level'] != 'petugas'){
        header('location: index.php');

    }
} else {
    header('location: index.php');
}

include('layouts/header.php');

if(empty($_GET['page'])){
    header('location: petugas.php?page=datasiswa');
}
if($_GET['page'] == 'datasiswa'){
    include('user/datasiswa.php');
}
elseif($_GET['page'] == 'pembayaran'){
    include('user/pembayaran.php');
 }
 elseif($_GET['page'] == 'ayobayar'){
    $nisn = $_POST['nisn'];
    $bulan_dibayar = $_POST['bulan_dibayar'];
    $id_spp = $_POST['id_spp'];
    $id_petugas = $_POST['id_petugas'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $tahun_dibayar = $_POST['tahun_dibayar'];

    $fungsi->ayobayar($nisn, $bulan_dibayar, $id_spp, $id_petugas, $jumlah_bayar, $tahun_dibayar); 
 }
 elseif($_GET['page'] == 'history'){
    include('user/history.php');
 }

include('layouts/footer.php');
?>

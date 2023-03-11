<?php
session_start();
if(isset($_SESSION['data'])){
    if($_SESSION['data']['level'] == 'admin'){
        header('locatio: admin.php');
    } elseif($_SESSION['data']['level'] == 'petugas'){
        header('location: petugas.php');
    }
}
include "system/fungsi.php";
include "system/auth.php";

$fungsi = new Fungsi;
$auth = new Login;

include "layouts/header.php";



if(empty($_GET['aksi'])){
    header('location: index.php?aksi=home');
}

if(isset($_GET['aksi'])){
    if($_GET['aksi'] == 'home'){
        include "login.php";
    } elseif($_GET['aksi'] == 'siswa'){
        include "loginsiswa.php";
    } elseif($_GET['aksi'] == 'login'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $auth->login($username, $password);
    } elseif($_GET['aksi'] == 'logout'){
        $auth->logout();
    }
    elseif($_GET['aksi'] == 'loginsiswa'){
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $auth->loginSiswa($nisn, $nis);
    }
    
 }


include "layouts/footer.php";








    









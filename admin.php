<?php
include "system/fungsi.php";
$fungsi = new Fungsi;
session_start();
if(isset($_SESSION['data'])){
    if($_SESSION['data']['level'] != 'admin'){
        header('location: index.php');

    }
} else {
    header('location: index.php');
}

include('layouts/header.php');

if(empty($_GET['page'])){
    header('location: admin.php?page=datakelas');
}

if($_GET['page'] == 'datakelas'){
    include "user/datakelas.php";
}
 elseif($_GET['page'] == 'tambahkelas'){
    include('user/tambahkelas.php');
}
 elseif($_GET['page'] == 'insertkelas'){
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
    $fungsi->insertkelas($nama_kelas, $kompetensi_keahlian);
} 
elseif($_GET['page'] == 'editkelas'){
   include('user/editkelas.php');
}
 elseif($_GET['page'] == 'updatekelas'){
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
    $fungsi->updatekelas($id_kelas, $nama_kelas, $kompetensi_keahlian);
}
elseif($_GET['page'] == 'deletekelas'){
    $fungsi->deletekelas($_GET['id_kelas']);
}

elseif($_GET['page'] == 'dataspp'){
    include "user/dataspp.php";
}
elseif($_GET['page'] == 'tambahspp'){
    include('user/tambahspp.php');
}
elseif($_GET['page'] == 'insertspp'){
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $fungsi->insertspp($tahun, $nominal);
}
elseif($_GET['page'] == 'editspp'){
    include('user/editspp.php');
 }
  elseif($_GET['page'] == 'updatespp'){
     $id_spp = $_POST['id_spp'];
     $tahun = $_POST['tahun'];
     $nominal = $_POST['nominal'];
     $fungsi->updatespp($id_spp, $tahun, $nominal);
 }
 elseif($_GET['page'] == 'deletespp'){
    $fungsi->deletespp($_GET['id_spp']);
}
elseif($_GET['page'] == 'datapetugas'){
    include "user/datapetugas.php";
}
elseif($_GET['page'] == 'insertpetugas'){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $nama_petugas = $_POST['nama_petugas'];
    $fungsi->insertpetugas($username, $password, $nama_petugas );
}
elseif($_GET['page'] == 'tambahpetugas'){
    include('user/tambahpetugas.php');
}
elseif($_GET['page'] == 'editpetugas'){
    include('user/editpetugas.php');
 }
  elseif($_GET['page'] == 'updatepetugas'){
     $id_petugas = $_POST['id_petugas'];
     $username = $_POST['username'];
     $nama_petugas = $_POST['nama_petugas'];
     $fungsi->updatepetugas($id_petugas, $username, $nama_petugas);
 }
 elseif($_GET['page'] == 'deletepetugas'){
    $fungsi->deletepetugas($_GET['id_petugas']);
}
elseif($_GET['page'] == 'datasiswa'){
    include('user/datasiswa.php');
}
elseif($_GET['page'] == 'tambahsiswa'){
    include('user/tambahsiswa.php');
}
elseif($_GET['page'] == 'insertsiswa'){
    $data = [
        'nisn' => $_POST['nisn'],
        'nis' => $_POST['nis'],
        'nama' => $_POST['nama'],
        'id_kelas' => $_POST['id_kelas'],
        'alamat' => $_POST['alamat'],
        'no_telp' => $_POST['no_telp'],
        'id_spp' => $_POST['id_spp'],
    ];
    $fungsi->insertsiswa($data);
}
elseif($_GET['page'] == 'editsiswa'){
    include('user/editsiswa.php');
 }
 elseif($_GET['page'] == 'updatesiswa'){
    $data = [
        'nisn' => $_POST['nisn'],
        'nis' => $_POST['nis'],
        'nama' => $_POST['nama'],
        'id_kelas' => $_POST['id_kelas'],
        'alamat' => $_POST['alamat'],
        'no_telp' => $_POST['no_telp'],
        'id_spp' => $_POST['id_spp'],
    ];
    $fungsi->updatesiswa($data);
}
elseif($_GET['page'] == 'deletesiswa'){
    $fungsi->deletesiswa($_GET['nisn']);
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
 elseif($_GET['page'] == 'laporan'){
    include('user/laporan.php');
 }




include "layouts/footer.php";
?>


<?php

class Fungsi {
    public function kon(){
        $kon = mysqli_connect('localhost', 'root', '', 'spp');
        return $kon;
    }
public function datakelas(){
    $sql = "SELECT * FROM kelas ORDER BY id_kelas DESC";
    $query = mysqli_query($this->kon(), $sql);

    if(mysqli_num_rows($query) > 0 ){
        while($d = mysqli_fetch_assoc($query)){
            $select[] = $d;
        }
    }
    else {
        $select = null;
    }
    return $select;
}
public function insertkelas($nama_kelas, $kompetensi_keahlian){
    $sql = "INSERT INTO kelas VALUES (null,'$nama_kelas', '$kompetensi_keahlian')";
    $hitung = mysqli_num_rows(mysqli_query($this->kon(), "SELECT * FROM kelas WHERE nama_kelas = '$nama_kelas'"));

    if($hitung < 1) {
        $query = mysqli_query($this->kon(), $sql);
        header('location: admin.php?page=datakelas&status=berhasil');

    } else {
        header('location: admin.php?page=datakelas&status=gagal');
    }
  } 
  public function editkelas($id_kelas){
    $sql = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    $query = mysqli_query($this->kon(), $sql);
    $data = mysqli_fetch_assoc($query);

    return $data;

  }
  public function updatekelas($id_kelas,$nama_kelas, $kompetensi_keahlian)
  {
    $sql = "UPDATE kelas SET nama_kelas = '$nama_kelas',kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=datakelas&status=berhasil');
  }
  public function deletekelas($id_kelas){
    $sql = "DELETE FROM kelas WHERE id_kelas= '$id_kelas'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=datakelas&status=berhasilhapus');
  }

  public function dataspp(){
    $sql = "SELECT * FROM spp ORDER BY id_spp DESC";
    $query = mysqli_query($this->kon(), $sql);

    if(mysqli_num_rows($query) > 0 ){
        while($d = mysqli_fetch_assoc($query)){
            $select[] = $d;
        }
    }
    else {
        $select = null;
    }
    return $select;
}
public function insertspp($tahun, $nominal)
{
    $sql = "INSERT INTO spp VALUES (null, '$tahun', '$nominal')";
    $hitung = mysqli_num_rows(mysqli_query($this->kon(), "SELECT * FROM spp WHERE tahun = '$tahun'"));

    if($hitung < 1) {
        $query = mysqli_query($this->kon(), $sql);
        header('location: admin.php?page=dataspp&status=berhasil');

    } else {
        header('location: admin.php?page=dataspp&status=gagal');
    }
  } 
  public function editspp($id_spp){
    $sql = "SELECT * FROM spp WHERE id_spp = '$id_spp'";
    $query = mysqli_query($this->kon(), $sql);
    $data = mysqli_fetch_assoc($query);

    return $data;

  }
  public function updatespp($id_spp,$tahun, $nominal)
  {
    $sql = "UPDATE spp SET tahun = '$tahun',nominal='$nominal' WHERE id_spp='$id_spp'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=dataspp&status=berhasil');
  }
  public function deletespp($id_spp){
    $sql = "DELETE FROM spp WHERE id_spp= '$id_spp'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=dataspp&status=berhasilhapus');
  }


  public function datapetugas()
  {
    $sql = "SELECT * FROM petugas WHERE LEVEL='petugas' ORDER BY id_petugas DESC";
    $query = mysqli_query($this->kon(), $sql);

    if(mysqli_num_rows($query) > 0 ){
        while($d = mysqli_fetch_assoc($query)){
            $select[] = $d;
        }
    }
    else {
        $select = null;
    }
    return $select;
}

public function insertpetugas($username, $password, $nama_petugas)
{
    $sql = "INSERT INTO petugas VALUES (null, '$username', '$password', '$nama_petugas', 'petugas')";
    $hitung = mysqli_num_rows(mysqli_query($this->kon(), "SELECT * FROM petugas WHERE username = '$username'"));

    if($hitung < 1) {
        $query = mysqli_query($this->kon(), $sql);
        header('location: admin.php?page=datapetugas&status=berhasil');

    } else {
        header('location: admin.php?page=datapetugas&status=gagal');
    }
  } 
  public function editpetugas($id_petugas){
    $sql = "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'";
    $query = mysqli_query($this->kon(), $sql);
    $data = mysqli_fetch_assoc($query);

    return $data;

  }
  public function updatepetugas($id_petugas,$username, $nama_petugas)
  {
    $sql = "UPDATE petugas SET username = '$username', nama_petugas='$nama_petugas' WHERE id_petugas='$id_petugas'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=datapetugas&status=berhasil');
  }
  public function deletepetugas($id_petugas){
    $sql = "DELETE FROM petugas WHERE id_petugas= '$id_petugas'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=datapetugas&status=berhasilhapus');
  }
  public function datasiswa(){
    $sql = "SELECT * FROM siswa LEFT JOIN kelas ON siswa.id_kelas=kelas.id_kelas LEFT JOIN spp ON siswa.id_spp=spp.id_spp ORDER BY nisn DESC";
    $query = mysqli_query($this->kon(), $sql);

    if(mysqli_num_rows($query) > 0){
      while($d = mysqli_fetch_assoc($query)){
        $select[] = $d;
      }
    } else {
      $select = null;
    }
    return $select;
  }
  public function insertsiswa($data)
{
    $nisn= $data['nisn'];
    $nis= $data['nis'];
    $nama= $data['nama'];
    $id_kelas= $data['id_kelas'];
    $alamat= $data['alamat'];
    $no_telp= $data['no_telp'];
    $id_spp= $data['id_spp'];

    $sql = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";
    $hitung = mysqli_num_rows(mysqli_query($this->kon(), "SELECT * FROM siswa WHERE nisn = '$nisn' AND nis = '$nis'"));

    if($hitung < 1) {
        $query = mysqli_query($this->kon(), $sql);
        header('location: admin.php?page=datasiswa&status=berhasil');

    } else {
        header('location: admin.php?page=datasiswa&status=gagal');
    }
  } 
  public function editsiswa($nisn)
  {
    $sql = "SELECT * FROM siswa  LEFT JOIN kelas ON siswa.id_kelas=kelas.id_kelas LEFT JOIN spp ON siswa.id_spp=spp.id_spp WHERE nisn = '$nisn'";
    $query = mysqli_query($this->kon(), $sql);
    $data = mysqli_fetch_assoc($query);

    return $data;

  }
  public function updatesiswa($data)
  {
    $nisn= $data['nisn'];
    $nis= $data['nis'];
    $nama= $data['nama'];
    $id_kelas= $data['id_kelas'];
    $alamat= $data['alamat'];
    $no_telp= $data['no_telp'];
    $id_spp= $data['id_spp'];
    $sql = "UPDATE siswa SET nisn = '$nisn', nis='$nis', nama = '$nama', id_kelas='$id_kelas', alamat = '$alamat', no_telp='$no_telp',id_spp = '$id_spp' WHERE nisn='$nisn'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=datasiswa&status=berhasil');
  }
  public function deletesiswa($nisn){
    $sql = "DELETE FROM siswa WHERE nisn= '$nisn'";
    $query = mysqli_query($this->kon(), $sql);
    header('location: admin.php?page=datasiswa&status=berhasilhapus');
  }
  public function ayobayar($nisn, $bulan_dibayar, $id_spp, $id_petugas, $jumlah_bayar, $tahun_dibayar){
    $tgl_bayar = date('Y-m-d');
    $sql = "INSERT INTO pembayaran VALUES (null, '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')";
    $hitung = mysqli_num_rows (mysqli_query($this->kon(), "SELECT * FROM pembayaran WHERE nisn='$nisn' AND bulan_dibayar='$bulan_dibayar' AND tahun_dibayar='$tahun_dibayar'"));
    if($hitung < 1){
      if($_SESSION ['data']['level'] == 'admin'){
        $query = mysqli_query($this->kon(), $sql);
      header('location: admin.php?page=datasiswa&nisn='.$nisn.'&status=berhasil');
      } elseif($_SESSION ['data']['level'] == 'petugas'){
        $query = mysqli_query($this->kon(), $sql);
        header('location: petugas.php?page=datasiswa&nisn='.$nisn.'&status=berhasil');
      }
    } else {
      header('location: admin.php?page=datasiswa&nisn='.$nisn.'&status=gagal'); 
    }

  }
  public function history($nisn){
    $sql = "SELECT * FROM pembayaran LEFT JOIN siswa ON pembayaran.nisn=siswa.nisn WHERE pembayaran.nisn = '$nisn'";
    $query = mysqli_query($this->kon(), $sql);
 
    while($d =mysqli_fetch_assoc($query)){
      $data[] = $d;
    }
    return $data;

  }
  public function laporan(){
    $sql = "SELECT * FROM pembayaran LEFT JOIN siswa ON pembayaran.nisn=siswa.nisn";
    $query = mysqli_query($this->kon(), $sql);

    while ($d = mysqli_fetch_assoc($query)){
        $data[] = $d;
    }
    return $data;
}
  public function dataku(){
    $nisn = $_SESSION['siswa']['nisn'];
    $sql = "SELECT * FROM pembayaran WHERE nisn = '$nisn'";
    $query = mysqli_query($this->kon(), $sql);

    while($d = mysqli_fetch_assoc($query)){
      $data[] = $d;
    }
    return $data;
  }


}


<?php


class Login {
    public function login ($username=null, $password=null){
       $fungsi = new Fungsi;
       $sql = "SELECT * FROM petugas WHERE username='$username'";
       $query = mysqli_query($fungsi->kon(), $sql);

       $data = mysqli_fetch_assoc($query);
       if(password_verify($password, $data['password'])){
          if($data['level'] == 'admin'){
            $_SESSION['data'] = $data;
            header('location: admin.php');
          } elseif($data['level'] == 'petugas'){
            $_SESSION['data'] = $data;
            header('location: petugas.php');
         } else{
        header ('location: index.php');
       } 
      }
   }
   public function loginSiswa($nisn=null, $nis=null){
    $fungsi = new Fungsi;
    $sql = "SELECT * FROM siswa WHERE nisn ='$nisn' AND nis='$nis'";
    $query = mysqli_query($fungsi->kon(), $sql);
    $data = mysqli_fetch_assoc($query);
    $hitung = mysqli_num_rows(mysqli_query($fungsi->kon(), $sql));
    if($hitung > 0){
      $_SESSION['siswa'] = $data;
      header('location: siswa.php');
    }
}
    public function logout(){
      session_destroy();
      header('location: index.php');
    }
}
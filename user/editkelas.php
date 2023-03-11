<?php
$id_kelas = $_GET['id_kelas'];
$kelas = $fungsi->editkelas($id_kelas);


?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
        <form method="post" action="admin.php?page=updatekelas">
    <div class="form-group">
        <input type="text" name="id_kelas" value="<?= $kelas['id_kelas'];?>" hidden>
        <label>Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" required value="<?= $kelas['nama_kelas']; ?>">
</div>
    <div class="form-group">
        <label>Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian" class="form-control" reguired value="<?= $kelas['kompetensi_keahlian']; ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-sm">submit</button>
    </form>
        </div>
    </div>  
</div>

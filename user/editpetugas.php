<?php
$id_petugas = $_GET['id_petugas'];
$petugas = $fungsi->editpetugas($id_petugas);


?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
        <form method="post" action="admin.php?page=updatepetugas">
        <input type="text" name="id_petugas" class="form-control" value="<?= $petugas['id_petugas']?>"hidden>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required value="<?= $petugas['username']?>">
    </div>
    <div class="form-group">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" required value="<?= $petugas['nama_petugas']?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-sm">submit</button>
    </form>
        </div>
    </div>
</div>

<?php
$id_spp = $_GET['id_spp'];
$spp = $fungsi->editspp($id_spp);


?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
        <form method="post" action="admin.php?page=updatespp">
    <div class="form-group">
        <input type="text" name="id_spp" value="<?= $spp['id_spp'];?>" hidden>
        <label>Tahun</label>
        <input type="text" name="tahun" class="form-control" required value="<?= $spp['tahun']; ?>">
</div>
    <div class="form-group">
        <label>Nominal</label>
        <input type="text" name="nominal" class="form-control" reguired value="<?= $spp['nominal']; ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-sm">submit</button>
    </form>
        </div>
    </div>  
</div>

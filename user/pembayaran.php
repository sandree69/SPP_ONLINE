<?php
$data = $fungsi->editsiswa($_GET['nisn']);

?>
<div class="container mt-5">
    <div class="row">
    <div class="col-4">
    <form action="admin.php?page=ayobayar" method="post">
        <input type="text" name="nisn" value="<?= $data['nisn']?>" hidden>
        <input type="text" name="id_petugas" value="<?= $_SESSION['data']['id_petugas']?>" hidden>
        <input type="text" name="tahun_dibayar" value="<?= $data['tahun']?>" hidden>
        <input type="text" name="id_spp" value="<?= $data['id_spp']?>" hidden>
        <input type="text" name="jumlah_bayar" value="<?= $data['nominal']?>" hidden>
        <div class="form-group">
        <select name="bulan_dibayar" class="form-control" required>
            <option value="">Pilih Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
        </div>
        <button class="btn btn-primary" type="submit">Bayar</button>
</form>

    </div>
    </form>
</div>
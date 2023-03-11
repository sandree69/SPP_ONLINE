<div class="container mt-5">
    <a href="admin.php?page=tambahspp" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nominal</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($fungsi ->dataspp() as $d){ ?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$d['tahun']; ?></td>
                <td>Rp. <?=number_format($d['nominal'],2,',','.'); ?></td>
                <td>
                    <a href="admin.php?page=editspp&id_spp=<?= $d['id_spp'] ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="admin.php?page=deletespp&id_spp=<?= $d['id_spp'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
                </td>
            </tr>

     <?php   }
        ?>
</table>
</div>
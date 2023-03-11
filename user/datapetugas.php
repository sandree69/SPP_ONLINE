<div class="container mt-5">
    <a href="admin.php?page=tambahpetugas" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Nama petugas</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($fungsi ->datapetugas() as $d){ ?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$d['nama_petugas']; ?></td>
                <td><?=$d['username']; ?></td>
                <td>
                    <a href="admin.php?page=editpetugas&id_petugas=<?= $d['id_petugas'] ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="admin.php?page=deletepetugas&id_petugas=<?= $d['id_petugas'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
                </td>
            </tr>

     <?php   }
        ?>
</table>
</div>
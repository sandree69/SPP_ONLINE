<div class="container mt-5">
    <a href="admin.php?page=tambahkelas" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($fungsi ->datakelas() as $d){ ?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$d['nama_kelas']; ?></td>
                <td><?=$d['kompetensi_keahlian']; ?></td>
                <td>
                    <a href="admin.php?page=editkelas&id_kelas=<?= $d['id_kelas'] ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="admin.php?page=deletekelas&id_kelas=<?= $d['id_kelas'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
                </td>
            </tr>

     <?php   }
        ?>
</table>
</div>
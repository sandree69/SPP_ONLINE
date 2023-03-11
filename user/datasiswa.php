<div class="container mt-5">
    <?php
        if($_SESSION['data']['level'] == 'admin'){?>
        <a href="admin.php?page=tambahsiswa" class="btn btn-primary mb-3">Tambah Data</a>

    <?php  }
    ?>
    <table class="table table-striped table-bordered">
        <tr>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Tahun SPP</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach($fungsi ->datasiswa() as $d){ ?>

            <tr>
                <td><?=$d['nisn'];?></td>
                <td><?=$d['nis'];?></td>
                <td><?=$d['nama'];?></td>
                <td><?=$d['nama_kelas'];?></td>
                <td><?=$d['alamat'];?></td>
                <td><?=$d['no_telp'];?></td>
                <td><?=$d['tahun'];?> - Rp. <?=$d['nominal'];?></td>             
                <td>
                    <?php 
                    if($_SESSION['data']['level'] == 'admin'){  ?>
                         <a href="admin.php?page=editsiswa&nisn=<?= $d['nisn'] ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="admin.php?page=deletesiswa&nisn=<?= $d['nisn'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
                    <a href="admin.php?page=pembayaran&nisn=<?= $d['nisn'] ?>" class="btn btn-primary btn-sm">Bayar</a>
                    <a href="admin.php?page=history&nisn=<?= $d['nisn'] ?>" class="btn btn-dark btn-sm">History</a>
                    <?php  }
                    ?>
                    <?php
                    if($_SESSION['data']['level'] == 'petugas'){  ?>
                    <a href="petugas.php?page=pembayaran&nisn=<?= $d['nisn'] ?>" class="btn btn-primary btn-sm">Bayar</a>
                    <a href="petugas.php?page=history&nisn=<?= $d['nisn'] ?>" class="btn btn-dark btn-sm">History</a>
                    <?php }
                    ?>
                </td>
            </tr>

     <?php   }
        ?>
</table>
</div>
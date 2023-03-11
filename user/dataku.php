<div class="container  mt-5">
    <h3><?php= $_SESSION['siswa']['nama']?></h3>
        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Tahun Bayar</th>
            <th>Jumlah Bayar</th>
        </tr>
        <?php
        $no=1;
        foreach($fungsi->dataku() as $d){ ?>
       
      <tr>
        <td><?= $no++;?></td>
        <td><?= $d['tgl_bayar']?></td>
        <td><?= $d['bulan_dibayar']?> - <?= $d['tahun_dibayar']?></td>
        <td>Rp. <?= number_format($d['jumlah_bayar'],2,',','.')?></td>
      </tr>
      
      <?php  }    
        ?>
    </table>
</div>
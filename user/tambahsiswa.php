<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
        <form method="post" action="admin.php?page=insertsiswa">
    <div class="form-group">
        <label>NISN</label>
        <input type="text" name="nisn" class="form-control" required>
    </div>
    <div class="form-group">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" reguired>
    </div>
    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama" class="form-control" reguired>
    </div>
    <div class="form-group">
        <label>kelas</label>
        
        <select name="id_kelas" class="form-control" required>
            <option value="">Pilih Kelas</option>
             <?php
                foreach($fungsi->datakelas() as $d){  ?>
                <option value="<?= $d['id_kelas']?>"><?= $d['nama_kelas']?></option>
             <?php   }
             ?>
        </select>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>No Telp</label>
        <input type="text" name="no_telp" class="form-control" reguired>
    </div>
    <div class="form-group">
        <label>SPP</label>
        
        <select name="id_spp" class="form-control" required>
            <option value="">Pilih SPP</option>
             <?php
                foreach($fungsi->dataspp() as $d){  ?>
                <option value="<?= $d['id_spp']?>"><?= $d['tahun']?></option>
             <?php   }
             ?>
        </select>
    </div>

    <button type="submit" name="submit" class="btn btn-primary btn-sm">submit</button>
    </form>
        </div>
    </div>
</div>
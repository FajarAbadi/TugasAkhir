<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="<?php echo base_url(); ?>anggota/simpan" class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>

                <div class="col-sm-10">
                    <input type="text" name="id_anggota" value="<?= $id_anggota; ?>" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>

                <div class="col-sm-10">
                    <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                <div class="col-sm-10">
                    <select name="jenkel" class="form-control" required>
                        <option value=""> - Pilih Jenis Kelamin - </option>
                        <option value=""> - Laki-Laki - </option>
                        <option value=""> - Perempuan - </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" cols="30" rows="5" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">No HP</label>

                <div class="col-sm-10">
                    <input type="text" name="no_hp" class="form-control" placeholder="No. HP" required>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <a href="<?php echo base_url(); ?>anggota" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
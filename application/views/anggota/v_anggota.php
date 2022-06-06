<?php
if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info'); ?></div>
<?php }
?>

<div class="row">
    <div class="col-mid-12">
        <a href="<?= base_url() ?>anggota/tambah_anggota" class="btn btn-succes">
            <i class="fa fa-plus"></i> Tambah Anggota</a>
    </div>
</div>

<br>


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telpon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) { ?>
                    <tr>
                        <td><?php $row->id_anggota; ?></td>
                        <td><?php $row->nama_anggota; ?></td>
                        <td><?php $row->jenkel; ?></td>
                        <td><?php $row->alamat; ?></td>
                        <td><?php $row->no_hp; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>anggota/edit/<?php $row->id_anggota ?>" class="btn btn-success btn-xs">Edit</a>
                            <a href="<?php echo base_url(); ?>anggoata/hapus/<?php $row->id_anggota ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Mau Menghapus?');"></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
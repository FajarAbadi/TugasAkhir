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
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
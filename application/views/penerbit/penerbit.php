<?php
  if(!empty($this->session->flashdata('info'))) {?>   
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
  <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>penerbit/tambah_penerbit" class="btn btn-primary"><i class="fa fa-plus"> Tambah Anggota</i></a>
    </div>
</div>
<br>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Penerbit</th>
                  <th>Nama Penerbit</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($data as $row) {?>
                      <tr>
                        <td><?= $row->ID_Penerbit; ?></td>
                        <td><?= $row->Nama_Penerbit; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>penerbit/edit/<?= $row->ID_Penerbit; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                          <a href="<?= base_url(); ?>penerbit/hapus/<?= $row->ID_Penerbit; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                      </tr>
                    <?php }
                  ?>
                </tbody>
</table>
</div>
</div>
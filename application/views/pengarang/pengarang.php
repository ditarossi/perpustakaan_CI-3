<?php
  if(!empty($this->session->flashdata('info'))) {?>   
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
  <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>pengarang/tambah_pengarang" class="btn btn-primary"><i class="fa fa-plus"> Tambah Anggota</i></a>
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
                  <th>ID Pengarang</th>
                  <th>Nama Pengarang</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($data as $row) {?>
                      <tr>
                        <td><?= $row->ID_Pengarang; ?></td>
                        <td><?= $row->Nama_Pengarang; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>pengarang/edit/<?= $row->ID_Pengarang; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                          <a href="<?= base_url(); ?>pengarang/hapus/<?= $row->ID_Pengarang; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                      </tr>
                    <?php }
                  ?>
                </tbody>
</table>
</div>
</div>
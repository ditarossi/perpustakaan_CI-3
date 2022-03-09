<?php
  if(!empty($this->session->flashdata('info'))) {?>   
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
  <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url() ?>buku/tambah_buku" class="btn btn-primary"><i class="fa fa-plus"> Tambah Buku</i></a>
    </div>
</div>
<br>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Buku</th>
                  <th>ID Pengarang</th>
                  <th>ID Penerbit</th>
                  <th>Judul Buku</th>
                  <th>Tahun Terbit</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
</table>
</div>
</div>
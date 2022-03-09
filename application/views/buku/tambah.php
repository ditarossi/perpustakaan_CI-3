<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url()?>buku/input" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Buku</label>
                  <div class="col-sm-10">
                    <input name="ID_Buku" value="<?= $ID_Buku; ?>" type="text" class="form-control" placeholder="ID Buku" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Pengarang</label>
                  <div class="col-sm-10">
                    <input name="ID_Pengarang" type="text" class="form-control" placeholder="ID_Pengarang" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Penerbit</label>
                  <div class="col-sm-10">
                    <input name="ID_Penerbit" type="text" class="form-control" placeholder="ID_Penerbit" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Judul Buku</label>
                  <div class="col-sm-10">
                    <input name="Judul_Buku" type="text" class="form-control" placeholder="Judul_Buku" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Terbit</label>
                  <div class="col-sm-10">
                    <input name="Tahun_Terbit" type="text" class="form-control" placeholder="Tahun_Terbit" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input name="Jumlah" type="text" class="form-control" placeholder="Jumlah" required>
                  </div>
                </div>
</div>
<div class="box-footer">
    <a href="<?= base_url()?>buku" class="btn btn-warning">Cancel</a>
    <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>
</div>
</div>
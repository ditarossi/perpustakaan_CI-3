<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url()?>pengarang/input" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Pengarang</label>
                  <div class="col-sm-10">
                    <input name="ID_Pengarang" value="<?= $ID_Pengarang; ?>" type="text" class="form-control" placeholder="ID Pengarang" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pengarang</label>
                  <div class="col-sm-10">
                    <input name="Nama_Pengarang" type="text" class="form-control" placeholder="Nama Pengarang" required>
                  </div>
                </div>
</div>
<div class="box-footer">
    <a href="<?= base_url()?>pengarang" class="btn btn-warning">Cancel</a>
    <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>
</div>
</div>
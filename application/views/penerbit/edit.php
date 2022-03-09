<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url()?>penerbit/update" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Penerbit</label>
                  <div class="col-sm-10">
                    <input name="ID_Penerbit" value="<?= $data['ID_Penerbit']; ?>" type="text" class="form-control" placeholder="ID Penerbit" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Penerbit</label>
                  <div class="col-sm-10">
                    <input name="Nama_Penerbit" value="<?= $data['Nama_Penerbit']; ?>" type="text" class="form-control" placeholder="Nama Penerbit" required>
                  </div>
                </div>
                <div class="box-footer">
                    <a href="<?= base_url()?>penerbit" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            
            </form>
          </div>
</div>
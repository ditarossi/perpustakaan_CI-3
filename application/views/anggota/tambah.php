<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url()?>anggota/input" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Anggota</label>
                  <div class="col-sm-10">
                    <input name="ID_Anggota" value="<?= $ID_Anggota; ?>" type="text" class="form-control" placeholder="ID Anggota" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Anggota</label>
                  <div class="col-sm-10">
                    <input name="Nama_Anggota" type="text" class="form-control" placeholder="Nama Anggota" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                    <select name="Gender" class="form-control" required>
                       <option value=""> - Pilih Jenis Kelamin - </option> 
                       <option value="Laki-laki"> Laki-laki </option> 
                       <option value="Perempuan"> Perempuan </option> 
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input name="Alamat" type="text" class="form-control" placeholder="Alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Telp</label>
                  <div class="col-sm-10">
                    <input name="No_HP" type="text" class="form-control" placeholder="No. Telp" required>
                  </div>
                </div>
</div>
<div class="box-footer">
    <a href="<?= base_url()?>anggota" class="btn btn-warning">Cancel</a>
    <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>
</div>
</div>
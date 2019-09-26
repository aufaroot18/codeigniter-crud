<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->            
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">                  
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                  <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <select name="jurusan" id="jurusan" class="form-control">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Informatika">Sistem Informasi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="hp">No HP</label>
                  <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan No HP">
                  <small class="form-text text-danger"><?php echo form_error('hp'); ?></small>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
                  <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                  <small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>            
        </div>
        <!--/.col (left) -->        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- Input Addon -->      
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Data Pelanggan</h3>
              </div>
              <div class="card-body">
              <?php 
                      require_once 'controllers/class_pelanggan.php';
                      $obj = new Pelanggan($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
            
                    ?>
                    <form action="controllers/ControllerPelanggan.php" method="POST">
                <h4>kode</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-code"></i></span>
                  </div>
                  <input id="kode" name="kode" type="text" class="form-control" placeholder="kode">
                </div>
                <h4>Nama</h4>
             
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input id="nama" name="nama"type="text" class="form-control" placeholder="nama">
                </div>
                
                <h4>Jenis kelamin</h4>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                  </div>
                  <select name="jk" id="jk"class="form-control" placeholder="jenis kelamin">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                </div>
                <h4>Tempat Lahir</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-tags"></i></span>
                  </div>
                  <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" placeholder="tempat lahir">
                </div>
                <h4>Tanggal Lahir</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                  <input id="tgl_lahir" name="tgl_lahir" type="datetime-local" class="form-control" placeholder="tanggal lahir ">
                </div>
                <h4>Email</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <!-- <input id="email" name="email" type="text" class="form-control" placeholder="email "> -->
                  <label for="exampleFormControlInput1" class="form-label"> </label>
                  <input type="email" class="form-control" id="email"  name="email" placeholder="name@example.com">
                </div>
                <h4>Kategori</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-list"></i></span>
                  </div>
                  <select id="kartu_id" name="kartu_id" class="form-control">
                          <option>-- kartu--</option>
                          <?php 
                            foreach($rs as $j){
                          ?>
                            <option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
                          <?php } ?>
                        </select>              
                    </div>

                <div class="card-footer">
                  <button name="submit" value="simpan" type="submit" class="btn btn-info">simpan</button>
  
                </div>
                </form>         
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
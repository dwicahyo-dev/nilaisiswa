<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Data Siswa Kelas VIII</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url() ?>siswa/semua_siswa"><i class="fa fa-dashboard"></i> Data Semua Siswa</a></li>
      <li class="active">Data Siswa Kelas VIII</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <!-- Content Title -->
          <div class="box-header">            
            <button type="button" onclick="add_siswa()" class="btn btn-flat btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data Siswa</button>
          </div>

          <div class="box-body">
            <!-- Content  -->
            <div class="row">
              <div class="col-md-12">
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Kelas VIII A</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Kelas VIII B</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Kelas VIII C</a></li>
                  </ul>

                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      <button class="btn btn-flat btn-default" onclick="reload_table_Siswa_Kelas_VIIIA()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                      <br>
                      <div class="col-md-12 table-responsive">
                        <br>
                        <table id="siswaKelasVIIIATable" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIN</th>
                              <th>Nama Siswa</th>
                              <th>Tempat, Tanggal Lahir</th>
                              <th>Alamat</th>
                              <th>Jenis Kelamin</th>
                              <th>Kelas</th>
                              <th class="actions">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      <button class="btn btn-flat btn-default" onclick="reload_table_Siswa_Kelas_VIIIB()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                      <div class="col-md-12 table-responsive">
                        <br>
                        <table id="siswaKelasVIIIBTable" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIN</th>
                              <th>Nama Siswa</th>
                              <th>Tempat, Tanggal Lahir</th>
                              <th>Alamat</th>
                              <th>Jenis Kelamin</th>
                              <th>Kelas</th>
                              <th class="actions">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                      <button class="btn btn-flat btn-default" onclick="reload_table_Siswa_Kelas_VIIIC()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                      <div class="col-md-12 table-responsive">
                        <br>
                        <table id="siswaKelasVIIICTable" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIN</th>
                              <th>Nama Siswa</th>
                              <th>Tempat, Tanggal Lahir</th>
                              <th>Alamat</th>
                              <th>Jenis Kelamin</th>
                              <th>Kelas</th>
                              <th class="actions">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>


          </div>
        </div>         
      </div>
    </div>
  </div>


  <!-- Modal for Mapel -->
  <div class="modal fade" id="modal_AddSiswa" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Person Form</h3>
        </div>
        <div class="modal-body form">
          <form action="#" id="form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">NIS</label>
                  <input name="nis" placeholder="NIS" class="form-control" type="text" autofocus>
                  <span class="help-block"></span>
                </div>

                <div class="form-group">
                  <label class="control-label">Nama Siswa</label>
                  <input type="text" name="nama_siswa" placeholder="Nama Siswa" class="form-control">
                  <span class="help-block"></span>
                </div>

                <div class="form-group">
                  <label class="control-label">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" >
                  <span class="help-block"></span>
                </div>

                <div class="form-group date">
                  <label class="control-label">Tanggal Lahir</label>
                  <input type="text" name="tanggal_lahir" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask placeholder="yyyy-mm-dd">
                  <span class="help-block"></span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"></textarea>
                  <span class="help-block"></span>
                </div>

                <div class="form-group">
                  <label class="form-group" for="Jenis Kelamin">Jenis Kelamin</label>
                  <select name="id_jenis_kelamin" class="form-control">
                    <option disabled>-- Pilih Jenis Kelamin --</option>
                    <?php foreach($kelamins as $kl): ?>
                      <option value="<?= $kl->id_jenis_kelamin ?>"><?= $kl->nama_jenis_kelamin ?></option>
                    <?php endforeach ?>
                  </select>
                  <span class="help-block"></span>
                </div>

                <div class="form-group">
                  <label class="form-group">Kelas</label>
                  <select name="id_kelas" class="form-control">
                    <option disabled>-- Pilih Kelas --</option>
                    <?php foreach($kelass as $kelas): ?>
                      <option value="<?= $kelas->id_kelas ?>"><?= $kelas->nama_kelas ?></option>
                    <?php endforeach ?>
                  </select>
                  <span class="help-block"></span>
                </div>
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
  

</section>
</div>
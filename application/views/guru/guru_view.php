<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Data Guru</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Guru</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <!-- Content Title -->
          <div class="box-header">
            <button class="btn btn-flat btn-default" onclick="reload_table_Guru()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
            <button type="button" onclick="add_guru()" class="btn btn-flat btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data User</button>
          </div>

          <div class="box-body">
            <!-- Content  -->
            <div class="row">
              <div class="col-md-12 table-responsive">
                <table id="guruTable" class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIP Guru</th>
                      <th>Nama Guru</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Mata Pelajaran</th>
                      <th class="actions">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </div>


    <!-- Modal Add Guru -->
    <div class="modal fade" id="modal_AddGuru" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Form Tambah Data User</h3>
          </div>
          <div class="modal-body form">
            <form action="#" id="form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-group" for="NIP">NIP</label>
                    <input type="text" class="form-control" id="id_guru_mapel" name="id_guru_mapel" maxlength="10" autofocus>
                    <span class="help-block"></span>
                  </div>
                  
                  <div class="form-group">
                    <label class="form-group" for="Nama Guru">Nama Guru</label>
                    <input type="text" class="form-control" id="nama_guru_mapel" name="nama_guru_mapel" maxlength="45">
                    <span class="help-block"></span>
                  </div>

                  <div class="form-group">
                    <label class="form-group" for="Alamat">Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                    <span class="help-block"></span>
                  </div>

                </div>

                <div class="col-md-6">
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
                    <label class="form-group" for="Mata Pelajaran">Mata Pelajaran</label>
                    <select name="kode_mapel" class="form-control">
                      <option disabled>-- Pilih Mata Pelajaran --</option>
                      <?php foreach($mapels as $mapel): ?>
                        <option value="<?= $mapel->kode_mapel ?>"><?= $mapel->nama_mapel ?></option>
                      <?php endforeach ?>
                    </select>
                    <span class="help-block"></span>
                  </div>
                </div>

              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="saveGuru()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



  </section>
</div>
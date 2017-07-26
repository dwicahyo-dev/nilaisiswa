<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Data User</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <!-- Content Title -->
          <div class="box-header">
            <button class="btn btn-flat btn-default" onclick="reload_table_User()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
            <button type="button" onclick="add_user()" class="btn btn-flat btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data User</button>
          </div>

          <div class="box-body">
            <!-- Content  -->
            <div class="row">
              <div class="col-md-12 table-responsive">
                <table id="userTable" class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama User</th>
                      <th>Keterangan</th>
                      <th>Username</th>
                      <th>Password</th>
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

    <!-- Modal Add User -->
    <div class="modal fade" id="modal_AddUser" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Form Tambah Data User</h3>
          </div>
          <div class="modal-body form">
            <form action="#" id="form" class="form-horizontal">
              <input type="hidden" value="" name="id"/>
              <div class="form-group">
                <label class="control-label col-md-3" for="id_tata_usaha">Tata Usaha</label>
                <div class="col-md-9">
                  <select name="id_tata_usaha" class="form-control">
                    <option disabled>-- Pilih Tata Usaha --</option>
                    <?php foreach ($tatas as $tu): ?>
                      <option value="<?= $tu->id_tata_usaha ?>"><?= $tu->nama_tata_usaha ?></option>
                    <?php endforeach ?>
                  </select>
                  <span class="help-block"></span>
                </div>
              </div>
              <?php foreach ($kets as $ket): ?>
                <input type="hidden" value="<?= $ket->id_keterangan ?>" name="id_keterangan"/>
              <?php endforeach; ?>
              <div class="form-body">
                <div class="form-group">
                  <label class="control-label col-md-3">Username</label>
                  <div class="col-md-9">
                    <input name="username" placeholder="Username" class="form-control" type="text">
                    <span class="help-block"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-9">
                    <input name="password" placeholder="Password" class="form-control" type="password">
                    <span class="help-block"></span>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="saveUser()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </section>
</div>
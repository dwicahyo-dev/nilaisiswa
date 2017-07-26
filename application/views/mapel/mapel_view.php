<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Data Mapel</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Mapel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <!-- Content Title -->
          <div class="box-header">
            <button class="btn btn-flat btn-default" onclick="reload_table_Mapel()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
            <button type="button" onclick="add_Mapel()" class="btn btn-flat btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data User</button>
          </div>

          <div class="box-body">
            <!-- Content  -->
            <div class="row">
              <div class="col-md-12 table-responsive">
                <table id="mapelTable" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Mapel</th>
                      <th>Nama Mapel</th>
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



    <!-- Modal for Mapel -->
    <div class="modal fade" id="modal_AddMapel" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Person Form</h3>
          </div>
          <div class="modal-body form">
            <form action="#" id="form" class="form-horizontal">
              <input type="hidden" value="" name="id"/> 
              <div class="form-body">
                <div class="form-group">
                  <label class="control-label col-md-3">Kode Mapel</label>
                  <div class="col-md-9">
                    <input name="kode_mapel" placeholder="Kode Mapel" class="form-control" type="text" id="kode_mapel" autofocus>
                    <span class="help-block"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Nama Mapel</label>
                  <div class="col-md-9">
                    <input name="nama_mapel" placeholder="Nama Mapel" class="form-control" type="text">
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
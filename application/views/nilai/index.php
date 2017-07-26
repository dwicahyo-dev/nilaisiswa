<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Data Nilai</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Nilai</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <!-- Content Title -->
          <div class="box-header">
            <form class="form-horizontal" action="<?= site_url('nilai/simpan') ?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Tanggal</label>
                    <div class="col-md-6">
                      <input type="text" id="no" name="no" class="form-control" value="<?= date('Y-m-d')?>" readonly="readonly">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-4 control-label">Kelas</label>
                    <div class="col-md-6">
                      <select name="id_kelas" class="form-control">
                        <option>-- Pilih Kelas --</option>
                        <?php foreach($kelass as $kelas): ?>
                          <option value="<?= $kelas->id_kelas ?>"><?= $kelas->nama_kelas ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-4 control-label">Mata Pelajaran</label>
                    <div class="col-md-6">
                      <input type="text" name="kode_mapel" class="form-control" id="nama_mapel" readonly>
                    </div>
                  </div>

                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-lg-4 control-label">NIP</label>
                    <div class="col-md-6">
                      <select name="id_guru_mapel" class="form-control" id="id_guru_mapel">
                        <option>-- Pilih NIP --</option>
                        <?php foreach($gurus as $guru): ?>
                          <option value="<?= $guru->id_guru_mapel ?>"><?= $guru->id_guru_mapel ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Guru</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="nama_guru_mapel" id="nama_guru_mapel" readonly >
                    </div>
                  </div>
                </div>
              </div>

              <div class="tampil"></div>

              

            </form>
          </div>

          <div class="box-body">
            <!-- Content  -->
            <div class="row">
              <div class="col-md-12">
                <h1>Ini Adalah Data Nilai</h1>
                <div class="tampil"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


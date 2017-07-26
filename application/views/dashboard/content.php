<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-person"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Guru</span>
            <span class="info-box-number"><?= $gurus?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="ion ion-ios-paper"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Mapel</span>
            <span class="info-box-number"><?= $mapels?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah User</span>
            <span class="info-box-number"><?= $users?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Siswa</span>
            <span class="info-box-number"><?= $siswas?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-trophy"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Kelas</span>
              <span class="info-box-number"><?= $kelass?></span>
            </div>
          </div>
        </div>
      </div>

      

      
    </div>

    <div class="row">
    <div class="col-md-4 col-sm-7 col-xs-12">
        <div class="info-box">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-trophy"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa Kelas VII</span>
              <span class="info-box-number"><?= $vii?></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-7 col-xs-12">
        <div class="info-box">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-trophy"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa Kelas VIII</span>
              <span class="info-box-number"><?= $viii?></span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-7 col-xs-12">
        <div class="info-box">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-trophy"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa Kelas IX</span>
              <span class="info-box-number"><?= $ix?></span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
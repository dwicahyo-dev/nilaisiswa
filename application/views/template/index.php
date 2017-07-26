<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title?></title>

  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/sweetalert.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/pace/pace.min.css">




</head>

<body class="hold-transition skin-red fixed sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>t</b>nS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>.this</b>.nilaiSiswa</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <p>
                    Alexander Pierce
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Sidebar -->
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Dashboard -->
            <li class="<?php if ($this->uri->segment(1) == 'dashboard'): echo "active"; endif;?>"><a href="<?= base_url()?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <!-- Data User -->
            <li class="<?php if ($this->uri->segment(1) == 'user'): echo "active"; endif;?>"><a href="<?= base_url()?>user"><i class="fa fa-users"></i> <span>Data User</span></a></li>
            <!-- Data Guru -->
            <li class="<?php if ($this->uri->segment(1) == 'guru'): echo "active"; endif;?>" ><a href="<?= base_url()?>guru"><i class="fa fa-users"></i> <span>Data Guru</span></a></li>
            <!-- Data Siswa -->
            <li class="<?php if ($this->uri->segment(1) == 'siswa'): echo "active"; endif;?> treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Data Siswa</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if ($this->uri->segment(2) == 'semua_siswa'): echo "active"; endif;?>"><a href="<?= base_url() ?>siswa/semua_siswa"><i class="fa fa-circle-o"></i> Data Semua Siswa</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'siswa_kelas_vii'): echo "active"; endif;?>"><a href="<?= base_url() ?>siswa/siswa_kelas_vii"><i class="fa fa-circle-o"></i> Siswa Kelas VII</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'siswa_kelas_viii'): echo "active"; endif;?>"><a href="<?= base_url() ?>siswa/siswa_kelas_viii"><i class="fa fa-circle-o"></i> Siswa Kelas VIII</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'siswa_kelas_ix'): echo "active"; endif;?>"><a href="<?= base_url() ?>siswa/siswa_kelas_ix"><i class="fa fa-circle-o"></i> Siswa Kelas IX</a></li>
              </ul>
            </li>

            <!-- Data Mapel -->
            <li class="<?php if ($this->uri->segment(1) == 'mapel'): echo "active"; endif;?>"><a href="<?= base_url()?>mapel"><i class="fa fa-users"></i> <span>Data Mapel</span></a></li>
            <li class="header">NILAI</li>
            <!-- Data Nilai -->
            <li class="<?php if ($this->uri->segment(1) == 'nilai'): echo "active"; endif;?>"><a href="<?= base_url() ?>nilai"><i class="fa fa-users"></i> <span>Data Nilai</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Main Content -->
      <?= $content?>

      <!-- Footer -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017 <a href="#">.this Studio</a>.</strong> All rights
        reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/plugins/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>

    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/app.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>

    <script src="<?= base_url() ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?= base_url() ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?= base_url() ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="<?= base_url() ?>assets/plugins/pace/pace.min.js"></script>


    
    <?php if ($title == "Dashboard | .this.nilaiSiswa"): ?>
      <script src="<?= base_url() ?>assets/dist/js/pages/dashboard2.js"></script>
      <script src="<?= base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
      <script src="<?= base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
      <script src="<?= base_url() ?>assets/plugins/chartjs/Chart.min.js"></script>
      <script src="<?= base_url() ?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <?php endif ?>

    <script type="text/javascript">
      let save_method;
      let tableUser, tableGuru, tableMapel, tableSemuaSiswa, tableSiswaKelasVIIA, tableSiswaKelasVIIB, tableSiswaKelasVIIC, tableSiswaKelasVIIIA, tableSiswaKelasVIIIB, tableSiswaKelasVIIIC, tableSiswaKelasIXA, tableSiswaKelasIXB, tableSiswaKelasIXC;

      $(document).ready(function() {
        /**
         * Table User
         */
         $(function(){
          tableUser = $('#userTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('user/ajax_list')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        /**
         * Table Guru
         */
         $(function(){
          tableGuru = $('#guruTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('guru/ajax_list')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
          $("textarea").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

         /**
         * Table Mapel
         */
         $(function(){
          tableMapel = $('#mapelTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('mapel/ajax_list')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

         /**
         * Table Semua Siswa
         */
         $(function(){
          tableSemuaSiswa = $('#semuaSiswaTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

         /**
          * -------------------------------------------------------------------------------------------------------------------------
          **/

         /**
         * Table Siswa Kelas VII
         */

        //Kelas VII A
        $(function(){
          tableSiswaKelasVIIA = $('#siswaKelasVIIATable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_vii_A')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        //Kelas VII B
        $(function(){
          tableSiswaKelasVIIB = $('#siswaKelasVIIBTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_vii_B')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        // Kelas VII C
        $(function(){
          tableSiswaKelasVIIC = $('#siswaKelasVIICTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_vii_C')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        /**
        * -------------------------------------------------------------------------------------------------------------------------
        **/

         /**
         * Table Siswa Kelas VIII
         */

        //Kelas VIII A
        $(function(){
          tableSiswaKelasVIIIA = $('#siswaKelasVIIIATable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_viii_A')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        //Kelas VIII B
        $(function(){
          tableSiswaKelasVIIIB = $('#siswaKelasVIIIBTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_viii_B')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        // Kelas VIII C
        $(function(){
          tableSiswaKelasVIIIC = $('#siswaKelasVIIICTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_viii_C')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

         /**
         * Table Siswa Kelas IX
         */

        //Kelas IX A
        $(function(){
          tableSiswaKelasIXA = $('#siswaKelasIXATable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_ix_A')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        //Kelas IX B
        $(function(){
          tableSiswaKelasIXB = $('#siswaKelasIXBTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_ix_B')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });

        // Kelas IX C
        $(function(){
          tableSiswaKelasIXC = $('#siswaKelasIXCTable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "responsive": true,
            "autoWidth" : true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?= site_url('siswa/ajax_list_kelas_ix_C')?>",
              "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{ 
                "targets": [ -1 ], //last column
                "orderable": false //set not orderable
              },
              ],
            });

          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
          });
        });


      });

/**
 * -------------------------------------------------------------------------------------------------------------------------
 */

      /**
       * Reload Table 
       */
       function reload_table_User(){
        tableUser.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Guru(){
        tableGuru.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Mapel(){
        tableMapel.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Semua_Siswa(){
        tableSemuaSiswa.ajax.reload(null,false); //reload datatable ajax 
      }


      /**
       * [reload_table_Siswa_Kelas_VII
       * @return {[type]} [description]
       */
       function reload_table_Siswa_Kelas_VIIA(){
        tableSiswaKelasVIIA.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Siswa_Kelas_VIIB(){
        tableSiswaKelasVIIB.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Siswa_Kelas_VIIC(){
        tableSiswaKelasVIIC.ajax.reload(null,false); //reload datatable ajax 
      }

       /**
       * [reload_table_Siswa_Kelas_VIII
       * @return {[type]} [description]
       */
       function reload_table_Siswa_Kelas_VIIIA(){
        tableSiswaKelasVIIIA.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Siswa_Kelas_VIIIB(){
        tableSiswaKelasVIIIB.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Siswa_Kelas_VIIIC(){
        tableSiswaKelasVIIIC.ajax.reload(null,false); //reload datatable ajax 
      }

      /**
       * [reload_table_Siswa_Kelas_IX
       * @return {[type]} [description]
       */
       function reload_table_Siswa_Kelas_IXA(){
        tableSiswaKelasIXA.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Siswa_Kelas_IXB(){
        tableSiswaKelasIXB.ajax.reload(null,false); //reload datatable ajax 
      }

      function reload_table_Siswa_Kelas_IXC(){
        tableSiswaKelasIXC.ajax.reload(null,false); //reload datatable ajax 
      }

      /**
       * Data User
       * @return {[type]} [description]
       */       
       function add_user(){
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_AddUser').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambahkan Data User'); // Set Title to Bootstrap modal title
      }

      function saveUser(){
      $('#btnSave').text('Menyimpan...'); //change button text
      $('#btnSave').attr('disabled',true); //set button disable 

      var url;

      if(save_method == 'add') {
        url = "<?php echo site_url('user/ajax_add')?>";
      } else {
        url = "<?php echo site_url('user/ajax_update')?>";
      }

      // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status) { //if success close modal and reload ajax table
              $('#modal_AddUser').modal('hide');
              reload_table_User();
            }
            else {
              for (var i = 0; i < data.inputerror.length; i++){
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                  }
                }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          },
          error: function (jqXHR, textStatus, errorThrown){
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          }
        });
    }

    function delete_user(id){
      if(confirm('Yakin ingin menghapus data ini ??')){
          // ajax delete data to database
          $.ajax({
            url : "<?= site_url('user/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
            //if success -> reload ajax table
            $('#modal_form').modal('hide');
            reload_table_User();
          }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error deleting data');
          }
        });
        }
      }
      

    /**
     * Data Guru
     * @return {[type]} [description]
     */       
     function add_guru(){
      save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_AddGuru').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambahkan Data Guru'); // Set Title to Bootstrap modal title
        $('#id_guru_mapel').removeAttr('readonly');
        $('#nama_guru_mapel').removeAttr('autofocus');
        $('id_guru_mapel').attr('autofocus',true);

      }

      function saveGuru(){
      $('#btnSave').text('Menyimpan...'); //change button text
      $('#btnSave').attr('disabled',true); //set button disable

      var url;

      if(save_method == 'add') {
        url = "<?php echo site_url('guru/ajax_add')?>";
      } else {
        url = "<?php echo site_url('guru/ajax_update')?>";
      }

      // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status) { //if success close modal and reload ajax table
              $('#modal_AddGuru').modal('hide');
              reload_table_Guru();
            }
            else {
              for (var i = 0; i < data.inputerror.length; i++){
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                  }
                }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          },
          error: function (jqXHR, textStatus, errorThrown){
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          }
        });
    }

    function edit_guru(id_guru_mapel){
      save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('guru/ajax_edit')?>/" + id_guru_mapel,
          type: "GET",
          dataType: "JSON",
          success: function(data){
            $('[name="id_guru_mapel"]').val(data.id_guru_mapel);
            $('[name="nama_guru_mapel"]').val(data.nama_guru_mapel);
            $('[name="alamat"]').val(data.alamat);
            $('[name="id_jenis_kelamin"]').val(data.id_jenis_kelamin);
            $('[name="kode_mapel"]').val(data.kode_mapel);

            $('#modal_AddGuru').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data Guru'); // Set title to Bootstrap modal title
            $('#id_guru_mapel').attr('readonly', true);
            $('#id_guru_mapel').removeAttr('autofocus')
            $('#nama_guru_mapel').attr('autofocus',true);
          },error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
          }
        });
      }

      function delete_guru(id_guru_mapel){
        if(confirm('Yakin ingin menghapus data ini ??')){
        // ajax delete data to database
        $.ajax({
          url : "<?= site_url('guru/ajax_delete')?>/"+id_guru_mapel,
          type: "POST",
          dataType: "JSON",
          success: function(data){
            //if success reload ajax table
            $('#modal_form').modal('hide');
            reload_table_Guru();
          }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error deleting data');
          }
        });
      }
    }

    /**
       * Data Mapel
       * @return {[type]} [description]
       */       
       function add_Mapel(){
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_AddMapel').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambahkan Data Mapel'); // Set Title to Bootstrap modal title
      }

      function save(){
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;

        if(save_method == 'add') {
          url = "<?php echo site_url('mapel/ajax_add')?>";
        } else {
          url = "<?php echo site_url('mapel/ajax_update')?>";
        }

        // ajax adding data to database
        $.ajax({
          url : url,
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data){
            if(data.status){ //if success close modal and reload ajax table
              $('#modal_AddMapel').modal('hide');
              reload_table_Mapel();
            }
            else{
              for (var i = 0; i < data.inputerror.length; i++) 
              {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                  }
                }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          },
          error: function (jqXHR, textStatus, errorThrown){
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

          }
        });
      }

      function edit_mapel(kode_mapel){
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('mapel/ajax_edit')?>/" + kode_mapel,
          type: "GET",
          dataType: "JSON",
          success: function(data){
            $('[name="kode_mapel"]').val(data.kode_mapel);
            $('[name="nama_mapel"]').val(data.nama_mapel);
            $('#modal_AddMapel').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
          },error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
          }
        });
      }

      function delete_mapel(kode_mapel){
        if(confirm('Yakin ingin menghapus data ini ??')){
        // ajax delete data to database
        $.ajax({
          url : "<?= site_url('mapel/ajax_delete')?>/"+kode_mapel,
          type: "POST",
          dataType: "JSON",
          success: function(data){
            //if success reload ajax table
            $('#modal_DeleteMapel').modal('hide');
            reload_table_Mapel();
          }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error deleting data');
          }
        });
      }
    }

    /**
       * Data Semua Siswa
       * @return {[type]} [description]
       */       
       function add_siswa(){
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_AddSiswa').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambahkan Data Siswa'); // Set Title to Bootstrap modal title
      }

      function save(){
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;

        if(save_method == 'add') {
          url = "<?php echo site_url('siswa/ajax_add')?>";
        } else {
          url = "<?php echo site_url('siswa/ajax_update')?>";
        }

        // ajax adding data to database
        $.ajax({
          url : url,
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data){
            if(data.status){ //if success close modal and reload ajax table
              $('#modal_AddSiswa').modal('hide');
              reload_table_Semua_Siswa();
              reload_table_Siswa_Kelas_VIIA();
              reload_table_Siswa_Kelas_VIIB();
              reload_table_Siswa_Kelas_VIIC();
              reload_table_Siswa_Kelas_VIIIA();
              reload_table_Siswa_Kelas_VIIIB();
              reload_table_Siswa_Kelas_VIIIC();
              reload_table_Siswa_Kelas_IXA();
              reload_table_Siswa_Kelas_IXB();
              reload_table_Siswa_Kelas_IXC();
            }
            else{
              for (var i = 0; i < data.inputerror.length; i++) 
              {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                  }
                }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
          },
          error: function (jqXHR, textStatus, errorThrown){
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable
          }
        });
      }

      function edit_siswa(nis){
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('siswa/ajax_edit')?>/" + nis,
          type: "GET",
          dataType: "JSON",
          success: function(data){
            $('[name="nis"]').val(data.nis);
            $('[name="nama_siswa"]').val(data.nama_siswa);
            $('[name="tempat_lahir"]').val(data.tempat_lahir);
            $('[name="tanggal_lahir"]').val(data.tanggal_lahir);
            $('[name="alamat"]').val(data.alamat);
            $('[name="id_jenis_kelamin"]').val(data.id_jenis_kelamin);
            $('[name="id_kelas"]').val(data.id_kelas);
            $('#modal_AddSiswa').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data Siswa'); // Set title to Bootstrap modal title
          },error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
          }
        });
      }

      function delete_siswa(nis){
        if(confirm('Yakin ingin menghapus data ini ??')){
        // ajax delete data to database
        $.ajax({
          url : "<?= site_url('siswa/ajax_delete')?>/"+nis,
          type: "POST",
          dataType: "JSON",
          success: function(data){
            //if success -> reload ajax table
            $('#modal_form').modal('hide');
            reload_table_Semua_Siswa();
            reload_table_Siswa_Kelas_VIIA();
            reload_table_Siswa_Kelas_VIIB();
            reload_table_Siswa_Kelas_VIIC();
            reload_table_Siswa_Kelas_VIIIA();
            reload_table_Siswa_Kelas_VIIIB();
            reload_table_Siswa_Kelas_VIIIC();
            reload_table_Siswa_Kelas_IXA();
            reload_table_Siswa_Kelas_IXB();
            reload_table_Siswa_Kelas_IXC();
          }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error deleting data');
          }
        });
      }
    }

    $(function() {
      $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
      $("[data-mask]").inputmask();

      function loadData(args){
        $("#tampil").load("<?= site_url('nilai/tampil') ?>");
      }
      loadData();

      $("#id_guru_mapel").click(function(){
        var id_guru_mapel = $("#id_guru_mapel").val();

        $.ajax({
          url:"<?php echo site_url('nilai/cariGuru');?>",
          type:"POST",
          data:"id_guru_mapel="+id_guru_mapel,
          cache:false,
          success:function(html){
            $("#nama_guru_mapel").val(html);
          }
        })
      });

      $("#id_guru_mapel").click(function(){
        var id_guru_mapel = $("#id_guru_mapel").val();

        $.ajax({
          url:"<?php echo site_url('nilai/cariMapel');?>",
          type:"POST",
          data:"id_guru_mapel="+id_guru_mapel,
          cache:false,
          success:function(html){
            $("#nama_mapel").val(html);
          }
        })
      });

      $(document).ajaxStart(function() { Pace.restart(); });





    })
  </script>

</body>
</html>

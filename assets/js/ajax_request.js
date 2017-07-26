

var save_method;
var tableUser, tableGuru, tableMapel;

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


       });
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

      function delete_user(id){
        if(confirm('Are you sure delete this data?')){
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
      }

      function edit_guru(nama_mapel){
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('guru/ajax_edit/')?>/" + nama_mapel,
          type: "GET",
          dataType: "JSON",
          success: function(data){
            $('[name="kode_mapel"]').val(data.kode_mapel);
            $('[name="nama_mapel"]').val(data.nama_mapel);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
          },error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
          }
        });
      }

      function delete_guru(id_guru_mapel){
        if(confirm('Are you sure delete this data?')){
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
       function add_mapel(){
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_AddMapel').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambahkan Data Mapel'); // Set Title to Bootstrap modal title
      }

      function edit_mapel(kode_mapel){
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('mapel/ajax_edit/')?>/" + nama_mapel,
          type: "GET",
          dataType: "JSON",
          success: function(data){
            $('[name="kode_mapel"]').val(data.kode_mapel);
            $('[name="nama_mapel"]').val(data.nama_mapel);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
          },error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
          }
        });
      }

      function delete_mapel(kode_mapel){
        if(confirm('Are you sure delete this data?')){
        // ajax delete data to database
        $.ajax({
          url : "<?= site_url('mapel/ajax_delete')?>/"+kode_mapel,
          type: "POST",
          dataType: "JSON",
          success: function(data){
            //if success reload ajax table
            $('#modal_form').modal('hide');
            reload_table_Mapel();
          }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error deleting data');
          }
        });
      }
    }
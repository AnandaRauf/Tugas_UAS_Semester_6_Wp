<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;&nbsp; <?= trans('advance_search_example') ?></h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/example/create_users_pdf') ?>" class="btn btn-success"><?= trans('export_as_pdf') ?></a>
          <a href="<?= base_url('admin/example/export_csv') ?>" class="btn btn-success"><?= trans('export_as_csv') ?></a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body table-responsive"> 
        <?php echo form_open("/",'id="user_search"') ?>
        <div class="row">
          <div class="col-md-4">
            <label>User Type</label><hr style="margin:5px 0px;" />
            <input checked="checked" onchange="user_filter()" name="user_search_type" value="" type="radio"  /> ALL&nbsp;&nbsp;&nbsp;
            <input onchange="user_filter()" name="user_search_type" value="1" type="radio"  /> ACTIVE&nbsp;&nbsp;&nbsp;
            <input onchange="user_filter()" name="user_search_type" value="0" type="radio"  /> INACTIVE
          </div>
          <div class="col-md-3">
            <label>Date From:</label><input name="user_search_from" type="text" class="form-control form-control-inline input-medium datepicker" id="" />
          </div>
          <div class="col-md-3"> 
            <label>Date To:</label><input name="user_search_to" type="text" class="form-control form-control-inline input-medium datepicker" id="" /> 
          </div>
          <div class="col-md-2"> 
            <button type="button" style="margin-top:20px;" onclick="user_filter()" class="btn btn-info">Submit</button>
            <a href="<?= base_url('admin/example/advance_search'); ?>" class="btn btn-danger" style="margin-top:20px;">
              <i class="fa fa-repeat"></i>
            </a>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>  

    <div class="card">
      <div class="card-body table-responsive">
        <table id="na_datatable" class="table table-bordered table-striped" width="100%">
          <thead>
            <tr>
              <th>#<?= trans('id') ?></th>
              <th><?= trans('username') ?></th>
              <th><?= trans('email') ?></th>
              <th><?= trans('mobile_no') ?></th>
              <th><?= trans('created_date') ?></th>
              <th><?= trans('status') ?></th>
            </tr>
          </thead>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </section>  
</div>

<!-- bootstrap datepicker -->
<!-- datepicker -->
<script src="<?= base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $('.datepicker').datepicker({
    autoclose: true
  });
</script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable( {
    "processing": true,
    "serverSide": false,
    "ajax": "<?=base_url('admin/example/advance_datatable_json')?>",
    "order": [[4,'desc']],
    "columnDefs": [
    { "targets": 0, "name": "id", 'searchable':true, 'orderable':true},
    { "targets": 1, "name": "username", 'searchable':true, 'orderable':true},
    { "targets": 2, "name": "email", 'searchable':true, 'orderable':true},
    { "targets": 3, "name": "mobile_no", 'searchable':true, 'orderable':true},
    { "targets": 4, "name": "created_at", 'searchable':false, 'orderable':false},
    { "targets": 5, "name": "is_active", 'searchable':true, 'orderable':true},
    ]
  });

  //---------------------------------------------------
  function user_filter()
  {
    var _form = $("#user_search").serialize();
    $.ajax({
      data: _form,
      type: 'post',
      url: '<?php echo base_url();?>admin/example/search',
      async: true,
      success: function(output){
        table.ajax.reload( null, false );
      }
    });
  }
</script>




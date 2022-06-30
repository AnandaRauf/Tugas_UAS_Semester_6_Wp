<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block"><h3 class="card-title"><i class="fa fa-list"></i> <?= trans('datatable_example') ?></h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/example/create_users_pdf') ?>" class="btn btn-success"><?= trans('export_as_pdf') ?></a>
          <a href="<?= base_url('admin/example/export_csv') ?>" class="btn btn-success"><?= trans('export_as_csv') ?></a>
        </div>
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
    <!-- /.box -->
  </section>  
</div>


 <!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
//---------------------------------------------------
var table = $('#na_datatable').DataTable( {
  "processing": true,
  "serverSide": false,
  "ajax": "<?=base_url('admin/example/datatable_json')?>",
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
</script>




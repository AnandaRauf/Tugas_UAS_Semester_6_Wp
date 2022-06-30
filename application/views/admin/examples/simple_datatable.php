<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; &nbsp; <?= trans('simple_table_example') ?></h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/example/create_users_pdf') ?>" class="btn btn-success"><?= trans('export_as_pdf') ?></a>
          <a href="<?= base_url('admin/example/export_csv') ?>" class="btn btn-success"><?= trans('export_as_csv') ?></a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
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
        <tbody>
          <?php $i=0; foreach($all_users as $row): ?>
          <tr>
            <td><?= ++$i; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['mobile_no']; ?></td>
            <td><?= date_time($row['created_at']) ?></td>
			      <td><input type="checkbox" class="tgl-ios" <?= ($row['is_active'] == 1)? "checked" : ""; ?>><label for=""></label></td>
		      </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>

  </section>  
</div>

<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 
<script>
  $("#view_users").addClass('active');
</script>        

<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-list"></i>
              &nbsp; <?= trans('invoice_list') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/invoices/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i><?= trans('add_new_invoice') ?> </a>
          </div>
        </div>
        <div class="card-body table-responsive">
          <table id="example1" class="table table-bordered table-striped ">
          <thead>
          <tr>
            <th><?= trans('invoice') ?> #</th>
            <th><?= trans('client') ?> </th>
            <th><?= trans('amount') ?> </th>
  		      <th><?= trans('due_date') ?> </th>
            <th><?= trans('status') ?> </th>
            <th width="150" class="text-right"><?= trans('action') ?> </th>
            
          </tr>
          </thead>
          <tbody>
            <?php foreach($invoice_detail as $data): ?>
            <tr>
              <td><?= $data['invoice_no']; ?></td>
              <td><?= $data['client_name']; ?></td>
              <td><?= $data['grand_total'] .' '. $data['currency']; ?></td>
              <td><?= date_time($data['due_date']); ?></td>
              <td><span class="btn btn-success btn-flat btn-xs"><?= $data['payment_status']; ?></span></td>
              <td><div class="btn-group pull-right">
                <a href="<?= base_url('admin/invoices/view/'.$data['id']); ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                <a href="<?= base_url('admin/invoices/invoice_pdf_download/'.$data['id']); ?>" class="btn btn-primary"><i class="fa fa-download"></i></a>
                <a href="<?= base_url('admin/invoices/edit/'.$data['id']); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="<?= base_url('admin/invoices/del/'.$data['id']); ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
              </div></td>
  		      </tr>
            <?php endforeach; ?>
          </tbody>
          </table>
        </div>
      </div>
    <!-- /.box -->
  </section>  
</div>

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 
<script>
  $("#invoices").addClass('active');
</script>        
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Simple Datatable Join Example</h3>
        </div>
      </div>

      <div class="card">
      <div class="card-body table-responsive">
        <table id="example1" class="table table-bordered table-striped ">
          <thead>
            <tr>
              <th>User Name</th>
              <th>Email</th>
              <th>Mobile No.</th>
              <th>TXN Id</th>
              <th>Amount</th>
              <th>Currency</th> 
            </tr>
          </thead>
          <tbody>
            <?php foreach($payment_detail as $row): ?>
              <tr>
                <td><?= $row['client_name']; ?></td>
                <td><?= $row['client_email']; ?></td>
                <td><?= $row['client_mobile_no']; ?></td>
                <td><?= $row['invoice_no']; ?></td>
                <td><?= $row['grand_total']. $row['currency']; ?></td>
                <td><?= $row['created_date']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
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

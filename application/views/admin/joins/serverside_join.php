<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content">
		<div class="card">
			<div class="card-header">
				<div class="d-inline-block">
					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp;Datatable - ServerSide Processing with Join Example</h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Here we are fetching the record from two tables (user and payment) usign server-side datatable joins.</p>
					</div>
					<div class="col-md-6">
						<strong>USER TABLE:</strong>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Email</th>
									<th>Mobile No</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>nauman</td>
									<td>naumanahmedcs@gmail.com</td>
									<td>03469548054</td>
								</tr>
								<tr>
									<td>2</td>
									<td>rizwan</td>
									<td>rizwan@gmail.com</td>
									<td>12345</td>
								</tr>

							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<strong>PAYMENT TABLE:</strong>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>User ID</th>
									<th>Invoice#</th>
									<th>Amount</th>
									<th>Created Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1</td>
									<td>INV-2002</td>
									<td>300</td>
									<td>2017-12-06</td>
								</tr>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>INV-1001</td>
									<td>400</td>
									<td>2017-12-12</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Server Side Datatable With Join</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive">
				<table id="na_datatable" class="table table-bordered table-striped" width="100%">
					<thead>
						<tr>
							<th>User Name</th>
							<th>Email</th>
							<th>Mobile No.</th>
							<th>Invoice#</th>
							<th>Amount</th>
							<th>Created Date</th>
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
  	"ajax": "<?=base_url('admin/joins/datatable_json')?>",
  	"order": [[0,'desc']],
  	"columnDefs": [
  	{ "targets": 0, "name": "username", 'searchable':true, 'orderable':true},
  	{ "targets": 1, "name": "email", 'searchable':true, 'orderable':true},
  	{ "targets": 2, "name": "mobile_no", 'searchable':true, 'orderable':true},
  	{ "targets": 3, "name": "invoice_no", 'searchable':true, 'orderable':true},
  	{ "targets": 4, "name": "grand_total", 'searchable':true, 'orderable':true},
  	{ "targets": 5, "name": "created_date", 'searchable':false, 'orderable':false,'width':'100px'}
  	]
  });
</script>




 <!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<section class="content">
 		<!-- For Messages -->
    <?php $this->load->view('admin/includes/_messages.php') ?>
 		<div class="card">
 			<div class="card-header">
 				<div class="d-inline-block">
 					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp; <?= trans('multiple_file_upload_example') ?></h3>
 				</div>
 			</div>
 		</div> 

 		<div class="card">
 			<div class="card-body table-responsive">
 				<!-- Multiple Uploads -->
 				<p class="lead"><?= trans('multiple_files_uploader') ?> </p>
 				<!-- Upload  -->
				<?php echo form_open_multipart(base_url('admin/example/multi_file_upload'), 'class="dropzone" id="myDropzone"');?>
                  <input type="file" name="files[]" class="hidden" multiple/>
                  <div class="dz-message">Drop Files Here To Upload</div>
				<?php echo form_close(); ?>
				<p><small class="text-success"><?= trans('allowed_types') ?>: gif, jpg, png, jpeg | <?= trans('max_allowed_size') ?> : 2 MB | <?= trans('max_files') ?> : 10</small></p>
			</div>	</small></p>
 		</div>

 		<div class="card">
 			<div class="card-body table-responsive">
 				<p class="lead">Uploaded Files </p>
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Image</th>
							<th>Path/Info</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $counter = 1; foreach($files as $file): ?>
						<tr>
							<td><?= $counter ?></td>
							<td>
								<img src="<?= base_url($file['name']) ?>" width="70">
							</td>
							<td><?= $file['name'] ?></td>
							<td>
								<a href="<?= base_url('admin/example/delete_file/'.$file['id']) ?>" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<?php $counter++; endforeach;  ?>
					</tbody>
				</table>
			</div>	
 		</div>

 	</section>
 </div>

 <!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
	$("#example1").DataTable();
</script>
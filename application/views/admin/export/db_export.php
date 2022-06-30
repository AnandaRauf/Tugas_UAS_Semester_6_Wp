<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content">
		<div class="card">
		    <div class="card-body">
		      	<h3><?= trans('database_backup') ?></h3><br>   
		      	<a href="<?= base_url('admin/export/dbexport'); ?>" class="btn btn-success"><i class="fa fa-download"></i> &nbsp; <?= trans('download_and_create_backup') ?></a>
		    </div>
		</div>
	</section>
</div>

<script>
    $("#export").addClass('active');
</script>

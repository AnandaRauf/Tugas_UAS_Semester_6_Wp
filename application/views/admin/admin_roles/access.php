<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card card-default color-palette-bo">
            <div class="card-header">
              <div class="d-inline-block">
                  <h3 class="card-title"> <i class="fa fa-edit"></i>
                  &nbsp; <?= $title ?> </h3>
              </div>
              <div class="d-inline-block float-right">
                <a href="#" onclick="window.history.go(-1); return false;" class="btn btn-primary pull-right"><i class="fa fa-reply mr5"></i> <?= trans('back') ?></a>
              </div>
            </div>
            <div class="card-body">
            	<div class="col-md-12">
                    <h3 class="box-title">
                        <span class="mr5"><?= trans('permission_access') ?> : </span> 
						<?=strtoupper($record['admin_role_title'])?>
                    </h3>
                </div>
            </div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<?php foreach($modules as $kk => $module): ?>
						<div class="col-md-12">
							<div class="row">
	                        	<div class="col-md-3">
	                        		<h5 class="m-0">
	                                	<strong class="f-16"><?= trans($module['module_name'])?></strong>
	                                </h5>
								</div>
	                            <div class="col-md-9">
	                            	<div class="row mb-3">
									<?php foreach(explode("|",$module['operation']) as $k => $operation):?>
	                                    <div class="col-md-3 pb-3">	
	                                        <span class="pull-left">
	                                            <input type='checkbox'
	                                            class='tgl tgl-ios tgl_checkbox'
	                                            data-module='<?= $module['controller_name'] ?>'
	                                            data-operation='<?= $operation; ?>'
	                                            id='cb_<?=$kk.$k?>' 
	                                            <?php if (in_array($module['controller_name'].'/'.$operation, $access)) echo 'checked="checked"';?>
	                                            />
	                                            <label class='tgl-btn' for='cb_<?=$kk.$k?>'></label> 
	                                        </span>
	                                        <span class="mt-15 pl-3">
												<?=ucwords($operation)?>
	                                        </span>
	                                    </div>
	                                <?php endforeach; ?>
	                            	</div>
	                            </div>
	                        </div>
	                        <hr style="margin:7px 0px;" />
						</div>  
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<script>
$("body").on("change",".tgl_checkbox",function(){
	$.post('<?=base_url("admin/admin_roles/set_access")?>',
	{
		'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		module : $(this).data('module'),
		operation : $(this).data('operation'),
		admin_role_id : <?=$record['admin_role_id']?>,
		status : $(this).is(':checked')==true?1:0
	},
	function(data){
		$.notify("Status Changed Successfully", "success");
	});
});
</script>



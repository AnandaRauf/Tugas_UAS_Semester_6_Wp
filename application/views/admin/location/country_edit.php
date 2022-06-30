<div class="content-wrapper">
  <section class="content">
    <!-- For Messages -->
    <?php $this->load->view('admin/includes/_messages.php') ?>
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-pencil"></i>&nbsp; Edit Country</h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/location'); ?>" class="btn btn-success"><i class="fa fa-list"></i>  Country List</a>
          <?php if($this->rbac->check_operation_permission('add')): ?>
            <a href="<?= base_url('admin/location/country/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Country</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="card-body">
        <?php validation_errors(); ?>
        <?php echo form_open(base_url('admin/location/country/edit/'.$country['id']), 'class="form-horizontal"' )?> 
            <div class="form-group">
              <label for="country_name" class="col-sm-2 control-label">Country Name</label>

              <div class="col-sm-12">
                <input type="text" name="country" value="<?= $country['name']; ?>" class="form-control" id="country" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="status" class="col-sm-2 control-label">Status</label>

              <div class="col-sm-12">
                <select name="status" class="form-control">
                  <option value="">Select Status</option>
                  <option value="1" <?= ($country['status'] == 1)?'selected': '' ?> >Active</option>
                  <option value="0" <?= ($country['status'] == 0)?'selected': '' ?>>Inactive</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="submit" name="submit" value="Update country" class="btn btn-primary pull-right">
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
        <!-- /.box-body -->
    </div>
  </section> 
</div>


<script>
  $("#location").addClass('active');
</script>
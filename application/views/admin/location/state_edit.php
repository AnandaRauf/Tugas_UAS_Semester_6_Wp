<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-pencil"></i>&nbsp; Edit State</h3>
        </div>
        <div class="d-inline-block float-right">
          <?php if($this->rbac->check_operation_permission('state_add')): ?>
            <a href="<?= base_url('admin/location/state/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New State</a>
          <?php endif; ?>
        </div>
      </div>
       <!-- form start -->
        <div class="card-body">
            <?php echo validation_errors(); ?>           
            <?php echo form_open(base_url('admin/location/state/edit/'.$state['id']), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Country</label>
                <div class="col-sm-12">
                  <select class="form-control" required name="country">
                   <option>Select Country</option>
                    <?php foreach($countries as $country):?>
                      <?php if($state['country_id'] == $country['id']): ?>
                      <option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
                    <?php else: ?>
                      <option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
                  <?php endif; endforeach; ?>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">State Name</label>
                <div class="col-sm-12">
                  <input type="text" name="state" class="form-control" value="<?= $state['name']; ?>" id="name" placeholder="State name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Update State" class="btn btn-primary pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
        </div>
        <!-- /.card-body -->
    </div>
  </section> 
</div>

<script>
  $("#lcoation").addClass('active');
</script>
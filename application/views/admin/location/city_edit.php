<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-pencil"></i>&nbsp; Edit City</h3>
        </div>
        <div class="d-inline-block float-right">
          <?php if($this->rbac->check_operation_permission('city_add')): ?>
            <a href="<?= base_url('admin/location/city/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New City</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="card-body">
          <?php echo validation_errors(); ?>           
          <?php echo form_open(base_url('admin/location/city/edit/'.$city['id']), 'class="form-horizontal"');  ?> 
            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">State</label>
              <div class="col-sm-12">
                <select class="form-control" required name="state">
                 <option>Select State</option>
                  <?php foreach($states as $state):?>
                    <?php if($city['state_id'] == $state['id']): ?>
                    <option value="<?= $state['id']; ?>" selected> <?= $state['name']; ?> </option>
                  <?php else: ?>
                    <option value="<?= $state['id']; ?>"> <?= $state['name']; ?> </option>
                <?php endif; endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">City Name</label>
              <div class="col-sm-12">
                <input type="text" name="city" class="form-control" value="<?= $city['name']; ?>" id="name" placeholder="City name" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="submit" name="submit" value="Update City" class="btn btn-primary pull-right">
              </div>
            </div>
          <?php echo form_close( ); ?>
      </div>
    </div>
  </section> 
</div>


<script>
  $("#location").addClass('active');
</script>
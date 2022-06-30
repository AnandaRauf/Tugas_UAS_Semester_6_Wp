<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body with-border">
        <div class="col-md-6">
          <h4><i class="fa fa-plus"></i> &nbsp; Add New City</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/location/city'); ?>" class="btn btn-success"><i class="fa fa-list"></i> City List</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box border-top-solid">
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
            <?php echo validation_errors(); ?>           
            <?php echo form_open(base_url('admin/location/city/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">State</label>
                <div class="col-sm-7">
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
                <div class="col-sm-7">
                  <input type="text" name="city" class="form-control" id="name" placeholder="city name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <input type="submit" name="submit" value="Add City" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


<script>
  $("#country").addClass('active');
  </script>
<div class="content-wrapper">
  <section class="content">
    <!-- For Messages -->
    <?php $this->load->view('admin/includes/_messages.php') ?>
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-plus"></i>&nbsp; Add New State</h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/location/state'); ?>" class="btn btn-success"><i class="fa fa-list"></i> States List</a>
        </div>
      </div>
      <div class="card-body">
        <?php echo validation_errors(); ?>           
        <?php echo form_open(base_url('admin/location/state/add'), 'class="form-horizontal"');  ?> 
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-12">
              <select class="form-control" required name="country">
               <option>Select Country</option>
                <?php foreach($countries as $country):?>
                  <?php if($job_detail['country'] == $country['id']): ?>
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
              <input type="text" name="state" class="form-control" id="name" placeholder="State name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <input type="submit" name="submit" value="Add State" class="btn btn-primary pull-right">
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
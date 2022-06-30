<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-plus"></i>&nbsp;  Add New Language</h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/languages'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Languages List</a>
        </div>
      </div>
      <div class="card-body">
        <?php echo form_open(base_url('admin/languages/add'), 'class="form-horizontal"');  ?>
          <div class="form-group">
            <label for="group_name" class="col-sm-3 control-label">Name</label>

            <div class="col-sm-12">
              <input type="text" name="name" class="form-control" id="group_name" placeholder="e.g. English">
            </div>
          </div>

          <div class="form-group">
            <label for="group_name" class="col-sm-3 control-label">Short Name</label>

            <div class="col-sm-12">
              <input type="text" name="short_name" class="form-control" id="group_name" placeholder="e.g. EN">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <input type="submit" name="submit" value="Add Language" class="btn btn-primary pull-right">
            </div>
          </div>
        <?php echo form_close( ); ?>
      </div>
      <!-- /.box-body -->
    </div>
  </section> 
</div>

<script>
  $("#language").addClass('active');
</script>
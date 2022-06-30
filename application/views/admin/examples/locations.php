  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-map"></i>
              <?= trans('locations') ?> </h3>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <!-- form start -->
                <div class="box-body">

                  <!-- For Messages -->
                  <?php $this->load->view('admin/includes/_messages.php') ?>
                  <div class="form-group">
                    <label for="username" class="col-md-12 control-label"><?= trans('country') ?></label>

                    <div class="col-md-12">
                      <?php  
                        $options = array('' => 'Select Option')+array_column($countries, 'name','id');
                        echo form_dropdown('country',$options,'','class="form-control country select2" ');
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstname" class="col-md-12 control-label"><?= trans('state') ?></label>
                    <div class="col-md-12">
                      <select class="form-control state">
                        <option value="">Select Option</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="lastname" class="col-md-12 control-label"><?= trans('city') ?></label>

                    <div class="col-md-12">
                      <select class="form-control city">
                        <option value="">Select Option</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section> 
  </div>
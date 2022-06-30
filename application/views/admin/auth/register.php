<div class="form-background"> 
  <div class="register-box">
    <div class="register-logo">
      <h2><a href="<?= base_url('admin'); ?>"><?= $this->general_settings['application_name']; ?></a></h2>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg"><?= trans('register_new_membership') ?></p>

        <?php $this->load->view('admin/includes/_messages.php') ?>

        <?php echo form_open(base_url('admin/auth/register'), 'class="login-form" '); ?>
          <div class="form-group has-feedback">
             <input type="text" name="username" id="name" value="<?= old("username"); ?>" class="form-control" placeholder="<?= trans('username') ?>" >
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="firstname" id="firstname" value="<?= old("firstname"); ?>" class="form-control" placeholder="<?= trans('firstname') ?>" >
          </div>
          <div class="form-group has-feedback">
           <input type="text" name="lastname" id="lastname" value="<?= old("lastname"); ?>" class="form-control" placeholder="<?= trans('lastname') ?>" >
          </div>
          <div class="form-group has-feedback">
             <input type="text" name="email" id="email" value="<?= old("email"); ?>" class="form-control" placeholder="<?= trans('email') ?>" >
          </div>
          <div class="form-group has-feedback">
             <input type="password" name="password" id="password" class="form-control" placeholder="<?= trans('password') ?>" >
          </div>
          <div class="form-group has-feedback">
              <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="<?= trans('confirm') ?>" >
          </div>
          <div class="row">
            <div class="col-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> <?= trans('i_agree_to_the') ?> <a href="#"><?= trans('terms') ?></a>
                </label>
              </div>
            </div>
            <?php if($this->recaptcha_status): ?>
              <div class="recaptcha-cnt">
                  <?php generate_recaptcha(); ?>
              </div>
            <?php endif; ?>
            <!-- /.col -->
            <div class="col-4">
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat" value="<?= trans('register') ?>">
            </div>
            <!-- /.col -->
          </div>
        <?php echo form_close(); ?>

        <a href="<?= base_url('admin/auth/login'); ?>" class="text-center"><?= trans('i_already_have_membership') ?></a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>

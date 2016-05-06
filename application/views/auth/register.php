
<!-- BACKGROUND IMAGE -->
<!--===================================================-->
<div id="bg-overlay" class="bg-img img-balloon"></div>


<!-- HEADER -->
<!--===================================================-->
<div class="cls-header cls-header-lg">
  <div class="cls-brand">
    <a class="box-inline" href="index.html">
      <!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
      <span class="brand-title"><?php echo lang('login_heading');?></span>
    </a>
  </div>
</div>
<!--===================================================-->

<!-- REGISTRATION FORM -->
<!--===================================================-->
<div class="cls-content">
  <div class="cls-content-lg panel">
    <div class="panel-body">
      <p class="pad-btm"><?php echo $reg_create_account; ?></p>
      <?php echo form_open("auth/register");?>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-male"></i></div>
                <input type="email" class="form-control" placeholder="email" name="email">
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-xs-8 text-left checkbox">
            <label class="form-checkbox form-icon">
              <input type="checkbox"> <?php echo $reg_agreement; ?> <a href="#" class="btn-link"><?php echo $reg_agreement_link; ?></a>
            </label>
          </div>
          <div class="col-xs-4">
            <div class="form-group text-right">
              <button class="btn btn-success text-uppercase" type="submit"><?php echo $reg_button; ?></button>
            </div>
          </div>
        </div>
        <div class="mar-btm"><em>- или -</em></div>
        <button class="btn btn-primary btn-lg btn-block" type="button">
          <i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
        </button>
      </form>
      <div class="pad-ver">
        <?php echo $reg_allready; ?> <a href="<?php echo site_url('auth/login'); ?>" class="btn-link mar-rgt"><?php echo $reg_login; ?></a>
      </div>
    </div>
  </div>

</div>
<!--===================================================-->
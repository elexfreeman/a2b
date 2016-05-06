<div class="w-container">
      <h1 class="body-h1"><?php echo lang('change_password_heading');?>
      </h1>
</div>


<div class="w-container body-container login-container">
      <div class="simple-text">
            <?php echo $message;?>
      </div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><input type="submit" name="submit" class="form-button" value="<?php echo lang('change_password_submit_btn');?>">


<?php echo form_close();?>
</div>
<div class="w-container">
      <h1 class="body-h1"><?php echo lang('edit_group_heading');?>
            <span class="body-h1-span">(<?php echo lang('edit_group_subheading');?>)</span>
      </h1>
</div>


<div class="w-container body-container login-container">

      <div class="simple-text">
            <?php echo $message;?>
      </div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>


      <p><input type="submit" name="submit" class="form-button" value="<?php echo lang('edit_group_submit_btn');?>">

<?php echo form_close();?>
</div>

<div class="w-container">
      <h1 class="body-h1"><?php echo lang('create_group_heading');?>
            <span class="body-h1-span">(<?php echo lang('create_group_subheading');?>)</span>
      </h1>
</div>


<div class="w-container body-container login-container">

      <div class="simple-text">
            <?php echo $message;?>
      </div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>
</div>

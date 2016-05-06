<div class="w-container">
	<h1 class="body-h1"><?php echo lang('index_heading');?> <span class="body-h1-span">(<?php echo lang('index_subheading');?>)</span>
	</h1>
</div>

<div class="w-container body-container login-container">
	<div class="simple-text">
		<?php echo $message;?>
	</div>
	<div class="w-row tableth">
		<div class="w-col w-col-2"><?php echo lang('index_fname_th');?></div>
		<div class="w-col w-col-2"><?php echo lang('index_lname_th');?></div>
		<div class="w-col w-col-2"><?php echo lang('index_email_th');?></div>
		<div class="w-col w-col-2"><?php echo lang('index_groups_th');?></div>
		<div class="w-col w-col-2"><?php echo lang('index_status_th');?></div>
		<div class="w-col w-col-2"><?php echo lang('index_action_th');?></div>
	</div>
	<?php foreach ($users as $user):?>
	<div class="w-row tabletr">
		<div class="w-col w-col-2">
			<div><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></div>
		</div>
		<div class="w-col w-col-2"><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></div>
		<div class="w-col w-col-2"><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></div>
		<div class="w-col w-col-2">
			<div>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
				<?php endforeach?>
			</div>
		</div>
		<div class="w-col w-col-2">
			<div><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></div>
		</div>
		<div class="w-col w-col-2">
			<div><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></div>
		</div>
	</div>
	<?php endforeach;?>

	<div class="simple-text">
		<?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?>
	</div>
</div>
</div>


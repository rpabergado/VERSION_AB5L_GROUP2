<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User'); ?></legend>
	<?php
		echo $this->Form->input('User_FName');
		echo $this->Form->input('User_LName');
		echo $this->Form->input('User_MName');
		echo $this->Form->input('User_Address');
		echo $this->Form->input('User_Eaddress');
		echo $this->Form->input('User_Password');
		echo $this->Form->input('User_Role');
		echo $this->Form->input('User_Points');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>

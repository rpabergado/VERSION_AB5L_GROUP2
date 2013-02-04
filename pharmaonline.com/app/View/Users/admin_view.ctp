<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User FName'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_FName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User LName'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_LName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User MName'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_MName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Eaddress'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Eaddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Points'); ?></dt>
		<dd>
			<?php echo h($user['User']['User_Points']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['User_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['User_ID']), null, __('Are you sure you want to delete # %s?', $user['User']['User_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>

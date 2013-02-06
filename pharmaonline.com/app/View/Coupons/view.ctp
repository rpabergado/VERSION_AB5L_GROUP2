<div class="coupons view">
<h2><?php  echo __('Coupon'); ?></h2>
	<dl>
		<dt><?php echo __('Item ID'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Name'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Coupon_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Code'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Coupon_Code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Price'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Item_Price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Quantity'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Item_Quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Availability'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Item_Availability']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Discount'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['Coupon_Discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['User_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['Item_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['Item_ID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['Item_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?> </li>
	</ul>
</div>

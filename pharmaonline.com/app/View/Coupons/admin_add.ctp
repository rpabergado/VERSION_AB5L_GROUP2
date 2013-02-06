<div class="coupons form">
<?php echo $this->Form->create('Coupon'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Coupon'); ?></legend>
	<?php
		echo $this->Form->input('Coupon_Name');
		echo $this->Form->input('Coupon_Code');
		echo $this->Form->input('Item_Price');
		echo $this->Form->input('Item_Quantity');
		echo $this->Form->input('Item_Availability');
		echo $this->Form->input('Coupon_Discount');
		echo $this->Form->input('User_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?></li>
	</ul>
</div>

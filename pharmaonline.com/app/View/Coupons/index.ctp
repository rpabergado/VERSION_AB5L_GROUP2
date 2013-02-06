<div class="coupons index">
	<h2><?php echo __('Coupons'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Item_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Coupon_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Coupon_Code'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Price'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Availability'); ?></th>
			<th><?php echo $this->Paginator->sort('Coupon_Discount'); ?></th>
			<th><?php echo $this->Paginator->sort('User_ID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($coupons as $coupon): ?>
	<tr>
		<td><?php echo h($coupon['Coupon']['Item_ID']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['Coupon_Name']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['Coupon_Code']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['Item_Price']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['Item_Quantity']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['Item_Availability']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['Coupon_Discount']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['User_ID']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coupon['Coupon']['Item_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coupon['Coupon']['Item_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coupon['Coupon']['Item_ID']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['Item_ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?></li>
	</ul>
</div>

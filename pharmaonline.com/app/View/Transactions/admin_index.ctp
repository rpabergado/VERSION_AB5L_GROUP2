<div class="transactions index">
	<h2><?php echo __('Transactions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Transaction_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Transaction_Saddress'); ?></th>
			<th><?php echo $this->Paginator->sort('Transaction_PayType'); ?></th>
			<th><?php echo $this->Paginator->sort('Transaction_Total'); ?></th>
			<th><?php echo $this->Paginator->sort('Transaction_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Customer_NameOnCard'); ?></th>
			<th><?php echo $this->Paginator->sort('Card_Number'); ?></th>
			<th><?php echo $this->Paginator->sort('Issuing_Bank'); ?></th>
			<th><?php echo $this->Paginator->sort('CVV2_Number'); ?></th>
			<th><?php echo $this->Paginator->sort('Card_Type'); ?></th>
			<th><?php echo $this->Paginator->sort('Transaction_Dpercentage'); ?></th>
			<th><?php echo $this->Paginator->sort('User_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Summary_Sales_ID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['Transaction_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Transaction_Saddress']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Transaction_PayType']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Transaction_Total']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Transaction_Date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Customer_NameOnCard']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Card_Number']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Issuing_Bank']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['CVV2_Number']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Card_Type']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Transaction_Dpercentage']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['User_ID']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['Summary_Sales_ID']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transaction['Transaction']['Transaction_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transaction['Transaction']['Transaction_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transaction['Transaction']['Transaction_ID']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['Transaction_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?></li>
	</ul>
</div>

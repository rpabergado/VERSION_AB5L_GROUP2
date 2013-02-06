<div class="summarySales index">
	<h2><?php echo __('Summary Sales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Summary_Sales_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Summary_Sales_Month'); ?></th>
			<th><?php echo $this->Paginator->sort('Summary_Sales_Year'); ?></th>
			<th><?php echo $this->Paginator->sort('Summary_Sales_Total'); ?></th>
			<th><?php echo $this->Paginator->sort('User_ID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($summarySales as $summarySale): ?>
	<tr>
		<td><?php echo h($summarySale['SummarySale']['Summary_Sales_ID']); ?>&nbsp;</td>
		<td><?php echo h($summarySale['SummarySale']['Summary_Sales_Month']); ?>&nbsp;</td>
		<td><?php echo h($summarySale['SummarySale']['Summary_Sales_Year']); ?>&nbsp;</td>
		<td><?php echo h($summarySale['SummarySale']['Summary_Sales_Total']); ?>&nbsp;</td>
		<td><?php echo h($summarySale['SummarySale']['User_ID']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $summarySale['SummarySale']['Summary_Sales_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $summarySale['SummarySale']['Summary_Sales_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $summarySale['SummarySale']['Summary_Sales_ID']), null, __('Are you sure you want to delete # %s?', $summarySale['SummarySale']['Summary_Sales_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Summary Sale'), array('action' => 'add')); ?></li>
	</ul>
</div>

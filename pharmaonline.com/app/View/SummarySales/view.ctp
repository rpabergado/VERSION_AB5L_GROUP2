<div class="summarySales view">
<h2><?php  echo __('Summary Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Summary Sales ID'); ?></dt>
		<dd>
			<?php echo h($summarySale['SummarySale']['Summary_Sales_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary Sales Month'); ?></dt>
		<dd>
			<?php echo h($summarySale['SummarySale']['Summary_Sales_Month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary Sales Year'); ?></dt>
		<dd>
			<?php echo h($summarySale['SummarySale']['Summary_Sales_Year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary Sales Total'); ?></dt>
		<dd>
			<?php echo h($summarySale['SummarySale']['Summary_Sales_Total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($summarySale['SummarySale']['User_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Summary Sale'), array('action' => 'edit', $summarySale['SummarySale']['Summary_Sales_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Summary Sale'), array('action' => 'delete', $summarySale['SummarySale']['Summary_Sales_ID']), null, __('Are you sure you want to delete # %s?', $summarySale['SummarySale']['Summary_Sales_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Summary Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Summary Sale'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="summarySales form">
<?php echo $this->Form->create('SummarySale'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Summary Sale'); ?></legend>
	<?php
		echo $this->Form->input('Summary_Sales_ID');
		echo $this->Form->input('Summary_Sales_Month');
		echo $this->Form->input('Summary_Sales_Year');
		echo $this->Form->input('Summary_Sales_Total');
		echo $this->Form->input('User_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SummarySale.Summary_Sales_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SummarySale.Summary_Sales_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Summary Sales'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="summarySales form">
<?php echo $this->Form->create('SummarySale'); ?>
	<fieldset>
		<legend><?php echo __('Add Summary Sale'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Summary Sales'), array('action' => 'index')); ?></li>
	</ul>
</div>

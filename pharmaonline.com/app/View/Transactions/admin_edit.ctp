<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Transaction'); ?></legend>
	<?php
		echo $this->Form->input('Transaction_ID');
		echo $this->Form->input('Transaction_Saddress');
		echo $this->Form->input('Transaction_PayType');
		echo $this->Form->input('Transaction_Total');
		echo $this->Form->input('Transaction_Date');
		echo $this->Form->input('Customer_NameOnCard');
		echo $this->Form->input('Card_Number');
		echo $this->Form->input('Issuing_Bank');
		echo $this->Form->input('CVV2_Number');
		echo $this->Form->input('Card_Type');
		echo $this->Form->input('Transaction_Dpercentage');
		echo $this->Form->input('User_ID');
		echo $this->Form->input('Summary_Sales_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transaction.Transaction_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Transaction.Transaction_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?></li>
	</ul>
</div>

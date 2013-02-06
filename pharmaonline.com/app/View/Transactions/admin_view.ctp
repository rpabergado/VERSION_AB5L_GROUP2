<div class="transactions view">
<h2><?php  echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Transaction ID'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction Saddress'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_Saddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction PayType'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_PayType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction Total'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_Total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer NameOnCard'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Customer_NameOnCard']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Number'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Card_Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issuing Bank'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Issuing_Bank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CVV2 Number'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['CVV2_Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Type'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Card_Type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction Dpercentage'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Transaction_Dpercentage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['User_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary Sales ID'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['Summary_Sales_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['Transaction_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['Transaction_ID']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['Transaction_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
	</ul>
</div>

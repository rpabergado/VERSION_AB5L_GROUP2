<div class="drugs form">
<?php echo $this->Form->create('Drug'); ?>
	<fieldset>
		<legend><?php echo __('Edit Drug'); ?></legend>
	<?php
		echo $this->Form->input('Item_ID');
		echo $this->Form->input('Drug_BrandName');
		echo $this->Form->input('Drug_GenericName');
		echo $this->Form->input('Item_Price');
		echo $this->Form->input('Item_Quantity');
		echo $this->Form->input('Item_Availability');
		echo $this->Form->input('Drug_Distributor');
		echo $this->Form->input('Drug_DForm');
		echo $this->Form->input('Drug_Description');
		echo $this->Form->input('Drug_SideEffects');
		echo $this->Form->input('User_ID');
		echo $this->Form->input('Category_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Drug.Item_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Drug.Item_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Drugs'), array('action' => 'index')); ?></li>
	</ul>
</div>

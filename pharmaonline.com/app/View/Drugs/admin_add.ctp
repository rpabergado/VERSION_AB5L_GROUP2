<? $this->start('body_content'); 

	$userID = $this->Session->read('Auth.User.User_ID');	
?>

<div class="drugs form">
<?php echo $this->Form->create('Drug'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Drug'); ?></legend>
	<?php
		echo $this->Form->input('Drug_BrandName');
		echo $this->Form->input('Drug_GenericName');
		echo $this->Form->input('Item_Price');
		echo $this->Form->input('Item_Quantity');
		echo $this->Form->input('Item_Availability');
		echo $this->Form->input('Drug_Distributor');
		echo $this->Form->input('Drug_DForm');
		echo $this->Form->input('Drug_Description');
		echo $this->Form->input('Drug_SideEffects');
		echo $this->Form->input('User_ID', array('type' => 'hidden', 'value' => $userID));
		echo $this->Form->input('Category_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Drugs'), array('action' => 'index')); ?></li>
	</ul>
</div>


<?php $this->end(); ?>




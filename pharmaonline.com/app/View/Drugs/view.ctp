<div class="drugs view">
<h2><?php  echo __('Drug'); ?></h2>
	<dl>
		<dt><?php echo __('Item ID'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drug BrandName'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Drug_BrandName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drug GenericName'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Drug_GenericName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Price'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Item_Price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Quantity'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Item_Quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Availability'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Item_Availability']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drug Distributor'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Drug_Distributor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drug DForm'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Drug_DForm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drug Description'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Drug_Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drug SideEffects'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Drug_SideEffects']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['User_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category ID'); ?></dt>
		<dd>
			<?php echo h($drug['Drug']['Category_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Drug'), array('action' => 'edit', $drug['Drug']['Item_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Drug'), array('action' => 'delete', $drug['Drug']['Item_ID']), null, __('Are you sure you want to delete # %s?', $drug['Drug']['Item_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drugs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drug'), array('action' => 'add')); ?> </li>
	</ul>
</div>

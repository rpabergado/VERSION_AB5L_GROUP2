<?php $this->start('body_content'); ?>

	  		

<div class="container">
	<div class="row">
		<div id="content" class="span12">



<?php echo $this->Session->flash(); ?>


<div class="drugs index">
	<h2><?php echo __('Drugs'); ?></h2>
	<table  class="table table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('Item_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Drug_BrandName'); ?></th>
			<th><?php echo $this->Paginator->sort('Drug_GenericName'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Price'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_Availability'); ?></th>
			<th><?php echo $this->Paginator->sort('Drug_Distributor'); ?></th>
			<th><?php echo $this->Paginator->sort('Drug_DForm'); ?></th>
			<th><?php echo $this->Paginator->sort('Drug_Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Drug_SideEffects'); ?></th>
			<th><?php echo $this->Paginator->sort('User_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Category_ID'); ?></th>
			
	</tr>
	<?php
	foreach ($drugs as $drug): ?>
	<tr>
		<td><?php echo h($drug['Drug']['Item_ID']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Drug_BrandName']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Drug_GenericName']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Item_Price']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Item_Quantity']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Item_Availability']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Drug_Distributor']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Drug_DForm']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Drug_Description']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Drug_SideEffects']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['User_ID']); ?>&nbsp;</td>
		<td><?php echo h($drug['Drug']['Category_ID']); ?>&nbsp;</td>
		
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

<br/>
<br/>
<div class="row">

<div class="span12">
<p>
 
  <a href="addproduct" class="btn" type="button">Add</a>


  <a href="editproduct" class="btn" type="button">Edit</a>
</p>

</div>
</div>

</div>
</div>
</div>

<?php $this->end(); ?>
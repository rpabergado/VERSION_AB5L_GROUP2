<div class="testimonials index">
	<h2><?php echo __('Testimonials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Testimonial_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Testimonial_Author'); ?></th>
			<th><?php echo $this->Paginator->sort('Testimonial_DPosting'); ?></th>
			<th><?php echo $this->Paginator->sort('Testimonial_Body'); ?></th>
			<th><?php echo $this->Paginator->sort('User_ID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($testimonials as $testimonial): ?>
	<tr>
		<td><?php echo h($testimonial['Testimonial']['Testimonial_ID']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['Testimonial_Author']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['Testimonial_DPosting']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['Testimonial_Body']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['User_ID']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $testimonial['Testimonial']['Testimonial_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $testimonial['Testimonial']['Testimonial_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $testimonial['Testimonial']['Testimonial_ID']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['Testimonial_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?></li>
	</ul>
</div>

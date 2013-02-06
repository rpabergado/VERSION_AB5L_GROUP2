<div class="testimonials view">
<h2><?php  echo __('Testimonial'); ?></h2>
	<dl>
		<dt><?php echo __('Testimonial ID'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['Testimonial_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testimonial Author'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['Testimonial_Author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testimonial DPosting'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['Testimonial_DPosting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Testimonial Body'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['Testimonial_Body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User ID'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['User_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Testimonial'), array('action' => 'edit', $testimonial['Testimonial']['Testimonial_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $testimonial['Testimonial']['Testimonial_ID']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['Testimonial_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?> </li>
	</ul>
</div>

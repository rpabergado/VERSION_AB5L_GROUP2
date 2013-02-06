<div class="testimonials form">
<?php echo $this->Form->create('Testimonial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Testimonial'); ?></legend>
	<?php
		echo $this->Form->input('Testimonial_ID');
		echo $this->Form->input('Testimonial_Author');
		echo $this->Form->input('Testimonial_DPosting');
		echo $this->Form->input('Testimonial_Body');
		echo $this->Form->input('User_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Testimonial.Testimonial_ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Testimonial.Testimonial_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?></li>
	</ul>
</div>

<!-- 
   File: app/View/Users/admin_index.ctp 
-->

<!--top user controls -->

<?php $this->start('userControls'); ?>

<!-- no cart for admin -->

<!-- account dropdown -->
<li class="dropdown">
      <a class="dropdown-toggle" role="button" id="accountDD" href="#" data-toggle="dropdown">

      	<i class="icon-user icon-large"></i>
<?php 
  $User_FName = $this->Session->read('Auth.User.User_FName');
  $User_LName = $this->Session->read('Auth.User.User_LName');

  print $User_FName;
  print " ";
  print $User_LName;
  
?>
        <strong id="caret_white"class="caret"></strong></a>
       <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="accountDD" id="ul_accountDD">

       	<li><a tabindex="-1" href="admin"><i class="icon-wrench"></i> Dashboard</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="logout"><i class="icon-off"></i> Log Out</a></li>
        
        </ul>
</li>

<?php $this->end(); ?>

<!-- -->



<!-- body_content -->

<?php $this->start('body_content'); ?>

<?php $this->Paginator->options(array(

			'url' => array('action' => 'userlist','prefix' => 'admin','admin' => true)
		));
?>
	  		

<div class="container">
	<div class="row">
		<div id="content" class="span12">

<?php echo $this->Session->flash(); ?>

	<h2><?php echo __('Users'); ?></h2>
	<table  class="table table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('First Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Last Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Middle Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Address'); ?></th>
			<th><?php echo $this->Paginator->sort('Email Address'); ?></th>
			<th><?php echo $this->Paginator->sort('Points'); ?></th>
	</tr>
	<?php $i = 0; foreach ($users as $user): 
		if($user['User']['User_ID']%2 != 0){echo'<tr class="info">';}
			else{echo'<tr>';}
	?>
	
		<td><?php echo h($user['User']['User_ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_FName']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_LName']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_MName']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_Address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_Eaddress']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['User_Points']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<h5 c>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</h5>

	<div class="pagination pagination-right">
		<ul>
			<li>
			<?php echo $this->Paginator->prev('< ' . __('previous'), array('url' => $this->passedArgs), null, array('class' => 'prev disabled')); ?>
			</li>
			<li>
			<?php	echo $this->Paginator->numbers(array('separator' => '')); ?>
			</li>
			<li>
			<?php echo $this->Paginator->next(__('next') . ' >', array('url' => $this->passedArgs), null, array('class' => 'next disabled'));
	?>
			</li>
		</ul>
	</div>


		</div>
	</div>
</div>
<?php $this->end(); ?>

<!-- body_content -->

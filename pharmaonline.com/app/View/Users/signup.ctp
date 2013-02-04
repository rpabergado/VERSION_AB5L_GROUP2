<!-- 
   File: app/View/Users/signup.ctp 
-->



<!--top user controls -->

<?php $this->start('userControls'); ?>

<!--cart link -->
<li>
      <a href="viewcart"><i class="icon-shopping-cart icon-white"></i>Cart</a>
</li>

<!-- signup link -->
<?php

echo '<li>';
echo $this->Html->link('Sign Up', array(
    'controller' => 'users',
    'action' => 'signup'
));

echo '</li>';
?>

<!-- login link -->
<?php

echo '<li>';
echo $this->Html->link('Log In', array(
    'controller' => 'users',
    'action' => 'login'
));

echo '</li>';
?>

<?php $this->end(); ?>

<!-- -->

<!-- body_content -->
<?php $this->start('body_content'); ?>

<div class="container">
	<div class="row">
		<div class="span12">

<?php echo $this->Session->flash(); ?>

<div class="signupFormContainer">

<div class="users form">
<?php echo $this->Form->create('User', array('class' => 'form-horizontal'));?>
	<fieldset>
		<h1><legend><?php echo __('Create a new account'); ?></legend></h1>
		<a onClick="openModal();" role="button" class="btn btn-success" data-toggle="modal">Administrator Validation</a>
<div class="container-fluid">
	<div class="row-fluid">


<!--left -->
<div id="signup_left" class="span6">

	

	<h5>Personal Details</h5><br />

	<div class="control-group">
	<?php
		echo $this->Form->input('User_FName', 
			array('class' => 'modified_fields','label' => false, 'placeholder' => ' First Name'));
	?>
	</div>

	<div class="control-group">
	<?php
		echo $this->Form->input('User_LName', 
			array('class' => 'modified_fields','label' => false, 'placeholder' => ' Last Name'));
	?>
	</div>

	<div class="control-group">
	<?php
		echo $this->Form->input('User_MName', 
			array('class' => 'modified_fields','label' => false, 'placeholder' => ' Middle Name'));;
	?>
	</div>

	<div class="control-group">
	<?php
		echo $this->Form->input('User_Address', 
			array('class' => 'modified_fields','label' => false, 'placeholder' => ' Address'));
	?>

	</div>

</div>
<!-- end of left -->

<!--right -->
<div id="signup_right" class="span6">

	<h5>Login Details</h5><br />

	<div class="control-group">

	<?php
		echo $this->Form->input('User_Eaddress', 
			array('class' => 'modified_fields','type' =>'email','label' => false, 'placeholder' => ' Email Address'));
	?>
	</div>

	<div class="control-group">
	<?php
		echo $this->Form->input('User_Password', 
			array('class' => 'modified_fields', 'type' => 'password','label' => false, 'placeholder' => ' Password'));
	?>
	</div>

	<div class="control-group">
	<?php
		echo $this->Form->input('User_CPassword', 
			array('class' => 'modified_fields', 'type' => 'password','label' => false, 'placeholder' => 'Confirm Password'));
	?>
	</div>

	<div class="control-group">
	<?php
		echo $this->Form->input('User_Role', 
			array('type' => 'hidden', 'value' => 'noKey')
			);
	?>
	</div>


</div>

	</div>
</div>

	</fieldset>

</br /><br />

<div class="span12 pagination-centered">

	<p>By clicking Sign Up, you agree to our
		<a href="#" onClick="window.open('tos.php','Terms and Condition Policy','toolbar=no,height=768,width=1024');">Terms and Conditions Policy.</a></p>

<?php 

$option = array('class' => 'btn-primary btn-large wide_button','label' => 'Sign Up');
echo $this->Form->end($option); 

?>

</div>

</div>
</div>
		</div>
	</div>
</div>

<br />
<br />

<!-- modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Enter administrator key</h3>
  </div>
  <div class="modal-body pagination-centered">
  		<p> You will be registered as user if administrator key is invalid. </p>
 		<input placeholder="Administrator Key" style="font-size:20px;height:40px !important;width:60%;" type="password" id="admin_key" maxlength="100"/>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button onClick="enterKey();" class="btn btn-primary">Enter</button>
  </div>
</div>

<!-- -->

<?php $this->end(); ?>

<!-- body_content -->

<!-- script -->
<?php $this->start('script'); ?>

	<script type="text/javascript">

	function openModal(){
		$('#myModal').modal('show');
	}

	function enterKey(){

		var key = document.getElementById('admin_key');
		var role = document.getElementById('UserUserRole');


		role.value = key.value;
		$('#myModal').modal('hide');
	}
	</script>

<?php $this->end(); ?>
<!-- -->
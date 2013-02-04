<!-- 
   File: app/View/Users/login.ctp 
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

<br />
<div class="container">
<div class="row"><div class="span12">


<?php echo $this->Session->flash('auth'); ?>


<div class="loginContainer">
<div class="customers loginForm">


<?php echo $this->Form->create('User', array('class' => 'form-horizontal pagination-centered')); ?>
    
    <fieldset>
    	<br />
        <legend class="loginFormLegend"><?php echo __('Log In'); ?></legend>

        <div class="control-group">
        <?php echo $this->Form->input('User_Eaddress', array('class' => 'login_modified_fields','placeholder' => 'Email Address','maxlength' => 100,'label' => false));
        ?>
    	</div>

    	<div class="control-group">
    	<?php
        echo $this->Form->input('User_Password', array('class' => 'login_modified_fields','placeholder' => 'Password','type' => 'password','maxlength' => 100, 'label' => false));
    	?>
    	</div>

    </fieldset>

<?php
$option = array('class' => 'btn-primary btn-large login_wide_button','label' => 'Login');
echo $this->Form->end($option); 

?>

<!--sign up link -->
<div class="pagination-centered">
	Don't have an account? 
	<a href="signup">Click here to sign up</a>
</div>

<!-- sign up link -->
</div>
</div>

</div></div>

</div>

<br />
<br />
<?php $this->end(); ?>

<?php $this->start('script'); ?>

  <script>

    window.onload = function(){

        var email = document.getElementById('UserUserEaddress');

        email.focus();
    }

  </script>

<?php $this->end();?>
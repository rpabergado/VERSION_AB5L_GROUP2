<!-- meta/css -->
<?php $this->start('meta'); ?>

	<meta http-equiv="refresh" content="5; url=login">

<?php $this->end(); ?>
<!-- -->



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



<!-- body_content -->
<?php $this->start('body_content'); ?>

	<div class="container">
		<div class="row">
			<div class="span12">

				<?php echo $this->Session->flash(); ?>
				<div class="hero-unit">
  					<h1>Registration Successful!</h1>

  					<br /> <br />
  				<div class="row">
					<div class="span6">
  							<h3 ID="timer">
  							 You will be redirected in 5 seconds.
  							</h3>
  						<a id="loginLink" href="login">Click here to login</a>
					</div>
					<div class="span3">
						<i class="icon-spinner icon-spin icon-4x"></i>
					</div>
				</div>
				</div>

			</div>
		</div>
	</div>

<?php $this->end(); ?>

<!-- body_content -->

<!-- scripts -->
<?php $this->start('script'); ?>

<!-- redirect countdown -->
<script type="text/javascript">
	var count = 5;
	var inverval = setInterval(countDown, 1000);

	function countDown() {

		if(count != 0){

			count--;
			document.getElementById('timer').innerHTML = 'You will be redirected in ' + count + ' seconds.';
			
		}
		else{

			abortTimer();
		}
	}

	function abortTimer() { // to be called when you want to stop the timer
  		clearInterval(inverval);
	}


</script>

<?php $this->end(); ?>
<!-- -->
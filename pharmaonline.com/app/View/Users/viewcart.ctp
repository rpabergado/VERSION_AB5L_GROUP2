<!-- 
   File: app/View/Users/viewcart.ctp 
-->




<!--top user controls -->

<?php $this->start('userControls'); ?>

<!--cart link -->
<li>
      <a href="viewcart"><i class="icon-shopping-cart icon-white"></i>Cart</a>
</li>

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

        <li><a tabindex="-1" href="user"><i class="icon-wrench"></i> Dashboard</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="logout"><i class="icon-off"></i> Log Out</a></li>
        
        </ul>
</li>

<?php $this->end(); ?>

<!-- -->


<!-- body_content -->

<?php $this->start('body_content');?>
	<div class="container">
	<div class="row">
		<div class="span12">
			<div class="breadcrumb">
				<h3>Shopping Cart</h3>
			</div>
		</div>

		<div class="span12">
		<table id="cart_table" class="table table-hover">
				<thead>
                <tr>
                  <th>Item Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
  
  <!-- cart content here -->

  <!-- cart content end -->

<!-- divider -->             
  				<tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

<!-- divider -->  
<!-- total -->
 				<tr>
                  <td></td>
                  <td></td>
 					<td>
 						<h5 style="color:#1271ff;">Total:</h5>
 					</td>
 					<td>
 					<!-- total here -->
 					</td>
 				</tr>
              </tbody>
			</table>
		</div>

	</div>
</div>

<?php $this->end(); ?>
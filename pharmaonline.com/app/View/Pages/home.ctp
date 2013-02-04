<!-- 
   File: app/View/Pages/home.ctp 
-->


<!--top user controls -->

<?php $this->start('userControls'); 


if(!$this->Session->read('Auth')){
//cart link
  echo'
   <li>
        <a href="viewcart"><i class="icon-shopping-cart icon-white"></i>Cart</a>
    </li>';

// signup link

  echo '<li>';
  echo $this->Html->link('Sign Up', array(
      'controller' => 'users',
      'action' => 'signup'
  ));

  echo '</li>';

//login link


  echo '<li>';
  echo $this->Html->link('Log In', array(
      'controller' => 'users',
     'action' => 'login'
  ));

  echo '</li>';
}
else{

  if($this->Session->read('Auth.User.User_Role') == 'admin'){

    echo'
<!-- no cart for admin -->

<!-- account dropdown -->
<li class="dropdown">
      <a class="dropdown-toggle" role="button" id="accountDD" href="#" data-toggle="dropdown">

        <i class="icon-user icon-large"></i>';

  $User_FName = $this->Session->read('Auth.User.User_FName');
  $User_LName = $this->Session->read('Auth.User.User_LName');

  print $User_FName;
  print " ";
  print $User_LName;
  
echo'
        <strong id="caret_white"class="caret"></strong></a>
       <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="accountDD" id="ul_accountDD">

        <li><a tabindex="-1" href="admin_dashboard"><i class="icon-wrench"></i> Dashboard</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="logout"><i class="icon-off"></i> Log Out</a></li>
        
        </ul>
</li>


<!-- -->

    ';

  }
  else{

echo'
<!--top user controls -->


<!--cart link -->
<li>
      <a href="viewcart"><i class="icon-shopping-cart icon-white"></i>Cart</a>
</li>

<!-- account dropdown -->
<li class="dropdown">
      <a class="dropdown-toggle" role="button" id="accountDD" href="#" data-toggle="dropdown">

        <i class="icon-user icon-large"></i>';

  $User_FName = $this->Session->read('Auth.User.User_FName');
  $User_LName = $this->Session->read('Auth.User.User_LName');

  print $User_FName;
  print " ";
  print $User_LName;
  
echo'
        <strong id="caret_white"class="caret"></strong></a>
       <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="accountDD" id="ul_accountDD">

        <li><a tabindex="-1" href="user_dashboard"><i class="icon-wrench"></i> Dashboard</a></li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="logout"><i class="icon-off"></i> Log Out</a></li>
        
        </ul>
</li>


';

  }

}
?>

<?php $this->end(); ?>

<!-- -->

<!-- body_content -->

<?php $this->start('body_content'); ?>

  <div class="row">
    <div class="span12">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="bootstrap/img/home_carousel/hc-01.jpg" />
          </li>
          <li>
            <img src="bootstrap/img/home_carousel/hc-02.jpg" />
          </li>

          <li>
            <img src="bootstrap/img/home_carousel/hc-03.jpg" />
          </li>

        </ul>
      </div>
    </div>
  </div>

<?php $this->end(); ?>

<!-- body_content -->
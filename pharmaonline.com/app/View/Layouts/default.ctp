<!-- 
   File: app/View/Layouts/default.ctp 
-->


<!DOCTYPE HTML>
<html lang="en">

<head>
	<title><?php echo $title_for_layout?></title>
	<link rel="shortcut icon" href="img/faviconP.ico" type="image/x-icon">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/flexslider.css" rel="stylesheet" type="text/css"/>
	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- meta and css from other pages-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
<!-- -->

</head>

<body>

	<div class="container">
		<!-- top nav user controls -->
				<div class="row">
			<div class="span12">
				<div id="top_bar_outer" class="navbar navbar-fixed-top">
					<div id="top_bar" class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-targer".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<div class="nav-collapse">
								<ul class="nav pull-right" id="top_user_control">
									<?php
										echo $this->fetch('userControls');
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of top nav user controls -->
		<br /><br />
		<!-- header -->

			<div class="row">

				<div class="span4">

					<a id="tag_logo" title="PharmaOnline" href="home">
						<h1 id="site_logo">PharmaOnline</h1>
					<h6>&nbsp&nbsp&nbspPharmacy in your convenience.</h6>
					</a>

				</div>

				<div class="span8">
					<div class="row">
						<div class="span8">&nbsp</div>
					</div>

					<br /><br />

				</div>

			</div>

		<!-- end of header-->

		<!-- navigation -->
			<div class="row">
				<div class="span12">

					<div class="navbar navbar-inverse">
						<div id="user_navigation_bar" class="navbar-inner">
							<div class="container" style="width: auto;">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
           				 <span class="icon-bar"></span>
        				</a>

						<div class="nav-collapse">

							<ul class="nav" id="navigation_links">
								<li class="divider-vertical"></li>
								<li>
									<a href="home"><i class="icon-home icon-large"></i> Home </a>
								</li>
								<li class="divider-vertical"></li>
								<li>
									<a href="products"><i class="icon-medkit icon-large"></i> Products </a></li>
								<li class="divider-vertical"></li>
								<li><a href="#"><i class="icon-tags icon-large"></i> Coupons </a></li>
								<li class="divider-vertical"></li>
							</ul>

							<ul class="nav pull-right">
								<li class="divider-vertical"></li>
								<form class="navbar-form pull-right form-search form-inline" action="">
									<div class="input-append">
										<input type="text" placeholder=" Search product" class="input-xlarge search-query">
    									<button class="btn btn-primary" type="submit" class="btn"><i class="icon-search icon-black"></i></button>
									</div>
								</form>
							</ul>
						</div>
						</div>
						</div>
						</div>
					</div>

				</div>

		<!-- end of navigation -->

		<!-- content here -->
		<?php echo $this->fetch('body_content'); ?>
		<!-- footer -->

		<div class="row">
			<div class="span12 ">
				<ul class="breadcrumb pagination-centered" id="footer">

					<li><a href="#"> Terms & Condition </a></li> |
					<li><a href="#"> About Us </a></li> |
					<li><a href="#"> Contact Us </a></li> |
					<li><a href="#"> FAQ </a></li>

				</ul>
			</div>

		</div>
		<!-- end of footer -->
	</div>

<!-- scripts -->

<!-- scripts from other pages -->
<?php echo $this->fetch('script'); ?>
<!-- -->

<script type="text/javascript" src="bootstrap/js/jquery-1.9.0.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.flexslider-min.js"></script>


<script type="text/javascript">

	$(document).ready(function () {
            $('.dropdown-toggle').dropdown();

        // Fix input element click problem
	  	$('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
        });

		$('.flexslider').flexslider({
          animation: "slide"
    	});

		

    });

</script>

<!-- scripts -->
</body>

</html>
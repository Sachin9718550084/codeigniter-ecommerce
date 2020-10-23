<!DOCTYPE html>
<html>
<head>

	<title>Maccenter</title>

	<meta name="keywords" content="key, words" />	
	<meta name="description" content="Website description" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- change into index, follow -->
	<?php $this->load->view("front/layouts/head");?>
</head>

<body>
<!-- BEGIN: wrapper -->
<div id="wrapper">
	
	<?php $this->load->view("front/layouts/menu");?>
	
	<!-- START: banner wrapper -->
	<section id="bannerWrapper">

		<!-- START: innerbanner area -->
		<div class="innerbannerArea" style="background-image: url(<?= base_url('assets/front/')?>images/applecare_bg.jpg); ">
			<div class="overlay">
				<div class="mycontainer">

					<h2>Digital Engraving<span>& Customization</span></h2>

				</div>
			</div>
		</div>
		<!-- END: innerbanner area -->		

		
	</section>
	<!-- END: banner wrapper -->

	<!-- START: content wrapper -->
	<div id="middleWrapper">

		<!-- START: breadcrumb area -->
		<div class="breadcrumbArea">
			<div class="mycontainer">

				<ul>
					<li><a href="<?= base_url();?>">Home</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li><a href="#">Digital Engraving & Customization</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active"><a href="#">Bespoke Engraving On All Apple Products</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: applegive area -->
		<div class="applegiveAera">
			<div class="mycontainer">

				<h2>Bespoke Engraving On All Apple Products</h2>

				<p>You can specify options for the type of hard drive, Memory Capacity, Screen size, Processor configuration and often other items. That gives you the benefit of having any upgrades to new Software and hardware being covered by AppleCare</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<img class="bespoke_img1" src="<?= base_url('assets/front/')?>images/bespoke_img1.jpg" alt="alt">

				<div class="contactbtn">	

					<a class="btn" href="<?= base_url('contact-us');?>">Contact Us</a>
				</div>	

			</div>
			
		</div>
		<!-- END: applegive area -->

	</div>
	<!-- END: content wrapper -->
	
		<!-- START: partners area -->
		<?php $this->load->view("front/layouts/patners");?>
		<!-- END: partners area	-->

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
</body>
</html>
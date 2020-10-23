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

					<h2>Apple<span>Sales & Support</span></h2>

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
					<li><a href="#">Apple Sales & Support</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active"><a href="#">Repairs And Warranty</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: applegive area -->
		<div class="applegiveAera">
			<div class="mycontainer">

				<h2>Repairs And Warranty</h2>

				<p class="restore">We restore damaged MAC and Apple products.</p>

				<img src="<?= base_url('assets/front/')?>images/warranty_img.jpg" alt="alt">

				<p>For any item purchased from us, we issue a repair or replace policy for a 1 year specified period of time. The Warranty service<br> for eligible repair is available at no charge for twelve months from the date of original retail purchase</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis<br> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

				<div class="contactbtn">	

					<a class="btn" href="<?= base_url('contact-us')?>">Contact Us</a>
				</div>	

			</div>
			<div class="applecare" style="background-image: url(<?= base_url('assets/front/')?>images/applegive_img1.png); "></div>
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
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
		<div class="innerbannerArea" style="background-image: url(<?= base_url('assets/front/')?>images/custom_bg.jpg); ">
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
					<li class="active"><a href="#">Hardware Customization</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: custom area -->
		<div class="customArea">
			<div class="mycontainer">

				<div class="row">

					<div class="col-12 col-sm-12 col-md-6 col-lg-6">

						<h2>Hardware Customization</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						<p>The below custom hardware details can be requested;</p>

						<ul>
							<li><a href="#">CPU, RAM or storage upgrade to Improve overall performance.</a></li>
							<li><a href="#">Enhance display resolution and quality</a></li>
							<li><a href="#">Adjusting firmware for added capabilities</a></li>
							<li><a href="#">Change of motherboard, BIOS and bus speed configurations</a></li>
							<li><a href="#">Processor clock speed adjustments</a></li>
							<li><a href="#">Display Size</a></li>
						</ul>

						<a class="btn" href="<?= base_url('contact-us')?>">Contact Us</a>

					</div>
					
					<div class="custom col-12 col-sm-12 col-md-6 col-lg-6">

						<img src="<?= base_url('assets/front/')?>images/custom_img1.png" alt="alt">

					</div>	

				</div>	

			</div>
		</div>
		<!-- END: custom area -->

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
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
					<li class="active"><a href="#">Bespoke Configured Apple Product</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: applecare area -->
		<div class="applecareArea bespoke">
			<div class="mycontainer">

				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">

						<img src="<?= base_url('assets/front/')?>images/bespoke_img.png" alt="">

					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">

						<h2>Bespoke Configured Apple Product</h2>
						<p>You can specify options for the type of hard drive, Memory Capacity, Screen size, Processor configuration and often other items. That gives you the benefit of having any upgrades to new Software and hardware being covered by AppleCare..</p>

						<a class="btn" href="<?= base_url('contact-us')?>">Contact Us</a>



					</div>	

				</div>	

			</div>
			<div class="applecare" style="background-image: url(<?= base_url('assets/front/')?>images/applecare_img2.png); "></div>
		</div>	
		<!-- END: applecare area -->

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
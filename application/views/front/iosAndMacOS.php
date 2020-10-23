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

					<h2>Application<span> Development</span></h2>

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
					<li><a href="#">Application development</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active"><a href="#">IOS And Mac OS Compatible Custom App</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: applegive area -->
		<div class="applegiveAera">
			<div class="mycontainer">

				<h2>IOS And Mac OS Compatible Custom App</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

				<p>This gives room for individual business owners and organizations to have a mobile app that would<br> display on the iPhone, iPad, MacBook or iMac screens alongside the other apps. The custom app would<br> be downloaded from the App Store.</p>

				<img class="bespoke_img1" src="<?= base_url('assets/front/')?>images/iosmac_img.jpg" alt="alt">

				<div class="contactbtn">	

					<a class="btn" href="<?= base_url('contact-us')?>">Contact Us</a>
				</div>	

			</div>
			
		</div>
		<!-- END: applegive area -->

	</div>
	<!-- END: content wrapper -->
	
		<!-- END: welcome area -->

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
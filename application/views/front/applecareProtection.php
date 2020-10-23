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
					<li class="active"><a href="#">AppleCare Protection</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: applecare area -->
		<div class="applecareArea">
			<div class="mycontainer">

				<img class="applecare_img3" src="<?= base_url('assets/front/')?>images/applecare_img3.png" alt="alt">
			
				<div class="row">

					<div class="cont_btn col-12 col-sm-12 col-md-12 col-lg-12">

						<h2>AppleCare Protection Plus</h2>

						<p>Every Mac comes with a one-year limited warranty and up to 90 days of complimentary technical support. Extend your coverage to three years from the original purchase date of your Mac with the AppleCare Protection Plan. You'll get direct, one-stop access to Apple' award-winning technical support for questions about your Mac, macOS, and Apple-branded applications such as Photos, iMovie, GarageBand, Pages, Numbers, Keynote and more. You can even get local repair service when you visit other countries around the world.</p>

					</div>
				
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">

						<h3>Apple hardware coverage</h3>

						<p>The AppleCare Protection Plan provides global repair coverage, both parts and labour, from Apple-authorised technicians around the world.</p>

						<ul class="apple_list">
							<li><a href="#">Your Mac computer</a></li>
							<li><a href="#">Battery</a></li>
							<li><a href="#">Included accessories such as the power adapter</a></li>
							<li><a href="#">Apple memory (RAM)</a></li>
							<li><a href="#">AirPort</a></li>
							<li><a href="#">Apple USB SuperDrive</a></li>
						</ul>
						
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">

						<h3>Software support included</h3>

						<p>re sitting in the comfort of your home or office or on the go, you can get direct access to Apple experts for questions on a wide range of topics.</p>

						<ul class="apple_list">
							<li><a href="#">Using macOS and iCloud</a></li>
							<li><a href="#">Quick how-to questions about Apple-branded apps, such as Photos, iMovie, GarageBand, Pages, Numbers, Keynote and more</a></li>
							<li><a href="#">Connecting to printers and AirPort networks</a></li>
							
						</ul>
						
						
					</div>

					<div class="cont_btn col-12 col-sm-6 col-md-12 col-lg-12">

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
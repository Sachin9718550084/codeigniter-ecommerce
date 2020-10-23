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
	<!-- START: banner wrapper -->
	<section id="bannerWrapper">

		<!-- START: innerbanner area -->
		<div class="innerbannerArea" style="background-image: url(<?= base_url('assets/front/')?>images/software_bg.jpg); ">
			<div class="overlay">
				<div class="mycontainer">

					<h2>Application <span>development</span></h2>

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
					<li><a href="/"><i class="fas fa-caret-right"></i></a></li>
					<li><a href="#">Application development</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active"><a href="#">Software Customization</a></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: software area -->
		<div class="softwareArea">
			<div class="mycontainer">

				<h2>Software Customization</h2>

				<p>A custom software tool like the CRM System, Business Process Automation System, Customer-Facing web portal; to view actions, leave<br> messages, and track status of each item can be customized for the company's specific workflow. This allows your business to work more efficiently,<br> save more money, have your employees focus on higher-level, more value-added activities that generate more revenue, and replace all of<br> the paper forms with a tool that can be accessed from anywhere..</p>

				<ul>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/software_icon1.png" alt="alt"></figure>
						<span>01</span>
					
						<h3>Specification & Bulid Architecture </h3></a>
					</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/software_icon2.png" alt="alt"></figure>
						<span>02</span>
					
						<h3>Specification & Bulid Architecture </h3></a>
					</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/software_icon3.png" alt="alt"></figure>
						<span>03</span>
					
						<h3>Specification & Bulid Architecture </h3></a>
					</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/software_icon4.png" alt="alt"></figure>
						<span>04</span>
					
						<h3>Specification & Bulid Architecture </h3></a>
					</li>

				</ul>

				<div class="contactbtn">	

					<a class="btn" href="<?= base_url('contact-us')?>">Contact Us</a>
				</div>

				<img class="softwareline_img" src="<?= base_url('assets/front/')?>images/softwareline_img.png" alt="alt">	

			</div>
			
		</div>
		<!-- END: software area -->

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
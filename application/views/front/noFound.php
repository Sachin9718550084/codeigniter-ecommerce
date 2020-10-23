<!DOCTYPE html>
<html>
<head>

	<title>Maccenter | 404 - Page Not Found</title>

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
		<div class="innerbannerArea" style="background-image: url(<?= base_url('assets/front/')?>images/aboutbanner_img.jpg); ">
			<div class="overlay">
				<div class="mycontainer">

					<h2>404 - Page Not Found</h2>
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
					<li class="active">404 - Page Not Found</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: welcome area -->
		<div class="welcomeArea">
			<div class="mycontainer">

				<h2>404 - Page Not Found</h2>
				<p> OOPs Page is not found.</p>

				
			</div>		
		</div>
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
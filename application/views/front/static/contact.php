<!DOCTYPE html>
<html>
<head>

	<title><?= $data->meta_title?> | Maccenter</title>

	<meta name="keywords" content="<?= $data->meta_keywords?>" />	
	<meta name="description" content="<?= $data->meta_description	?>" />
	
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
		<div class="innerbannerArea" style="background-image: url(<?= base_url('assets/uploads/')?><?= $data->bannerImage?>); ">
			<div class="overlay">
				<div class="mycontainer">

					<h2><?= $data->name?></h2>
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
					<li class="active"><?= $data->name?></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<!-- START: welcome area -->
		<div class="welcomeArea"  style="padding: 0;">
			<div class="mycontainer">

				<h2><?= $data->name?></h2>
				<?= $data->shortDescription?>
				<?= $data->mediumDescription?>
				<?= $data->longDescription?>

				<div class="row">
					<div class="col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126849.10754549148!2d3.2954059434550564!3d6.517303248202204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d9230bfecfd%3A0xcca237f8ac91b7e5!2sAdeniran%20ogunsanya%20Shopping%20Mall!5e0!3m2!1sen!2sin!4v1599913083522!5m2!1sen!2sin" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="col-md-6">
						<div class="usersArea">

			<h3>Quick Inquiry</h3>

				<form method="post" action="<?= base_url('contact-us-post')?>">

				<div class="form-group">
					
					<input type="text" name="name" class="form-control" placeholder="Enter Name" required="required">
				</div>
				<div class="form-group">
					
					<input type="email" name="email" class="form-control" placeholder="Enter email"  required="required">
				</div>
				<div class="form-group">
					
					<input type="text" name="mobile" class="form-control" placeholder="Enter mobile">
				</div>
				<div class="form-group">
					
					<textarea name="message" class="form-control" placeholder="Enter message"  required="required"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success" name="contact" value="contact">Send Inquiry</button>	
				</div>

				</form>

	
				</div>

			</div>		
		</div>
		<!-- END: welcome area -->
<?php $this->load->view("front/layouts/patners");?>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
</body>
</html>
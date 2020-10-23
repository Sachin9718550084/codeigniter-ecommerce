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


			<?= $data->shortDescription?>
				<?= $data->mediumDescription?>
				<?= $data->longDescription?>




		
<?php $this->load->view("front/layouts/patners");?>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
</body>
</html>
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
					
				 <div id="accordion" style="text-align: left;">

<?php $faqs=$this->common->getFaqList();?>
<?php $i=1; foreach($faqs as $faq):?>				 	
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse<?= $faq->id;?>">
          <?= $faq->question;?>
        </a>
      </div>
      <div id="collapse<?= $faq->id;?>" class="collapse <?= ($i==1)?'show':'';?>" data-parent="#accordion">
        <div class="card-body">
          <?= $faq->answer;?>
        </div>
      </div>
    </div>
<?php $i++; endforeach;?>
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
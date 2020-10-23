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

	<!-- END: banner wrapper -->

	<!-- START: content wrapper -->
	<div id="middleWrapper" class="loginwrapper">

		<!-- START: breadcrumb area -->
		<div class="breadcrumbArea">
			<div class="mycontainer">

				<ul>
					<li><a href="<?= base_url();?>">Home</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active">Forget Password</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<div class="mycontainer">
			<div class="usersArea">

				<h1>Forgot <span>Password</span></h1>

				<div id="gaurav-message"></div>

				<form method="post" id="forget-form">

					<p><input type="email" name="email" required placeholder="Email Address"><i class="fal fa-envelope"></i></p>

					<p><button type="submit">Forgot Password</button></p>

					<p class="text-center">Already have New Good Life? <a class="linkgreen" href="<?= base_url('sign-in')?>">Sign In</a></p>

				</form>

			</div>
		</div>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
</body>
</html>
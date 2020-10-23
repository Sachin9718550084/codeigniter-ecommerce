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
					<li class="active">Register</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<div class="mycontainer">
			<div class="usersArea">

				<h1>Sign <span>Up</span></h1>

				
				<div id="gaurav-message"></div>


				<form method="post" id="register-form">

				

				
					<p><input type="text" name="name" required  placeholder="Name"></p>

					<p><input type="text" name="email" required placeholder="Email Address"></p>


					<p><input type="text" name="mobile" required placeholder="Phone Number"></p>

					<p><input type="password" name="password" required placeholder="Password"><i class="fas fa-eye"></i></p>

					<p><button type="submit">SIGN UP</button></p>

					<p class="text-center">Already have New Maccenter? <a class="linkgreen" href="<?= base_url('sign-in')?>">Sign In</a></p>

				</form>

			</div>
		</div>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
<script>
	$("#register-form").on("submit",function(e){
		e.preventDefault();
		$("#register-form button[type=submit]").attr("disabled",true);
		url="<?= base_url('register-post')?>";
		data=$("#register-form").serialize();
		$.post(url,data,function(data){
			data=JSON.parse(data)
			$("#register-form button[type=submit]").attr("disabled",false);
			if(data.status==200){
				$("#register-form")[0].reset();
				$("#gaurav-message").html('<div class="alert alert-success">'+data.message+'</div>');
			}else{
				$("#gaurav-message").html('<div class="alert alert-danger">'+data.message+'</div>');
			}

		})
	});
</script>
</body>
</html>
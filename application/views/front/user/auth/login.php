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
					<li class="active">Login</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<div class="mycontainer">
			<div class="usersArea">

				<h1>Sign <span>in</span></h1>

				
				<div id="gaurav-message"></div>


				<form method="post" id="login-form">

					<p><input type="email" required name="email" placeholder="Email Address"><i class="fal fa-envelope"></i></p>

					<p><input type="password" name="password" required placeholder="Password"><i class="fal fa-lock"></i></p>
<input type="hidden" name="checkout" value="0">
					<p class="text-right"><a class="linkgray" href="<?= base_url('forget-password')?>">Forgot Password?</a></p>

					<p><button type="submit">SIGN IN</button></p>

					<p class="text-center">New Maccenter? <a class="linkgreen" href="<?= base_url('sign-up')?>">Sign Up</a></p>

				</form>

			</div>
		</div>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->

<script>
	$("#login-form").on("submit",function(e){
		e.preventDefault();
		$("#login-form button[type=submit]").attr("disabled",true);
		url="<?= base_url('login-post')?>";
		data=$("#login-form").serialize();
		$.post(url,data,function(data){
			data=JSON.parse(data)
			$("#login-form button[type=submit]").attr("disabled",false);
			if(data.status==200){
				$("#gaurav-message").html('<div class="alert alert-success">'+data.message+'</div>');
				setTimeout(function(){
					location.href="<?= base_url('my-account')?>";
				},3000);
			}else{
				$("#gaurav-message").html('<div class="alert alert-danger">'+data.message+'</div>');
			}

		})
	});
</script>


</body>
</html>
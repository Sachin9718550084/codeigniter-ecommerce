<!DOCTYPE html>
<html>
<head>

	<title>Checkout | Maccenter</title>

	<meta name="keywords" content="Cart " />	
	<meta name="description" content="Cart" />
	
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
					<li class="active">User Dashboard</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<div class="mycontainer">
			<div class="usersArea" style="min-height:400px;">

				<h1>My  <span>Checkout</span></h1>
				
				<div class="row">
					<div class="col-md-6" id="login-area-block">
						<?php $this->load->view("front/user/cart/form-checkout")?>
					</div>
					<div class="col-md-6" id="cart-area-all">
				
					<?php $this->load->view("front/user/cart/ajax-checkout")?>
					</div>
				
				</div>
				
			</div>
		</div>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
<script>
	$(document).on("click","#coupon-apply",function(){
		coupon=$("#coupon-field").val();
		if(coupon!=""){
			url="<?= base_url('apply-coupon-code')?>";
			$.post(url,{coupon:coupon},function(data){
				$("#cart-area-all").html(data);
			});
		}else{
			$("#coupon-field").focus();
		}

	});
	$(document).on("click","#coupon-remove",function(){
		
			url="<?= base_url('remove-coupon-code')?>";
			$.post(url,{},function(data){
				$("#cart-area-all").html(data);
			});
		

	});



</script>

<script>
	$("#login-form").on("submit",function(e){
		e.preventDefault();
		$("#login-form button[type=submit]").attr("disabled",true);
		url="<?= base_url('login-post')?>";
		data=$("#login-form").serialize();
		$.post(url,data,function(data){
			console.log(data);
			data=JSON.parse(data)
			$("#login-form button[type=submit]").attr("disabled",false);
			if(data.status==200){
				$("#login-area-block").html(data.html);
			}else{
				$("#gaurav-message").html('<div class="alert alert-danger">'+data.message+'</div>');
			}

		})
	});

	$("#guest-form").on("submit",function(e){
		e.preventDefault();
		$("#guest-form button[type=submit]").attr("disabled",true);
		url="<?= base_url('login-post-guest')?>";
		data=$("#guest-form").serialize();
		$.post(url,data,function(data){
			console.log(data);
			data=JSON.parse(data)
			$("#login-form button[type=submit]").attr("disabled",false);
			if(data.status==200){
				$("#login-area-block").html(data.html);
			}else{
				$("#gaurav-message").html('<div class="alert alert-danger">'+data.message+'</div>');
			}

		})
	});
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>

	<title>Cart | Maccenter</title>

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

				<h1>My  <span>Cart</span></h1>
				
				<div class="row">
					<div class="col-md-12" id="cart-area-all">
				
					<?php $this->load->view("front/user/cart/ajax-index")?>
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



</body>
</html>
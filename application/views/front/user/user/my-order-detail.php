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
					<li><a href="<?= base_url('my-account')?>">User Dashboard</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li><a href="<?= base_url('my-orders')?>">My Order</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active">My Order Detail</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

		<div class="mycontainer">
			<div class="usersArea" style="min-height:400px;">

				<h1>My  <span>Account</span></h1>
				
				<div class="row">
					<div class="col-md-3">
						<?php $this->load->view('front/user/user/sidebar');?>
					</div>
					<div class="col-md-9">
						<h1> My Order Details</h1>


<div class="row">
	<div class="col-md-6">
		Order Date:- <?= $data->created_at;?>
	</div>
	<div class="col-md-6">
		Invoice ID:- <?= $data->invoice_id;?> 
		
	</div>
	<div class="col-md-4">
		name:-  <?= $data->name;?>
	</div>
	<div class="col-md-4">
		email:-  <?= $data->email;?>
	</div>
	<div class="col-md-4">
		mobile:-  <?= $data->mobile;?>
	</div>
	<div class="col-md-4">
		city:-  <?= $data->city;?>
	</div>
	<div class="col-md-4">
		state:-  <?= $data->state;?>
	</div>
	<div class="col-md-4">
		country:-  <?= $data->country;?>
	</div>
	<div class="col-md-6">
		address:-  <?= $data->address;?>
	</div>
	<div class="col-md-6">
		zipcode:-  <?= $data->zipcode;?>
	</div>
	<div class="col-md-6">
		payment:-  <?= $data->payment;?>
	</div>
	<div class="col-md-6">
		Transaction ID:-  <?= $data->transaction_id;?>
	</div>
	<div class="col-md-6">
		total amount:-  <?= $data->total_amount;?>
	</div>
	<div class="col-md-6">
		coupon :- <?= $data->coupon;?>
	</div>
	<div class="col-md-6">
		coupon code:-  <?= $data->coupon_code;?>
	</div>
	<div class="col-md-6">
		coupon amount:-  <?= $data->coupon_amount;?>
	</div>
	<div class="col-md-6">
		grand total:-  <?= $data->grand_total;?>
	</div>
	<div class="col-md-6">
		status:-  <?= $data->status;?>
	</div>
</div>


	<h4>Product Details</h4>
	<?php foreach($this->common->getProductListAcToOrder($data->invoice_id) as $d):?>
	<div class="row">
	<div class="col-md-3">
		<img src="<?= base_url('assets/uploads/'.$this->common->imageGet($d->product_featureImage)) ?>" >
	</div>
	<div class="col-md-9">
		<p><?= $d->product_name?></p>
		<p><?= $d->product_shortDescription?></p>
		<p> Amount:- 
<?php if($d->product_saleing_price):?>
<del><?= $d->product_price?></del> <?= $d->product_saleing_price?>
<?php else:?>
		  <?= $d->product_price?>
		  	
<?php endif;?>
		  </p>
		
		<p>Status:- <?= $d->status?> | Quantity:- <?= $d->quantity?></p>
	</div>
	</div>
	<?php endforeach;?>










					</div>
				</div>
				
			</div>
		</div>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->




</body>
</html>
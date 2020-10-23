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
					<li class="active">My Order</li>
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
						<h1> My Order</h1>
<table class="table">
	<tr>
		<th>Invoice ID</th>
		<th>Name</th>
		
		<th>Payment Status</th>
		<th>Payment Via</th>
		<th>Status</th>
		<th>Grand Total</th>
		<th>Action</th>
	</tr>
	<?php if(count($this->common->getOwnOrders())>0):?>
		<?php foreach($this->common->getOwnOrders() as $d):?>
			<tr>
				<td><?= $d->invoice_id;?></td>
				<td><?= $d->name?></td>
				
				<td><?= $d->payment_status?></td>
				<td><?= $d->payment?></td>
				<td><?= $d->status?></td>
				<td><?= $d->grand_total?></td>
				<td><a href="<?= base_url('order-details/'.$d->id)?>" class="btn btn-success">View Order</a></td>
			</tr>
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<th class="text-center text-danger" colspan="8"> No found Any orders</th>
		</tr>
	<?php endif;?>

</table>




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
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
					<li class="active">Change Password</li>
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
						<h1> Change Password</h1>
						<?php $this->load->view('front/layouts/message');?>
						<form method="post">
							<div class="form-group">
								<label for="">Old Password</label>
								<input type="text" name="old_password" class="form-control">
							</div>
							<div class="form-group">
								<label for="">New Password</label>
								<input type="text" name="new_password" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="text" name="confirm_password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit" name="change-password" value="change password"> Change Password</button>
							</div>
						</form>
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
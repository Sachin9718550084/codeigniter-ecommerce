<?php if(!$this->session->has_userdata("user_email")):?>
<div class="row">
		<div id="gaurav-message"></div>
	<div class="col-md-6">
		
	<h2>Login</h2>

<form id="login-form" method="post" >
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control" placeholder="enter Email">
	</div>
	<div class="form-group">
		<label for="">password</label>
		<input type="password" name="password" class="form-control" placeholder="enter password">
	</div>
	<input type="hidden" name="checkout" value="1">
	<div class="form-group">
		
		<button type="submit" class="btn btn-warning">submit</button>
	</div>
</form>
</div>
<div class="col-md-6">
		
	<h2>Guest Login</h2>
	<form id="guest-form" method="post" >
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control" placeholder="enter Email">
	</div>
<input type="hidden" name="checkout" value="1">
	<div class="form-group">
		
		<button type="submit" class="btn btn-warning">submit</button>
	</div>
</form>
</div>
</div>
<?php else:?>
	<?php $user=$this->common->getLoginUserDetails();?>
	<h5>Welcome <?= $user->name?></h5>
	<form method="post" id="checkout-form" action="<?= base_url('user-checkout')?>">
		<h3>Delivery Address</h3>
		<div class="delivery-address">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Enter Name"  required>
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<input type="text" name="mobile" class="form-control" placeholder="Enter mobile" required>
			</div>
			<div class="form-group">
				<input type="text" name="city" class="form-control" placeholder="Enter city" required>
			</div>
			<div class="form-group">
				<input type="text" name="state" class="form-control" placeholder="Enter state" required>
			</div>
			<div class="form-group">
				<input type="text" name="country" class="form-control" placeholder="Enter country" required>
			</div>
			<div class="form-group">
				<input type="text" name="zipcode" class="form-control" placeholder="Enter zipcode" required>
			</div>
			<div class="form-group">
				<textarea name="address" class="form-control" placeholder="Enter address" required></textarea>
			</div>

		</div>
		<div class="payment-area">
			<div class="radio">
			  <label><input type="radio" name="payment" value="cod" checked> Cash ON Delivery</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="payment" value="voguepay"> Voguepay</label>
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-warning" name="checkout" value="checkout">Complete Process</button>
		</div>

	</form>
<?php endif;?>
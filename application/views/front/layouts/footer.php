
	<!-- START: footerWrapper  -->
	<section id="footerWrapper">
		
		<!-- START: footer area  -->
		<div class="footerArea">
			<div class="mycontainer">
				
				<div class="row">

					<div class="col-12 col-sm-12 col-md-6 col-lg-4">

						<h3>Contact Info</h3>

						<p><?= $this->common->getSettingData("contact-info")?> </p>

						<h5>Phone N0.</h5>
						<p><?= $this->common->getSettingData("phone")?> </p>

						<h5>E-mail Id</h5>
						<p><?= $this->common->getSettingData("email")?> </p>

					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4">

						<h3>INFORMATION</h3>

						<ul class="footermenu">	
							<li><a href="<?= base_url('about-us')?>">About Us</a></li>
							<li><a href="<?= base_url('shipping-and-returns')?>">Shipping & Returns</a></li>
							<li><a href="<?= base_url('privacy-notice')?>">Privacy Notice</a></li>
							<li><a href="<?= base_url('conditions-of-use')?>">Conditions of Use</a></li>
							<li><a href="#">My Account</a></li>
							
							<li><a href="<?= base_url('online-support')?>">Online support</a></li>
							<li><a href="<?= base_url('help-and-faq')?>">Help & FAQs</a></li>
						</ul>

						<ul class="footermenu">
							<li><a href="<?= base_url('call-center')?>">Call Center</a></li>
							<li><a href="<?= base_url('contact-us')?>">Contact Us</a></li>
						</ul>

					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4">

						<h3>NEWSLETTER SIGNUP</h3>

						<p>Enter your email and we'll send you a coupon with 10% off your next order.</p>

						<form><input type="text" class="form-control" placeholder="E-mail">
							<input type="submit" name="Submit" value="Submit">
						</form>

						<h5>FIND US ON+</h5>	

						<ul class="footersocial">	
							<li><a href="<?= $this->common->getSettingData("facebook")?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?= $this->common->getSettingData("twitter")?>"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?= $this->common->getSettingData("linkedin")?>"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="<?= $this->common->getSettingData("youtube")?>"><i class="fab fa-youtube"></i></a></li>
						</ul>	

					</div>

				</div>	
				
			</div>			
		</div>
		<!-- END: footer area  -->
		
		<!-- START: copyright area -->
		<div class="copyrightArea">
			<div class="mycontainer">

				<p>
					<a href="#"><img src="<?= base_url('assets/front/')?>images/copyright_img.png" alt="alt"></a>
				</p>
				<p> <?= $this->common->getSettingData("copyright")?></p>
				
			</div>
		</div>
		<!-- END: copyright area -->
		
	</section>
	<!-- END: footerWrapper -->
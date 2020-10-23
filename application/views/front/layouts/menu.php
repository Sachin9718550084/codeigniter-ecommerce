<!-- START: header wrapper -->
		<div id="headerWrapper">
			<div class="mycontainer">

		   		<!-- START: logo area -->
		   		<div class="logo">

		   			<a href="<?= base_url();?>"><img src="<?= base_url('assets/front/')?>images/logo.png"></a>

		   		</div>
		   		<!-- END: logo area -->

		   		<!-- START: top right -->
		   		<div class="topRight">

		   			<!-- START: contact area -->
		   			<div class="contactArea">

		   				<form>
		   					<select>
		   						<option value="">All Categories</option>
		   						<?php foreach($this->common->getCategoryFrontList() as $s):?>
		   						<option value="<?= $s->seo_url;?>"><?= $s->title;?></option>
		   						<?php endforeach;?>
		   					</select>

		   					<input type="text" name="Search for products" placeholder="Search for products">

		   					<input type="submit" name="Search" value="Search">

		   				</form>

		   			</div>	
		   			<!-- END: contact area -->

		   			<!-- START: account area -->
		   			<div class="accountArea clearfix">

		   				<ul>
			   				<li><a href="<?= base_url('help-and-faq')?>"><img src="<?= base_url('assets/front/')?>images/userneed_img1.png" alt="">Need <span>Help <i class="fas fa-caret-down"></i></span></a></li>
			   				<li>
			   					<a href="<?= base_url('my-account')?>">
			   						<img src="<?= base_url('assets/front/')?>images/userneed_img2.png" alt="">
			   						Your <span>Account <i class="fas fa-caret-down"></i></span>
			   					</a>
			   				</li>
			   				<li><a href="<?= base_url('cart')?>"><img src="<?= base_url('assets/front/')?>images/userneed_img3.png" alt="">Shopping<span>Cart <i class="fas fa-caret-down"></i></span></a></li>
		   				</ul>

		   			</div>	
		   			<!-- END: account area	-->

		   		</div>	
		   		<!-- END: top right -->

		   	</div>		
		</div>   			
	   	<!-- END: header wrapper -->	

   		<!-- START: menu area -->
	   	<div class="menuArea">
	   		<div class="mycontainer">

	   			<ul>
	   				<li class="categories"><a href="<?= base_url('shop')?>"><i class="fas fa-bars"></i> All Categories <i class="fas fa-caret-down"></i></a>
	   					<ul class="categor_list">
	   						<?php foreach($this->common->getCategoryFrontList() as $s):?>
								<li>
									<a href="<?= base_url('category/'.$s->seo_url);?>">
										<?= $s->title;?>
									</a>
								</li>
							<?php endforeach;?>
	   						
						</ul>
	   				</li>
	   				<li><a href="#"><img src="<?= base_url('assets/front/')?>images/shope_img1.png" alt="alt"></a></li>
	   				<li><a href="#">Apple Sales & Support <i class="fas fa-caret-down"></i></a>
	   					<ul class="submenu one">
							<li><a href="<?= base_url()?>bulk-and-single-sales">Bulk And Single Sales With Nigerian Apple Care Coverage.</a></li>
	   						<li><a href="<?= base_url()?>repair-and-warranty">Repairs And Warranty</a></li>
	   						<li><a href="<?= base_url()?>bespoke-configured">Bespoke configured Apple Product</a></li>
	   						<li><a href="<?= base_url()?>applecare-protection">AppleCare Protection</a></li>
	   						<li><a href="<?= base_url()?>apple-giveback">Apple GiveBack</a></li>
						</ul>
	   				</li>
	   				<li class="training"><a href="#"> Data Recovery <i class="fas fa-caret-down"></i></a>
	   					<ul class="submenu">
	   						
	   					</ul>
	   				</li>
	   				<li><a href="#">Digital Engraving & Customization <i class="fa fa-caret-down"></i></a>
	   					<ul class="submenu two">
							<li><a href="<?= base_url()?>bespoke-engraving-on-all-apple-products">Bespoke Engraving On All Apple Products</a></li>
							<li><a href="<?= base_url()?>hardware-customization">Hardware Customization</a></li>
						</ul>
	   				</li>
	   				<li><a href="#">Application Development <i class="fa fa-caret-down"></i></a>
	   					<ul class="submenu three">
							<li><a href="<?= base_url()?>ios-and-mac-os-compatible-custom-app">IOS And Mac OS Compatible Custom App</a></li>
	   						<li><a href="<?= base_url()?>software-costomization">Software Customization</a></li>
	   						
						</ul>
					</li>
	   				<li><a href="<?= base_url('about-us');?>">About Us </a></li>
	   				<li><a href="<?= base_url('shop')?>"><img src="<?= base_url('assets/front/')?>images/shope_img.png" alt="alt">Shop Online</a></li>
	   				
	   			</ul>	

	   		</div>
	   	</div>	
	   	<!-- END: menu area -->	

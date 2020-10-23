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
	<section id="bannerWrapper">

		<!-- START: banner area -->	
		<div class="bannerArea">

			<div id="bannerSlider" class="owl-carousel owl-theme">

			<?php $sliders=$this->common->getSliderList();?>
			<?php foreach($sliders as $slider):?>
				<div class="item" style="background-image: url(<?=base_url('assets/uploads/'.$slider->image)?>);"></div>
			<?php endforeach;?>

				
			</div>	
			<div class="overlay">
				<div class="mycontainer">
					<h2>iphone xs max</h2>
					<h3>Dual 12MP rear cameras</h3>

					<ul>
						<li>2x faster sensor<span>for Smart HDR across your photos</span></li>
						<li>4K video<span>up to 60 fps</span></li>
						<li>1080p HD video<span>up to 60 fps</span></li>
					</ul>

					<div class="shop">

						<a class="btn" href="#">Shop Now</a>

					</div>	

				</div>
			</div>

		</div>
		<!-- END: banner area -->		

	</section>
	<!-- END: banner wrapper -->

	<!-- START: content wrapper -->
	<div id="middleWrapper">
		
		<!-- START: apple area -->
		<div class="appleArea">
			<div class="mycontainer">

				<h2>Apple Repair</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<a class="btn" href="<?= base_url('contact-us')?>">Contact Us</a>

			</div>
		</div>
		<!-- END: apple area -->		
		
		<!-- START: services area -->
		<div class="servicesArea">
			<div class="mycontainer">

				<div class="row">

					<div class="col-12 col-sm-12 col-md-6 col-lg-4">

						<img src="<?= base_url('assets/front/')?>images/services_img1.png" alt="">

						<h2>Mac Book Pro / Air Repair</h2>

						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu pariatur.</p>

						<a class="btn" href="#">Find More</a>

					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4">
						
						<img src="<?= base_url('assets/front/')?>images/services_img2.png" alt="">

						<h2>MacBook Repair & Services</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>

						<a class="btn" href="#">Find More</a>

					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4">
						
						<img src="<?= base_url('assets/front/')?>images/services_img3.png" alt="">

						<h2>Apple Mac Upgrades</h2>

						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia id est laborum.</p>

						<a class="btn" href="#">Find More</a>

					</div>	

				</div>	

			</div>
		</div>
		<!-- END: services	area -->

		<!-- START: official area -->
		<div class="officialArea">
			<div class="mycontainer">

				<div class="row">
					<div class="Offic_left col-12 col-sm-12 col-md-6 col-lg-6">

						<h2>Official iPhone Unlock</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra magna ac placerat vestibulum lectus mauris ultrices.</p>

						<p>Nibh ipsum consequat nisl vel pretium lectus. Sit amet massa vitae tortor condimentum. Dignissim sodales ut eu sem integer vitae justo eget. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Mi quis hendrerit dolor magna eget est lorem ipsum. Leo in vitae turpis massa sed elementum tempus egestas. Magnis dis parturient montes nascetur. Imperdiet massa tincidunt nunc pulvinar sapien et. Vitae semper quis lectus nulla at.</p>

						<a class="btn" href="#">Find More</a>

					</div>

					<div class="Offic_right col-12 col-sm-12 col-md-6 col-lg-6">

						<img src="<?= base_url('assets/front/')?>images/officialArea_img.jpg" alt="">

					</div>	

				</div>	

			</div>
		</div>
		<!-- END: official area -->		

		<!-- START: cover area -->
		<div class="coverArea">
			<div class="mycontainer">

				<div class="row">
					<div class="col-12 col-12-6 col-md-6 col-lg-4">
						<div class="hard">
							<img src="<?= base_url('assets/front/')?>images/cover_img1.jpg" alt="">

							<div class="item">

								<h3>Transparent Clear <br>Hard Back Cover</h3>
								<strong>Upto 45% Off</strong>
								<a class="btn" href="#">Shop Now</a>

							</div>
						</div>	
					</div>
					<div class="col-12 col-12-6 col-md-6 col-lg-4">
						<div class="hard">
							<img src="<?= base_url('assets/front/')?>images/cover_img2.jpg" alt="">

							<div class="item">

								<h3>Hardness Tempered <br>Glass for iPhone Xs Max </h3>
								<strong>Upto 45% Off</strong>
								<a class="btn" href="#">Shop Now</a>

							</div>
						</div>	
					</div>
					<div class="col-12 col-12-6 col-md-6 col-lg-4">
						<div class="hard">
							<img src="<?= base_url('assets/front/')?>images/cover_img3.jpg" alt="">

							<div class="item">

								<h3>Earphone Stereo <br>Headset</h3>
								<strong>Upto 45% Off</strong>
								<a class="btn" href="#">Shop Now</a>

							</div>
						</div>	
					</div>

				</div>

			</div>
		</div>
		<!-- END: cover area -->

		<!-- START: macbook area -->
		<div class="macbookArea">	
			<div class="mycontainer">

				<div class="row">
					<div class="macbook col-12 col-sm-12 col-md-6 col-lg-6">

						<img src="<?= base_url('assets/front/')?>images/macbook_img1.jpg" alt="">

						<div class="item">
							<h3>MacBook Pro</h3>
							<strong>Upto 45% Off</strong>

							<a class="btn" href="#">Shop Now</a>

						</div>	
						
					</div>
					<div class="macbook col-12 col-sm-12 col-md-6 col-lg-6">

						<img src="<?= base_url('assets/front/')?>images/macbook_img2.jpg" alt="">

						<div class="item">
							<h3>Iphone XR</h3>
							<strong>NEW LAUNCH</strong>

							<a class="btn" href="#">Shop Now</a>

						</div>	
						
					</div>	
				</div>	

			</div>
		</div>
		<!-- END: macbook area -->
<?php 

if($this->common->getSalesData()):
$argaurav=$this->common->getSalesData();

?>
		<!-- START:  ends area -->
		<div class="endsArea">
			<div class="overlay">
				<div class="mycontainer">

					
					<ul class="sale">
						<li>ON SALE</li>
						<li>Ends in <span id="days1"></span> Days <span id="hours1"></span>H : <span id="minutes1"></span>M : <span id="seconds1"></span>S </li>
						<li> &nbsp;&nbsp;</li>
					</ul>	

					<div id="definitely" class="owl-carousel">

					<?php foreach(explode(",",$argaurav->value) as $pro_id):?>
						<?php if($this->common->getSingleProductData($pro_id)):
							$p=$this->common->getSingleProductData($pro_id);
							?>
						<div class="item">

							<figure><img src="<?= base_url('assets/uploads/'.$this->common->imageGet($p->featureImage));?>" alt="alt"></figure>

							
							<h3><?= $p->title?></h3>
							<?php if($p->saleing_price!=""):?>
								<p><strike>N</strike> <del><?= number_format($p->price,2)?></del> <?= number_format($p->saleing_price,2)?></p>
							<?php else:?>
								<p><strike>N</strike> <?= number_format($price,2)?></p>
							<?php endif;?>
						<a href="<?= base_url('product/'.$p->seo_url)?>"><span>View </span></a>
						</div>
						<?php endif; ?>
					<?php endforeach;?>
					</div>

				</div>
			</div>
		</div>
		<!-- END: ends area -->
<?php endif;?>
		<!-- START: starts area -->
		<div class="startsArea">
			<div class="mycontainer">

				<div class="row">

					<div class="col-12 col-sm-6 col-md-6 col-lg-6">

						<img src="<?= base_url('assets/front/')?>images/starts_img.jpg" alt="">

					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-6">

						<div class="item">
							<h3>Starts<span>9am - 4pm</span></h3>

							<a class="btn" href="#">Shop Now</a>

						</div>	

					</div>

				</div>	

			</div>
		</div>
		<!-- END: starts area -->

		<!-- START: pickup area -->
		<div class="pickupArea">
			<div class="mycontainer">

				<ul>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/pickup_img.png" alt=""></figure></a>Call Us</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/pickup_img1.png" alt=""></figure></a>Pick Up</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/pickup_img2.png" alt=""></figure></a>Repair</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/pickup_img3.png" alt=""></figure></a>Payment</li>
					<li><a href="#"><figure><img src="<?= base_url('assets/front/')?>images/pickup_img4.png" alt=""></figure></a>Delivery</li>
				</ul>

			</div>	
		</div>	
		<!-- END: pickup area -->

	</div>
	<!-- END: content wrapper -->
	

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
<script>
	<?php if($this->common->getSalesData()): ?>
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('<?= date('M d, Y 23:59:59',strtotime($argaurav->end_date))?>').getTime(),
    x = setInterval(function() {    

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days1').innerText = Math.floor(distance / (day)),
        document.getElementById('hours1').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes1').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds1').innerText = Math.floor((distance % (minute)) / second);

      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

    }, second);
<?php endif;?>
  </script>

</body>
</html>
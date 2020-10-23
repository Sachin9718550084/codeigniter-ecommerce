<!DOCTYPE html>
<html>
<head>

	<title><?= $product->meta_title?> | Maccenter</title>

	<meta name="keywords" content="key, words" />	
	<meta name="description" content="Website description" />
	
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
	<div id="middleWrapper">

		<!-- START: breadcrumb area -->
		<div class="breadcrumbArea">
			<div class="mycontainer">

				<ul>
					<li><a href="<?= base_url();?>">Home</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active">Products</li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->
<div class="mycontainer">

			<!-- START: product area -->
	<div class="proddetailArea">
		
				<div class="row">
					
					<div class="detailLeft col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						
							<div class="carousel-inner">
								
								<div class="carousel-item active">
								<img src="<?= base_url('assets/uploads/'.$this->common->imageGet($product->featureImage));?>" alt="">
								</div>
								<?php foreach($this->common->getGalleriesImageProduct($product->id) as $i):?>
								<div class="carousel-item">
								<img src="<?= base_url().'assets/products/'.$i->image;?>" alt="">
								</div>
								<?php endforeach;?>

							</div>

							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>

							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>

							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><img src="<?= base_url('assets/uploads/'.$this->common->imageGet($product->featureImage));?>" alt=""></li>
							<?php foreach($this->common->getGalleriesImageProduct($product->id) as $i):?>
								<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""><img src="<?= base_url().'assets/products/'.$i->image;?>" alt=""></li>
							<?php endforeach;?>
							</ol>

						</div>

					</div>

					<div class="detailright col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
						
						<p><span class="stock in">in stock</span></p>

						<h2><?= $product->title?></h2>

					<!-- 	<p class="star"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="grey fas fa-star"></i> <em>4.7 ( 304 Reviews)</em></p> -->
<?php if($product->saleing_price!=""):?>
						<p class="price"><del><strike>N</strike> <?= number_format($product->price,2)?></del> <strike>N</strike> <?= number_format($product->saleing_price,2)?></p>
<?php else:?>
<p class="price"><strike>N</strike> <?= number_format($product->price,2)?></p>
<?php endif;?>
						<p><?= $product->shortDescription?></p>

						
						<p class="actionbtn">
							<button type="button" class="btn my-green add-to-cart-gaurav" data-id="<?= $product->id;?>" data-url="<?= base_url('add-to-cart/'.$product->id)?>"><i class="fas fa-shopping-cart"></i> ADD TO CART</button> 
<?php if($this->session->has_userdata("user_email")):?>
							<a class="btn my-greenbor leftspacer gaurav-wish-list" data-id="<?= $product->id?>"  data-url="<?= base_url('add-to-wishlist/'.$product->id)?>"><i class="fas fa-bolt"></i> Wishlist</a></p>
<?php endif;?>

					</div>

				</div>
			</div>
		<!-- END: product area -->
			<div class="proddescArea">

				<ul class="nav">
					<li><a class="active show" data-toggle="tab" href="#description">Description</a></li>
					<li><a data-toggle="tab" href="#additionalinformation" class="">Additional information</a></li>
					<li><a data-toggle="tab" href="#reviews" class="">Reviews (5)</a></li>
					
				</ul>

				<div class="tab-content">

					<div class="tab-pane  active show" id="description">

						<?= $product->longDescription?>

					

					</div>
					<div class="tab-pane" id="additionalinformation">additionalinformation</div>
					<div class="tab-pane" id="reviews">reviews</div>
					

				</div>

			</div>
			<?php if(count($this->common->getProductRecent())>0):?>
			<!-- START: related area -->
			<div class="relatedArea">

				<h2>Recent <span>Products</span></h2>

				<div class="slider4items owl-carousel">
<?php foreach($this->common->getProductRecent() as $p):?>
	<?php $product=$this->common->getProductViaID($p->product_id);?>
					<div class="item">
					
						<div class="image"><a href="<?= base_url('product/'.$product->seo_url)?>"><img src="<?= base_url('assets/uploads/'.$this->common->imageGet($product->featureImage));?>" alt=""></a></div>

						<h3><a href="<?= base_url('product/'.$product->seo_url)?>"><?= $product->title?></a></h3>

						<?php if($product->saleing_price!=""):?>
						<p class="price"><del>$<?= number_format($product->price,2)?></del> $<?= number_format($product->saleing_price,2)?></p>
						<?php else:?>
						<p class="price">$<?= number_format($product->price,2)?></p>
						<?php endif;?>

						<div class="actionbtn"><button type="button" class="add-to-cart-gaurav" data-id="<?= $product->id;?>" data-url="<?= base_url('add-to-cart/'.$product->id)?>">ADD TO CART</button></div>

					</div>
<?php endforeach;?>

				</div>
			</div>
			<!-- END: related area -->
			<?php endif;?>
		</div>

	</div>
	<!-- END: content wrapper -->

	<?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->
<script>
	$(document).on("click",".add-to-cart-gaurav",function(){
		url=$(this).data("url");
		data='';
		$.post(url,data,function(data){
			data=JSON.parse(data);
			if(data.status==200){
				toastr.success(data.message);
			}else{
				toastr.error(data.message);
			}
		});
	});
	$(document).on("click",".gaurav-wish-list",function(){
		url=$(this).data("url");
		data='';
		$.post(url,data,function(data){
			data=JSON.parse(data);
			if(data.status==200){
				toastr.success(data.message);
			}else{
				toastr.error(data.message);
			}
		});
	});



</script>
</body>
</html>
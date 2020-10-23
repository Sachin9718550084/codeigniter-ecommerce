<!DOCTYPE html>
<html>
<head>

	<title>Wishlist | Maccenter</title>

	<meta name="keywords" content="Wishlist" />	
	<meta name="description" content="Wishlist" />
	
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

				<h1>My  <span>Wishlist</span></h1>
				
				<div class="row">
					<div class="col-md-12">
				
						<table class="table">
							<thead>
								<tr>
									<th>Sno.</th>
									<th>Product</th>
									
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach($data as $d):?>
								<?php $product=$this->common->getProductViaID($d->product_id);
									if($product):
								?>
									<tr>
										<td><?= $i++;?></td>
										<td>
											<a href="<?= base_url('product/'.$product->seo_url)?>">
												<img src="<?= base_url('assets/uploads/'.$this->common->imageGet($product->featureImage));?>" style="height:100px" alt="">
											<?= $product->title?>
												</a>
											</td>
										
										<?php if($product->saleing_price!=""):?>
										<td><del>$<?= number_format($product->price,2)?></del> $<?= number_format($product->saleing_price,2)?></td>
										<?php else:?>
										<td>$<?= number_format($product->price,2)?></td>
										<?php endif;?>
										<td>
											<button type="button" class="btn my-green add-to-cart-gaurav" data-id="<?= $product->id;?>" data-url="<?= base_url('add-to-cart/'.$product->id)?>"><i class="fas fa-shopping-cart"></i> </button> 
											<a href="<?= base_url('delete-to-wishlist/'.$d->id)?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
										</td>
									</tr>
								<?php endif;?>
								<?php endforeach;?>
							</tbody>
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
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

	<title><?= $category['meta_title'];?> | Maccenter</title>

	<meta name="keywords" content="<?= $category['meta_keywords'];?>" />	
	<meta name="description" content="<?= $category['meta_description'];?>" />
	
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
					<li ><a href="<?= base_url('shop')?>">Products</a></li>
					<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					<li class="active"><?= $category['title']?></li>
				</ul>

			</div>	
		</div>	
		<!-- END: breadcrumb area -->

			<!-- START: product area -->
		<div class="productArea">
			<div class="mycontainer">

				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-3">
					<?php $this->load->view("front/product/sidebar");?>

					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-9">

						<div class="sort">
							<h3>Sort By</h3>

							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-lin <?= isset($_GET['order'])?$_GET['order']=='new'?'active':'':'active';?>" href="<?= base_url('category/'.$category['seo_url'])?>?order=new">Newest First</a></li>
								<li class="nav-item"><a class="nav-lin <?= isset($_GET['order'])?$_GET['order']=='low'?'active':'':'';?>" href="<?= base_url('category/'.$category['seo_url'])?>?order=low">Price -- Low to High</a></li>
								<li class="nav-item"><a class="nav-lin <?= isset($_GET['order'])?$_GET['order']=='high'?'active':'':'';?>" href="<?= base_url('category/'.$category['seo_url'])?>?order=high">Price -- High to Low</a></li>
								
							</ul>
						</div>	

					<div class="productlistingArea" id="dataList">
					
				

							<div class="productItems">
								<div class="row" >


									<?php foreach($products as $p):?>
												<?php $d['p']=$p; $this->load->view("front/product/product",$d);?>
									<?php endforeach;?>

								</div>
							</div>
 <?php echo $this->ajax_pagination->create_links(); ?>

					</div>
						
					
					
				

					</div>	

				</div>	

			</div>	
		</div>	
		<!-- END: product area -->

		<!-- START: partners area -->
		
		<!-- END: partners area	-->

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
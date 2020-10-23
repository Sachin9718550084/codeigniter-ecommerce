
							<div class="productItems">
								<div class="row" >


									<?php foreach($products as $p):?>
												<?php $d['p']=$p; $this->load->view("front/product/product",$d);?>
									<?php endforeach;?>

								</div>
							</div>
 <?php echo $this->ajax_pagination->create_links(); ?>
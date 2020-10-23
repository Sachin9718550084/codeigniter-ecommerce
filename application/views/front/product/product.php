		<div class="item col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								
								<div class="image"><a href="<?= base_url('product/'.$p->seo_url)?>"><img src="<?= base_url('assets/uploads/'.$this->common->imageGet($p->featureImage));?>" style="height:300px" alt=""></a></div>

								<h3><a href="#"><?= $p->title?></a></h3>
<?php if($p->saleing_price!=""):?>
								<p><strike>N</strike> <del><?= number_format($p->price,2)?></del><?= number_format($p->saleing_price,2)?></p>
<?php else:?>
								<p><strike>N</strike> <?= number_format($price,2)?></p>
<?php endif;?>
								<div class="actionbtn"><button type="button" class="add-to-cart-gaurav" data-id="<?= $p->id;?>" data-url="<?= base_url('add-to-cart/'.$p->id)?>">ADD TO CART</button> </div>

							</div>
	<table class="table">
							<thead>
								<tr>
									<th>Sno.</th>
									<th>Product</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								<?php if(count($data)>0):?>
								<?php $i=1; $total=0;
									$tax=$this->common->getTax();
									


								 foreach($data as $d):?>
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
										<td><?= $d->quantity?></td>
										<?php if($product->saleing_price!=""):?>
										<td><del>$<?= number_format($product->price,2)?></del> $<?= number_format($product->saleing_price,2)?></td>
										<?php $total+=$product->saleing_price*$d->quantity;?>
										<?php else:?>
										<td>$<?= number_format($product->price,2)?></td>
										<?php $total+=$product->price*$d->quantity;?>
										<?php endif;?>
										<td>
											<a href="<?= base_url('cart-delete/'.$d->id)?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
										</td>
									</tr>
								<?php endif;?>
								<?php endforeach;?>
								<?php else:?>
									<tr>
										<td colspan="6" class="text-center text-danger">No any item on your cart</td>
									</tr>
								<?php endif;?>
							</tbody>
						</table>
						<?php if(count($data)>0):?>
							<?php $discount=$this->common->getDiscount($total);?>
						<table class="table">
							<tr>
								<td colspan="3" rowspan="4">
									<?php $coupan_valid=0; $errormessage=""; if($this->session->has_userdata("coupon")):
$coupan=$this->common->getCoupanData();
if($coupan){
$coupan_valid=1;
$type=$coupan->type=="percentage"?'%':'';
$price=$coupan->amount;
	?>
<p>Successfully Coupon apply</p>
<p>Coupon Code is <?= $coupan->code;?><?= $price?> <?= $type?></p>
	<button name="remove-coupon" id="coupon-remove" class="btn btn-warning">Remove</button>

<?php }else{
	$errormessage="Invalid Coupon Code";
}
										?>
									
							
									
									<?php endif;?>
<?php if($coupan_valid==1):?>
									
<?php else:?>
<p>Do you have coupon?</p>
									<input type="text" name="coupon" class="form-control" id="coupon-field">
									<button name="add-coupon" id="coupon-apply" class="btn btn-warning">Apply</button>

<?php endif;?>
<?php if($errormessage!=""):?>
<div class="alert alert-danger"><?= $errormessage;?></div>
	<?php endif;?>
								</td>
								<td>
									Total Price
								</td>
								<td>
									Tax
								</td>
								<td>
									Discount
								</td>

								<td>
									Grand Total
								</td>
							</tr>
							<tr>
								<td>$ <?= number_format($total,2)?></td>
								<td>$ <?= number_format($tax,2)?></td>
								<td>$ <?= number_format($discount,2)?></td>
								<td>$ <?= number_format($total+$tax-$discount,2)?></td>
							</tr>
						</table>
						<?php endif;?>

<div class="alert"></div>
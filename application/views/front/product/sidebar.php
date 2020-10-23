	<div class="sort">
							<h3>Filters</h3>
						</div>

						<h4>SHOP BY CATEGORIES</h4>

						<ul class="iphone">
							
						<?php foreach($this->common->getCategoryFrontList() as $s):?>
								<li>
									<a href="<?= base_url('category/'.$s->seo_url);?>">
										<?= $s->title;?> <i class="fas fa-caret-right"></i>
									</a>
								</li>
							<?php endforeach;?>
						</ul>

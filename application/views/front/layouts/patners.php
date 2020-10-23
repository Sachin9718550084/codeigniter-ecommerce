<div class="partnersArea">
			<div class="mycontainer">

				<ul>
				<?php $clients=$this->common->getOurClientList();?>
				<?php foreach($clients as $client):?>
					<li><a href="#"><img src="<?= base_url('assets/uploads/'.$client->image);?>" alt="<?= $client->title?>"></a></li>
				<?php endforeach;?>	
				</ul>

			</div>
		</div>
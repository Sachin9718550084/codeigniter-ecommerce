<?php if($this->session->has_userdata("success")):?>
	<div class="alert alert-success"><?= $this->session->success;?></div>
<?php endif;?>

<?php if($this->session->has_userdata("danger")):?>
	<div class="alert alert-danger"><?= $this->session->danger;?></div>
<?php endif;?>

<?php if($this->session->has_userdata("info")):?>
	<div class="alert alert-info"><?= $this->session->info;?></div>
<?php endif;?>


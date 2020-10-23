<?php if($this->session->has_userdata("success")):?>
	<div class="alert alert-success text-center alert-dismissible">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<?= $this->session->success;?>
  	</div>
<?php endif;?>

<?php if($this->session->has_userdata("danger")):?>
	<div class="alert alert-danger text-center alert-dismissible">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<?= $this->session->danger;?>
  	</div>
<?php endif;?>

<?php if($this->session->has_userdata("info")):?>
	<div class="alert alert-info text-center alert-dismissible">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?= $this->session->info;?>
	</div>
<?php endif;?>
<?php if($this->session->has_userdata("warning")):?>
	<div class="alert alert-warning text-center alert-dismissible">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?= $this->session->warning;?>
	</div>
<?php endif;?>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
</script>


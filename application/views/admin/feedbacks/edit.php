<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App title -->
   <title><?= $this->config->item('title')?></title>

<?php $this->load->view('admin/include/style'); ?>

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
<div id="status">
<div class="spinner">
<div class="spinner-wrapper">
<div class="rotator">
<div class="inner-spin"></div>
<div class="inner-spin"></div>
</div>
</div>
</div>
</div>
</div>

<!-- Begin page -->
<div id="wrapper">

<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/left-sidebar'); ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">


<div class="row">
<div class="col-xs-12">
<div class="page-title-box">
<h4 class="page-title">Feedbacks Manager</h4>
<ol class="breadcrumb p-0 m-0">
<li><a href="<?= base_url('admin/sliders')?>">List Feedbacks</a></li>
<li class="active">Edit Feedback</li>
</ol>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->


<div class="row">

<div class="col-sm-12">
<?php $this->load->view('admin/include/message');?>
<div class="card-box">
<form class="form-horizontal" method="post" role="form" action="<?= base_url('admin/feedbacks/update/'.$data->id)?>" enctype="multipart/form-data" id="edit-feedbacks">
<div class="row">
<div class="col-md-12">

    <div class="form-group">

        <div class="col-md-6">
            <label class="control-label"> Name</label>
            <input type="text" class="form-control" placeholder="Enter Name..." name="name" value="<?= $data->name;?>">
        </div>
     
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <label class="control-label">Email</label>
            <input type="text" class="form-control"  value="<?= $data->email;?>" placeholder="Enter Link..." name="email">
        </div>
       
        <div class="col-md-6">
            <label class="control-label">Mobile</label>
            <input type="text" class="form-control"  value="<?= $data->mobile;?>" placeholder="Enter Link..." name="mobile">
        </div>
       
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <label class="control-label">Message</label>
            <textarea class="form-control" placeholder="Enter Message..." name="message"><?= $data->message;?></textarea>
        </div>
    </div>

    <div class="form-group text-right m-b-0">
        <div class="col-md-12">
            <button class="btn btn-success waves-effect waves-light" type="submit" name="add-slider" value="save slider">Submit</button>
            <button type="reset" class="btn btn-default waves-effect m-l-5">Cancel</button>
        </div>
    </div>

</div>

</div>
</form>

</div>
</div>
</div>
<!-- end row -->


</div> <!-- container -->

</div> <!-- content -->

<?php $this->load->view('admin/include/footer'); ?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php $this->load->view('admin/include/right-sidebar'); ?>

</div>
<!-- END wrapper -->



<?php $this->load->view('admin/include/script'); ?>
<script src="<?= base_url();?>assets/js/detect.js"></script>
<script src="<?= base_url();?>assets/js/fastclick.js"></script>
<script src="<?= base_url();?>assets/js/jquery.blockUI.js"></script>
<script src="<?= base_url();?>assets/js/waves.js"></script>
<script src="<?= base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url();?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url();?>assets/plugins/switchery/switchery.min.js"></script>

<script src="<?= base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="<?= base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?= base_url();?>assets/pages/jquery.autocomplete.init.js"></script>

<script type="text/javascript" src="<?= base_url();?>assets/pages/jquery.form-advanced.init.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/plugins/parsleyjs/parsley.min.js"></script>       

<script type="text/javascript">
$(document).ready(function() {
$('form').parsley();
});
$(function () {
$('#demo-form').parsley().on('field:validated', function () {
var ok = $('.parsley-error').length === 0;
$('.alert-info').toggleClass('hidden', !ok);
$('.alert-warning').toggleClass('hidden', ok);
})
.on('form:submit', function () {
return false; // Don't submit form for this demo
});
});
</script>

</body>
</html>
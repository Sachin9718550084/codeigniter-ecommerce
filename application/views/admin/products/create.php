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
<style>
    .d-none{
        display:none;
    }
</style>
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
<h4 class="page-title">products Manager</h4>
<ol class="breadcrumb p-0 m-0">
<li><a href="<?= base_url('admin/blog-categories')?>">List products</a></li>
<li class="active">Add products</li>
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
<form class="form-horizontal" method="post" role="form" action="<?= base_url('admin/products/store')?>" enctype="multipart/form-data" id="products">
<div class="row">
      <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item active">
      <a class="nav-link " data-toggle="tab" href="#home">Basic Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#menu4">More Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Images</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Attributes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">SEO</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
     <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" name="title" type="text" id="title">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="seo_url">Seo Url</label>
            <input class="form-control" name="seo_url" type="text" id="seo_url">
            <span class="text-danger"></span>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="publish">Publish</label>
            <select class="form-control" id="publish" name="publish"><option selected="selected" value="">Choose Publish status</option><option value="0">false</option><option value="1">true</option></select>
            <span class="text-danger"></span>
        </div>
    </div>



    <div class="col-md-6">
        <div class="form-group">
            <label for="manufacture">Manufacture</label>
            <?= form_dropdown("manufacture_id",$this->common->getManufactureListProduct(),null,["class"=>"form-control"]);?>
            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="brand">Brand</label>
             <?= form_dropdown("brnad_id",$this->common->getBrandListProduct(),null,["class"=>"form-control"]);?>
        </div>
    </div>



    <div class="col-md-6">
        <div class="form-group">
            <label for="category">Category</label>
            <?= form_dropdown("category",$this->common->getCategoryListProduct(),null,["class"=>"form-control"]);?>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" placeholder="Enter Price" min="0" max="999999" name="price" type="number" id="price">
            <span class="text-danger"></span>
        </div>
    </div>




    <div class="col-md-6">
        <div class="form-group">
            <label for="saleing_price">Saleing Price</label>
            <input class="form-control" placeholder="Enter Saleing Price" min="0" max="999999" name="saleing_price" type="number" id="saleing_price">
            <span class="text-danger"></span>
        </div>
    </div>
</div>    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="featureImage">FeatureImage</label>
            <input class="form-control" name="featureImage" type="file" id="featureImage">
            <span class="text-danger"></span>
                    </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Images">Images</label>
            <input class="form-control" multiple="multiple" name="images[]" type="file">
            <span class="text-danger"></span>
                    </div>
    </div>


</div>    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary btn-sm btn-add-attribute" >
  <span class="fa fa-plus"></span> Add Attribute 
</button>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-3"><strong>Group Attribute</strong></div>
    <div class="col-md-3"><strong>Attribute</strong></div>
    <div class="col-md-3"><strong>Value</strong></div>
    <div class="col-md-3"><strong>Action</strong></div>
</div>
<div class="attribute-field"></div>    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h4 class="text-warning text-center">Seo Section</h4>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input class="form-control" name="meta_title" type="text" id="meta_title">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="meta_keywords">Meta Keywords</label>
            <input class="form-control" name="meta_keywords" type="text" id="meta_keywords">
            <span class="text-danger"></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <textarea class="form-control" name="meta_description" cols="50" rows="10" id="meta_description"></textarea>
            <span class="text-danger"></span>
        </div>
    </div>
</div>    </div>
    <div id="menu4" class="container tab-pane fade"><br>
<!--       <h5 class=" text-warning" > Sale Section</h5>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="is_sale">Is Sale</label>
            <select class="form-control" id="isSale" name="is_sale"><option value="0">false</option><option value="1">true</option></select>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-6 isSale">
        <div class="form-group">
            <label for="sale_price">Sale Price</label>
            <input class="form-control" name="sale_price" type="number" id="sale_price">
            <span class="text-danger"></span>
        </div>
    </div>
</div>
<div class="row isSale">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sale_start_date">Sale Start Date</label>
            <input class="form-control" name="sale_start_date" type="text" id="sale_start_date">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="sale_end_date">Sale End Date</label>
            <input class="form-control" name="sale_end_date" type="text" id="sale_end_date">
            <span class="text-danger"></span>
        </div>
    </div>
</div>
 -->
<!-- 
<h5 class=" text-warning" > Stock Section</h5>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="stock">Stock</label>
            <input class="form-control" name="stock" type="text" id="stock">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="is_stock_management">Is Stock Management</label>
            <select class="form-control" id="is_stock_management" name="is_stock_management"><option value="0">false</option><option value="1">true</option></select>
            <span class="text-danger"></span>
        </div>
    </div>
</div>
<div class="row is_stock_management">
    <div class="col-md-6">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input class="form-control" name="quantity" type="text" id="quantity">
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="col-md-6 ">
        <div class="form-group">
            <label for="sku">Sku</label>
            <input class="form-control" name="sku" type="number" id="sku">
            <span class="text-danger"></span>
        </div>
    </div>
</div> -->


<h5 class=" text-warning" > Description Section</h5>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="shortDescription">ShortDescription</label>
            <textarea class="form-control" name="shortDescription" cols="50" rows="10" id="shortDescription"></textarea>
            <span class="text-danger"></span>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="longDescription">LongDescription</label>
            <textarea class="form-control" name="longDescription" cols="50" rows="10" id="longDescription"></textarea>
            <span class="text-danger"></span>
        </div>
    </div>
</div>
    </div>
  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" value="add product" name="add-products"><span class="fa fa-save"></span> Save</button>
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



<script type="text/javascript" src="<?= base_url();?>assets/pages/jquery.form-advanced.init.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/plugins/parsleyjs/parsley.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>      
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?= base_url();?>assets/ckeditor/ckeditor.js"></script>
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
<script>
        $(".isSale").hide();
    $(".is_stock_management").hide();
  $(function(){
    
    CKEDITOR.replace( 'shortDescription',{ allowedContent:true} );
    CKEDITOR.replace( 'longDescription',{ allowedContent:true} );
   
  });
  $(document).on("change","#isSale",function(){
    var isSale=$(this).val()
    if(isSale==1){
        $(".isSale").show()
    }else{
        $(".isSale").hide()
    }
});
$(document).on("change","#is_stock_management",function(){
    var isSale=$(this).val()
    if(isSale==1){
        $(".is_stock_management").show()
    }else{
        $(".is_stock_management").hide()
    }
});
$(function(){
    $("input[name=sale_start_date],input[name=sale_end_date]").datepicker()
});
$(document).on("click",".btn-add-attribute",function(){
    $html=$(".attribute-data").html();
    $(".attribute-field").before($html);

});
$(document).on("click",".btn-delete-attribute",function(){

    $(this).parent().parent().parent(".rows-data").remove()
});

$(document).on("change",".attribute_group_field",function(){
    val=$(this).val();
    var that=$(this);
    data={id:val}
    url="<?= base_url('get-via-check-box-product')?>";
    $.post(url,data,function(data){
      (that.parent().parent(".row").find('.attribute_id_ajax').html(data))
    });


});
</script>
    <div class="attribute-data d-none" >
 
 <div class="rows-data">
<br><br>
<div class="row">
    <div class="col-md-3">
     
      <?= form_dropdown("attribute_group_id[]",$this->common->getAllAttributeGroups(),null,["class"=>"form-control attribute_group_field"]);?>
    </div>
    <div class="col-md-3">
      <select class="form-control attribute_id_ajax" name="attribute_id[]"><option selected="selected" value="">choose attribute</option></select>
    </div>
    <div class="col-md-3">

      <input class="form-control" placeholder="Enter Value" name="value[]" type="text">
    </div>
    <div class="col-md-3"> 
      <a href="javaScript:void(0)" class="btn btn-danger btn-sm btn-delete-attribute"> <span class="fa fa-trash"></span> </a>  
    </div>
</div>
</div>
</div> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App title -->
<title>Forget Password | <?= $this->config->item('title')?></title>

<?php $this->load->view('admin/include/style'); ?>

</head>


<body>

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

<!-- HOME -->
<section>
<div class="container-alt">
<div class="row">
    <div class="col-sm-12">
 
        <div class="wrapper-page">

            <div class="m-t-40 account-pages">
                <div class="text-center account-logo-box">
                    <h2 class="text-uppercase">
                        <a href="./" class="logo"><?= $this->config->item('logo_name')?><i class="mdi mdi-cube"></i></a>
                    </h2>
                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                </div>
                <div class="account-content">
                    <form class="form-horizontal" method="post" id="forgetpassword-form">
  <?php $this->load->view('admin/include/message');?>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" required="" placeholder="Username" name="email">
                            </div>
                        </div>


                        <div class="form-group text-center m-t-30">
                            <div class="col-sm-12">
                                <a href="<?= base_url('admin')?>" class="text-muted"><i class="fa fa-lock m-r-5"></i> Login</a>
                            </div>
                        </div>

                        <div class="form-group account-btn text-center m-t-10">
                            <div class="col-xs-12">
                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="forget-password" value="Forget Password">Forget Password</button>
                            </div>
                        </div>

                    </form>

                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- end card-box-->


            <div class="row m-t-50 hide">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="#" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper -->

    </div>
</div>
</div>
</section>
<!-- END HOME -->

<?php $this->load->view('admin/include/script'); ?>
<?php $this->load->view("admin/include/validate");?>
</body>
</html>
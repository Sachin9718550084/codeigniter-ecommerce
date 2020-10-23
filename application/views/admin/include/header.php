<style>
    label.error{
        color:red;
    }
</style>
<!-- Top Bar Start -->
<div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
<a href="<?= base_url('admin/dashboard')?>" class="logo"><?= $this->config->item('logo_name')?><i class="mdi mdi-cube"></i></a>
<!-- Image logo -->
<!--<a href="index.html" class="logo">-->
    <!--<span>-->
        <!--<img src="assets/images/logo.png" alt="" height="30">-->
    <!--</span>-->
    <!--<i>-->
        <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
    <!--</i>-->
<!--</a>-->
</div>

<!-- Button mobile view to collapse sidebar menu -->
<div class="navbar navbar-default" role="navigation">
<div class="container">

    <!-- Navbar-left -->
    <ul class="nav navbar-nav navbar-left">
        <li>
            <button class="button-menu-mobile open-left waves-effect waves-light">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
       
    </ul>

    <!-- Right(Notification) -->
    <ul class="nav navbar-nav navbar-right">
      
        <li class="hide">
            <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                <i class="mdi mdi-settings"></i>
            </a>
        </li>

        <li class="dropdown user-box">
            <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                <img src="<?= base_url()?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
            </a>

            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                <li>
                    <h5>Hi, <?= $this->session->userAdminName;?></h5>
                </li>
                <li><a href="<?= base_url('admin/change-profile')?>"><i class="ti-user m-r-5"></i> Change Profile</a></li>
                <li><a href="<?= base_url('admin/settings')?>"><i class="ti-settings m-r-5"></i> Settings</a></li>
                <li><a href="<?= base_url('admin/change-password')?>"><i class="mdi mdi-account-key m-r-5"></i> Change Password</a></li>
                <li><a href="<?= base_url('admin/logout')?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
            </ul>
        </li>

    </ul> <!-- end navbar-right -->

</div><!-- end container -->
</div><!-- end navbar -->
</div>
<!-- Top Bar End -->
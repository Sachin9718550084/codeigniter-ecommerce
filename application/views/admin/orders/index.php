<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App title -->
        <title><?= $this->config->item('title')?></title>

        <!-- DataTables -->
        <link href="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


        <?php $this->load->view('admin/include/style.php'); ?>

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
            

            <?php $this->load->view('admin/include/header.php'); ?>
            <?php $this->load->view('admin/include/left-sidebar.php'); ?>

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
                                    <h4 class="page-title">Orders Manager </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><a href="#">Orders Manager</a></li>
                                        <li class="active">List</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="col-sm-6"><h4 class="m-t-0 header-title"><b>View Orders Manager</b></h4></div>
                                    
                                    </div>
                                    
                                    <?php $this->load->view('admin/include/message');?>
                                    <table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th>User</th>
                                          <th>Total</th>
                                          <th>Invoice ID</th>
                                          <th>Payment Type</th>
                                            <th>Payment Status</th>
                                            <th>Status</th>
                                            <th class="col-md-2">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

<?php $i=1; foreach($data as $single):?>                                        
<tr>
<td><?= $i++;?></td>
<td><?= $this->common->getUserDetail($single->user_id)?></td>
<td><?= $single->grand_total?></td>
<td><?= $single->invoice_id?></td>
<td><?= $single->payment?></td>

<td><button class="btn btn-success waves-effect waves-light btn-xs"><?= $single->payment_status?></button></td>
<td><button class="btn btn-success waves-effect waves-light btn-xs"><?= $single->status?></button></td>
<td>
   
    <a href="<?= base_url('admin/orders/edit/'.$single->id)?>" class="btn btn-icon btn-sm waves-effect waves-light btn-info"> <i class="fa fa-eye"></i> </a>
  <!--   <a  href="<?= base_url('admin/orders/delete/'.$single->id)?>"  class="btn btn-icon btn-sm waves-effect waves-light btn-danger" onclick="return confirm('Are you want to delete?')"> <i class="fa fa-trash-o"></i> </a> -->
</td>
</tr>
<?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container -->

                </div> <!-- content -->

                <?php $this->load->view('admin/include/footer.php'); ?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <?php $this->load->view('admin/include/right-sidebar.php'); ?>
            

        </div>
        <!-- END wrapper -->

        <?php $this->load->view('admin/include/script'); ?>   

        

        <script src="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="<?= base_url();?>assets/pages/jquery.datatables.init.js"></script>        

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "<?= base_url();?>assets/plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>
     
    </body>
</html>
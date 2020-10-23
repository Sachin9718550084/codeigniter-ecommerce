<!DOCTYPE html>
<html>
<head>

    <title>Maccenter</title>

    <meta name="keywords" content="key, words" />   
    <meta name="description" content="Website description" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- change into index, follow -->
    <?php $this->load->view("front/layouts/head");?>
</head>

<body>
<!-- BEGIN: wrapper -->
<div id="wrapper">
    
    <?php $this->load->view("front/layouts/menu");?>
    <!-- START: banner wrapper -->

    <!-- END: banner wrapper -->

    <!-- START: content wrapper -->
    <div id="middleWrapper" class="loginwrapper">

        <!-- START: breadcrumb area -->
        <div class="breadcrumbArea">
            <div class="mycontainer">

                <ul>
                    <li><a href="<?= base_url();?>">Home</a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i></a></li>
                    <li class="active">VougePay Payment</li>
                </ul>

            </div>  
        </div>  
        <!-- END: breadcrumb area -->

        <div class="mycontainer">
            <div class="usersArea" style="min-height:400px;">

                <h1>VougePay  <span>Payment</span></h1>
                
                <div class="row">
                
                    <div class="col-md-12">
                <script src="//voguepay.com/js/voguepay.js"></script>
<form method='POST' id='payform' action='//voguepay.com/pay/' onsubmit='return false;'>
    <input type='hidden' name='v_merchant_id' value='DEMO' />
    <input type='hidden' name='merchant_ref' value='' />
    <input type='hidden' name='memo' value='Payment from maccenter' />
    <input type="hidden" name="cur" value="NGN">
  
    <input type='hidden' name='developer_code' value='5f605cd630e00' />
    <input type='hidden' name='store_id' value='25' />

    
    <input type='hidden' name='notify_url' value="<?= base_url('notification')?>" />

    <input type='hidden' name='success_url' value="<?= base_url('thank-you')?>" />
    <input type='hidden' name='fail_url' value="<?= base_url('failed')?>" />

    <input type='hidden' name='total' value='<?= $data->grand_total?>' />


     <input type='hidden' name='name' value='<?= $data->name?>'/>
    <input type='hidden' name='address' value='<?= $data->address?>'/>
    <input type='hidden' name='city' value='<?= $data->city?>'/>
    <input type='hidden' name='state' value='<?= $data->state?>'/>
    <input type='hidden' name='zipcode' value='<?= $data->zipcode?>'/>
    <input type='hidden' name='email' value='<?= $data->email?>'/>
    <input type='hidden' name='phone' value= '<?= $data->mobile?>'/>

    
    <input type='hidden' name='closed' value='closedFunction'>
    <input type='hidden' name='success' value='successFunction'>
    <input type='hidden' name='failed' value='failedFunction'>
    <input type='hidden' name='demo' value='true'>

    <input type='image' src='//voguepay.com/images/buttons/buynow_blue.png' alt='Submit' />
</form>

                    </div>
                </div>
                
            </div>
        </div>

    </div>
    <!-- END: content wrapper -->

    <?php $this->load->view("front/layouts/footer");?>
    
</div>
<!-- END: wrapper -->

<script>
    url="<?= base_url('data-save-after-payment?invoice='.$_GET['invoive'])?>";

    closedFunction=function() {
        alert('window closed');
    }

     successFunction=function(transaction_id) {


        $.post(url,{transaction_id:transaction_id,status:"Approved"},function(data){
            location.href="<?= base_url('thank-you')?>";
        });
    }

     failedFunction=function(transaction_id) {
         $.post(url,{transaction_id:transaction_id,status:"Cancel"},function(data){
            location.href="<?= base_url('failed')?>";
        });
    }
</script>
<script>
    Voguepay.init({form:'payform'});


   
        
    
</script>


</body>
</html>
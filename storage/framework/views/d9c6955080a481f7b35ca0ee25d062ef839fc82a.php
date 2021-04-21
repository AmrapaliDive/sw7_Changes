<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main_style.css" rel="stylesheet" media="all">





<?php $__env->startSection('content'); ?>

<style>
   
/* parsley */
input.parsley-success,
  select.parsley-success,
  textarea.parsley-success {
    color: #468847;
    background-color: #DFF0D8;
    border: 1px solid #D6E9C6;
  }

  input.parsley-error,
  select.parsley-error,
  textarea.parsley-error {
    color: #B94A48;
    background-color: rgba(0, 0, 0, 0.18);
    border: 1px solid #EED3D7;
  }

  .parsley-errors-list {
    margin: 2px 0 3px;
    padding: 0;
    list-style-type: none;
    font-size: 0.9em;
    line-height: 0.9em;
    opacity: 0;

    transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
  }

  .parsley-errors-list.filled {
    opacity: 1;
  }

  .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   color:#cc0000;
  }
</style>


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Franchisee Registration</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->


<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
<!-- create a new account -->


<div class="page-wrapper font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                <h4 class="checkout-subtitle"><b>Step 3 : Bank Account Registration </b></h4>
                    <form role="form" method="post" action="<?php echo e(url('/account/insert')); ?>" id="validate_form" enctype="multipart/form-data">
                       @csrf()
                    <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                            <input class="input--style-2" type="text"id="account_name" name="account_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Account Holder Name">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                                
                                <input class="input--style-2" type="text"id="bank_name" name="bank_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Bank Name">                                
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                            <input class="input--style-2" type="text"id="account_no"name="account_no"  required autofocus placeholder="Bank Account Number">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                               
                                <input class="input--style-2" type="text"id="ifsc_code" name="ifsc_code" data-parsley-pattern="^[A-Za-z]{4}\d{7}$" data-parsley-length="[11,11]" data-parsley-pattern-message="This field only contains alphabets and numbers" data-parsley-length-message="Name Should be of 11 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter IFSC Code" >                                
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                      <div class="col-2" style="padding-top:25px;" >
                        <div class="input-group">
                        <b style="font-size:16px;">Bank Proof (Image/PDF)</b>
                            <input class="input--style-2" type="file" id="pdf" class="form-control" name="pdf"  required autofocus >
                        </div>
                      </div>
                        </div>
                            <button class="btn btn--radius btn--green" type="submit">Next</button>
                        </div>
                        <center><div class="loading" id="loading" style="display:none"></div></center>  
          
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<br><br>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<script src="<?php echo e(asset('assets/js/parsley.js')); ?>"></script>

<script>
$(document).ready(function(){
    $('#validate_form').parsley();

});

</script>

<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
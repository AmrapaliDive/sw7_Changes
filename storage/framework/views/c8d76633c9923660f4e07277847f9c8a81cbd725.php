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



    .text{
        margin-left:100px;
        margin-right:100px;
    }
    .vl {
  border-left: 2px solid black;
  height: 30px;
}

.form-control{
    height: 30px;
}
.form-label{
    font-size: 12px;
    color:black ;
}

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
<?php if(\Session::has('success')): ?>
    <div class="alert alert-success">
        <ul>
            <center><li><?php echo \Session::get('success'); ?></li></center>
        </ul>
    </div>
<?php endif; ?>
	


<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
<!-- create a new account -->


<div class="page-wrapper font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                <h4 class="checkout-subtitle"><b>Step 2 : Document Registration </b></h4>
                    <form role="form"  id="validate_form"  method="post" action="<?php echo e(url('/document/insert')); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?php echo e(isset($user->id) ? $user->id : ''); ?>">
                       @csrf()
                    <div class="row row-space">
                      <div class="col-2" style="padding-top:25px;">
                        <div class="input-group">
                            <input class="input--style-2" type="text"id="pan_no" name="pan_no"  data-parsley-pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" data-parsley-length="[10,10]" data-parsley-pattern-message="Enter Correct PAN Number" data-parsley-length-message="PAN should be  of 10 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter PAN Number">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                                <b style="font-size:16px;">Choose PAN Card</b>
                                <input class="input--style-2" type="file" id="pan_pdf" placeholder="Image" name="pan_pdf" required>                                
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                      <div class="col-2" style="padding-top:25px;">
                        <div class="input-group">
                            <input class="input--style-2" type="text"id="aadhar_no" name="aadhar_no"  data-parsley-pattern="[0-9]{4}[0-9]{4}[0-9]{4}" data-parsley-length="[12,12]" data-parsley-pattern-message="Enter Correct PAN Number" data-parsley-length-message="PAN should be  of 10 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Aadhaar Number">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                                <b style="font-size:16px;">Choose Adhaar Card</b>
                                <input class="input--style-2" type="file" id="aadhar_pdf" placeholder="Image" name="aadhar_pdf" required>                                
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                      <div class="col-2" style="padding-top:25px;">
                        <div class="input-group">
                            <input class="input--style-2" type="text"id="gst_number" class="form-control"  name="gst_number"  data-parsley-pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}" data-parsley-length="[15,15]" data-parsley-pattern-message="Enter Correct GST Number" data-parsley-length-message="PAN should be  of 15 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter GST Number">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                                <b style="font-size:16px;">GST Certificate (Upload Image/PDF File) </b>
                                <input class="input--style-2" type="file" class="form-control file " id="gst_pdf" placeholder="Image" name="gst_pdf" required>                                
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                      <div class="col-2" style="padding-top:25px;">
                        <div class="input-group">
                            <input class="input--style-2"type="text" id="shopack_number" class="form-control" name="shopack_number" required autofocus placeholder="Enter Shop Act Number Number	">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                                <b style="font-size:16px;">Shop Act Certificate </b>
                                <input class="input--style-2" type="file" class="form-control file " id="showpack_pdf" placeholder="Image" name="showpack_pdf" required>                                
                              </div>
                            </div>
                        </div>
                        <div class="p-t-30">
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
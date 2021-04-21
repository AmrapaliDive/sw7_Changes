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


<div class="container">

<form class="well form-horizontal" method="POST" action="<?php echo e(url('/account/insert')); ?>" enctype='multipart/form-data' id="contact_form">

<?php echo e(csrf_field()); ?>


<!-- Form Name -->
<center><h3><b>Step 3 : Bank Account Registration </b></h3></center><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Account Holder Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="account_name" required autofocus  placeholder="Enter Account holder Name" >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Bank Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control" type="text"  name="bank_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Bank Name" >
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Bank Account Number</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control" type="text"  name="account_no"  required autofocus placeholder="Bank Account Number" >
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >IFSC Code</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control" type="text" name="ifsc_code" data-parsley-pattern="^[A-Za-z]{4}\d{7}$" data-parsley-length="[11,11]" data-parsley-pattern-message="This field only contains alphabets and numbers" data-parsley-length-message="Name Should be of 11 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter IFSC Code"  >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Bank Proof (Image/PDF)</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="pdf" required >
</div>
</div>
</div>




<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNext <span class="glyphicon glyphicon-send" style="color:black;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>


</form>
</div>
</div><!-- /.container -->

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
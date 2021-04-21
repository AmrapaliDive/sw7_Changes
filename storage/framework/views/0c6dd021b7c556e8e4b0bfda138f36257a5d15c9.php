<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
	<div class="container col-md-12" style="margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> <?php echo e(session('success')); ?>

		</div>
		</div><br>
	<?php endif; ?>
	<?php if(session('danger')): ?>
  <br><br><br>

	<div class="container col-md-12">
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<center><strong>Error!</strong> <?php echo e(session('danger')); ?></center>
		</div>
		</div><br>
	<?php endif; ?>
  <br><br><br>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Register</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
<!-- create a new account -->
<div class="col-md-12 col-sm-6 create-new-account">
	<center><h4 class="checkout-subtitle"><b>SW7 Customer Registration</b></h4></center>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form" action="<?php echo e(url('/customer/insert')); ?>" id="validate_form" method='POST' enctype='multipart/form-data'>
    <?php echo e(csrf_field()); ?>

    <div class="col-md-4"style="margin-bottom:5px;">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">First Name <span>*</span></label>
        <!-- <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label> -->
      	<input type="text"id="first_name" class="form-control "  name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter First Name">
    
           </div>
          </div> 
          <div class="col-md-4"style="margin-bottom:5px;">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Last Name <span>*</span></label>
      <input type="text" id="last_name" class="form-control "  name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,20) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Last Name">
      </div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
        <div class="form-group">
		     <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
             <input type="email" id="email" name="email"class="form-control "  data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Enter Email "  required>
       	</div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Conatct No. <span>*</span></label>
            <input type="text" id="contact"  autofocus  class="form-control " name="contact" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" required autofocus  placeholder="Enter Contact Number">
       </div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Pincode <span>*</span></label>
		    <input type="text"id="pincode" class="form-control " name="pincode"  data-parsley-pattern="[0-9]+$" data-parsley-length="[6,6]" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (6) digits" data-parsley-trigger="keyup" required autofocus placeholder="Enter Pincode">
      	</div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Address <span>*</span></label>
            <input type="text" id="address"  class="form-control "name="address" required autofocus  placeholder="Enter Address">
        </div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Profile Image <span>*</span></label>
            <input type="file" class="form-control  file" id="image" placeholder="Image" name="image"/>
        </div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1"> Password <span>*</span></label>
		    <input type="password" name="password" id="c_pass" class="form-control" placeholder="Password"  required data-parsley-length="[6,16]" data-parsley-length-message="Password should be of min (6) and max (16) length" data-parsley-trigger="keyup" />
    	</div>
        </div>
        <div class="col-md-4"style="margin-bottom:5px;">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required data-parsley-equalto="#c_pass" data-parsley-trigger="keyup" />
   	    </div>
        </div>
	   	 <center><div class="col-md-12"style="margin-bottom:5px;">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="
			padding-top: 9px;
			 padding-bottom: 9px;
			border-bottom-width: 8px;
			padding-left: 50px;
			padding-right: 50px;
			font-size:14px;">Sign Up</button>
          </div></center>
    	</form>
	
	
</div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

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
    /* font-size: 0.5em; */
    line-height: 0.5em;
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/parsley.js')); ?>"></script>

<script>
$(document).ready(function(){
        $('#validate_form').parsley();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<style>

.card-2 .card-heading {
    background: url('/images/student.jpeg') top left/cover no-repeat;
    width: 39.1%;
    display: table-cell;
}

.card-2 .card-body {
    display: table-cell;
    padding: 60px 29px;
    padding-bottom: 88px;
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


<div class="container">

<form class="well form-horizontal" role="form" action="<?php echo e(url('/enrolForAdmissionInsert')); ?>" id="validate_form" method='POST' enctype='multipart/form-data'>
<?php echo e(csrf_field()); ?>


<!-- Form Name -->
<legend><center><h2><b>SW7 Student Registration</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color:black;"></i></span>
<input placeholder="First Name" class="form-control"  type="text" name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" data-parsley-trigger="keyup" required autofocus>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color:black;"></i></span>
<input placeholder="Last Name" class="form-control"  type="text" name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,20) Charachters" data-parsley-trigger="keyup" required autofocus>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" style="color:black;"></i></span>
<input placeholder="E-Mail Address" class="form-control"  type="email" name="email" data-parsley-type="email" data-parsley-trigger="keyup" autofocus required>
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone" style="color:black;"></i></span>
<input placeholder="(+91)" class="form-control" type="text" autofocus  name="student_contact" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" required autofocus>
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Address</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="permanent_address" required autofocus  placeholder="Enter Address" >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Aadhar No.</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="aadhar_no" required autofocus  placeholder="Enter Aadhar No." >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Aadhar PDF</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="aadhar_pdf" required >
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Passport Image</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="passport_image" required >
</div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color:black;"></i></span>
<input class="form-control"  type="password" name="password" id="s_password" placeholder="Password"  required data-parsley-length="[6,16]" data-parsley-length-message="Password should be of min (6) and max (16) length" data-parsley-trigger="keyup">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Confirm Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color:black;"></i></span>
<input class="form-control"  type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required data-parsley-equalto="#s_password" data-parsley-trigger="keyup">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send" style="color:black;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
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

    <script src="<?php echo e(asset('assets/js/jquery-1.12.4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-ui.js')); ?>"></script>
    
<script src="<?php echo e(asset('assets/js/parsley.js')); ?>"></script>
    
<script>
  $(document).ready(function(){
      $('#validate_form').parsley();
      
  });


  var array = []
    $(function(){
        $( "#dob" ).datepicker({
        dateFormat: "yy-mm-dd",
        beforeShowDay: function(date)
                        {
                            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                            return [ array.indexOf(string) == -1 ]
                        },
        maxDate: new Date('2006', '11' , '31'),
        changeMonth: true,
        changeYear: true
        });
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
<style>
    .text{
        margin-left:10px;
        margin-right:10px;
    }
    .vl {
  border-left: 2px solid black;
  height: 30px;
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
<?php $__env->startSection('content'); ?>


<!-- <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html"></a></li>
				<li class='active'></li>
			</ul>
		</div>
	</div>
</div> -->

<div class="body-content">
	<div class="container" style="margin-right:40px;width:1050px;">
		<div class="sign-in-page">
<!-- create a new account -->
<div class="col-md-12 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Student- Update Profile</h4>
	<p class="text title-tag-line">Update Your Profile</p>
	<form class="register-form outer-top-xs" role="form"  action="<?php echo e(url('/student/update')); ?>" id="Validate_form"class="text" method='POST' enctype='multipart/form-data' >
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="id" id="id" value="<?php echo e(isset($user->id) ? $user->id : ''); ?>">
           
            <div class="col-md-4">
            <div class="form-group">
                <label class="info-title" for="name" ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" class="form-control" style="font-size:1.5rem" name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" required autofocus placeholder="Enter First Name" value="<?php echo e($student->first_name); ?>">
            </div>
       </div>

       <div class="col-md-4">
            <div class="form-group">
                <label  class="info-title" for="name" ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Last Name</label>
				    <input type="text"id="last_name" class="form-control" style="font-size:1.5rem" name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,20) Charachters" required autofocus placeholder="Enter Last Name" value="<?php echo e($student->last_name); ?>">
            </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label  class="info-title" for="dob" ><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;Profile Image</label>
					      <input type="file" class="form-control file" id="passport_image" style="font-size:1.4rem" placeholder="Image" name="passport_image"/>
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                   <label  class="info-title" for="email" >&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="font-size:1.5rem" autofocus placeholder="Enter Email"  required value="<?php echo e($student->email); ?>" readonly>
                </div>
                </div>

                <div class="col-md-4">
               <div class="form-group">
                <label  class="info-title" for="cnumber" >&nbsp;<i class="fa fa-phone"></i>&nbsp;Parent Contact </label>
			      	<input type="text" id="parent_contact" style="font-size:1.5rem" autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="parent_contact" data-parsley-pattern-message="Contact should be in digits only" data-parsley-length-message="Contact Number should be of (10) digits" required autofocus  placeholder="Enter Contact Number" value="<?php echo e($student->parent_contact); ?>">
                </div>
               </div>

               <div class="col-md-4">
               <div class="form-group">
                <label  class="info-title" for="cnumber" >&nbsp;<i class="fa fa-phone"></i>&nbsp;Student Contact </label>
			      	<input type="text" id="student_contact" style="font-size:1.5rem" autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" data-parsley-pattern-message="Contact should be in digits only" data-parsley-length-message="Contact Number should be of (10) digits" class="form-control" name="student_contact" required autofocus  placeholder="Enter Contact Number" value="<?php echo e($student->student_contact); ?>">
                </div>
               </div>
              
                <div class="col-md-4">
                <div class="form-group">
                <label  class="info-title" for="name" ><i class="fa fa-map-pin" aria-hidden="true"></i>&nbsp;Pincode</label>
				        <input type="text"id="pincode" class="form-control" style="font-size:1.5rem" name="pincode"  maxlength="6" data-parsley-pattern="[0-9]+$" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (6) digits" required autofocus placeholder="Enter Pincode" value="<?php echo e($student->pincode); ?>">
                </div>
                </div>
               
                 <div class="col-md-4">
                <div class="form-group">
                <label  class="info-title" for="address" ><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Permanent Address</label>
				<input type="text" id="permanent_address" style="font-size:1.5rem" class="form-control" name="permanent_address" required autofocus  placeholder="Enter Address" value="<?php echo e($student->permanent_address); ?>">
                </div>
       </div>

        <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update Profile</button>
          </div></center>
	</form>
	
	
	
    </div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
<!--
    <div class="container" style="margin-top:0px;">

<div class="col-md-10 col-md-offset-2" style="margin-top:25px;">
<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">User Form </b></center>
<hr><br>
        <form action="<?php echo e(url('/customer/update')); ?>" id="Validate_form"class="text" method='POST' enctype='multipart/form-data' style="height:550px;border:1px solid black;border-radius:25px;padding-left:100px;padding-top:15px; ">
        <?php echo e(csrf_field()); ?>

        
        
        
            <input type="hidden" name="id" id="id" value="<?php echo e(isset($user->id) ? $user->id : ''); ?>">
            <div class="col-md-5">
            <div class="form-group">
                <label for="name" style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" class="form-control" style="font-size:1.5rem" name="first_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter First Name" value="<?php echo e($student->first_name); ?>">
            </div>
       </div>
       <div class="col-md-5">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Last Name</label>
				    <input type="text"id="last_name" class="form-control" style="font-size:1.5rem" name="last_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter Last Name" value="<?php echo e($student->last_name); ?>">
            </div>
            </div>
            <div class="col-md-5">
      
            <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Profile Image</label>
					      <input type="file" class="form-control file" id="image" style="font-size:1.4rem" placeholder="Image" name="image"/>
            </div>
            </div>
            <div class="col-md-5">
      
            <div class="form-group">
                <label for="email" class=" " style="color:black ;">&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="font-size:1.5rem" autofocus placeholder="Enter Email"  required value="<?php echo e($student->email); ?>">
                </div>
                </div>
                <div class="col-md-5">
      
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact </label>
			      	<input type="text" id="contact" style="font-size:1.5rem" autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="contact" required autofocus  placeholder="Enter Contact Number" value="<?php echo e($student->contact); ?>">
                </div>
               </div>
                 <!-- <div class="col-md-5">
      
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;City</label>
      			  	<input type="text"id="city" class="form-control" style="font-size:1.5rem" name="address"  required autofocus placeholder="Enter Address" value="<?php echo e($student->address); ?>">
                </div>
                </div> --
                <div class="col-md-5">
      
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Pincode</label>
				        <input type="text"id="pincode" class="form-control" style="font-size:1.5rem" name="pincode"  maxlength="6" required autofocus placeholder="Enter Pincode" value="<?php echo e($student->pincode); ?>">
                </div>
                </div>
                 <div class="col-md-5">
      
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;Address</label>
				<input type="text" id="address" style="font-size:1.5rem" class="form-control" name="address" required autofocus  placeholder="Enter Address" value="<?php echo e($student->address); ?>">
                </div>
                </div>   <div class="col-md-5">
             
      
       	        <!-- <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Date Of Birth</label>
					<input type="date" placeholder="Enter Birth Date" class="form-control" style="font-size:1.5rem" id="dob" name="dob" required value="<?php echo e($student->dob); ?>">
				</div> --
</div>
           
            
            <script>
											function myFunction() {
											var x = document.getElementById("myDIV");
											if (x.style.display === "none") {
												x.style.display = "block";
											} else {
												x.style.display = "none";
											}
											}
										</script>
								

									<div id="myDIV" style="display:none">
                  <div class="col-md-5">	
                  <div class="form-group">
                 <label for="password"  style="color:black ;">Password</label>
                 <input type="password" name="password" id="password" class="form-control" placeholder="Password"   data-parsley-length="[6,16]" data-parsley-length-message="password should be of min (6) and max (16) length" data-parsley-trigger="keyup" />
            </div></div>
            <div class="col-md-5">	
            <div class="form-group">
                 <label  style="color:black ;">Confirm Password</label>
                 <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password"  data-parsley-equalto="#password" data-parsley-trigger="keyup" />
            </div></div>
									</div>	 
             
             
							 <div class="col-md-5" style="margin-top:30px;">	
										<!--	<input type="button" name="answer" onclick="myFunction()" value="Change the password ?"></input> -->
						<!--		<br>	 
            <button type="submit" class="btn btn-primary" style="width:100px;height:30px;font-size:15px;margin-top:30px;" name="submit">Save Data</button>
            </div>
        </form>
    
    </div>
</div>-->
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(asset('assets/js/parsley.js')); ?>"></script>
    <script>

  $(document).ready(function(){
    $('#Validate_form').parsley();
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>
    User Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>

.success {
  border-color: #368c0b;
  color: #368c0b;
}

.success:hover {
  background-color: #368c0b;
  color: white;
}
 
@import  url('https://fonts.googleapis.com/css?family=Numans');

html,body{

background-size: cover;
background-repeat: no-repeat;
height: 100%;

}


.social_icon span{

}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{

}

.social_icon{

}

.input-group-prepend span{
width: 150px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}


/* 
:hover{
color: black;
background-color: white;
} */

.links{
color: white;
}


.links a{
margin-left: 4px;
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
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- <body style="background-image: url('<?php echo e(asset('/images/bg_1.jpg')); ?>');">
<div class="col-md-12 col-sm-6" style="height: 100%;margin-top:90px;">
	<div class=" " style=" ">
		<div class="card" style="background-color: rgba(0,0,0,0.5) !important; margin-left: 26px; width: 316px;padding: 15px;height: 409px;">
			<div class="card-header">
				<h1 style=" color: white;"><strong>Sign In</strong></h1>
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
				
			</div>
			<div class="card-body">
            <form action="<?php echo e(route('user.signin')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

					<div class="input-group form-group">
						<div class="input-group-prepend" >
							<span class="input-group-text"><i class="fa fa-user" style="color:black" ></i></span>
						</div>
						<input type="text"id="email" class="form-control" name="email" required autofocus style="width:290px;height:45px" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="color:black"></i></span>
						</div>
						<input type="password" id="password" class="form-control" name="password" required style="width:290px;height:45px"placeholder="Password">
					</div>
					<div class="row align-items-center remember" style="color:black;font-size:18px;">
					&nbsp;&nbsp;	<input type="checkbox" >Remember Me
					</div>
                    &nbsp;&nbsp;
					<div class="form-group">
						<input type="submit" value="Login" style="color: black;background-color: #FFC312;width: 100px;" class="btn float-right">
					</div>
				</form>
			</div>
			<div class="card-footer" style="color:black; font-size:18px;">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="<?php echo e(route('user.signup')); ?>" style="color: white;">&nbsp;Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="<?php echo e(route('password.email')); ?>" style="color: white;">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
 <br><br>
          
           

   

 

</body> -->

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
		
				<!-- Sign-in -->			
<div class="col-md-12 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
  <form class="register-form outer-top-xs"  action="<?php echo e(url('user/login')); ?>" method="post" id="Validate_form">
  <?php echo e(csrf_field()); ?>

						<div class="col-md-10 col-md-offset-1	">
            <?php if(Session::has('success')): ?>
    <div class="text-center ">
      <div id="charge-message" class="alert alert-success">
        <center><?php echo e(Session::get('success')); ?></center>
      </div>
    </div>
  </div>
  <?php endif; ?>
    <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
  <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
        <input type="text" id="email" name="email" class="form-control" style="height:35px"  data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Enter your Email "  required>
           	</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
        <input type="password" id="password" name="password"  style="height:35px"autofocus placeholder="Enter Password"  class="form-control" required>
       <!-- <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" > -->
  
      </div>
		<div class="radio outer-xs">
		  	<label>
       <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small">Don't have an account? <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value"><i class="icon fa fa-lock"></i>&nbsp; Register</span><b class="caret"></b></a>
              <ul class="dropdown-menu">
             
                <li><a href="<?php echo e(url('/customer')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Register as Customer</a></li>
                <li><a href="<?php echo e(url('/franchisee')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Register as Franchisee </a></li>
                <li><a href="<?php echo e(url('/student_registration')); ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Register as Student </a></li>
                
               
               </ul>
            </li>
            <!-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a> 
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>-->
          </ul>
		  	</label>
		  	<a href="<?php echo e(route('password.email')); ?>" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
    <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="
			padding-top: 9px;
			 padding-bottom: 9px;
			border-bottom-width: 8px;
			padding-left: 50px;
			padding-right: 50px;
			font-size:14px;
		">Login</button>
          </div></center>	</form>					
</div>
<!-- Sign-in -->
</div></div></div>
		</div><!-- /.sigin-in--><br><br>
<!--
<div class="container-fluid" style="margin-top:40px;">
<div class="col-md-12">
   <div class="col-md-4 col-md-offset-4" style="border:1px solid #368c0b;border-radius:25px; ">
        <h2 style="color:#368c0b; margin-bottom:5px; margin-top:13px;"><center><b>Login</b></center></h2><br>
   
			<form action="<?php echo e(url('user/login')); ?>" method="post" id="Validate_form">
                        <?php echo e(csrf_field()); ?>

						<div class="col-md-10 col-md-offset-1	">
            <?php if(Session::has('success')): ?>
    <div class="text-center ">
      <div id="charge-message" class="alert alert-success">
        <center><?php echo e(Session::get('success')); ?></center>
      </div>
    </div>
  </div>
  <?php endif; ?>
    <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
						
		

					<div class="form-group">
                <label for="email" class=" " >&nbsp;<i class="fa fa-user"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="height:35px"  data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Enter your Email "  required>
                </div>
           	
                <div class="form-group">
                <label for="password" class=" " >&nbsp;<i class="fa fa-lock"></i>&nbsp;Password</label>
                    <input type="password" id="password" name="password"  style="height:35px"autofocus placeholder="Enter Password"  class="form-control" required>
                </div>
           


					
                    &nbsp;&nbsp;
					<div class="form-group">
						<center><input type="submit" value="Login" class="btn success"></center>
					</div>
				</form>

				<div class="d-flex align-items-end " style="margin-bottom:20px;">
					<a href="<?php echo e(route('password.email')); ?>" style="color: #368c0b;">Forgot your password?</a>
				</div>
			<center><div class="d-flex justify-content-center links" style="color:black; margin-bottom:10px;">
					Don't have an account?<a href="<?php echo e(route('user.signup')); ?>" style="color: #368c0b;">&nbsp;Register</a>
				</div>
			</center>

	</div>
	</div>
</div>
</div>-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
    
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
  /* loader */
.loading {
  height: 0;
  width: 0;
  padding: 15px;
  border: 6px solid #ccc;
  border-right-color: #888;
  border-radius: 22px;
  -webkit-animation: rotate 1s infinite linear;
  /* left, top and position just for the demo! */
  /* position: relative;
  left: 45%;
  top: 15%; */
}

@-webkit-keyframes rotate {
  /* 100% keyframe for  clockwise.
     use 0% instead for anticlockwise */
  100% {
    -webkit-transform: rotate(360deg);
  }
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
                    <h2 class="title">SW7 Franchisee Registration</h2>
                    <h4 class="checkout-subtitle"><b>Step 1 : Franchisee Registration</b></h4>
                    <form method="POST" action="<?php echo e(url('/franchisee/insert')); ?>" id="validate_form" enctype='multipart/form-data'>
                    <?php echo e(csrf_field()); ?>

                    <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                            <input class="input--style-2" type="text" id="first_name" name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter First Name">
                        </div>
                      </div>
                      <div class="col-2">
                                <div class="input-group">
                                <input class="input--style-2" type="text" id="last_name" name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Last Name should be between (1,20) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Last Name">                                
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                                <input class="input--style-2" type="email" id="email" name="email" data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Enter Email "  required>                                
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                                <input class="input--style-2" type="text" id="contact_no1"  autofocus data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" name="contact_no1" required autofocus  placeholder="Enter Contact Number	">                                
                        </div>
                      </div>
                    </div>
                    <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                                <input class="input--style-2" type="text" id="address" name="address" required autofocus  placeholder="Enter Address">                                
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                                <input class="input--style-2" id="city" name="city"  data-parsley-length="[3,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Name Should be between (2,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="e.g. Pune (Pimpri)" >                                
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                        <input id="description"  class="input--style-2 "name="description" required autofocus  placeholder="Enter Description" rows="3">
                                                
                        </div>
                      </div>
                      <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                                <input class="input--style-2" type="password" name="password" id="pass" placeholder="Password"  required data-parsley-length="[6,16]" data-parsley-length-message="password should be of min (6) and max (16) length" data-parsley-trigger="keyup" >                                
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                                <input class="input--style-2" type="password" name="confirm_password" id="confirm_password" class="form-control "placeholder="Confirm Password" data-parsley-equalto="#pass" data-parsley-trigger="keyup" required>                                
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

    function checkForm(form) // Submit button clicked
    {
        //
        // check form input values
        //
        //alert("Hello");
        //if(form.name.value!=''&&form.mobno.value!=''&&form.address.value!='')
    //     if(form.first_name.value!='' && form.last_name.value!='' && form.email.value!='' && form.dob.value!='' && form.contact_no1.value!=''  && form.contact_no2.value!='' && form.city.value!='' && form.address.value!='' && form.landmark.value!='' && form.qualification.value!='' && form.qualification_pdf.value!='' && form.office_time.value!='' && form.contact_person.value!='' && form.contact_person_contact.value!='' && form.description.value!='' && form.password.value!='' && form.confirm_password.value!='')
    //     {
    //         form.submit.disabled = true;
    //         //form.action.innerHTML = "Please wait...";
    //         document.getElementById("loading").style.display='block';
    //         form.submit.innerHTML = "Please wait...";

    //         return true;
    //    }
    //     else
    //     {
    //         return false;
    //     }
    // }
    $(document).ready(function(){
        $('#validate_form').parsley();
    });
    </script>
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
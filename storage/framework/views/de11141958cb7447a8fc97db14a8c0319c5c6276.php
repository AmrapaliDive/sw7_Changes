<?php $__env->startSection('styles'); ?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>">
  
<style>

.form-control{
  border-radius:15px;
  border-color:gray;
  font-family:times new roman;
  font-size:16px;
}

.form-label{
  font-size: 16px;
}
	/*h2 a:hover {
text-decoration: none;
} */
/* Small devices (landscape phones, 544px and up) */
@media (max-width: 544px) {
  h2 {font-size:1.5rem;}
	h4 {font-size:1.0rem;} /*1rem = 16px*/
}
@media (min-width: 544px) {
  h2 {font-size:2rem;}
	h4 {font-size:1.3rem;} /*1rem = 16px*/
}

/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {
    h2 {font-size:2.5rem;}
		h4 {font-size:1.5rem;} /*1rem = 16px*/
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
    h2 {font-size:3rem;}
		h4 {font-size:1.7rem;}/*1rem = 16px*/
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    h2 {font-size:3.5rem;}
		h4 {font-size:2.0rem;} /*1rem = 16px*/
}
@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.6s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}


#box {
  margin: 30px auto 0 auto;
  animation: appear 4s  ;
}
@keyframes  appear {
  0% {
    transform: translate3d(-500px, 0px, 0px);
    opacity: 0;
  }
  50%{
    opacity: 0.2;
    transform: translate3d(-350px, 0px, 0px);
  }
  100%{
    opacity: 1;
    transform: translate3d(0px, 0px, 0px);
  }
}

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
    background-color: #F2DEDE;
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
   color:#ff0000;
  }




  
</style>
<?php echo $__env->yieldContent('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/jquery.scrollex.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.justifiedGallery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/lightgallery-all.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/articles/showarticle.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="page-header"style="margin-top: 0em;">
					<h1 class="text-center text-dark" style="font-weight:bolder;" id='box'>Get in Touch With us</h1>
				</div>
			</div>
		</div>
		</div>
	
	<div class="container">
		<div class="row">
			
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 col-lg-offset-2">
				<h2 class="text-center"><a style="color:black; text-decoration:none;" class="fa fa-facebook fa-1x" href="https://www.facebook.com/sw7india"></a></h2>
				<h4 class="text-center"><a style="color:black; text-decoration:none;" class="white-links" href="https://www.facebook.com/sw7india"><span style="font-family:Comic Sans MS;color:black; text-decoration:none;" >Facebook</span></a></h4>
			</div>
			
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				<h2 class="text-center"><a class="fa fa-envelope fa-1x" style="color:black; text-decoration:none;"  aria-hidden="true"href="mailto:customercare@crestokart.com" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;"></a></h2>
				<h4 class="text-center"><a style="color:black; text-decoration:none;" class="white-links" href=" mailto:support@sw7infomedia.com" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;"><span style="font-family:Comic Sans MS;color:black;">Mail</span></a></h4>
			</div>
	
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<h2 class="text-center"><a style="color:black; text-decoration:none;" class="fa fa-whatsapp fa-1x"  href="https://wa.me/+91-703-002-3002"></a></h2>
				<h4 class="text-center"><a style="color:black; text-decoration:none;" class="white-links" href="https://wa.me/+91-703-002-3002"><span style="font-family:Comic Sans MS;color:black;">Whatsapp</span></a></h4>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
			<h2 class="text-center"><a style="color:black; text-decoration:none;" class="fa fa-instagram fa-1x"  href="https://www.instagram.com/sw7_india?r=nametag"></a></h2>
				<h4 class="text-center"><a style="color:black; text-decoration:none;" class="white-links" href="https://www.instagram.com/sw7_india?r=nametag"><span style="font-family:Comic Sans MS;color:black;">Instagram</span></a></h4>
			</div>
		</div>
		<hr>
	</div>


			<div class="container" >
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 groove " style="">
          <h3 style="text-align:center"><b style="font-family:Rockwell;color:black;">Send us a Message</b></h3>


          <!-- <form name="sentMessage" id="contactForm" novalidate> -->
         
           
          <!-- <form name="sentMessage" id="contactForm" novalidate> -->
          <form id="validate_form"  method="post" action="<?php echo e(url('/contact/insert')); ?>" name="sentMessage">
						<?php echo e(csrf_field()); ?>

            <div class="control-group form-group">
              <div class="controls">
                <label for="name" class="form-label"><i class="fa fa-user"></i>&nbsp;Full Name:</label>
                <input type="text" class="form-control" id="name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Name should be between (3,17) Charachters" data-parsley-trigger="keyup" placeholder="Enter Name" data-validation-required-message="Please enter your name." name="name" required >
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label for="cnumber" class="form-label"><i class="fa fa-phone"></i>&nbsp;Phone Number:</label>
                <input type="text" class="form-control" id="phone" required name="phone" placeholder="Phone No" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label for="naemailme" class="form-label"><i class="fa fa-envelope"></i>&nbsp;Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." name="email" placeholder="Email" required data-parsley-type="email"  data-parsley-trigger="keyup">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label for="message" class="form-label"><i class="fa fa-list"></i>&nbsp;Message:</label>
                <textarea rows="8" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" data-parsley-length-message="Message length should be of 1000 characters" style="resize:none" name="message" placeholder="Message"></textarea>
              </div>
            </div>
            <div id="success"></div>
              
              <center><button type="submit" style="background-color:#3665f3; font-size: 18px; border-radius: 7px; width:200px; height:50px;" class="btn btn-primary" id="sendMessageButton">Send Message</button></center> &nbsp;&nbsp;&nbsp;

          </form>  <br><br> 
        </div>
       
         
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " >
          <h3 style="text-align:center"><b style="font-family:Rockwell; color:black;">Contact Details </b></h3>
					<!-- <i class="fa fa-address-card-o" style="font-size:36px"></i> -->
         
						
				
          
           
          <p> 
            <h3 style="font-family: sans-serif;font-size:16px; margin-top:40px; margin-left:80px;">&nbsp;<i class="fa fa-phone blink"  style="font-size:22px;"></i>&nbsp; Customer care no <a src="tel:703-002-3002" style="text-decoration:none; cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7030023002 </a> </h4>
            </p>
          <p>
            <h3 style="font-family: sans-serif;font-size:16px; margin-left:80px;">&nbsp;<i class="glyphicon glyphicon-envelope blink" style="font-size:22px;"> </i> &nbsp;Customer care mail <a style="text-decoration:none; cursor:pointer" src="mailto:support@sw7infomedia.com" >&nbsp;&nbsp;&nbsp;&nbsp;support@sw7infomedia.com</a><h4>
             
          </p>
		  <div class="col-md-6 contact-map outer-bottom-vs">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3781.109166385315!2d73.7749205!3d18.614159!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b90a1d3f2089%3A0x64f8cb8917dc0fc3!2sSW7%20INFOMEDIA%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1601556972615!5m2!1sen!2sin" width="600" height="340" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
         

              </div><br><br>
              
		
		
</div>


</div>
</div>

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
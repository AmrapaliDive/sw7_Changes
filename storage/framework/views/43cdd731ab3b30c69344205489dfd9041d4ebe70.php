<?php $__env->startSection('title'); ?>
Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
blink {
  -webkit-animation: 3s linear infinite condemned_blink_effect; // for Android
  animation: 4s linear infinite condemned_blink_effect;
  text-shadow: black 2px 2px 1px;
}
@-webkit-keyframes condemned_blink_effect { // for Android
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
@keyframes  condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

/* The overlay start */
.noscroll { overflow: hidden; }

.overlay {
   position: fixed;
   overflow-y: scroll;
   top: 0; right: 0; bottom: 0; left: 0;

  }
   .overlay[aria-hidden="true"] { display: none; }
   .overlay[aria-hidden="false"] { display: block; }



/* this code is not strictly necessary: just to make this demo a bit pleasant */

.overlay .div {
   margin: 20vh auto;
   width: 80%;
   max-width: 650px;
   padding: 30px;
   min-height: 20vh;
   background: rgba(255,255,255, .95);
}
.overlay {
    background:  rgba(40,40,40, .75);
}

* { box-sizing: border-box; }
.open-overlay { padding: 1em 1em; cursor: pointer;}
pre { background: #fafafa; padding: 15px; border: 1px #ccd dashed; }
pre + p { margin: 5vh 0; }

/* The overlay End */
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-md-8 col-md-offset-2">
        
            <div id="checkout-error" class="alert alert-danger <?php echo e(!Session::has('error') ? 'hidden' : ''); ?>">
                <?php echo e(Session::get('error')); ?>

            </div>
            <body >
<div  class="container-fluid">
<div class="" style="margin-top:30px">
<div class="col-md-12">
<h1 style="color:black"class="page-header">Checkout <br>(Confirm your Order-Online Payment)</h1>
            <h3 style="color:black"><span style="color:black">Your total:</span>  ₹  <?php echo e($total); ?></h3>

<form  method="post" action="<?php echo e(url('/savedetails')); ?>" id="payuform">
<?php echo e(csrf_field()); ?>


<div class="col-xs-12">
<div class="row">

                    <div class=" col-xs-12">
                        <div class="form-group">
                            <label style="color:black"for="name"><i class="fa fa-user"></i>&nbsp;Name</label>
                            <input type="text" id="name" class="form-control" name="name"   value="<?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?>" pattern="[A-Za-z\s]+" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label style="color:black"for="name"><i class="fa fa-phone"></i>&nbsp;Mobile Number</label>
                            <input type="text" id="mobno" class="form-control" name="mobno"  value="<?php echo e($customer->contact); ?>"  pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}"  maxlength=10  required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label style="color:black" for="address"><i class="fa fa-address-card"></i>&nbsp;Address</label>
                            <input type="text" id="address1" class="form-control" name="address1" value="<?php echo e($customer->address); ?>" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group" style="color:black;font-size:15px;">
                        <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" style="width: 18px;height: 18px;" value="" data-parsley-trigger="keyup" required>
                        <a href="#" class="open-overlay" style="font-size: 18px"><u>I accept terms and conditions</u></a>
                        </div>
                    </div>
                    </div>
</div>
<div class="col-xs-12">
                        <div class="form-group">
<center><input class="btn btn-primary col-md-4" type="submit" value="Buy Now"  /></center>
<br><br><br>
</div>
</div>
</div>
<section class="overlay" aria-hidden="true">
                    <div class="div">
                        <h3 style="color:black;">Terms And Conditions</h3>
                        <div class="legal__instructions">
                            <div class="alert alert-info" role="alert">
                            <strong>
                                <i class="fa fa-exclamation-triangle"></i>
                                Important.
                            </strong><br>
                            <span>In order to continue, you must read the Terms & Conditions by scrolling to the right.</span>
                            </div>
                        </div>

                        <pre style=" background: rgb(255, 243, 229)"><p style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><b>Terms & Conditions – </b>
• Standard Terms & Conditions applied
    </p></pre>

                        <a href="#submit" class="btn btn-success close-overlay" style="float: right;">CLOSE</a><br>
                    </div>
                </section>
</div>
</form>
</div>
</div>
</div>

</body>
<script>
function submitform(){
$('#payuform').submit();
}
</script>	
<!-- <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="<color-code>" bolt-logo="<image path>"></script> -->
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="<color-code>" bolt-logo="<image path>"></script>
<script type="text/javascript">
   // start of overlay
    var body = document.body,
        overlay = document.querySelector('.overlay'),
        overlayBtts = document.querySelectorAll('a[class$="overlay"]');

    [].forEach.call(overlayBtts, function(btt) {

      btt.addEventListener('click', function() {

         /* Detect the button class name */
         var overlayOpen = this.className === 'open-overlay';

         /* Toggle the aria-hidden state on the overlay and the
            no-scroll class on the body */
         overlay.setAttribute('aria-hidden', !overlayOpen);
         body.classList.toggle('noscroll', overlayOpen);

         /* On some mobile browser when the overlay was previously
            opened and scrolled, if you open it again it doesn't
            reset its scrollTop property */
         overlay.scrollTop = 0;

      }, false);

    });
    </script>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@extends('layouts.master')

@section('title')
Exam
@endsection

@section('styles')
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
@keyframes condemned_blink_effect {
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
@endsection

@section('content')
<?php

/* SECURE DETAIL */
$MERCHANT_KEY = "FsSzqFiq";       //MERCHANT_KEY
$SALT = "YAFfyRAHeB";         //MERCHANT_SALT
//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";

// $MERCHANT_KEY = "XHVgvSnJ";       //MERCHANT_KEY
// $SALT = "sa9fp6BA0i";         //MERCHANT_SALT
 $PAYU_BASE_URL = "https://secure.payu.in";

$txnid = substr(hash('sha512', mt_rand() . microtime()), 0, 10);
// $surl = "http://localhost/sw7/public/franchisee_transactionSuccess";
// $furl ="http://localhost/sw7/public/home/payment_error";
 
$surl = "https://www.sw7infomedia.com/franchisee_transactionSuccess";
$furl ="https://www.sw7infomedia.com/home/payment_error";

$hash_string = 'FsSzqFiq|'.$txnid.'|'.$total.'|'.'Franchisee Enrolment'.'|'.$franchisee->first_name.'|'.$franchisee->email.'|||||||||||YAFfyRAHeB';
$hash = strtolower(hash('sha512', $hash_string));


?>
    <div class="container">
        <div class="col-md-12">
        
            <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            </div>
            </div>
            <body >
<div  class="container-fluid">
<div class="" style="margin-top:30px">
<div class="col-md-12 col-sm-12">
 <div class="panel">   
<center><h1 style="color:black"class="page-header">Checkout(Online Payment)<br></h1></center>
           <center> <h3 style="color:black"><span style="color:black">Your Total:</span>  ₹  {{ $total }}</h3></center>
<!-- <form  method="post" action="https://sandboxsecure.payu.in/_payment" id="payuform">   -->
<form  method="post" action=" https://secure.payu.in/_payment" id="payuform" >

<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<input type="hidden" name="amount"  value="<?php echo $total ?>" />
<input type="hidden" name="firstname" value="<?php echo $franchisee->first_name ?>" />
<input type="hidden" name="lastname" value="<?php echo Auth::user()->name ?>" />
<input type="hidden" name="email" value="<?php echo $franchisee->email ?>" />
<input type="hidden" name="phone" value="<?php echo $franchisee->contact1?>" />
<input type="hidden" name="surl" value="<?php echo $surl; ?>" />
<input type="hidden" name="furl" value="<?php echo $furl; ?>" />
<input type="hidden" name="service_provider" value="payu_paisa" />
<textarea name="productinfo" hidden><?php echo "Franchisee Enrolment" ?></textarea>

                    
                  
<center><div class="form-group" style="color:black;font-size:15px;">
  <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" style="width: 18px;height: 18px;" value="" data-parsley-trigger="keyup" required>
  <a href="{{url('/franchisee_agreement')}}" target="_blank" style="font-size: 18px"><u>I accept terms and conditions</u></a>
                        
                    
</div><center>

		 <div class="form-group">
		<input class="btn btn-primary" type="submit" value="Buy Now"  />
		<br><br>

		</div>
</div>
</div>
<!-- <section class="overlay" aria-hidden="true">
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

                        <pre style=" background: rgb(255, 243, 229)"><p style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><b>Career – </b>
• Standard Terms & Conditions applied
    </p></pre>

                        <a href="#submit" class="btn btn-success close-overlay" style="float: right;">CLOSE</a><br>
                    </div>
                </section> -->

</div>
</form>
<center><h1 style="color:black"class="page-header ml-5">Offline Payment<br></h1></center>
<ul class="list-group">
  <li class="list-group-item">Bank Details :</li>
  <li class="list-group-item">Account Holder Name : SW7 INFOMEDIA PRIVATE LIMITED</li>
  <li class="list-group-item">Bank Name : ICICI Bank</li>
  <li class="list-group-item">Account Number : 624005502115</li>
  <li class="list-group-item">IFSC Code :ICIC0006240</li>
</ul>

<br><br>

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
        
@endsection

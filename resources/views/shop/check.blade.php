@extends('layouts.master')

@section('title')
Checkout
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
    <div class="container" style="margin-top:10px;">
        <div class="col-md-8 col-md-offset-2" >
            <h1 style="color:black"class="page-header">Checkout <br>(Confirm your Order)</h1>
            <h3 style="color:black"><span style="color:black">Your total:</span>  ₹  {{ $total }}</h3>
            <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form" onsubmit = 'select()' name = 'myform'>
                {{ csrf_field() }}
                <div class="row">
                    <div class=" col-xs-12">
                        <div class="form-group">
                            <label style="color:black"for="name"><i class="fa fa-user"></i>&nbsp;Name</label>
                            <input type="text" id="name" class="form-control" name="name"   value="{{$customer->first_name}} {{$customer->last_name}}" pattern="[A-Za-z\s]+" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label style="color:black"for="name"><i class="fa fa-phone"></i>&nbsp;Mobile Number</label>
                            <input type="text" id="mobno" class="form-control" name="mobno"  value="{{$customer->contact}}"  pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}"  maxlength=10  required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label style="color:black" for="address"><i class="fa fa-address-card"></i>&nbsp;Address</label>
                            <input type="text" id="address" class="form-control" name="address" value="{{$customer->address}}" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                       
                        <!-- <input type="radio" id="payment_method" name="payment_method" value="cash On delivery"  required>
                        <label for="cash" style="color:black;font-size:15px;">Cash-On-Delivery</label> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="payment_method" name="payment_method" value="online payment" >
                        <label for="online"  style="color:black;font-size:15px;">Online Payment</label> -->
                        
                        </div>
                    </div>
                  
                    <div class="col-xs-12">
                        <div class="form-group" style="color:black;font-size:15px;">
                        <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" style="width: 18px;height: 18px;" value="" data-parsley-trigger="keyup" required>
                        <a href="#" class="open-overlay" style="font-size: 18px"><u>I accept terms and conditions</u></a>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12"hidden>
                        <div class="form-group">
                            <label style="color:white"for="card-name">Card Holder Name:</label>
                            <input type="text" value="xyz" id="card-name" class="form-control" required hidden>
                        </div>
                    </div>
                    <div class="col-xs-12"hidden>
                        <div class="form-group">
                            <label style="color:white"for="card-number">Credit card number:</label>
                            <input type="text" value="4242424242424242" id="card-number" class="form-control" >
                        </div>
                    </div>
                    <div class="col-xs-12"hidden>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label style="color:white"for="card-expiry-month">Expiration month:</label>
                                    <input type="text" value="09" id="card-expiry-month" class="form-control"  >
                                </div>
                            </div>
                            <div class="col-xs-6"hidden>
                                <div class="form-group">
                                    <label style="color:white"for="card-expiry-year">Expiration year:</label>
                                    <input type="text" value="2035" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12"hidden>
                        <div class="form-group">
                            <label style="color:white"for="card-cvc">CVC:</label>
                            <input type="text" value="555" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div> -->
                <div class="col-xs-12">
                        <div class="form-group">
                       
                <button style="color:white;font-size:17px;width:120px;"type="submit" class="btn btn-primary">Buy now</button>
                </div>
                <!--overlay-->
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

@endsection

@section('scripts')

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


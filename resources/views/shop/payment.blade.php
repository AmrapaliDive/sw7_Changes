@extends('layouts.master')

@section('title')
Bhajiwala
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
</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br> <br> <br> <br> <br> <br> <br> <br>
        <h1 style="color:white"class="page-header">Checkout</h1>
            
            <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            </div>
            <!-- <form action="{{ route('checkout') }}" method="post" id="checkout-form"> -->
            <form action="{{ route('checkout') }}" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                       
                        <input type="checkbox" name="agree" id="agree" class="agree" style="color:black"> I accept Terms and Conditions
                        </div>
                    </div>
                    </div>
                    <input type="submit" name="submit" value="submit" class="btn btn-success"/>

                        
                    
            <div class="text-center" style="color:#ffffff">
			<blink><h4>Buy above ₹ 2000 and get free Delivery. </h4></blink>
			</div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ asset('/js/charge.js') }}"></script>
@endsection
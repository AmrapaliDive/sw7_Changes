@extends('layouts.master')

@section('title')
Checkout
@endsection

@section('styles')

@endsection

@section('content')

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

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size:18px;
}
th, td {
  padding: 3px;
  text-align: center;
}

</style>

   

<div class="container-fluid">
<center>
<h1 style="color:black"class="page-header">Checkout <br></h1>
 <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            </div>
<div class="row">
<div class="col-md-5 col-sm-12">

<?php
           Use App\Franchisee;
           Use App\User;
          $user = User::where('id',$batch->user_id)->first();
          $franchisee = Franchisee::where('user_id',$user->id)->first();
          ?>
<center>
<!-- <h3 style="color:black"><span style="color:black">Course :</span> {{ $batch->batch_name }}, {{ $franchisee->city }}</h3>
<h3 style="color:black"><span style="color:black">Course Price :</span>  ₹  {{ $batch->course_final_fee }}</h3> <center> -->
            <!-- <br><br> -->
<!-- <form  method="post" action="https://sandboxsecure.payu.in/_payment" id="payuform">   -->
<form  method="post" action="{{url('/buyCourseOffline')}}" id="payuform">  
{{csrf_field()}}

  <center><h1 style="color:black"class="page-header ml-5">Offline Payment<br></h1></center>

  <table style="width:100%">
		  <tr>
             <th>Course </th>
			 <td>{{ $batch->batch_name }} </td>
		</tr>
		<tr>
			 <th>City </th>
			 <td>{{ $franchisee->city }}</td>
	    </tr>	
            <tr>		
             <th>Course Price </th>
			 <td>  ₹  {{ $batch->course_final_fee }} (Including GST )</td>
           </tr>
		   
		   </table>
           <br><br>
<ul class="list-group">
  <li class="list-group-item">Bank Details :</li>
  <li class="list-group-item">Account Holder Name : SW7 INFOMEDIA PRIVATE LIMITED</li>
  <li class="list-group-item">Bank Name : ICICI Bank</li>
  <li class="list-group-item">Account Number : 624005502115</li>
  <li class="list-group-item">IFSC Code :ICIC0006240</li>
</ul>       
<center><h5 style="color:black">Note : Your Admission is valid only if your bank transaction is successful.</h5></center>
     <div class="form-group">
<center><input class="btn btn-primary" type="submit" value="Enroll Now"  /></center>
<br><br><br>
</form>
</div>

</div>
<div class="col-md-2 col-sm-12">
<center><h1 style="margin-top:200px;">OR</h1></center>
</div>
<div class="col-md-5 col-sm-12">

<h1 class=""style="margin-top:45px; color:black;">Online Payment</h1>
<div class="panel panel-default col-md-12 col-xs-12" style=" border-radius:10px; font-family:Times New Roman; border-color:black; background-color:white">
			<br><br><br>
                <div class=" " style="font-size:28px; margin-top:8px; color:#18619b"><center><b></b></center></div>
                 <br>
				<?php
           
           Use App\Student;
          
          $user = User::where('id',$batch->user_id)->first();
          $franchisee = Franchisee::where('user_id',$user->id)->first();
          $student = Student::where('user_id',Auth::user()->id)->first();
          //echo $student->first_name . $student->last_name;
          ?>
		  <table style="width:100%">
		  <tr>
             <th>Course </th>
			 <td>{{ $batch->batch_name }} </td>
		</tr>
		<tr>
			 <th>City </th>
			 <td>{{ $franchisee->city }}</td>
	    </tr>	
            <tr>		
             <th>Course Price </th>
			 <td>  ₹  {{ $batch->course_final_fee }} (Including GST )</td>
           </tr>
		   
		   </table>
                <center><b><span style="color:black;"></b></span></center>
                <!-- <hr style="margin-top:0px;border-top: 1px solid black;"> -->

                <div class="panel-body" style="color:black;font-family:Times New Roman; font-size:18px;margin-top:-25px">
          
                <!-- <hr style="margin-top:-15px;border-top: 1px solid black;"> -->
                <br><br>
              
                <!-- ●&nbsp;&nbsp;&nbsp;Validity : Lifetime Membership Plans<br><br>
                ●&nbsp;&nbsp;&nbsp;Advanced Calender<br><br>
                ●&nbsp;&nbsp;&nbsp;Professional Bills<br><br>
                ●&nbsp;&nbsp;&nbsp;Patient Details PDF<br><br>
                ● &nbsp;&nbsp;&nbsp;Unlimited Documents,Confirmation,emails<br><br>
                ● &nbsp;&nbsp;&nbsp;Hospital Websites<br><br>
                ● &nbsp;&nbsp;&nbsp;Professional Profile<br><br> -->
               </b>
			    
                    <div class="text-center">
                        <form action="{!!route('buyCourse')!!}" method="POST"  style="color: blue">
                                <!-- Note that the amount is in paise = 50 INR -->
                                <!--amount need to be in paisa-->
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ Config::get('custom.razor_key') }}"
                                        data-amount={{$batch->course_final_fee * 100}}
                                        data-buttontext="Enroll Now"
                                        data-name="SW7 INFOMEDIA PRIVATE LIMITED "
                                        // data-prefill.name="{{$student->first_name}} {{$student->last_name}}"
                                        // data-prefill.email="{{Auth::user()->email}}"
                                        data-description="Buy Course"
                                        data-image="{{asset('/images/new/logo1.jpeg')}}"
                                        data-theme.color="#528FF0">
                                        
                                </script>
                                
                                <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                               
                              
                            </form>
                    </div>
                    <br><br><br>
                </div>
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

                        <pre style=" background: rgb(255, 243, 229)"><p style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><b>Career – </b>
• Standard Terms & Conditions applied
    </p></pre>

                        <a href="#submit" class="btn btn-success close-overlay" style="float: right;">CLOSE</a><br>
                    </div>
                </section>
</div>
	
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="<color-code>" bolt-logo="<image path>"></script>
<!-- <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="<color-code>" bolt-logo="<image path>"></script> -->
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

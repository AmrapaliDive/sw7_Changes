@extends('layouts.master')


@section('content')
<style>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
           <br><br>
            <div class="panel panel-default col-md-12 col-xs-12" style=" border-radius:10px; font-family:Times New Roman; border-color:black; background-color:#ECF0F1">
			<br><br><br>
                <div class=" " style="font-size:28px; margin-top:8px; color:#18619b"><center><b>Checkout</b></center></div>
                 <br>
				<?php
           Use App\Franchisee;
           Use App\Student;
           Use App\User;
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
                                        data-buttontext="Pay Rs. {{$batch->course_final_fee}}"
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
</div>
<br><br><br>
@endsection
<?php

?>
@extends('layouts.master')
@section('content')
<div class="container"style="width:80%;margin-top:70px;font-family:ubuntu;border:1px solid black;border-radius:25px;" >
		<form class="row" method="post" action="{{ url('/processToVerify') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<?php
			$url =  Request::url();
			$input = explode("/",$url);
			$email = $input[4];
			//$email = $input[6];
            //echo $email;
			?>
			<!-- <h3 style="text-align:center;color:black;"> Update Profile</h3> -->
			<div class="form-group col-md-12" >
      <center><h3 style="color:black;">Verify Your Account</h3><center><br><br>
            <div class="form-group col-md-12" >
                    <label class="col-md-4" for="name" style="color:black;">Email</label> 
                    <input class="col-md-6" type="text" id="email" name="email" value="{{$email}}" placeholder="Enter Verification email" required readonly>
                    <br><br>
            </div>	
		  	<div class="col-md-12">
				<button type="submit" class="btn btn-primary" style="width:150px;font-size:14px;" ><b>Verify</b></button> 
			</div>
		</form><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	</div>

<br>
@endsection
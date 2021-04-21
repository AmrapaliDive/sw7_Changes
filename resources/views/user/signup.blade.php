@extends('layouts.master')

@section('title')
    User Registration
@endsection
@section('css')

<style>
 
@import url('https://fonts.googleapis.com/css?family=Numans');

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

.login_btn{

}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
    </style>
    @endsection
@section('content')
<!-- 
<body style="background-image: url('{{asset('/images/bg_1.jpg')}}');">
<div class="col-md-12 col-sm-6" style="height:100%;margin-top:90px;">
	<div class=" " style=" ">
		<div class="card" style="width: 325px;padding: 17px;margin: 71px;background-color: rgba(0,0,0,0.5) !important;">
			<div class="card-header">
				<h1 style=" color: white;"><strong>Sign Up</strong></h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
           
			</div>
			<div class="card-body">
            <form action="{{ route('user.signup') }}" method="post" enctype='multipart/form-data'>
               
		<!-- <form action="
        @if(isset($user))
        {{url('/updateuser/'.$user->id)}}
        @else
        {{ route('user.signup') }}
        @endif"        
        id="Validate_form" method='POST' enctype='multipart/form-data'> 
        {{csrf_field()}}
                <div class="input-group form-group">
						<div class="input-group-prepend" >
							<span class="input-group-text"><i class="fa fa-user" style="color:black" ></i></span>
						</div>
						<input type="text"id="name" class="form-control" name="name" pattern="[A-Za-z\s]+" required autofocus style="width:290px;" placeholder="Name">
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend" >
							<span class="input-group-text"><i class="fa fa-envelope" style="color:black" ></i></span>
						</div>
						<input type="text"id="email" class="form-control" name="email" required autofocus style="width:290px;" placeholder="Email">
						
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend" >
							<span class="input-group-text"><i class="fa fa-phone" style="color:black" ></i></span>
						</div>
						<input type="text"id="cnumber" maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="cnumber" required autofocus style="width:290px;" placeholder="Contact">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend" >
							<span class="input-group-text"><i class="fa fa-phone" style="color:black" ></i></span>
						</div>
						<input type="text"id="address" class="form-control" name="address" required autofocus style="width:290px;" placeholder="Address">
						
					</div>
                
                
                <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="color:black"></i></span>
						</div>
						<input type="password" id="password" class="form-control" name="password" required style="width:290px;"placeholder="Password">
					</div>
            
             
                &nbsp;&nbsp;
					<div class="form-group">
						<input type="submit" value="Sign up" style="color: black;background-color: #FFC312;width: 100px;" class="btn float-right login_btn">
					</div>
          
            <div class="card-footer" style="color:black; font-size:18px; ">
				<div class="d-flex justify-content-center links">
            Already have an account? <a href="{{ route('user.signin') }}" style="color: white;"> &nbsp;Login</a>
</div>
</div>

        </div>
    </div></form></div> <br> 
    </center>

    <br><br>


 -->

	
<div class="container-fluid" style="margin-top:60px;">
<div class="col-md-12">
   <div class="col-md-4 col-md-offset-4" style="border:1px solid black;border-radius:25px; ">
        <h1 style="color:black;"><b class=" "><center>Signup</center><hr></b></h1>
		@if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('user.signup') }}" id='validate_form' method="post" enctype='multipart/form-data'>
			{{csrf_field()}}

<div class="col-md-10 col-md-offset-1">
			      
          	<!--main-->
					<div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Name</label>
				<input type="text"id="name" class="form-control" style="height:45px" name="name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[2,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Name Should be between (2,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Name">
                </div>

					<div class="form-group">
                <label for="email" class=" " style="color:black ;">&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="height:45px" autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email "  required>
                </div>
				<div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact</label>
				<input type="text" id="cnumber" style="height:45px" autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="cnumber" required autofocus  placeholder="Enter Contact Number	">
                </div>
				<div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;<i class="fa fa-address-book"></i>&nbsp;Address</label>
				<input type="text" id="address" style="height:45px" class="form-control" name="address" required autofocus  placeholder="Enter Address">
                </div>
           	
                <div class="form-group">
                <label for="password" class=" " style="color:black ;">&nbsp;<i class="fa fa-key"></i>&nbsp;Password</label>
                    <input type="password" id="password" name="password"  style="height:45px"autofocus placeholder="Enter Password" data-parsley-length="[6,16]" data-parsley-length-message="Your Password should be between range of (6) to (16)" class="form-control" required>
                </div>

				
                &nbsp;&nbsp;
					<div class="form-group">
						<center><input type="submit" value="Sign up" style="color: #fff;
    background-color:#82ae46 ;
    border-color:#82ae46 ;width: 300px;" class="btn btn-info login_btn"></center>
					</div>

				<center>	<div class="d-flex justify-content-center links" style="margin-bottom:20px;">
            Already have an account? <a href="{{ route('user.signin') }}" style="color: black;"> &nbsp;Login</a>
</div></center>
</div>
</form>
</div>
</div></div>
    @endsection


section('scripts')
<script>
$(document).ready(function(){
        $('#validate_form').parsley();
    });
</script>
endsection
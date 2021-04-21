@extends('layouts.customer_dashboard')
<style>
    .text{
        margin-left:10px;
        margin-right:10px;
    }
    .vl {
  border-left: 2px solid black;
  height: 30px;
}

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
   color:#cc0000;
  }
</style>
@section('content')


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html"></a></li>
				<li class='active'></li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container" style="margin-right:40px;width:1050px;">
		<div class="sign-in-page">
<!-- create a new account -->
<div class="col-md-12 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Customer- Update Profile</h4>
	<p class="text title-tag-line">Update Your Profile</p>
	<form class="register-form outer-top-xs" role="form"  action="{{url('/customer/update')}}" id="Validate_form" class="text" method='POST' enctype='multipart/form-data' >
    {{csrf_field()}}
    <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">
           
            <div class="col-md-4">
            <div class="form-group">
                <label class="info-title" for="name" ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" class="form-control" style="font-size:1.5rem" name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" required autofocus placeholder="Enter First Name" value="{{$customer->first_name}}">
            </div>
       </div>

       <div class="col-md-4">
            <div class="form-group">
                <label  class="info-title" for="name" ><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Last Name</label>
				    <input type="text"id="last_name" class="form-control" style="font-size:1.5rem" name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,20) Charachters" required autofocus placeholder="Enter Last Name" value="{{$customer->last_name}}">
            </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label  class="info-title" for="dob" ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile Image</label>
					      <input type="file" class="form-control file" id="image" onchange="Filevalidation()" style="font-size:1.4rem" placeholder="Image" name="image"/>
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                   <label  class="info-title" for="email" >&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="font-size:1.5rem" autofocus placeholder="Enter Email"  required value="{{$customer->email}}" readonly>
                </div>
                </div>

                <div class="col-md-4">
               <div class="form-group">
                <label  class="info-title" for="cnumber" >&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact </label>
			      	<input type="text" id="contact" style="font-size:1.5rem" autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" data-parsley-pattern-message="Contact should be in digits only" data-parsley-length-message="Contact Number should be of (10) digits" class="form-control" name="contact" required autofocus  placeholder="Enter Contact Number" value="{{$customer->contact}}">
                </div>
               </div>
              
                <div class="col-md-4">
                <div class="form-group">
                <label  class="info-title" for="name" ><i class="fa fa-map-pin" aria-hidden="true"></i> &nbsp;Pincode</label>
				        <input type="text"id="pincode" class="form-control" style="font-size:1.5rem" name="pincode"  maxlength="6" data-parsley-pattern="[0-9]+$" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (6) digits" required autofocus placeholder="Enter Pincode" value="{{$customer->pincode}}">
                </div>
                </div>
               
                 <div class="col-md-4">
                <div class="form-group">
                <label  class="info-title" for="address" ><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address</label>
				<input type="text" id="address" style="font-size:1.5rem" class="form-control" name="address" required autofocus  placeholder="Enter Address" value="{{$customer->address}}">
                </div>
       </div>

        <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update profile</button>
          </div></center>
	</form>
	
	
	
    </div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
<!--
    <div class="container" style="margin-top:0px;">

<div class="col-md-10 col-md-offset-2" style="margin-top:25px;">
<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">User Form </b></center>
<hr><br>
        <form action="{{url('/customer/update')}}" id="Validate_form"class="text" method='POST' enctype='multipart/form-data' style="height:550px;border:1px solid black;border-radius:25px;padding-left:100px;padding-top:15px; ">
        {{csrf_field()}}
        
        
        
            <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">
            <div class="col-md-5">
            <div class="form-group">
                <label for="name" style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" class="form-control" style="font-size:1.5rem" name="first_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter First Name" value="{{$customer->first_name}}">
            </div>
       </div>
       <div class="col-md-5">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Last Name</label>
				    <input type="text"id="last_name" class="form-control" style="font-size:1.5rem" name="last_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter Last Name" value="{{$customer->last_name}}">
            </div>
            </div>
            <div class="col-md-5">
      
            <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Profile Image</label>
					      <input type="file" class="form-control file" id="image" style="font-size:1.4rem" placeholder="Image" name="image"/>
            </div>
            </div>
            <div class="col-md-5">
      
            <div class="form-group">
                <label for="email" class=" " style="color:black ;">&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="font-size:1.5rem" autofocus placeholder="Enter Email"  required value="{{$customer->email}}">
                </div>
                </div>
                <div class="col-md-5">
      
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact </label>
			      	<input type="text" id="contact" style="font-size:1.5rem" autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="contact" required autofocus  placeholder="Enter Contact Number" value="{{$customer->contact}}">
                </div>
               </div>
                 <!-- <div class="col-md-5">
      
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;City</label>
      			  	<input type="text"id="city" class="form-control" style="font-size:1.5rem" name="address"  required autofocus placeholder="Enter Address" value="{{$customer->address}}">
                </div>
                </div> --
                <div class="col-md-5">
      
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Pincode</label>
				        <input type="text"id="pincode" class="form-control" style="font-size:1.5rem" name="pincode"  maxlength="6" required autofocus placeholder="Enter Pincode" value="{{$customer->pincode}}">
                </div>
                </div>
                 <div class="col-md-5">
      
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;Address</label>
				<input type="text" id="address" style="font-size:1.5rem" class="form-control" name="address" required autofocus  placeholder="Enter Address" value="{{$customer->address}}">
                </div>
                </div>   <div class="col-md-5">
             
      
       	        <!-- <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Date Of Birth</label>
					<input type="date" placeholder="Enter Birth Date" class="form-control" style="font-size:1.5rem" id="dob" name="dob" required value="{{$customer->dob}}">
				</div> --
</div>
           
            
            <script>
											function myFunction() {
											var x = document.getElementById("myDIV");
											if (x.style.display === "none") {
												x.style.display = "block";
											} else {
												x.style.display = "none";
											}
											}
										</script>
								

									<div id="myDIV" style="display:none">
                  <div class="col-md-5">	
                  <div class="form-group">
                 <label for="password"  style="color:black ;">Password</label>
                 <input type="password" name="password" id="password" class="form-control" placeholder="Password"   data-parsley-length="[6,16]" data-parsley-length-message="password should be of min (6) and max (16) length" data-parsley-trigger="keyup" />
            </div></div>
            <div class="col-md-5">	
            <div class="form-group">
                 <label  style="color:black ;">Confirm Password</label>
                 <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password"  data-parsley-equalto="#password" data-parsley-trigger="keyup" />
            </div></div>
									</div>	 
             
             
							 <div class="col-md-5" style="margin-top:30px;">	
										<!--	<input type="button" name="answer" onclick="myFunction()" value="Change the password ?"></input> -->
						<!--		<br>	 
            <button type="submit" class="btn btn-primary" style="width:100px;height:30px;font-size:15px;margin-top:30px;" name="submit">Save Data</button>
            </div>
        </form>
    
    </div>
</div>-->
    @endsection

@section('scripts')
    <script src="{{ asset('assets/js/parsley.js') }}"></script>
    <script>
    $(document).ready(function(){
    $('#Validate_form').parsley();

    });
  </script>

  <script>
  Filevalidation = () => {
  const fi = document.getElementById('image');
  // Check if any file is selected.
  if (fi.files.length > 0) {
  for (const i = 0; i <= fi.files.length - 1; i++) {

  const fsize = fi.files.item(i).size;
  const file = Math.round((fsize / 1024));
  // The size of the file.

  if (file < 400) {
  alert(
  "File too small, please select a file greater than 400kb");
  } else if (file > 1024) {
  alert(
  "File too large, please select a file smaller than 1mb");
  } else {
  document.getElementById('size').innerHTML = '<b>'
  + file + '</b> KB';
  }
  }
  }
  }
  </script> 
@endsection
@extends('layouts.master2')
<style>
    .text{
        margin-left:120px;
        margin-right:120px;
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
    <div class='container' style="margin-top:0px;">



    <div class="col-md-10 col-md-offset-2" style="margin-top:25px;">

<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">User Form </b></center>
<hr><br><br>
        <form  action="{{url('/dealer/update/')}}" id="Validate_form" method='POST' enctype='multipart/form-data'style="height:600px;border:1px solid black;border-radius:25px;padding-left:100px;padding-top:15px; ">
        {{csrf_field()}}
      
        

            <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">
            <div class="col-md-5">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" style="font-size:1.5rem;" class="form-control"  name="first_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter First Name" value="{{ $dealer->first_name }}">
            </div>
            </div>
            <div class="col-md-5">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Last Name</label>
				<input type="text"id="last_name" style="font-size:1.5rem;" class="form-control"  name="last_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter Last Name" value="{{ $dealer->last_name }}">
            </div>
            </div>
            <div class="col-md-5">
            <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Profile Image</label>
					<input type="file" style="font-size:1.5rem;" class="form-control file" id="image" placeholder="Image" name="image"/>
				</div>
                </div>
                <div class="col-md-5">   
            <div class="form-group">
                <label for="email" class=" " style="color:black ;">&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" style="font-size:1.5rem;" id="email" name="email" class="form-control"  autofocus placeholder="Enter Email " value="{{ $dealer->email }}"  required>
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact 1</label>
				<input type="text"style="font-size:1.5rem;" id="contact_no1"  autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="contact_no1"  value="{{ $dealer->contact1 }}" required autofocus  placeholder="Enter Contact Number	">
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact 2</label>
				<input type="text" style="font-size:1.5rem;" id="contact_no2"  autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="contact_no2" value="{{ $dealer->contact2 }}" required autofocus  placeholder="Enter Contact Number	">
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;City</label>
				<input type="text" style="font-size:1.5rem;" id="city" class="form-control"  name="city" pattern="[A-Za-z]+" value="{{ $dealer->city }}" required autofocus placeholder="Enter City">
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="name"  style="font-size:1.5rem;"class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Pincode</label>
				<input type="text"id="pincode" class="form-control"  name="pincode"  maxlength="6" value="{{ $dealer->pincode }}" required autofocus placeholder="Enter Pincode">
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Address</label>
				<input type="text"  style="font-size:1.5rem;" id="address"  class="form-control" name="address" value="{{ $dealer->address }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>
                <div class="col-md-5">  
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Category</label>
				<input type="text" style="font-size:1.5rem;" id="category"  class="form-control" name="category" value="{{ $dealer->category }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>
                <div class="col-md-5">  
                <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Date Of Birth</label>
					<input type="date" style="font-size:1.5rem;" placeholder="Enter Birth Date" class="form-control" id="dob" name="dob" value="{{ $dealer->dob }}" required/>
				</div>
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
                    <input type="password" style="font-size:1.4rem;" name="password" id="password" class="form-control" placeholder="Password"   data-parsley-length="[6,16]" data-parsley-length-message="password should be of min (6) and max (16) length" data-parsley-trigger="keyup" />
                    </div>
                    </div>
                    <div class="col-md-5">	
                 
                    <div class="form-group">
                    <label  style="color:black ;">Confirm Password</label>
                    <input type="password" style="font-size:1.4rem;" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password"  data-parsley-equalto="#password" data-parsley-trigger="keyup" />
                    </div></div>
				</div>	 
									
                <div class="col-md-5" style="margin-top:30px;">	
										<input type="button" name="answer" onclick="myFunction()" value="Change the password ?"></input>
								<br>	 
            <button type="submit" class="btn btn-primary" style="width:100px;height:30px;font-size:15px;margin-top:30px;" name="submit">Save Data</button>
            </div>
        
        </form>
        
      <br/>
    </div>

    @endsection

    @section('scripts')
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script>
$(document).ready(function(){
    $('#Validate_form').parsley();

});
</script>

@endsection

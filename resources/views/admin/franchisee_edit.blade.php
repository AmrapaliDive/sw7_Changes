@extends('layouts.dashboard')
<style>
 
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
    line-height: 0.6em;
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
	<h4 class="checkout-subtitle">Franchisee - Update Profile</h4>
	<br><br><br>
	<form class="register-form outer-top-xs" role="form" action="{{url('/admin/update_franchisee/')}}" id="validate_form" method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}
    <input type="hidden" name="id" id="id" value="{{$franchisee->id or ''}}">
        
    <div class="col-md-4">
        <div class="form-group">
        <label class="info-title"><i class="fa fa-user" aria-hidden="true"></i> First Name <span>*</span></label>
        <input type="text"id="first_name"  class="form-control"  name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter First Name" value="{{ $franchisee->first_name }}">
            
           </div>
          </div> 
          <div class="col-md-4">
        <div class="form-group">
        <label class="info-title"><i class="fa fa-user" aria-hidden="true"></i> Last Name <span>*</span></label>
    	<input type="text"id="last_name"  class="form-control"  name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Last Name should be between (1,20) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Last Name" value="{{ $franchisee->last_name }}">
             </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
		     <label class="info-title" for="exampleInputEmail2"><i class="fa fa-envelope" aria-hidden="true"></i> Email Address <span>*</span></label>
             <input type="text"  id="email" name="email" class="form-control"  autofocus placeholder="Enter Email " value="{{ $franchisee->email }}" readonly required>
               
       	</div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Date of Birth <span>*</span></label>
        <input type="date"  placeholder="Enter Birth Date" class="form-control" id="dob" name="dob" value="{{ $franchisee->dob }}" required/>
			 </div>
        </div>
       	
       

        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title"><i class="fa fa-mobile" aria-hidden="true"></i> Conatct Number.1 <span>*</span></label>
        	<input type="text" id="contact_no1"  autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" class="form-control" name="contact_no1"  value="{{ $franchisee->contact1 }}" required autofocus  placeholder="Enter Contact Number	">
                        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title"><i class="fa fa-mobile" aria-hidden="true"></i> Conatct Number.2 <span>*</span></label>
            <input type="text"  id="contact_no2"  autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}"  data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" class="form-control" name="contact_no2" value="{{ $franchisee->contact2 }}" required autofocus  placeholder="Enter Contact Number	">
                </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Landline No. <span>*</span></label>
        	<input type="text"  id="landline_no"  autofocus  pattern="^[0][0-9]{2}(-)[0-9]{8}$" class="form-control" name="landline_no" value="{{ $franchisee->landline_no }}"  autofocus  placeholder="Enter landline Number	">
               	</div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-street-view" aria-hidden="true"></i> City <span>*</span></label>
            <input type="text"  id="city" class="form-control"  name="city"  data-parsley-length="[3,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Name Should be between (2,14) Charachters" data-parsley-trigger="keyup" value="{{ $franchisee->city }}" required autofocus placeholder="Enter City">
             	</div>
        </div> 

        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"> <i class="fa fa-map-pin" aria-hidden="true"></i> Pincode <span>*</span></label>
            <input type="text"id="pincode" class="form-control"  name="pincode"  maxlength="6" data-parsley-pattern="[0-9]+$" data-parsley-length="[6,6]" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (6) digits" data-parsley-trigger="keyup" value="{{ $franchisee->pincode }}" required autofocus placeholder="Enter Pincode">
               </div>
        </div>

        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-map-marker" aria-hidden="true"></i> Address <span>*</span></label>
            <input type="text"   id="address"  class="form-control" name="address" value="{{ $franchisee->address }}" required autofocus  placeholder="Enter Address">
                  </div>
        </div>

        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-map-marker" aria-hidden="true"></i> Landmark <span>*</span></label>
            <input type="text"   id="landmark"  class="form-control" name="landmark" value="{{ $franchisee->landmark }}" required autofocus  placeholder="Enter Address">
                     
        </div>
        </div>

        <!-- <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Qualification<span>*</span></label>
            <input type="text"id="qualification" class="form-control "  name="qualification"  data-parsley-length="[3,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Name Should be between (2,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Qualification">
                   
        </div>
        </div> -->

          <!-- <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Qualification Document<span>*</span></label>
            <input type="file" class="form-control  file " id="qualification_pdf" placeholder="Image" name="qualification_pdf" required/>
            
                </div>
        </div> -->
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-user" aria-hidden="true"></i> Profile Image <span>*</span></label>
            <input type="file"  class="form-control file" id="image" placeholder="Image" name="image"/>
			        </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Office Time<span>*</span></label>
            <input type="text"id="office_time" class="form-control"  name="office_time"  value="{{ $franchisee->office_time }}" required autofocus placeholder="Enter Pincode">
            
                </div>
        </div>  
         <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-user-o" aria-hidden="true"></i> Contact Person Name<span>*</span></label>
            <input type="text"  id="contact_person"  class="form-control" name="contact_person" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[3,20]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,20) Charachters" data-parsley-trigger="keyup" value="{{ $franchisee->contact_person }}" required autofocus  placeholder="Enter Address">
             
                </div>
        </div>  
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-mobile" aria-hidden="true"></i> Contact Person contact No.<span>*</span></label>
            <input type="text"  id="contact_person_contact"  class="form-control" name="contact_person_contact" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" value="{{ $franchisee->contact_person_contact }}" required autofocus  placeholder="Enter Contact No">
                </div>
        </div>  
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Description<span>*</span></label>
            <input type="text"   id="description"  class="form-control" name="description" value="{{ $franchisee->description }}" required autofocus  placeholder="Enter Address">
                
              </div>
        </div>  
     
        <!-- <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"> Password <span>*</span></label>
            <input type="password" name="password" id="password" class="form-control " placeholder="Password"  required data-parsley-length="[6,16]" data-parsley-length-message="password should be of min (6) and max (16) length" data-parsley-trigger="keyup" />
        </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Confirm Password <span>*</span></label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control " placeholder="Confirm Password" required data-parsley-equalto="#password" data-parsley-trigger="keyup" />
             	</div>
        </div> -->
        <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">update profile</button>
          </div></center>
	</form>
	
	
	
    </div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
<!--
    <div class='container' style="margin-top:0px;">



    <div class="col-md-10 col-md-offset-2" style="margin-top:25px;">

<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">User Form </b></center>
<hr><br><br>
        <form  action="{{url('/franchisee/update/')}}" id="Validate_form" method='POST' enctype='multipart/form-data'style="height:1000px;border:1px solid black;border-radius:25px;padding-left:100px;padding-top:15px; ">
        {{csrf_field()}}
      
        

            <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">
            <div class="col-md-5">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" style="font-size:1.5rem;" class="form-control"  name="first_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter First Name" value="{{ $franchisee->first_name }}">
            </div>
            </div>
            <div class="col-md-5">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Last Name</label>
				<input type="text"id="last_name" style="font-size:1.5rem;" class="form-control"  name="last_name" pattern="[A-Za-z]+" required autofocus placeholder="Enter Last Name" value="{{ $franchisee->last_name }}">
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
                    <input type="text" style="font-size:1.5rem;" id="email" name="email" class="form-control"  autofocus placeholder="Enter Email " value="{{ $franchisee->email }}" readonly required>
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact 1</label>
				<input type="text"style="font-size:1.5rem;" id="contact_no1"  autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="contact_no1"  value="{{ $franchisee->contact1 }}" required autofocus  placeholder="Enter Contact Number	">
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact 2</label>
				<input type="text" style="font-size:1.5rem;" id="contact_no2"  autofocus maxlength=10 pattern="(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}" class="form-control" name="contact_no2" value="{{ $franchisee->contact2 }}" required autofocus  placeholder="Enter Contact Number	">
                </div>
                </div>

                <div class="col-md-5">
                <div class="form-group">
                <label for="cnumber" class=" " style="color:black ;">&nbsp;<i class="fa fa-phone"></i>&nbsp;Landline No.</label>
				<input type="text" style="font-size:1.5rem;" id="landline_no"  autofocus  pattern="^[0][0-9]{2}(-)[0-9]{8}$" class="form-control" name="landline_no" value="{{ $franchisee->landline_no }}" required autofocus  placeholder="Enter landline Number	">
                </div>
                </div>

                <div class="col-md-5">
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;City</label>
				<input type="text" style="font-size:1.5rem;" id="city" class="form-control"  name="city" pattern="[A-Za-z]+" value="{{ $franchisee->city }}" required autofocus placeholder="Enter City">
                </div>
                </div>
                <div class="col-md-5">
                <div class="form-group">
                <label for="name"  style="font-size:1.5rem;"class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Pincode</label>
				<input type="text"id="pincode" class="form-control"  name="pincode"  maxlength="6" value="{{ $franchisee->pincode }}" required autofocus placeholder="Enter Pincode">
                </div>
                </div>

                <div class="col-md-5">
                <div class="form-group">
                <label for="name"  style="font-size:1.5rem;"class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Office Time</label>
				<input type="text"id="office_time" class="form-control"  name="office_time"  value="{{ $franchisee->office_time }}" required autofocus placeholder="Enter Pincode">
                </div>
                </div>
                
                <div class="col-md-10">
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Address</label>
				<input type="text"  style="font-size:1.5rem;" id="address"  class="form-control" name="address" value="{{ $franchisee->address }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>

                <div class="col-md-10">
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Landmark</label>
				<input type="text"  style="font-size:1.5rem;" id="landmark"  class="form-control" name="landmark" value="{{ $franchisee->landmark }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>

                <div class="col-md-5">  
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Contact Person</label>
				<input type="text" style="font-size:1.5rem;" id="contact_person"  class="form-control" name="contact_person" value="{{ $franchisee->contact_person }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>

                <div class="col-md-5">  
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Contact Person Contact No.</label>
				<input type="text" style="font-size:1.5rem;" id="contact_person_contact"  class="form-control" name="contact_person_contact" value="{{ $franchisee->contact_person_contact }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>
                <div class="col-md-10">
                <div class="form-group">
                <label for="address" class=" " style="color:black ;">&nbsp;&nbsp;Description</label>
				<input type="text"  style="font-size:1.5rem;" id="description"  class="form-control" name="description" value="{{ $franchisee->description }}" required autofocus  placeholder="Enter Address">
                </div>
                </div>

                <div class="col-md-5">  
                <div class="form-group">
                <label for="dob" class=" " style="color:black ;">&nbsp;Date Of Birth</label>
					<input type="date" style="font-size:1.5rem;" placeholder="Enter Birth Date" class="form-control" id="dob" name="dob" value="{{ $franchisee->dob }}" required/>
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
										<!-- <input type="button" name="answer" onclick="myFunction()" value="Change the password ?"></input>
								<br>	  --
            <button type="submit" class="btn btn-primary" style="width:100px;height:30px;font-size:15px;margin-top:30px;" name="submit">Save Data</button>
            </div>
        
        </form>
        
      <br/>
    </div>
-->
@endsection

@section('scripts')
    {{-- date picker --}}
    <script src="{{ asset('assets/js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    {{-- end date picker --}}

    <script src="{{ asset('assets/js/parsley.js') }}"></script>
    <script>
        $(document).ready(function(){
        $('#validate_form').parsley();
        });

        var array = []
        $(function(){
            $( "#dob" ).datepicker({
            dateFormat: "yy-mm-dd",
            beforeShowDay: function(date)
                            {
                                var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                                return [ array.indexOf(string) == -1 ]
                            },
            maxDate: new Date('2006', '11' , '31'),
            changeMonth: true,
            changeYear: true
            });
        });
    </script>

@endsection

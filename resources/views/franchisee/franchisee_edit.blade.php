@extends('layouts.master2')
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
	<p class="text title-tag-line">Update Your Profile</p>
	<form class="register-form outer-top-xs" role="form" action="{{url('/franchisee/update/')}}" id="validate_form" method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}
    <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">
        
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
        	<input type="text"  id="landline_no"  autofocus  pattern="^[0][0-9]{2}(-)[0-9]{8}$" class="form-control" name="landline_no" value="{{ $franchisee->landline_no }}" required autofocus  placeholder="Enter landline Number	">
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
	<br><br><br><br>
    






  <!-- Update Account -->
  <div class="row">
    <h4 class="checkout-subtitle">Franchisee - Update Account Details</h4><hr>
	<!-- <p class="text title-tag-line">Update Your Profile</p> -->

   
    <form class="register-form outer-top-xs" role="form" method="post" action="{{ url('/account/update/'.$account->id) }}" id="validate_form" enctype="multipart/form-data" >
    {{csrf_field()}}
    
    
    <div class="col-md-6">
        <div class="form-group">
        <label class="info-title">Account Holder Name <span>*</span></label>
        <input type="text"id="account_name" class="form-control"  name="account_name" value="{{$account->account_name}}" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Account Holder Name">
                 </div>
          </div> 
         
        <div class="col-md-6">
        <div class="form-group">
		    <label class="info-title">Bank Name<span> *</span></label>
        <input type="text"id="bank_name" class="form-control" name="bank_name" value="{{$account->bank_name}}"  pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Bank Name">
                          </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
		    <label class="info-title">Bank Account Number<span>*</span></label>
        <input type="text"id="account_no" class="form-control" name="account_no" value="{{$account->account_no}}"  required autofocus placeholder="Enter Bank Account Number">
                </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
		    <label class="info-title">IFSC Code<span>*</span></label>
        <input type="text"id="ifsc_code" class="form-control" name="ifsc_code" value="{{$account->ifsc_code}}" data-parsley-pattern="^[A-Za-z]{4}\d{7}$" data-parsley-length="[11,11]" data-parsley-pattern-message="This field only contains alphabets and numbers" data-parsley-length-message="Name Should be of 11 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter IFSC Code">
     		</div>
        </div>
      
             <!-- <div class="col-md-6">
         <div class="form-group">
		    <label class="info-title">MICR Code<span>*</span></label>
        <input type="text"id="micr_code" class="form-control" name="micr_code"  data-parsley-pattern="^[0-9]{9}$" data-parsley-length="[9,9]" data-parsley-pattern-message="This field only contains numbers" data-parsley-length-message="Name Should be of 9 Charachters" data-parsley-trigger="keyup"  autofocus placeholder="Enter MICR Code">
       </div>
        </div>   -->
       
        <div class="col-md-6">
         <div class="form-group">
		    <label class="info-title">Bank Proof (Image/PDF)<span>*</span></label>
        <input type="file" id="pdf" class="form-control" name="pdf"  autofocus >
             </div>
        </div>  
           	 <center><div class="col-md-12">
	  	     <button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="
			padding-top: 9px;
			 padding-bottom: 9px;
			border-bottom-width: 8px;
			padding-left: 50px;
			padding-right: 50px;
			font-size:14px;
		"> UPDATE </button>
          </div></center>
	</form>
	</div>	
    </div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>

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

@extends('layouts.master')
@section('css')
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
@endsection 
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Register</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
<!-- create a new account -->
<div class="col-md-12 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Student Registration</h4>
	<!-- <p class="text title-tag-line">Create your new account.</p> -->
	<form class="register-form outer-top-xs" role="form" action="{{url('/enrolForAdmissionInsert')}}" id="Validate_form" method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}
    <input type="hidden" id="batchid" name="batchid"  value="{{$batch->id}}">
    <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">First Name <span>*</span></label>
      	<input type="text"id="first_name" class="form-control "  name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter First Name">
    
           </div>
          </div> 
          <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Last Name <span>*</span></label>
      <input type="text" id="last_name" class="form-control "  name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Last Name">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Father's Name <span>*</span></label>
      <input type="text" id="fathers_name" class="form-control "  name="fathers_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Father Name">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Father's Occupation <span>*</span></label>
      <input type="text" id="fathers_occupation" class="form-control "  name="fathers_occupation" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Father's Occupation">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Father's Income <span>*</span></label>
      <input type="number" id="fathers_income" class="form-control "  name="fathers_income"  data-parsley-pattern-message="This field only contains numbers" min="0" data-parsley-trigger="keyup" required autofocus placeholder="Enter Father's Income">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Mother's Name <span>*</span></label>
      <input type="text" id="mothers_name" class="form-control "  name="mothers_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Mother's Name">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Mother's Occupation <span>*</span></label>
      <input type="text" id="mothers_occupation" class="form-control "  name="mothers_occupation" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Mother's Occupation">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Mother's Income <span>*</span></label>
      <input type="number" id="mothers_income" class="form-control "  name="mothers_income"  data-parsley-pattern-message="This field only contains numbers" min="0" data-parsley-trigger="keyup" required autofocus placeholder="Enter Mother's Income">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Parent's Conatct No. <span>*</span></label>
            <input type="text" id="parent_contact"  autofocus  class="form-control " name="parent_contact" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" required autofocus  placeholder="Enter Parent Contact Number">
       </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Student's Conatct No. <span>*</span></label>
            <input type="text" id="student_contact"  autofocus  class="form-control " name="student_contact" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" required autofocus  placeholder="Enter Student Contact Number">
       </div>
       </div>
       <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">State <span>*</span></label>
      <input type="text" id="state" class="form-control "  name="state" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter State">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Nationality <span>*</span></label>
      <input type="text" id="nationality" class="form-control "  name="nationality" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Nationality">
      </div>
        </div>
        
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Pincode <span>*</span></label>
		    <input type="text"id="pincode" class="form-control " name="pincode"  data-parsley-pattern="[0-9]+$" data-parsley-length="[6,6]" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (6) digits" data-parsley-trigger="keyup" required autofocus placeholder="Enter Pincode">
      	</div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Permanent Address <span>*</span></label>
            <input type="text" id="permanent_address"  class="form-control "name="permanent_address" required autofocus  placeholder="Enter Address">
        </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Aadhar Number <span>*</span></label>
		    <input type="text"id="aadhar_no" class="form-control " name="aadhar_no"  data-parsley-pattern="[0-9]{4}[0-9]{4}[0-9]{4}" data-parsley-length="[12,12]" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (12) digits" data-parsley-trigger="keyup" required autofocus placeholder="Enter Aadhar No.">
      	</div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Gender <span>*</span></label>
      <input type="text" id="gender" class="form-control "  name="gender" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Gender">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">10th School <span>*</span></label>
        <input type="text" id="tenth_school" class="form-control "  name="tenth_school" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 10th School">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">10th Board / University<span>*</span></label>
        <input type="text" id="tenth_board" class="form-control "  name="tenth_board" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 10th Board/University">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">10th Passing Year<span>*</span></label>
        <input type="number" id="tenth_passingyear" class="form-control "  name="tenth_passingyear" data-parsley-pattern="[0-9]{4}" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains Numbers" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 10th Passing Year">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">10th Percentage<span>*</span></label>
        <input type="number"  step="0.01" id="tenth_percentage" class="form-control "  name="tenth_percentage" data-parsley-pattern="[0-9]+(\\.[0-9][0-9]?)?" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains Numbers" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 10th Percentage">
      </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">10th Certificate <span>*</span></label>
            <input type="file" class="form-control  file" id="tenth_doc" placeholder="Image" name="tenth_doc"/>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">12th School <span>*</span></label>
        <input type="text" id="twelth_school" class="form-control "  name="twelth_school" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 12th School">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">12th Board / University<span>*</span></label>
        <input type="text" id="twelth_board" class="form-control "  name="twelth_board" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 12th Board/University">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">12th Passing Year<span>*</span></label>
        <input type="number" id="twelth_passingyear" class="form-control "  name="twelth_passingyear" data-parsley-pattern="[0-9]{4}" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains Numbers" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 12th Passing Year">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">12th Percentage<span>*</span></label>
        <input type="number"  step="0.01" id="twelth_percentage" class="form-control "  name="twelth_percentage" data-parsley-pattern="[0-9]+(\\.[0-9][0-9]?)?" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains Numbers" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter 12th Percentage">
      </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">12th Certificate <span>*</span></label>
            <input type="file" class="form-control  file" id="twelth_doc" placeholder="Image" name="twelth_doc"/>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Graduation College <span>*</span></label>
        <input type="text" id="graduate_school" class="form-control "  name="graduate_school" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Graduation College">
      </div>
        </div>
        
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Graduation Board / University<span>*</span></label>
        <input type="text" id="graduate_board" class="form-control "  name="graduate_board" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Graduation Board/University">
      </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Graduation Passing Year<span>*</span></label>
        <input type="number" id="graduate_passingyear" class="form-control "  name="graduate_passingyear" data-parsley-pattern="[0-9]{4}" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains Numbers" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Graduation Passing Year">
      </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Graduation Percentage<span>*</span></label>
        <input type="number"  step="0.01" id="graduate_percentage" class="form-control "  name="graduate_percentage" data-parsley-pattern="[0-9]+(\\.[0-9][0-9]?)?" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains Numbers" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Graduation Percentage">
      </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Graduation Certificate <span>*</span></label>
            <input type="file" class="form-control  file" id="graduate_doc" placeholder="Image" name="graduate_doc"/>
        </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Passport Image <span>*</span></label>
            <input type="file" class="form-control  file" id="passport_image" placeholder="Image" name="passport_image"/>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Batch Name<span>*</span></label>
        <input type="text" id="batch_name" class="form-control "  name="batch_name" value="{{$batch->batch_name}}" data-parsley-pattern="[a-zA-Z\s]+$" data-parsley-length="[1,30]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Second Name should be between (1,30) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Batch Name" readonly>
      </div>
        </div>
        
	   	 <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
          </div></center>
    	</form>
	
	
</div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
    @endsection

    @section('scripts')
    <script src="{{ asset('js/parsley.js') }}"></script>

    <script>
$(document).ready(function(){
    $('#Validate_form').parsley();
    
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
        maxDate: new Date('2005', '12' , '31'),
        changeMonth: true,
        changeYear: true
        });
    });


</script>
@endsection
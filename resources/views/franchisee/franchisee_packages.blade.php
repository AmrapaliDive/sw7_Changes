@extends('layouts.master')


@section('css')
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
img{
  height:200px;
}
.img-responsive{
  height:200px;
}

.card {
  /* margin-right: 25px; */
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
  /* width: 34.8rem; */
  margin:5px;
    /* width: 33.3%; */
  /* position: relative; */
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}


.card__info {
z-index: 2;
  background-color: #fff;
  border-bottom-left-radius: 12px;
border-bottom-right-radius: 12px;
   padding: 15px 22px 22px 22px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    /* text-transform: uppercase; */
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 500;
    color:#82ae46;
}

#gram{
  
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:16px;
  /* background:#82ae46; */
  background:white;
  color:black;

  align:end;
  text-align-last:center;
}
.card__title {
    margin-top: 5px;
    margin-bottom: 5px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 22px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}
#ruppee{
  font-family: 'Roboto', sans-serif;
}
a:hover{
  text-decoration:none;
}
a {
  text-decoration: none;
}

select, option {
	font-family: 'FontAwesome';
	font-style: normal;
  align:center;
}
#gram{
  height:50px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  background:#2ab27b;
  color:white;
  align:end;
  text-align-last:center;
}
select:focus{
  height:50px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  outline: none;
}
option {
   -webkit-border-radius:25px;
   font-family: 'Patua One', cursive;
  
} 

option:hover{
  /* height:50px; */
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  outline: none;
  background:white;
  color:black;
  
}
#ca{
  font-size:30px;
}
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
  }/

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
				<li class='active'>Franchisee Registration</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
<!-- create a new account -->
<div class="col-md-12 col-sm-12 create-new-account ">
	<h4 class="checkout-subtitle"><b>Step 4 : Choose Franchisee Development Scheme  </b></h4>
	<!-- <p class="text title-tag-line">Document Registration </p> -->
	<p><b>SW7 INFOMEDIA PRIVATE LIMITED is a PUNE based Training Company with an expertise in the area of Electronic and software Related Courses<br>
1. Industry Experienced faculty<br>
2. Advance Infrastructural Facilities<br>
3. Practical & Live Training<br>
4. 100% Job Assistance for Students<br>
5. Real Time Projects & Work for Practice<br>
Today, we are not just a name but a brand. We have set-up our own standards for quality training in India. We enroll thousands of students every year from the country. With the help of our classified courses, we have trained more than 5,000+ professionals. We believe in 100% quality training also 100% practical base training and creating employment opportunities for the students. SW7 INFOMEDIA PRIVATE LIMITED. was made by a team of awesome peoples. Well trained and experienced teams that are always put through continuous training practices to effectively handle today’s demand.</b></p>
	<form class="register-form outer-top-xs" role="form" method="get" action="{{ url('/franchisee/payment') }}" id="Validate_form" enctype="multipart/form-data" >
    {{csrf_field()}}
    
    
       <div class=" card col-md-4 col-sm-4">
	    
        <div class="card " style=" width: 30rem;margin-left:-30px; margin-top:70px; border: 3px solid #f3f3f3;
  transition: 0.3s;
  background:white;height: fit-content;min-height:340px; border-radius: 1rem;
    box-shadow: 0px -10px 0px rgb(151, 248, 6)">
  
  <div class="card-body" style="padding:6px;">
    <h4 class="card-header text-center" ><b>SW7&reg; Scheme 1 </b></h4>
    <p class="card-text"></p>
  
  <ul class="list-group list-group-flush">
    
    <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Faculty Training </b></li>
	 
	 <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Business Training</b></li>
	 <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b> Free Machinery</b> </li>
	 <!--<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement Advertising Benefit Student Certificate Placement Cell Online Company CRM 3 Yrs Support</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>-->
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Advertising Benefit</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Student Certificate</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Placement Cell</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Company CRM 3 Yrs Support</b><br><br><br><br><br><br><br></li>
	<!--<li class="list-group-item text-justify text-info" ><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>SW7 INFOMEDIA PRIVATE LIMITED is a PUNE based Training Company with an expertise in the area of Electronic and software Related Courses<br>
1. Industry Experienced faculty<br>
2. Advance Infrastructural Facilities<br>
3. Practical & Live Training<br>
4. 100% Job Assistance for Students<br>
5. Real Time Projects & Work for Practice<br>
Today, we are not just a name but a brand. We have set-up our own standards for quality training in India. We enroll thousands of students every year from the country. With the help of our classified courses, we have trained more than 5,000+ professionals. We believe in 100% quality training also 100% practical base training and creating employment opportunities for the students. SW7 INFOMEDIA PRIVATE LIMITED. was made by a team of awesome peoples. Well trained and experienced teams that are always put through continuous training practices to effectively handle today’s demand.</b></li>
	--><li class="list-group-item text-success" style="border:none;"><b>Fees :  ₹ 70,800/-  &nbsp; &nbsp;(Including GST)</b></li>
	
    <li class="list-group-item text-lowercase text-info" style="border:none;">(Non-Refundable)</li>
	
  </ul>
  
   <input type="radio" id="scheme1" class="form-control"  name="scheme" value="scheme1" required autofocus>
  </div>
   </div>
		
        </div> 
         
        <div class="col-md-4 col-sm-4">
          <div class="card " style=" width: 30rem;margin-left:-30px; margin-top:70px; border: 3px solid #f3f3f3;
  transition: 0.3s;
  background:white;height: fit-content;min-height:340px; border-radius: 1rem;
    box-shadow: 0px -10px 0px rgb(151, 248, 6)">
  
  <div class="card-body" style="padding:6px;">
    <h4 class="card-title text-center" ><b>SW7&reg; Scheme 2 </b></h4>
    <p class="card-text"></p>
 
  <ul class="list-group list-group-flush">
    
    <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Faculty Provided by Company (Client Should Pay him Salary) </b></li>
	 <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Business Training</b></li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Machinery</b></li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Scrap Material</b></li>
  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Advertising Benefit</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Student Certificate</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Placement Cell</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Company CRM 3 Yrs Support</b><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	<li class="list-group-item text-success" style="border:none;"><b>Fees : ₹  2,00,000/- &nbsp;(Including GST)</b></li>
    <li class="list-group-item text-lowercase text-info" style="border:none;">(Non-Refundable)</li>
  </ul>
  
 <input type="radio"id="scheme2" class="form-control" name="scheme" value="scheme2" autofocus >
  </div>
   </div>
        </div>

        <div class="col-md-4 col-sm-4">
        <div class="card " style=" width: 30rem;margin-left:-30px; margin-top:70px; border: 3px solid #f3f3f3;
  transition: 0.3s;
  background:white;height: fit-content;min-height:340px; border-radius: 1rem;
    box-shadow: 0px -10px 0px rgb(151, 248, 6)">
  
  <div class="card-body  " style="padding:6px;">
    <h4 class="card-header text-center"><b>SW7&reg; Scheme 3 </b></h4>
    
  
  <ul class="list-group list-group-flush " >
    
    <li class="list-group-item text-justify text-info" style="border:none;" ><b>(Company Operated)</b></li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Faculty</b></li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Furniture</b></li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Machinery</b></li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Scrap Material</b><li>
	<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Business Training</b><li>
 <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Advertising Benefit</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Student Certificate</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Placement Cell</b></li>
	  <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Company CRM 3 Yrs Support</b></li>
	<li class="list-group-item text-success text-success" style="border:none;"><b>Fees : ₹  5,00,000/- &nbsp;(Including GST)</b></li>
    <li class="list-group-item text-lowercase text-info" style="border:none;">(Non-Refundable)</li>
  </ul>
 
   <input type="radio"id="scheme3" class="form-control" name="scheme" value="scheme3" autofocus>
  </div>
   </div><br>
        </div>

        
           	 <center><div class="col-md-12">
	  	<button type="submit" class=" btn btn-lg btn-primary  checkout-page-button" style="
			padding-top: 9px;
			 padding-bottom: 9px;
			border-bottom-width: 8px;
			padding-left: 50px;
			padding-right: 50px;
			font-size:14px;
		">Next </button>
          </div></center>
	</form>
	
	
	
    </div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
<!--
<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">User Form </b></center>
<br><br>

<form class="row" method="post" action="{{ url('/account/insert') }}" id="Validate_form" enctype="multipart/form-data" style="border:1px solid black;border-radius:20px;">
{{ csrf_field() }}
								<div class="col-md-12" style="padding-top:20px;">
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Account Holder Name</label>
				        <input type="text"id="account_name" class="form-control" style="height:45px" name="account_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Account Holder Name">
                </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Bank Name</label>
				      <input type="text"id="bank_name" class="form-control" style="height:45px" name="bank_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Bank Name">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Bank Account Number</label>
				      <input type="text"id="account_no" class="form-control" style="height:45px" name="account_no"  required autofocus placeholder="Enter Bank Account Number">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;IFSC Code</label>
				      <input type="text"id="ifsc_code" class="form-control" style="height:45px" name="ifsc_code" data-parsley-pattern="^[A-Za-z]{4}\d{7}$" data-parsley-length="[11,11]" data-parsley-pattern-message="This field only contains alphabets and numbers" data-parsley-length-message="Name Should be of 11 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter IFSC Code">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;MICR Code</label>
				      <input type="text"id="micr_code" class="form-control" style="height:45px" name="micr_code"  data-parsley-pattern="^[0-9]{9}$" data-parsley-length="[9,9]" data-parsley-pattern-message="This field only contains numbers" data-parsley-length-message="Name Should be of 9 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter MICR Code">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Bank Proof (Image/PDF)</label>
				      <input type="file" id="pdf" class="form-control" style="height:45px" name="pdf"  required autofocus >
            </div>

            <center><button type="submit" style="background-color:#3665f3; font-size: 16px; border-radius: 5px;" class="btn btn-primary" name="submit">Save Data</button></center> 		
								</form>
      <br/>
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
@endsection

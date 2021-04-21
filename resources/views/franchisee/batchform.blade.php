@extends('layouts.master2') 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/css/fileinput.min.css">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}" />
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
	<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" /> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/base.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('/css/footer.css')}}"> --}} -->

	<style>
	input[type=text]:focus{
	    border-color: black;
	}
	input[type=file]:focus {
	    border-color: black;
	}
		textarea[class=form-control]:focus {
	border-color: black;
	}
	select[class=form-control]:focus {
	border-color: black;
	}
	input[type=text]:hover {
			border-color: black;
	}
/* 
	.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    height: 45px;
    vertical-align: middle;
    
    touch-action: manipulation;
    cursor: pointer;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 18px;
    line-height: 1.6;
    border-radius: 4px;
   
    user-select: none;
} */
.page-header {
    padding-bottom: 10px;
    margin: 44px 0 22px;
    border-bottom: 1px solid #eee;
}
	.form-control {
    width: 100%;
    height: 40px;
    padding: 6px 12px;
    background-color: #fff;
    border: 1px solid #ccd0d2;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

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
    /* font-size: 0.5em; */
    line-height: 0.5em;
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

@section('scripts')
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/js/fileinput.min.js"></script> -->
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js"></script>
	<script src="{{ asset('js/articlesform.js') }}"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/js/fileinput.min.js"></script> -->
	<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

	<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<script>
function calculate(evt) {
	var amount = document.getElementById("fee").value;
	//alert("hi");
    var discount = document.getElementById("discount").value;
	var gst = document.getElementById("gst").value;
    var finalamount = parseFloat(amount) - parseFloat(discount) +parseFloat((gst/100)*amount);
	document.getElementById("course_final_fee").innerHTML = finalamount;
	document.getElementById("course_final_fee").value = finalamount;
}
</script>

<script src="{{ asset('assets/js/parsley.js') }}"></script>
    
<script>
$(document).ready(function(){  
    $('#validate_form').parsley();

});
</script>

@endsection

@section('content')

	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> {{ session('success') }}
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
	@endif

	

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
	<div class="container"  style="margin-right:40px;width:1050px;" >
		<div class="sign-in-page">
<!-- create a new account -->
<div class="col-md-12 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle"><b>Batch Form</b></h4>
	<!-- <p class="text title-tag-line">Document Registration </p> -->
	<form class="register-form outer-top-xs" role="form"  method="post" id="validate_form" action="
		@if(isset($batch))
			{{ url('/franchisee/batches/update/'.$batch->id) }}
		@else
			{{ url('/franchisee/batches/insert') }}
		@endif "
		enctype="multipart/form-data">
    {{csrf_field()}}
     
         
        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title">Batch Name<span> *</span></label>
			@if(isset($batch))
					<select  class="form-control " id="batch_name" style="height:40px;"  name="batch_name" required>
					  <option value="Laptop Repairing Course" {{ $batch->batch_name === 'Laptop Repairing Course' ? 'selected' : '' }}>Laptop Repairing Course</option>
					  <option value="Printer Repairing Course" {{ $batch->batch_name === 'Printer Repairing Course' ? 'selected' : '' }}>Printer Repairing Course</option>
					  <option value="LCD Repairing Course" {{ $batch->batch_name === 'LCD Repairing Course' ? 'selected' : '' }}>LCD Repairing Course</option>
					  <option value="Mobile Repairing Course" {{ $batch->batch_name === 'Mobile Repairing Course' ? 'selected' : '' }}>Mobile Repairing Course</option>
					  <option value="CCTV Repairing Course" {{ $batch->batch_name === 'CCTV Repairing Course' ? 'selected' : '' }}>CCTV Repairing Course</option>
					  <option value="Xerox Machine Repairing Course" {{ $batch->batch_name === 'Xerox Machine Repairing Course' ? 'selected' : '' }}>Xerox Machine Repairing Course</option>
					  <option value="AC Repairing Course" {{ $batch->batch_name === 'AC Repairing Course' ? 'selected' : '' }}>AC Repairing Course</option>
					  <option value="Freeze Repairing Course" {{ $batch->batch_name === 'Freeze Repairing Course' ? 'selected' : '' }}>Freeze Repairing Course</option>
					  <option value="Washing Machine Repairing Course" {{ $batch->batch_name === 'Washing Machine Repairing Course' ? 'selected' : '' }}>Washing Machine Repairing Course</option>
					  <option value="Motor Winding Repairing Course" {{ $batch->batch_name === 'Motor Winding Repairing Course' ? 'selected' : '' }}>Motor Winding Repairing Course</option>
					  <option value="HDD Repairing Course" {{ $batch->batch_name === 'HDD Repairing Course' ? 'selected' : '' }}>HDD Repairing Course</option>
					  <option value="Grinder Repairing Course" {{ $batch->batch_name === 'Grinder Repairing Course' ? 'selected' : '' }}>Grinder Repairing Course</option>
					  <option value="Fan Repairing Course" {{ $batch->batch_name === 'Fan Repairing Course' ? 'selected' : '' }}>Fan Repairing Course</option>
					  <option value="Cooler Repairing Course" {{ $batch->batch_name === 'Cooler Repairing Course' ? 'selected' : '' }}>Cooler Repairing Course</option>
					  <option value="Owen Repairing Course" {{ $batch->batch_name === 'Owen Repairing Course' ? 'selected' : '' }}>Owen Repairing Course</option>
					  <option value="Elevator Repairing Course" {{ $batch->batch_name === 'Elevator Repairing Course' ? 'selected' : '' }}>Elevator Repairing Course</option>
					  <option value="Computer Hardware Course" {{ $batch->batch_name === 'Computer Hardware Course' ? 'selected' : '' }}>Computer Hardware Course</option>
					  <option value="Basic Electronic Course" {{ $batch->batch_name === 'Basic Electronic Course' ? 'selected' : '' }}>Basic Electronic Course</option>
					  <option value="Combo Course 1" {{ $batch->batch_name === 'Combo Course 1' ? 'selected' : '' }}>Combo Course 1</option>
					  <option value="Combo Course 2" {{ $batch->batch_name === 'Combo Course 2' ? 'selected' : '' }}>Combo Course 2</option>
					  <option value="Combo Course 3" {{ $batch->batch_name === 'Combo Course 3' ? 'selected' : '' }}>Combo Course 3</option>
					  </select>
					  @else
				
					  <select  class="form-control " id="batch_name" style="height:40px;" name="batch_name" required>
						<option>Select Name</option>
						<option>Laptop Repairing Course</option>
						<option>Printer Repairing Course</option>
						<option>LCD Repairing Course</option>
						<option>Mobile Repairing Course</option>
						<option>CCTV Repairing Course</option>
						<option>Xerox Machine Repairing Course</option>
						<option>AC Repairing Course</option>
						<option>Freeze Repairing Course</option>
						<option>Washing Machine Repairing Course</option>
						<option>Motor Winding Repairing Course</option>
						<option>HDD Repairing Course</option>
						<option>Grinder Repairing Course</option>
						<option>Fan Repairing Course</option>
						<option>Cooler Repairing Course</option>
						<option>Owen Repairing Course</option>
						<option>Elevator Repairing Course</option>
						<option>Computer Hardware Course</option>
						<option>Basic Electronic Course</option>
						<option>Combo Course 1</option>
						<option>Combo Course 2</option>
						<option>Combo Course 3</option>
	  			    </select>
					  @endif
				                  </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title">Teacher Name<span>*</span></label>
			<input type="text" placeholder="Enter Batch teacher name" class="form-control" id="teacher_name" name="teacher_name" value="{{ $batch->teacher_name or '' }}"required/>
			         </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
		    <label class="info-title">Time Table<span>*</span></label>
			<input type="text" placeholder="Enter time table" class="form-control" id="timetable" name="timetable" value="{{ $batch->timetable or '' }}"required/>
				</div>
        </div>
      
             <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Time Slot<span>*</span></label>
			<input type="text" placeholder="Enter time slot" class="form-control" id="timeslot" name="timeslot" value="{{ $batch->timeslot or '' }}"required/>
			  </div>
        </div>  
       
        <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">syllabus<span>*</span></label>
			<input type="text" placeholder="Enter syllabus" class="form-control" id="syllabus" name="syllabus"  value="{{ $batch->syllabus or '' }}"required/>
			        </div>
		</div>  
		<div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Syllabus PDF(Select PDF)<span>*</span></label>
			@if(isset($batch))
					<input type="file" class="form-control file" id="syllabus_pdf" placeholder="Image" name="syllabus_pdf"/>
					@else
					<input type="file" class="form-control file" id="syllabus_pdf" placeholder="Image" name="syllabus_pdf" required/>
					@endif
			        </div>
		</div> 
		<div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Fee<span>*</span></label>
			<input type="number" step="0.01" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="fee" placeholder="Enter Fee" name="fee"  value="{{ $batch->fee or '' }}" onblur = 'calculate()' required/>
			        </div>
		</div>   <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">GST (In Percentage) <span>*</span></label>
			<input type="number" step="0.01" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="gst" placeholder="Enter GST" name="gst"  value="{{ $batch->gst or '' }}" onblur = 'calculate()' required/>
		        </div>
		</div>   <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Discount (IN Rs.)<span>*</span></label>
			<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="discount" placeholder="Enter Discount" name="discount"  value="{{ $batch->discount or '' }}" onblur = 'calculate()' required/>
			        </div>
		</div>  
		 <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Final Fee<span>*</span></label>
			<input type="number" step="0.01" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="course_final_fee" placeholder="Enter Price" name="course_final_fee"  value="{{ $batch->course_final_fee or '' }}" required readonly/>
		        </div>
		</div>   
		<div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Course Duration<span>*</span></label>
			<input type="text" placeholder="Enter Course Duration" class="form-control" id="course_duration" name="course_duration"  value="{{ $batch->course_duration or '' }}"required/>
			      </div>
		</div> 
		<div class="col-md-4">
         <div class="form-group">
		    <label class="info-title">Seats Available <span>*</span></label>
			<input type="number"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="seats_available" placeholder="Enter seats available" name="seats_available"  value="{{ $batch->seats_available or '' }}" required/>
	        </div>
		</div> 
		<div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"  for="imagefile1">Course Image(Select Image)<span>*</span></label>
					@if(isset($batch))  
					<input type="file" class="form-control file" id="course_image" placeholder="Image" name="course_image" />
					@else
					<input type="file" class="form-control file" id="course_image" placeholder="Image" name="course_image" required/>
					@endif     
				
		</div> 
		   </div>
		   <div class="col-md-4">
         <div class="form-group">
		    <label class="info-title"  for="imagefile2">Batch Image 1(Select Image)<span>*</span></label>
			
					@if(isset($batch)) 
					<input type="file" class="form-control file" id="batch_image1" placeholder="Image" name="batch_image1"/>
					@else
					<input type="file" class="form-control file" id="batch_image1" placeholder="Image" name="batch_image1" required/>
					@endif
				   </div>
		</div> 
		   
		   <div class="col-md-4">
         <div class="form-group">
		 <label class="info-title"  for="imagefile">Batch Image 2(Select Image)<span>*</span></label>
		<input type="file" class="form-control file" id="batch_image2" placeholder="Image" name="batch_image2"/>
		</div>
		</div> 
		   
		<div class="col-md-4 ">
			<div class="form-group">
			<label class="info-title"  for="imagefile">Batch Image 3(Select Image)<span>*</span></label>
					<input type="file" class="form-control file" id="batch_image3" placeholder="Image" name="batch_image3"/>
				</div>
			</div>
			
			
			<div class="col-md-12 ">
				<div class="form-group">
				<label class="info-title"  for="summernote">Description<span>*</span></label>
					<textarea id="summernote" placeholder="Enter product content" cols="120" name="summernote"  required>
						@if(isset($batch))
							{!! $batch->description !!}
						@endif
					</textarea>
				</div>
			</div>
			
           	 <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
          </div></center>
	</form>
	
	
	
    </div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
</div><br><br>
<!--

	<div class="container-fluid" style="margin-top:0px;margin-left:200px;">
	<div class="page-header row">
            {{-- <a class="btn btn-primary btn-lg col-md-2 col-md-offset-2" style="width:40px;font-size:20px;background-color:#2ab27b;color:white;border-color::#2ab27b;" href="{{ url('/dealer/products') }}" ><</a> --}}
            <h3 class="col-md-12 col-sm-8 col-xs-8" style="color:black;font-size:30px;padding-right:140px;"><center><strong >Batch Form</strong></center> </h3>

		</div>	
	  
		<form class="row" method="post" action="
		@if(isset($batch))
			{{ url('/franchisee/batches/update/'.$batch->id) }}
		@else
			{{ url('/franchisee/batches/insert') }}
		@endif "
		enctype="multipart/form-data"   style="height:1250px;width:900px;border:1px solid black;border-radius:25px;padding-left:5px;padding-top:15px;margin-left:160px;">
			{{ csrf_field() }}

			
			<!--	<div class="col-md-6 ">
			    	<div class="form-group">
					<label for="title">Batch Name</label>
					<!-- <input type="text"  Style="font-size:1.5rem;"placeholder="Enter Batch Title" class="form-control" id="batch_name" name="batch_name" value="{{ $batch->batch_name or '' }}"required/> -->
				<!--	@if(isset($batch))
					<select  class="form-control " id="batch_name"  style="height:47px;font-size:1.5rem;" name="batch_name" required>
					  <option value="Laptop Repairing Course" {{ $batch->batch_name === 'Laptop Repairing Course' ? 'selected' : '' }}>Laptop Repairing Course</option>
					  <option value="Printer Repairing Course" {{ $batch->batch_name === 'Printer Repairing Course' ? 'selected' : '' }}>Printer Repairing Course</option>
					  <option value="LCD Repairing Course" {{ $batch->batch_name === 'LCD Repairing Course' ? 'selected' : '' }}>LCD Repairing Course</option>
					  <option value="Mobile Repairing Course" {{ $batch->batch_name === 'Mobile Repairing Course' ? 'selected' : '' }}>Mobile Repairing Course</option>
					  <option value="CCTV Repairing Course" {{ $batch->batch_name === 'CCTV Repairing Course' ? 'selected' : '' }}>CCTV Repairing Course</option>
					  <option value="Xerox Machine Repairing Course" {{ $batch->batch_name === 'Xerox Machine Repairing Course' ? 'selected' : '' }}>Xerox Machine Repairing Course</option>
					  <option value="AC Repairing Course" {{ $batch->batch_name === 'AC Repairing Course' ? 'selected' : '' }}>AC Repairing Course</option>
					  <option value="Freeze Repairing Course" {{ $batch->batch_name === 'Freeze Repairing Course' ? 'selected' : '' }}>Freeze Repairing Course</option>
					  <option value="Washing Machine Repairing Course" {{ $batch->batch_name === 'Washing Machine Repairing Course' ? 'selected' : '' }}>Washing Machine Repairing Course</option>
					  <option value="Motor Winding Repairing Course" {{ $batch->batch_name === 'Motor Winding Repairing Course' ? 'selected' : '' }}>Motor Winding Repairing Course</option>
					  <option value="HDD Repairing Course" {{ $batch->batch_name === 'HDD Repairing Course' ? 'selected' : '' }}>HDD Repairing Course</option>
					  <option value="Grinder Repairing Course" {{ $batch->batch_name === 'Grinder Repairing Course' ? 'selected' : '' }}>Grinder Repairing Course</option>
					  <option value="Fan Repairing Course" {{ $batch->batch_name === 'Fan Repairing Course' ? 'selected' : '' }}>Fan Repairing Course</option>
					  <option value="Cooler Repairing Course" {{ $batch->batch_name === 'Cooler Repairing Course' ? 'selected' : '' }}>Cooler Repairing Course</option>
					  <option value="Owen Repairing Course" {{ $batch->batch_name === 'Owen Repairing Course' ? 'selected' : '' }}>Owen Repairing Course</option>
					  <option value="Elevator Repairing Course" {{ $batch->batch_name === 'Elevator Repairing Course' ? 'selected' : '' }}>Elevator Repairing Course</option>
					  </select>
					  @else
				
					  <select  class="form-control " id="batch_name"  style="height:47px;font-size:1.5rem;" name="batch_name" required>
						<option>Select Name</option>
						<option>Laptop Repairing Course</option>
						<option>Printer Repairing Course</option>
						<option>LCD Repairing Course</option>
						<option>Mobile Repairing Course</option>
						<option>CCTV Repairing Course</option>
						<option>Xerox Machine Repairing Course</option>
						<option>AC Repairing Course</option>
						<option>Freeze Repairing Course</option>
						<option>Washing Machine Repairing Course</option>
						<option>Motor Winding Repairing Course</option>
						<option>HDD Repairing Course</option>
						<option>Grinder Repairing Course</option>
						<option>Fan Repairing Course</option>
						<option>Cooler Repairing Course</option>
						<option>Owen Repairing Course</option>
						<option>Elevator Repairing Course</option>
	  			    </select>
					  @endif
				</div>
				</div>
				<div class="col-md-6 ">
				<div class="form-group">
					<label for="title">Teacher Name</label>
					<input type="text"  Style="font-size:1.5rem;"placeholder="Enter Batch teacher name" class="form-control" id="teacher_name" name="teacher_name" value="{{ $batch->teacher_name or '' }}"required/>
				</div>
				</div>
			 			
			
				<div class="col-md-6 ">
			    	<div class="form-group">
					<label for="title">timetable</label>
					<input type="text"  Style="font-size:1.5rem;"placeholder="Enter time table" class="form-control" id="timetable" name="timetable" value="{{ $batch->timetable or '' }}"required/>
				</div>
				</div>
				<div class="col-md-6 ">
				<div class="form-group">
					<label for="title">time slot</label>
					<input type="text"  Style="font-size:1.5rem;"placeholder="Enter time slot" class="form-control" id="timeslot" name="timeslot" value="{{ $batch->timeslot or '' }}"required/>
				</div>
				</div>
			 		
			<div class="col-md-6 ">
				<div class="form-group">
					<label for="title">syllabus</label>
					<input type="text" style="font-size:1.5rem;" placeholder="Enter syllabus" class="form-control" id="syllabus" name="syllabus"  value="{{ $batch->syllabus or '' }}"required/>
				</div>
			</div>
		
			<div class="col-md-6 ">
			<div class="form-group">
					<label for="imagefile1">Syllabus PDF(Select PDF)</label>
					@if(isset($batch))
					<input type="file"style="font-size:1.5rem;"  class="form-control file" id="syllabus_pdf" placeholder="Image" name="syllabus_pdf"/>
					@else
					<input type="file"style="font-size:1.5rem;"  class="form-control file" id="syllabus_pdf" placeholder="Image" name="syllabus_pdf" required/>
					@endif
				</div>
			</div>

			<div class="col-md-6 " >
			<div class="form-group">
					<label for="title">Fee</label>
					<input type="number" step="0.01" style="font-size:1.5rem;" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="fee" placeholder="Enter Fee" name="fee"  value="{{ $batch->fee or '' }}" onblur = 'calculate()' required/>
			</div>
			</div>

			<div class="col-md-6 " >
			<div class="form-group">
					<label for="title">GST (In Percentage)</label>
					<input type="number" step="0.01" style="font-size:1.5rem;" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="gst" placeholder="Enter GST" name="gst"  value="{{ $batch->gst or '' }}" onblur = 'calculate()' required/>
			</div>
			</div>

			<div class="col-md-6 " >
			<div class="form-group">
					<label for="title">Discount(In Rs.)</label>
					<input type="number" step="0.01"  style="font-size:1.5rem;" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="discount" placeholder="Enter Discount" name="discount"  value="{{ $batch->discount or '' }}" onblur = 'calculate()' required/>
			</div>
			</div>
			<div class="col-md-6 " >
			<div class="form-group">
					<label for="title">Final Fee</label>
					<input type="number" step="0.01" style="font-size:1.5rem;" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="course_final_fee" placeholder="Enter Price" name="course_final_fee"  value="{{ $batch->course_final_fee or '' }}" required readonly/>
			</div>
			</div>
			<!-- <div class="col-md-6 " >
			<div class="form-group">
					<label for="title">Height</label>
					<input type="number"  style="font-size:1.5rem;" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="height" placeholder="Enter Height" name="height"  value="{{ $batch->height or '' }}" required/>
			</div>
			</div> --
			<div class="col-md-6 ">
				<div class="form-group">
					<label for="title">Course Duration</label>
					<input type="text" style="font-size:1.5rem;" placeholder="Enter Course Duration" class="form-control" id="course_duration" name="course_duration"  value="{{ $batch->course_duration or '' }}"required/>
				</div>
			</div>
			<div class="col-md-6 " >
			<div class="form-group">
					<label for="title">Seats Available</label>
					<input type="number"  style="font-size:1.5rem;" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="seats_available" placeholder="Enter seats available" name="seats_available"  value="{{ $batch->seats_available or '' }}" required/>
			</div>
			</div>
		
			<div class="col-md-6 ">
			<div class="form-group">
					<label for="imagefile1">Course Image(Select Image)</label>
					@if(isset($batch))  
					<input type="file"style="font-size:1.5rem;"  class="form-control file" id="course_image" placeholder="Image" name="course_image" />
					@else
					<input type="file"style="font-size:1.5rem;"  class="form-control file" id="course_image" placeholder="Image" name="course_image" required/>
					@endif
				</div>
			</div>
			<div class="col-md-6 ">
			<div class="form-group">
					<label for="imagefile2">Batch Image 1(Select Image)</label>
					@if(isset($batch)) 
					<input type="file" style="font-size:1.5rem;" class="form-control file" id="batch_image1" placeholder="Image" name="batch_image1"/>
					@else
					<input type="file" style="font-size:1.5rem;" class="form-control file" id="batch_image1" placeholder="Image" name="batch_image1" required/>
					@endif
				</div>
			</div> 
			<div class="col-md-6 ">
			<div class="form-group">
					<label for="imagefile">Batch Image 2(Select Image)
					</label>
					<input type="file" style="font-size:1.5rem;" class="form-control file" id="batch_image2" placeholder="Image" name="batch_image2"/>
				</div>
			</div>
			<div class="col-md-6 ">
			<div class="form-group">
					<label for="imagefile">Batch Image 3(Select Image)
					</label>
					<input type="file" style="font-size:1.5rem;" class="form-control file" id="batch_image3" placeholder="Image" name="batch_image3"/>
				</div>
			</div>
			
			
			<div class="col-md-12 ">
				<div class="form-group">
					<label for="summernote">Description</label><br>
					<textarea id="summernote"  style="font-size:1.5rem;"placeholder="Enter product content" cols="120" name="summernote"  required>
						@if(isset($batch))
							{!! $batch->description !!}
						@endif
					</textarea>
				</div>
			</div>
			
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary btn-raised col-md-6 col-xs-12" >Submit</button>
			</div>
		</form>
	</div>
		</div>
		<br><br><br>--->
		{{-- @include('partials.footer') --}}

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <a id="scrollUp" href="#top" style="position: fixed; z-index:2147483647;display:block;">
      <i class="fa fa-arrow-up"></i>
    </a>
@endsection







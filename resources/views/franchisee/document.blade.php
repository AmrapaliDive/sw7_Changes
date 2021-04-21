


@extends('layouts.master')

@section('content')


<style>



    .text{
        margin-left:100px;
        margin-right:100px;
    }
    .vl {
  border-left: 2px solid black;
  height: 30px;
}

.form-control{
    height: 30px;
}
.form-label{
    font-size: 12px;
    color:black ;
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
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <center><li>{!! \Session::get('success') !!}</li></center>
        </ul>
    </div>
@endif
	


<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
<!-- create a new account -->



<div class="container">

<form class="well form-horizontal" method="POST" action="{{ url('/document/insert') }}" enctype='multipart/form-data' id="contact_form">
<input type="hidden" name="id" id="id" value="{{$user->id or ''}}">
{{csrf_field()}}

<!-- Form Name -->
<center><h3><b>Step 2 : Document Registration</b></h3></center><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >PAN No.</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="pan_no" required autofocus  placeholder="Enter PAN No." >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >PAN PDF</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="pan_pdf" required >
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label" >Aadhaar No.</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="aadhar_no" required autofocus  placeholder="Enter Aadhar No." >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Aadhaar PDF</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="aadhar_pdf" required >
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >GST No.</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="gst_number" required autofocus  placeholder="Enter GST No." >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >GST Certificate (Upload Image/PDF File)</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="gst_pdf" required >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Shop Act Certificate </label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list" style="color:black;"></i></span>
<input  class="form-control"  type="text" name="shopack_number" required autofocus  placeholder="Enter Shop Act No." >
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >Shop Act Certificate </label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group" style="border:0px;">

<input type="file" placeholder="Image" name="showpack_pdf" required >
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNext <span class="glyphicon glyphicon-send" style="color:black;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>


</form>
</div>
</div><!-- /.container -->



</div>
</div>
</div>

<br><br>


    @endsection

@section('scripts')
<script src="{{ asset('assets/js/parsley.js') }}"></script>
    
<script>
$(document).ready(function(){
  
    $('#validate_form').parsley();

});
</script>


<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

@endsection
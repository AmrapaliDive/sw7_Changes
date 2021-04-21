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
@section('css')
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/css/fileinput.min.css">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}" />
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

	
	</style>
@endsection

@section('js')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/js/fileinput.min.js"></script>
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
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
	<br><br>
	<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Slider Form</strong> <hr></center></h3>
		 <center><div>
				  <a class="btn btn-primary btn-lg px-3 py-3 text-center" style="font-size:20px;width:40px;margin-left:250px;" href="{{ url('/admin/slider') }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg></a>
				  </div></center><br>
	
	<div class="panel panel-default container"style="margin-left:310px;width:1000px;height:250px;overflow:auto">
		<div class="panel-body row">
			<div class="col-md-12">
		
		<form class="row" method="post" id="validate_form" action="
		@if(isset($image))
			{{ url('/admin/sliders/update/'.$image->id) }}
		@else
			{{ url('/admin/sliders/insert') }}
		@endif "
		enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col-md-12">
				<div class="form-group">
					<label for="imagefile">Image
						@if(isset($image)) {{ 'Leave Blank to not change image' }} @endif
					</label>
					<input type="file" class="form-control file"  style="font-size:1.3rem;" id="imagefile" name="imagefile"required/>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="title">Image ranking</label>
					<input type="text" class="form-control"  style="font-size:1.4rem;" id="ranking" name="ranking" value="{{ $slider->ranking or '' }}" required/>
				</div>
			</div>
			<div class="col-md-12">
			<br>
				<button type="submit" class="btn btn-primary btn-raised col-md-12 col-xs-12" style="background-color:white;color:black;border-color:black;font-size:14px;">Upload Image</button>
			</div>
		</form>
	</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/parsley.js') }}"></script>

<script>
$(document).ready(function(){
        $('#validate_form').parsley();
    });
</script>
@endsection

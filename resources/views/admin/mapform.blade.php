@extends('layouts.dashboard')

@section('styles')
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
	body{
		background:white;
	}
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
    padding: 6px 20px;
    font-size: 18px;
    line-height: 1.6;
    border-radius: 4px;
	
    user-select: none;
	}
	.page-header {
		padding-bottom: 10px;
		margin: 44px 0 22px;
		border-bottom: 1px solid #eee;
	}
	.form-control {
    width: 100%;
    height: 45px;
    padding: 6px 12px;
    background-color: #fff;
    border: 1px solid #ccd0d2;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}
	</style>
@endsection

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

	<script src="{{ asset('js/parsley.js') }}"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
		$('#Validate_form').parsley(); 
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

	<div class="container-fluid" style="margin-top:0px;margin-left:200px;">
	<div class="page-header row">
            <h3 class="col-md-12 col-sm-8 col-xs-8" style="color:black;font-size:30px;padding-right:140px;"><center><strong >Location Form</strong></center> </h3>

		</div>	
	  
		<form class="row" method="post" action="
		@if(isset($maps))
			{{ url('/admin/map/update/'.$maps->id) }}
		@endif "
		enctype="multipart/form-data" id="Validate_form" style="width:900px;border:1px solid black;border-radius:25px;padding-left:5px;padding-top:15px;margin-left:160px;">
			{{ csrf_field() }}

			
			<div class="form-group col-md-12">
                <label for="location">Enter Location</label>
                <input type="text"  Style="font-size:1.5rem;" placeholder="Enter Location" class="form-control" id="location" name="location" value="{{ $maps->location or '' }}" required/>
			</div>
			
			<div class="col-md-12 text-center">
				<button type="submit"  class="btn btn-primary btn-raised"  Style="background-color: #138809">Submit</button>
				<br><br><br>
			</div>
		</form>
	</div>
		</div>
		
{{-- @include('partials.footer') --}}

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index:2147483647;display:block;">
	<i class="fa fa-arrow-up"></i>
</a>
@endsection
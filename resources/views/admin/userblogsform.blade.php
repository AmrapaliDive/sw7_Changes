@extends('layouts.master')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/css/fileinput.min.css">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}" />
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
	<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" /> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

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
    padding: 6px 12px;
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

      $('#caption').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('assets/js/parsley.js') }}"></script>

<script>
$(document).ready(function(){
        $('#validate_form').parsley();
    });
</script>

@endsection


@section('content')
<br>
<div class="container-fluid">
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

	    
		 <a class="btn btn-primary btn-lg col-md-2 col-md-offset-1 text-center" style="width:40px;font-size:20px;" href="{{ url('/admin/userblogs') }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg></a>
		

	<div class="page-header ">
           
            <h3 class="col-md-12 col-sm-12 col-xs-12" style="color:black;font-size:30px;"><center><strong>Blog Form</strong></center> </h3>

		</div>
		
		<div class="container">
		<form id="validate_form" class="row" method="post" action="
		@if(isset($blog))
			{{ url('/admin/userblogs/update/'.$blog->id) }}
		@else
			{{ url('/admin/userblogs/insert') }}
		@endif "
		enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Blog Title</label>
					<input type="text" placeholder="Enter Blog title.." class="form-control" id="title" name="title" value="{{ $blog->title or '' }}"required/>
				</div>
				</div>	
				<!-- <div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="imagefile">Blog Image(Select Image)
					@if(isset($blog)) {{ 'Leave Blank to not change image' }}	</label>
						<input type="file" class="form-control file" id="imagefile" placeholder="Image" name="imagefile" />
					@else
					<input type="file" class="form-control file" id="imagefile" placeholder="Image" name="imagefile" required/>
					@endif
				</div>
			</div> -->
      <div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile1">Blog Image(Select Image)	</label>
						@if(isset($blog)) {{ 'Leave Blank to not change image' }} 
            <input type="file" class="form-control file" id="imagefile" placeholder="Image" name="imagefile"/>
           @else
				
          <input type="file" class="form-control file" id="imagefile" placeholder="Image" name="imagefile" required/>
          @endif
				</div>
			</div>
	
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				<label for="summernote">Blog Short Description</label>
				<textarea id="caption" placeholder="Short Describe Blog.." name="caption"class="form-control" required>
					@if(isset($blog))
						{{ $blog->shortdescription }}
					@endif
				</textarea>
			</div>
						</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="summernote">Blog Content</label>
					<textarea id="summernote" placeholder="Enter product content" cols="180" name="summernote"  required>
						@if(isset( $blog))
							{!!  $blog->caption !!}
						@endif
					</textarea>
				</div>
			</div>

      <div class="col-md-4 col-md-offset-4">
				<button type="submit" class="btn btn-primary btn-raised col-md-10 col-xs-12" >Submit</button>
			</div>
		</form>
	</div>
		<br><br><br>
@endsection


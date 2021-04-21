@extends('layouts.master')
@section('js')
	<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
	<script src="{{ asset('js/articles/showarticle.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
	<script src="{{ asset('js/jquery.justifiedGallery.min.js') }}"></script>
	<script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
	<script src="{{ asset('js/articles/showarticle.js') }}"></script>
@endsection
@section('css')
	<link rel="stylesheet" href="{{ asset('css/articles/showarticle.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/justifiedGallery.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/lg-transitions.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/articles/showarticle.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
	<style>
	.panel-primary {
	    color: black;
	   	padding:5px;
	    border-color: #333333;
	}
	.panel-heading{
		background-color: #333333;
	}
	body{
		background-color: white;
	}
	.panel-heading {
    background-color: #749803;
}
	.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.6s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}
 
</style>
@endsection

@section('content')<br><br>
	<div class="container-fluid banner" >
		<div class="row" >
			<div class="panel panel-primary  col-md-10 col-md-offset-1" style="border-color:black;height:100%;"  >
				<div class="col-md-7">
					<div class="heading-title">
						<center><h2 class="">{{ $blog->title }}</h2></center> <br>
					</div>
					<div class="panel-heading  panel-heading-main" >
						<div class="row">
							<!-- <div class="col-md-4" style="color:white" >
								<i class="fa fa-calendar fa-1x  "></i>
								<h5 style="display:inline !important;color:white">{{ $blog->userid }} - {{ $blog->created_at->timezone('Asia/Kolkata')->format('d/m/Y')  }}</h5>
							</div> -->
							<!-- <div class="col-md-4" >
								<h4 style="display:inline !important;color:white;">
									  <i class="fa fa-tags fa-1x  " aria-hidden="true"></i>Tags:-
									
								</h4>
							</div>  -->
                            
							<!-- <div class="col-md-3 col-md-offset-9" >
								<a href="https://www.facebook.com/sharer.php?u={{Request::fullUrl()}}" class="btn btn-raised btn-info" style="background-color:white; color:#1877F2;border-color: #333333;">
									<i class="fa fa-facebook fa-1x blink" style="height=20px; width:15px;"aria-hidden="true" ></i><b></b>
								</a>
								<a href="https://twitter.com/share?url={{Request::fullUrl()}}" class="btn btn-raised btn-info" style="background-color:white;color:#00acee;border-color: #333333;">
									<i class="fa fa-twitter fa-1x blink"style="height=20px;" aria-hidden="true"></i><b></b>
								</a>
							</div> -->
						</div>
					</div>	<div class="panel-body">
						<div class="row content-container">
							<p class="lead">
						 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! $blog->shortdescription !!} 
							</p>
						</div>
					</div>
					<div class="panel-body">
						<div class="row content-container">
							<p class="lead">
						 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! $blog->caption !!} 
							</p>
						</div>
					</div>
				</div><br>
				<div class="col-md-5"><br> 		
					<img src="{{ asset($blog->path) }}" style="height:250px;width:250px;border: 3px solid #CCC;padding:2px;" class="header-image img-responsive " alt="Image Not Found" />
					<br>
				</div>
				</div>
		</div>
	</div>
@endsection

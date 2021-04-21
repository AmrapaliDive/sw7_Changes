@extends('layouts.master')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/justifiedGallery.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/lg-transitions.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/articles/showarticle.css') }}" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
	<link rel="shortcut icon" href="images/345.jpg" />
	<style>
	input[type=text]:focus {
	border-color:black ;
	}
	.img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
  width: 220px;
	height: 170px;
}

#box {
    margin: 30px auto 0 auto;
    animation: appear 4s  ;
    /* animation: appear 4s infinite; */
  }
  @keyframes appear {
    0% {
      transform: translate3d(-500px, 0px, 0px);
      opacity: 0;
    }
    50%{
      opacity: 0.2;
      transform: translate3d(-350px, 0px, 0px);
    }
    100%{
      opacity: 1;
      transform: translate3d(0px, 0px, 0px);
    }
  }
    display: none;{
    top: 100%;
    left: 0;
    z-index: 99;
  }


  
	</style>
@endsection
@section('js')
	<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
	<script src="{{ asset('js/jquery.justifiedGallery.min.js') }}"></script>
	<script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
	<script src="{{ asset('js/articles/showarticle.js') }}"></script>
@endsection
@section('content')
<div class="container" style="margin-top: 0em;">
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0" >
 					<center><h2 id='box'>
                    News & Blogs
				    </h2></center>
			 			</div>
						 </div>
		</div>
<br> 

 
	<div class="container-fluid">
		<div class="row" >
			<form class="col-md-12" style="margin-top: 5px;" method="POST" action="{{ url('/userblogs/search/') }}" role="search">
		{{ csrf_field() }}
					<div class="form-group" >
							<form class="col-md-12">
						<div class="input-group" style="width:250px;margin:auto" >
							<input type="text" class="form-control" name="searchNavbar" style="position: relative;" placeholder="Filter by Name" />
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary btn-navbar"style="background-color:#085b9a;border-color:black;"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>
					</div>
				</form>
		</div>
		@if (!is_null($results))
			<div class="row" style="margin:auto;width:80%">
				<div class="col-md-12">
					<div class="list-group">
						@if (!$results->isEmpty())
							@foreach($results as $result)
								<a href="{{ url('/userblogs/show/'.$result->id) }}" class="list-group-item">
									<div class="row">
										<div class="col-md-2">
											<img class="img-responsive img-thumbnail" src="{{ asset($result->path) }}"/>
										</div>
										<div class="col-md-10" >
											<div class="least-content pull-right" style="font-size:17px;">{{ $result->created_at->timezone('Asia/Kolkata')->format('d/m/Y') }}</div>
											<h4 class="list-group-item-heading" style="font-size:25px; padding: 25px 0px 0px 0px;">{{ $result->title }}</h4>
											<p class="list-group-item-heading"style="font-size:18px; padding: 25px 35px 0px 15px;float:center;">{!! $result->shortdescription !!}<br><h4 class="pull-right">Read More...</h4>
											</p>
										</div>
									</div>
								</a><br>
							@endforeach
						@else
							<h3 style="text-align:center;">No Such blog Exists. Please use another search term</h3>
						@endif
					</div>

		@endif
		@if (!is_null($results))
			@if (!$results->isEmpty())
				<div class="row">
				
				</div>
			@endif
		@endif
	</div>
</div>
</div>
<br><br>
@endsection

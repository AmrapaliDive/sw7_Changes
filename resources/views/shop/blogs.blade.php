
@extends('layouts.master')


@section('css')
	<link rel="stylesheet" href="{{ asset('css/justifiedGallery.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/lg-transitions.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/articles/showarticle.css') }}" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
	<link rel="shortcut icon" href="images/NeetaTechLogo.jpg" />
	<style>
	input[type=text]:focus {
	border-color: blue;
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<form class="col-md-12">
								<div class="input-group">
									<!-- <div class="input-group-addon">Filter With Tags : </div> -->
									<input type="text" class="form-control" id="searchArticleInput" placeholder="Enter Tag"/>
									<div class="input-group-btn">
										<btn class="btn btn-primary btn-raised" type="submit" id="searchArticles" data-path="{{ url('/articles/gallery/get/') }}" style="margin-bottom: 0;background-color:blue;">Search tag by Articles</btn>
									</div>
								</div>
							</form>
						</div>
						<div class="row article-gallery">
							<div class="col-md-12">
								<div id="gallery" data-next-page="{{ url('/blogs/gallery/get') }}">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@extends('layouts.dashboard')



@section('styles')
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
  
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
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
   padding: 16px 24px 24px 24px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
  color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
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
#rupee{
  font-family: 'Roboto', sans-serif;
  font-size: 22px;
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
  background:#82ae46;
  color:black;
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


 </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
  <!-- <link href="http://materializecss.com/forms.html" rel="stylesheet"> -->
  
@endsection


@section('scripts')

<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

@endsection


@section('content')
<div class="container" style="padding-top:30px;margin-top:30px;">
	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
			<strong>Success!</strong> {{ session('success') }}
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
	@endif
	<a class="btn btn-primary col-md-2 col-md-10 offset-md-3 " style="font-size:20px;width:40px;background-color:#2ab27b;color:white;border-color:#2ab27b;" href="{{ url('/admin/dealer_product/'.$dealer->id) }}" ><</a>
	
	
	<div class="page-header row">
					<!-- <a class="panel-heading"class="btn btn-primary" style="font-size:20px;width:50px; height:50px;background-color:#2ab27b;color:white;border-color:#2ab27b;margin-left:230px;" href="{{ url('admin/') }}" ><b><</b></a>  -->

					<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Product Images</strong> </center></h3>
		
		</div></div>
	
  <div class="container col-md-6 offset-md-3">
<div class="col-md-12">

<div class="row clearfix">
                <div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path) !!}" alt=""  style="width:150px;height:150px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 1</h4>
                    </div>
                </div>
				@if($product->path2!="NA")
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path2) !!}" alt=""  style="width:150px;height:150px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 2</h4>
                    </div>
                </div>
				@endif

				@if($product->path3!="NA")
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path3) !!}" alt=""   style="width:150px;height:150px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 3</h4>
                    </div>
                </div>
				@endif

                @if($product->path4!="NA")
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path4) !!}" alt=""  style="width:100%;height:180px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 4</h4>
                    </div>
                </div>
				@endif

				@if($product->path5!="NA")
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path5) !!}" alt=""  style="width:100%;height:180px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 5</h4>
                    </div>
                </div>
				@endif

				@if($product->path6!="NA")
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path6) !!}" alt=""  style="width:100%;height:180px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 6</h4>
                    </div>
                </div>
				@endif

				@if($product->path7!="NA")	
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path7) !!}" alt=""  style="width:100%;height:180px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 7</h4>
                    </div>
                </div>
				@endif

				@if($product->path8!="NA")
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="box-img">
                        <img src="{!!  URL::to('/images/storage/products'.'/'.$product->path8) !!}" alt=""  style="width:100%;height:180px;"/>
                        <h4 style="padding:5px;margin-left:5px;">Product Image 8</h4>
                    </div>
                </div>
               @endif
                 
      </div>

</div>
<div>

</div>
   </div>  
@endsection

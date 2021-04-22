@extends('layouts.dashboard')
<style>
.ftco-animate{
 color:black;
 margin-top:35px;
 
  
}
.hero-wrap, .img {
  height:640px;
  margin-top:0px;
  
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.btn-lg{
	background-color:#b60a0a;
	border:#b60a0a;
	color:white;
}
.btn-lg  a:hover{
	background-color:#b60a0a !important;
	border:#b60a0a;
	color:red;
}
</style>
@section('content')


<center>

<div class="hero-wrap" style="background-image: url({{asset('/images/bg_3.jpg')}});">
    <div class="container" >
    <div class="col-md-6 col-md-offset-4 ftco-animate text-center">
            <h2 class="" style="font-size:40px;"><b>Admin Panel</b></h2>
          </div>
    </div>     <div class="col-md-6 col-md-offset-4"style="margin-top:70px;">
						<a style="font-size:20px;" type="button" class="btn-lg btn-block" href="{{ url('/productlist') }}">Product List</a>
					</div>
	        <div class="col-md-6 col-md-offset-4"style="margin-top:50px;">
						<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/franchiseelist') }}">Franchisee List</a>
					</div>
					<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/customerlist') }}">Customer List</a>
					</div>
          <!-- <div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn btn-primary btn-lg btn-block"  href="{{ url('/admin/slider') }}">Sliders</a>
					</div> -->
		<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
			<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/studentlist') }}">Students</a>
		</div>
		<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
			<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/hostellist') }}">Hostel Admission Record</a>
		</div>
          <div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/admin/orderlist') }}">Payments</a>
					</div>

			<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/admin/userblogs') }}">Blogs</a>
					</div>

					<div class="col-md-6 col-md-offset-4"style="margin-top:50px">
						<a style="font-size:20px;" type="button" class="btn-lg btn-block"  href="{{ url('/admin/map') }}">Change Location</a>
					</div>
	</div>

</center>
@endsection

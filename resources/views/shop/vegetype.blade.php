@extends('layouts.master')

@section('title')
Bhajiwala
@endsection

@section('styles')
  <style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
img{
  height:180px;
}
.img-responsive{
  height:200px;
}
.ftco-animate{
 color:white;
 margin-top:150px;
 
  
}
.hero-wrap, .img {
  height:350px;
  margin-top:0px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.card {
  margin-right: 25px;
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
    /* width: 33.3%; */
  /* position: relative; */
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}
.card:hover {
  box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
    transform: scale(1.10, 1.10);
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
#ruppee{
  font-family: 'Roboto', sans-serif;
}

a {
  text-decoration: none;
}

select, option {
	font-family: 'FontAwesome';
	font-style: normal;
  align:center;
}
#dynamic_select{
  height:50px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  background:#2ab27b;
  color:white;
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
div:after{ content:'\0200B'; }
 </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
  <!-- <link href="http://materializecss.com/forms.html" rel="stylesheet"> -->
  
@endsection


@section('scripts')
<script>
    $(function(){
      $('#dynamic_select').on('change', function () {
          var q = $(this).val(); // get selected value
          alert(id);
          if (id) { 
  
              window.location = "/add-to-cart/"+ product->id +"/quantity/" + q ;
          }
          return false;
      });
    });
</script>
@endsection


@section('content')
  @if(Session::has('success'))
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  <!-- <center>
  <blink style="color:white"><h4>Buy above ₹ 2000 and get free Delivery. </h4></blink>
  </center> -->
  <br>
  <div class="hero-wrap" style="background-image: url({{asset('/images/bg_1.jpg')}});">
    <div class="container" >
    <div class="col-md-12 ftco-animate text-center">
            <h1 class="" style="font-size:50px;"><b>Vegetables</b></h1>
          </div>
    </div>

    </div>
    <div class="container-fluid" style="margin-top:30px;">

         <div class="col-md-3">
        <div class="card">
         <a href="{{url('/vegetables/LeafyVege')}}">
              <img src="{{ url('/images/leafygreens.jpg')}}" alt="Avatar" style="width:100%;">
                <h5  style="padding:10px;font-size:18px;"><center><b>Leafy Vegetables</b></center></h5> 
              </a>
            </div>
      </div>

      <div class="col-md-3">
        <div class="card">
         <a href="{{url('/vegetables/RootVege')}}">
              <img src="{{url('/images/roots.jpg')}}" alt="Avatar" style="width:100%;">
                <h5  style="padding:10px;font-size:18px;"><center><b>Root Vegetables</b></center></h5>  
              </a>
            </div>
      </div>

      <div class="col-md-3">
            <div class="card">
                  <a href="{{url('/vegetables/SqashVege')}}">
                  <img src="{{url('/images/organicvege.png')}}" alt="Avatar" style="width:100%;">
                    <h5  style="padding:10px;font-size:18px;"><center><b>Organic Vegetables</b></center></h5> 
                </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
                  <a href="{{url('/vegetables/BulbVege')}}">
                  <img src="{{url('/images/seasonal.jpg')}}" alt="Avatar" style="width:100%;">
                    <h5  style="padding:10px;font-size:18px;"><center><b>Seasonal Vegetables</b></center></h5> 
                </a>
            </div>
          </div>
          
     
</div>
<div class="row">

</div>
</div> 

        
    
@endsection

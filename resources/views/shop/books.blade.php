@extends('layouts.master')



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



  <div class="container" style="margin-top:40px;">
  
  <center>
<div class="col-md-12" style="margin-top:1px; margin-bottom:30px;">
   
   <h2 style="color:black;"><strong>Books</strong></h2>
   </div>
  </center>
    </div>
    
  
    @if(Session::has('success'))
<div class="container" style="margin-top:150px;">
  <div class="row" >
    <div class="col-md-6 col-md-offset-3" >
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div><br>
    <div class="col-md-6 col-md-offset-3"style="margin-bottom:30px;">
    <a href="{{ url('/') }}" class="btn btn-warning pull-left"><i class="fa fa-angle-left"></i> Continue Shopping</a>
    </div>
  </div>
</div>
  @endif
  <div class="container-fluid">
<div class="col-md-12 " >

<div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('nonfiction')}}">
                        <div class="box-img">
                           <img src="{{asset('images/books/nonfiction.jpg')}}" alt=""  style="width:100%;height:180px;"/>
                           <h4>Nonfiction</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/collectible')}}">
                        <div class="box-img">
                        <img src="{{asset('images/books/Antiquarian.jpg')}}" alt="" style="width:100%;height:180px;"/>
                         <h4>Antiquarian & Collectible</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/literature')}}">
                        <div class="box-img">
                        <img src="{{asset('images/books/fiction.jpg')}}" alt="" style="width:100%;height:180px;"/>
                         <h4>Fiction & Literature</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/magazines')}}">
                        <div class="box-img">
                        <img src="{{asset('images/books/magazine.jpg')}}" alt="" style="width:100%;height:180px;"/>
                         <h4>Magazines</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/educational')}}">
                        <div class="box-img">
                        <img src="{{asset('images/books/education.jpg')}}" alt="" style="width:100%;height:180px;"/>
                        <h4>Textbooks & Educational Books</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/childrenbooks')}}">
                        <div class="box-img">
                        <img src="{{asset('images/books/children_and_young_adults.jpg')}}" alt="" style="width:100%;height:180px;"/>
                        <h4>Children & Young Adults</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/audiobooks')}}">
                        <div class="box-img">
                        <img src="{{asset('images/books/audiobooks.jpg')}}" alt="" style="width:100%;height:180px;"/>
                        <h4>Audiobooks</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/bookaccessories')}}">
                        <div class="box-img">
                          <img src="{{asset('images/books/book-accessories.jpg')}}" alt="" style="width:100%;height:180px;"/>
                          <h4>Accessories</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/otherbooks')}}">
                        <div class="box-img">
                           <img src="{{asset('images/books/other-books.jpg')}}" alt="" style="width:100%;height:180px;"/>
                           <h4>Other Books</h4>
                        </div>
                     </a>
                  </div>
      </div>

</div>
<div>

</div>
   </div>  
@endsection

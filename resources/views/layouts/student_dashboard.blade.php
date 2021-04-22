<!DOCTYPE html>
<html>
  <head>
 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('/css/footer.css')}}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Cambo&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
  
<!-- Bootstrap Core CSS -->

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/blue.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/rateit.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/js/echo.min.js') }}"></script> 
<script src="{{ asset('assets/js/jquery.easing-1.3.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script> 
<script src="{{ asset('assets/js/jquery.rateit.min.js') }}"></script> 
<script type="{{ asset('text/javascript" src="assets/js/lightbox.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script> 
<script src="{{ asset('assets/js/wow.min.js') }}"></script> 
<script src="{{ asset('assets/js/scripts.js') }}"></script>

   
  <style>
#scrollUp {
    bottom: 5px;
    font-size: 17px;
    line-height: 42px;
    right: 3px;;
    width: 30px;
    background-color: #82ae46;
    color: #ffffff;
    text-align: center;
    height: 30px;
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    border-radius: 2px 0 0 2px;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 100%;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    /* left: -100%; */
    /* margin-left: 10px; */
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    
    border-radius: 6px 0 6px 6px;

}
@keyframes swing {
  0% {
    transform: rotate(0deg);
  }
  10% {
    transform: rotate(10deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(-10deg);
  }
  50% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(5deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(-5deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

@keyframes sonar {
  0% {
    transform: scale(0.9);
    opacity: 1;
  }
  100% {
    transform: scale(2);
    opacity: 0;
  }
}
body {
  font-size: 1.6rem;
}
.page-wrapper .sidebar-wrapper,
.sidebar-wrapper .sidebar-brand > a,
.sidebar-wrapper .sidebar-dropdown > a:after,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
.sidebar-wrapper ul li a i,
.page-wrapper .page-content,
.sidebar-wrapper .sidebar-search input.search-menu,
.sidebar-wrapper .sidebar-search .input-group-text,
.sidebar-wrapper .sidebar-menu ul li a,
#show-sidebar,
#close-sidebar {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

/*----------------page-wrapper----------------*/

.page-wrapper {
  height: 100vh;
}

.page-wrapper .theme {
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 4px;
  margin: 2px;
}

.page-wrapper .theme.chiller-theme {
  background: #1e2229;
}

/*----------------toggeled sidebar----------------*/

.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}

@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}
/*----------------show sidebar button----------------*/
#show-sidebar {
  position: fixed;
  left: 0;
  top: 20px;
  border-radius: 0 4px 4px 0px;
  width: 45px;
  height: 40px;
  margin-left: 10px;
  transition-delay: 0.3s;
}
.page-wrapper.toggled #show-sidebar {
  left: -80px;
  bottom: -50px;
}
/*----------------sidebar-wrapper----------------*/

.sidebar-wrapper {
  width: 260px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: -370px;
  z-index: 999;
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-wrapper a {
  text-decoration: none;
}

/*----------------sidebar-content----------------*/

.sidebar-content {
  max-height: calc(100% - 30px);
  height: calc(100% - 30px);
  overflow-y: auto;
  position: relative;
}

.sidebar-content.desktop {
  overflow-y: hidden;
}

/*--------------------sidebar-brand----------------------*/

.sidebar-wrapper .sidebar-brand {
  padding: 10px 20px;
  display: flex;
  align-items: center;
}

.sidebar-wrapper .sidebar-brand > a {
  /* text-transform: uppercase; */
  font-weight: bold;
  flex-grow: 1;
  font-size: 23px;
  text-align: center;

}

.sidebar-wrapper .sidebar-brand #close-sidebar {
  cursor: pointer;
  font-size: 20px;
}
/*--------------------sidebar-header----------------------*/

.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic {
  float: left;
  width: 60px;
  padding: 2px;
  border-radius: 12px;
  margin-right: 15px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.sidebar-wrapper .sidebar-header .user-info {
  float: left;
}

.sidebar-wrapper .sidebar-header .user-info > span {
  display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
  font-size: 11px;
  margin-top: 4px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status i {
  font-size: 8px;
  margin-right: 4px;
  color: #5cb85c;
}

/*-----------------------sidebar-search------------------------*/

.sidebar-wrapper .sidebar-search > div {
  padding: 10px 20px;
}

/*----------------------sidebar-menu-------------------------*/

.sidebar-wrapper .sidebar-menu {
  padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  padding: 15px 20px 5px 20px;
  display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: inline-block;
  width: 100%;
  text-decoration: none;
  position: relative;
  padding: 8px 30px 8px 20px;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  margin-right: 10px;
  font-size: 22px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
}

.sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
  display: inline-block;
  animation: swing ease-in-out 0.5s 1 alternate;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  content: "\f105";
  font-style: normal;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background: 0 0;
  position: absolute;
  right: 15px;
  top: 14px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
  padding-left: 25px;
  font-size: 18px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
  content: "\f111";
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
  font-style: normal;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-right: 10px;
  font-size: 8px;
}

.sidebar-wrapper .sidebar-menu ul li a span.label,
.sidebar-wrapper .sidebar-menu ul li a span.badge {
  float: right;
  margin-top: 8px;
  margin-left: 5px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
  float: right;
  margin-top: 0px;
}

.sidebar-wrapper .sidebar-menu .sidebar-submenu {
  display: none;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
  transform: rotate(90deg);
  right: 17px;
}

/*--------------------------side-footer------------------------------*/

.sidebar-footer {
  position: absolute;
  width: 100%;
  bottom: 0;
  display: flex;
}

.sidebar-footer > a {
  flex-grow: 1;
  text-align: center;
  height: 30px;
  line-height: 30px;
  position: relative;
}

.sidebar-footer > a .notification {
  position: absolute;
  top: 0;
}

.badge-sonar {
  display: inline-block;
  background: #980303;
  border-radius: 50%;
  height: 8px;
  width: 8px;
  position: absolute;
  top: 0;
}

.badge-sonar:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border: 2px solid #980303;
  opacity: 0;
  border-radius: 50%;
  width: 100%;
  height: 100%;
  animation: sonar 1.5s infinite;
}

/*--------------------------page-content-----------------------------*/

.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
  padding-top: 20px;
}

.page-wrapper .page-content > div {
  padding: 20px 40px;
}

.page-wrapper .page-content {
  overflow-x: hidden;
}

/*------scroll bar---------------------*/

::-webkit-scrollbar {
  width: 5px;
  height: 7px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #525965;
  border: 0px none #ffffff;
  border-radius: 0px;
}
::-webkit-scrollbar-thumb:hover {
  background: #525965;
}
::-webkit-scrollbar-thumb:active {
  background: #525965;
}
::-webkit-scrollbar-track {
  background: transparent;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: transparent;
}
::-webkit-scrollbar-track:active {
  background: transparent;
}
::-webkit-scrollbar-corner {
  background: transparent;
}


/*-----------------------------chiller-theme-------------------------------------------------*/

.chiller-theme .sidebar-wrapper {
    background: #31353D;
    /* background: #efefef; */
        /* background: #efefef; */


}

.chiller-theme .sidebar-wrapper .sidebar-header,
.chiller-theme .sidebar-wrapper .sidebar-search,
.chiller-theme .sidebar-wrapper .sidebar-menu {
    border-top: 1px solid #3a3f48;
}

.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    border-color: transparent;
    box-shadow: none;
}

.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
.chiller-theme .sidebar-wrapper .sidebar-brand>a,
.chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
.chiller-theme .sidebar-footer>a {
    color: #818896;
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info,
.chiller-theme .sidebar-wrapper .sidebar-brand>a:hover,
.chiller-theme .sidebar-footer>a:hover i {
    color: #b8bfce;
}

.page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #bdbdbd;
}

.page-wrapper.chiller-theme.toggled #close-sidebar:hover {
    color: #ffffff;
}

.chiller-theme .sidebar-wrapper ul li:hover a i,
.chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus+span,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
    color: #16c7ff;
    text-shadow:0px 0px 10px rgba(22, 199, 255, 0.5);
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background: #3a3f48;
}

.chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #6c7b88;
    
}

.chiller-theme .sidebar-footer {
    background: #3a3f48;
    box-shadow: 0px -1px 5px #282c33;
    border-top: 1px solid #464a52;
}

.chiller-theme .sidebar-footer>a:first-child {
    border-left: none;
}

.chiller-theme .sidebar-footer>a:last-child {
    border-right: none;
}

</style>
    @yield('styles')
  </head>
  <body>
  <style>
  
</style>
@yield('styles')
</head>
<body style="background-color: #fff;">
    @yield('content')

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars" style="margin-top: 10px"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper  navbar-light bg-light">
    <div class="sidebar-content">
     <center> <div class="sidebar-brand">
        <a href="{{ url('/ ') }}" class=" text-dark">SW7</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
		<hr>
      </div></center><center><span class=""><strong><i class="fa fa-envelope" aria-hidden="true"></i></strong> <a href="#">support@sw7infomedia.com</a></span></center>
	                      <center>  <span class="mr-2"><strong><i class="fa fa-phone" aria-hidden="true"></i></strong><a href="#"> 7030023002</a></span></center>
	
    

      
      <div class="sidebar-header">
        {{-- <div class="user-pic">
          <img class="" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div> --}}
    <center><div class="user-info ml-5">
          {{-- <span class="user-name">Jhon
            <strong>Smith</strong>
          </span> --}}

          <?php
          use App\Student;
          $student = Student::where('email',Auth::user()->email)->first();
          ?>
          @if(Auth::check())
          @if($student->passport_image!='')
          <img id="zoom" style="height:100px;width:100px;" class="img-responsive img-circle elevation-2 ml-5"  src="{!!  URL::to($student->passport_image) !!}  " />
          @endif
          <br>
		  
           <span style="font-size: 15px" class="text-dark ml-3"><b><i class="fa fa-graduation-cap" aria-hidden="true" ></i> {{$student->first_name}} {{$student->last_name}}</b></span>   <a href="#" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title=""></a>
           {{-- <a href="{{url('/user/logout')}}" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Logout</a> --}}
          @if(Auth::user()->role=="dealer")
            {{-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size:20px;margin-top:20px;">
            <b>Dealer</b>
                <span class=" "></span>
            </a>
            <ul class="dropdown-menu" role="menu"> --}}
            {{-- <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/dealer/products') }}" >Products</a></li>
            <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/dealer/edit') }}" >Update Profile</a></li> --}}
            <!-- <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/fruits/getSeasonalfruits') }}"> Seasonal Fruits</a></li>
            <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/fruits/other') }}">Other</a></li> -->
              </ul>
            </li>
          @elseif(Auth::user()->role=="customer")
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size:20px;margin-top:20px;">
            <b>customer</b>
                <span class=" "></span>
            </a>
            <ul class="dropdown-menu" role="menu">
            <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/customer/edit') }}" >update profile</a></li>
           
              </ul>
            </li> -->
            @endif
          @else 
           <span style="font-size: 18">Hi!&nbsp;</span>   <a href="{{ url('/user/login') }}" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Sign in</a>
        <span style="font-size: 18">or</span>   <a href="{{ url('/dealer') }}" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Register as Dealer</a> 
        <span style="font-size: 18">or</span>   <a href="{{ url('/customer') }}" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Register as Customer</a> &nbsp;|&nbsp;&nbsp;
          <!-- <a href="#" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Daily Deals</a>&nbsp; |&nbsp;&nbsp;
          <a href="#" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Sell</a>&nbsp; |&nbsp;&nbsp;
          <a href="#" data-toggle="tooltip" data-placement="bottom" style="font-size: 20px" title="">Help & Contact</a>&nbsp; |&nbsp;&nbsp; -->
        @endif

          {{-- <span class="user-role">Administrator</span> --}}
          {{-- <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span> --}}
        </div></center>
      </div>
      <!-- sidebar-header  --

      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu" >
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="{{url('/')}}">
              <i class="fa fa-home"></i>
              <span class="text-dark"><b>Home</b></span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li>

          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>List</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ url('/customer/edit') }}" >Edit Profile
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/customer/orders') }}">Orders</a>
                </li>
                <li>
                  <a href="{{ url('/user/wishlist') }}">Saved Products</a>
                </li>
                <li>
                  <!-- <a href="{{ url('/admin_orderlist') }}">Payment</a> -
                </li>
                
              </ul>
            </div>
          </li> -->
          {{-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>E-commerce</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products

                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="header-menu">
             </li> --}}
             <li>  
          <a href="{{url('/student/edit')}}">
            <i class="fa fa-book"></i>
            <span class="text-dark"><b>Edit Profile</b></span>
            {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
          </a>
        </li>
        <li>
        <li>
          
            <a href="{{url('/student/courses')}}">
            <!-- <a href="#"> -->
              <i class="fa fa-book"></i>
              <span class="text-dark"><b>My Courses</b></span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li>
          <li>
          <li>
          
            <a href="{{url('/hostel')}}">
            <!-- <a href="#"> -->
              <i class="fa fa-book"></i>
              <span class="text-dark"><b>Add Hostel Details</b></span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li>
          <li>
          <!-- <li>
          
            <a href="{{url('/user/wishlist')}}">
              <i class="fa fa-book"></i>
              <span>Saved Products</span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li> -->
          <li>
         
          <li>
          
            <a href="{{url('/user/logout')}}">
              <i class="fa fa-power-off"></i>
              <span class="text-dark"><b>Logout</b></span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li>
          <li>
            <a href="{{url('/contact')}}">
              <i class="fa fa-phone"></i>
              <span class="text-dark"><b>Contact Us</b></span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li>
          <!-- <li>
            <a href="{{url('/faq')}}">
              <i class="fa fa-question-circle"></i>
              <span class="text-dark"><b>FAQ</b></span>
              {{-- <span class="badge badge-pill badge-primary">Beta</span> --}}
            </a>
          </li> -->
          
          {{-- <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li> --}}




        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    {{-- <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div> --}}
  </nav>
  </div>
  <!-- sidebar-wrapper  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
      

        <script>
            jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});
</script> 
    


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <a id="scrollUp" href="#top" style="position: fixed; z-index:2147483647;display:block;">
      <i class="fa fa-arrow-up"></i>
    </a>
    <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91-820-830-8116", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
      @yield('scripts')
  </body>
</html>

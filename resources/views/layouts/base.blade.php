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
    <link href="https://fonts.googleapis.com/css?family=Cambo&display=swap" rel="stylesheet">
    <style>

.card__title{
  text-transform: capitalize;
  font-size:19px;
}
body{
  font-family:'Roboto' , sans-serif;
  background-color:white;
  /* #8f431a;#333300 #999900 #2e0e01 #a9a9a9    

background-image: url("images/dark-wood.png"); */
 
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
}
  .navbar-header{
    padding:0px;
  }
  .container{
    
  }
  #search{
    border:1px solid lightgray;
    border-radius:10px;
    width:70%;
     
  }
  #btn{
    background:#CACFCA;
    color:white;
    border:1px solid lightgray;
    border-radius:5px;
    font-size:15px;

  }
  option {
   -webkit-border-radius:25px;
   font-family: 'Patua One', cursive;
   background:white;
   color:black;
   
  
} 
  /* nav li:hover{
    background:#f27b48;
    color:white;
  } */
 

 
  /* #psearch{
  border-radius:5px;border:1px solid lightgray;
  padding-left:8px;
  box-shadow: 0 3px 6px 0 rgba(0,0,0,0.2);
  /* font-family: 'Lobster', cursive; */
} */
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
/* @-webkit-keyframes circle {
  0% {
    width: 100%;
   
    
    height: 1px;
    z-index: -1;
    background: #805718 ;
    
    /* #efb143;
  }
  100% {
    background:#805718;
    height: 5000%;
    
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
   
    
  }
} */
/* .footer
{
    
   left: 0;
   bottom: 0;
   width: 100%;
     
} */
</style>
    @yield('styles')
  </head>
  <body>
    @include('partials.navbar')
    
      @yield('content')
   

@include('partials.footer')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
      @yield('scripts')
  </body>
</html>

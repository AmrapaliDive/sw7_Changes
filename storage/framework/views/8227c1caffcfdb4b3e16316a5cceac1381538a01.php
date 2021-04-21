<!DOCTYPE html>
<html>
  <head>
 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
   <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>"> -->
   <link rel="stylesheet" href="<?php echo e(asset('/css/base.css')); ?>"> 
    <link rel="stylesheet" href="<?php echo e(asset('/css/footer.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Cambo&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="<?php echo e(asset('/css/jquery-ui.css')); ?>">   -->
   <!-- <link rel="stylesheet" href="<?php echo e(asset('/css/megamenu.css')); ?>">
	 <link rel="stylesheet" href="<?php echo e(asset('/css/dropdown.css')); ?>">
	  -->
<!-- Bootstrap Core CSS -->

<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

<!-- Customizable CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/blue.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.transitions.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/rateit.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-select.min.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('/css/jquery-ui.css')); ?>">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.css')); ?>">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="<?php echo e(asset('assets/js/jquery-1.11.1.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/bootstrap-hover-dropdown.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/echo.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/jquery.easing-1.3.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/bootstrap-slider.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/jquery.rateit.min.js')); ?>"></script> 
<script type="<?php echo e(asset('assets/js/lightbox.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/bootstrap-select.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script> 
<script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
    <style>

/* .card__title{
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
  /* .navbar-header{
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
  nav li:hover{ *
    background:#f27b48;
    color:white;
  } 
 

 
  /* #psearch{
  border-radius:5px;border:1px solid lightgray;
  padding-left:8px;
  box-shadow: 0 3px 6px 0 rgba(0,0,0,0.2);
  /* font-family: 'Lobster', cursive; 
} *

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
    /* margin-left: 10px; *
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    
    border-radius: 6px 0 6px 6px;
} */
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
     
} *
.carousel-control {
    position: absolute;
    top: 50%;
    left: 0;
    bottom: 0;
    width: 15%;
    opacity: .5;
    filter: alpha(opacity=50);
    font-size: 20px;
    background-color: transparent;
/* }
@media  screen and (max-width:700px){
		#logo{
		max-width:20%;
		max-height:10%
  }
}
@media  screen and (max-width:2000px) and (min-width:700px){
	#logo{
		max-width:12%;
  }
} */
/* .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover { */
    /* color: #fff;
    background-color: black; */
}
</style>
    <?php echo $__env->yieldContent('styles'); ?>
  </head>
  <body class="cnt-home">
    
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
      <?php echo $__env->yieldContent('content'); ?>
   

<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script> -->
    <!-- <script type="text/javascript" src="<?php echo e(asset('/js/app.js')); ?>"></script>  -->
    <!-- <script type="text/javascript" src="<?php echo e(asset('/js/megamenu.js')); ?>"></script>
	    <script type="text/javascript" src="<?php echo e(asset('/js/dropdown.js')); ?>"></script> -->

    <!-- <script src="jquery-3.2.1.min.js"></script> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> -->
    
    <!-- <a id="scrollUp" href="#top" style="position: fixed; z-index:2147483647;display:block;"> 
      <i class="fa fa-arrow-up"></i>
    </a>
  WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91-703-002-3002", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
      <?php echo $__env->yieldContent('scripts'); ?>
  </body>
</html>

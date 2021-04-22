@extends('layouts.master')
 

@section('css')




@endsection
		




@section('content')
@section('js')
  

@endsection
<style>
.syllabus_list{
  list-style-type: disc;
  padding: 0px 20px;
}
.syllabus_list li{
  list-style-type: disc;
  text-align: justify;
}

.course-btn{
  padding-top: 9px;
  padding-bottom: 9px;
  padding-left: 20px;
  padding-right: 20px;
  border : 1px solid #b60a0a;
  font-size:14px;
  background-color:#b60a0a;
  margin-top:20px;
  animation : color 1s linear;
  animation-iteration-count : infinite;
  box-sizing: border-box;
}

@keyframes color {
    0% {
      background-color: #b60a0a;
    }
    30% {
      background-color: rgb(255, 194, 14);
      color : #b60a0a
    }
    65% {
      background-color: rgb(255, 194, 14);
      color: #b60a0a
    }
    100%{
      background-color: #b60a0a;
    }
  }
.comboul  {
  list-style: square !important;
}
.img-hei{
  height: 80px;
}

.product-link{
  font-size : 15px;
  font-weight: 600;
  color : #000!important;
}
.img-thumbnail{
  border:none;
}
.item-carousel{
  transition: 0.5s all ease-in-out;
}
.item-carousel:hover {
    transform: scale(1.1);
}

.product-micro-row{
  transition: 0.5s all ease-in-out;
}
.product-micro-row:hover {
    transform: scale(1.1);
}

.name a {
    color: black;
    font-weight: bold;
}
.name a:hover{
  color:#b60a0a;
}
.comboprop {
    background-color: #b60a0a;
    color: white;
    display: inline-block;
    margin-bottom: 5px;
    margin-right: 2px;
    padding: 6px 12px;
    text-align: center;
    width: 100%;
}
.regcomb{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     background: #ffc206;    }
    49%{    color: #000; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #ffc206;    }
}
.comboprop:hover{
  color:#b60a0a;
  background:#ffc206;
  cursor:pointer;
  /* transform: scale(1.1); */
}
/* .comboprop{
  background: #ffc206;
  color: black;
    font-weight: bold;
}
.comboprop:hover{
  color:#b60a0a;
} */
h3 a{
    color: black;
    font-weight: bold;
}
h3 a:hover{
  color:#b60a0a !important;
}

/* .owl-prev{
  color:green;
} */

.custom-carousel .owl-controls .owl-prev:hover, .custom-carousel .owl-controls .owl-next:hover, .custom-carousel .owl-controls .owl-prev:focus, .custom-carousel .owl-controls .owl-next:focus {
    background: #b60a0a;
}
.product-tag .item.active, .product-tag .item:hover, .product-tag .item:focus {
  border:1px solid #b60a0a;
  background:#ffc20e;
  color:#b60a0a;
  /* background: #ffc20e; */
}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
      .blink {
        animation: blinker 0.6s linear infinite;
        color: black;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
	  
	  .scrollbar {
margin-left: 1px;
float: left;
height: 250px;
width: 65px;
background: #fff;
overflow-y: scroll;
margin-bottom: 25px;
}
.force-overflow {
min-height: 450px;
}

.scrollbar-primary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-primary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #4285F4; }

.scrollbar-primary {
scrollbar-color: #4285F4 #F5F5F5;
}

.scrollbar-danger::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-danger::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-danger::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #ff3547; }

.scrollbar-danger {
scrollbar-color: #ff3547 #F5F5F5;
}

.scrollbar-warning::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-warning::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-warning::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #FF8800; }

.scrollbar-warning {
scrollbar-color: #FF8800 #F5F5F5;
}

.scrollbar-success::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-success::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-success::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #00C851; }

.scrollbar-success {
scrollbar-color: #00C851 #F5F5F5;
}

.scrollbar-info::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-info::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-info::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #33b5e5; }

.scrollbar-info {
scrollbar-color: #33b5e5 #F5F5F5;
}

.scrollbar-default::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-default::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-default::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #2BBBAD; }

.scrollbar-default {
scrollbar-color: #2BBBAD #F5F5F5;
}

.scrollbar-secondary::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-secondary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-secondary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #aa66cc; }

.scrollbar-secondary {
scrollbar-color: #aa66cc #F5F5F5;
}


/* bx-wrapper Styling */
.bx-wrapper {
  box-shadow: none !important;
  border: none !important;
  background: #fff !important;
  margin: auto !important;
  
}

.bx-wrapper .bx-caption {
  position: absolute !important;
  bottom: 0 !important;
  left: 0 !important;
  background: rgba(80, 80, 80, 0.5) !important;
  width: 100% !important;
  
}

.bx-wrapper .bx-caption span {
  color: #fff !important;
  font-family: Arial !important;
  display: block !important;
  font-size: 8px !important;
  padding: 10px !important;
  
  text-align: center;
}

.bx-wrapper .bx-controls-direction a {
  position: absolute;
  top: 50%;
  margin-top: -16px;
  outline: 0;
  width: 32px;
  height: 32px;
  text-indent: -9999px;
  z-index: 9999;
  
}

.bx-wrapper .bx-prev {
  left: 10px;
  background: url(images/controls.png) no-repeat 0 -32px;
}

.bx-wrapper .bx-next {
  right: 10px;
  background: url(images/controls.png) no-repeat -43px -32px;
}
/* End bx-wrapper Styling */

.logosImgs {
  display: -webkit-flex;
  display: flex;
  justify-content: center;
  
}

.logosImgs img {
  max-height: 100%;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  opacity: .65;
  transition: all .5s;
}

.logosImgs img:hover {
	opacity: 1;
  -webkit-filter: grayscale(0%);
  filter: grayscale(0%);
}


@media screen and (max-width: 800px) {
    .logosImgs img {
      max-width: 125px;
      max-height: 88px;
      margin: 5px 8px;
  }
}

@media screen and (max-width: 560px) {
  .logosImgs img {
      max-width: 85px;
      max-height: 60px;
      margin: 3px 5px;
  }
}
@media (min-width: 1200px)
{
.col-lg-3 {
    width: 24.50%;
}}
.brand-content{padding:16px 0 12px 15px;
  font-size:14px;margin-bottom:15px;
margin-right:-15px;
background:#eee;
background-image:-webkit-linear-gradient(top,#eee,#cdcdcd);
background-image:-moz-linear-gradient(top,#eee,#cdcdcd);
background-image:-ms-linear-gradient(top,#eee,#cdcdcd);
background-image:-o-linear-gradient(top,#eee,#cdcdcd);
background-image:linear-gradient(to bottom,#eee,#cdcdcd);
border:1px solid #ddd;
}
.brand-content h2{text-transform:capitalize;font-size:17px;margin:10px 0 0;}
.brand-content p{margin:0;font-size:15px;font-weight:300;}
.report{background:#f6c208!important;
  background:-moz-linear-gradient(90deg,#f6c208 30%,#f0b300 70%)!important;
  background:-webkit-linear-gradient(90deg,#f6c208 30%,#f0b300 70%)!important;
  background:-o-linear-gradient(90deg,#f6c208 30%,#f0b300 70%)!important;
  background:-ms-linear-gradient(90deg,#f6c208 30%,#f0b300 70%)!important;
  background:linear-gradient(180deg,#f6c208 30%,#f0b300 70%)!important;min-height:79px}
    </style>	


@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <center><p>{{ $error }}</p></center>
        @endforeach
    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <center><li>{!! \Session::get('success') !!}</li></center>
        </ul>
    </div>
@endif
@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
@endif

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content" id="top-banner-and-menu" style="background-color:#f9f8f0;padding-top:20px;">
  <div class="container" style="background-color:#f9f8f0;">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head" style="padding-left:30%;background-color:#b60a0a;">Enquiry Form</div>
          <nav class="yamm megamenu-horizontal" style="background-color:#ffc20e;padding-bottom:25px;">
            <div class="nav">
              <div class="yamm-content">

              <form action="{{url ('/store') }}" method='post' >
    {{csrf_field()}}
    <label style="color:white;padding-left:30px;"><center>* Marked Fields are mandatory.</center></label>
    <div class="col-md-12">
        <div class="form-group">
        
      	<input type="text"id="first_name" class="form-control"  name="username" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,50]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-trigger="keyup" required autofocus placeholder="Name*">
    
           </div>
          </div> 
          
        <div class="col-md-12"style="margin-bottom:5px;">
        <div class="form-group">
		     
             <input type="email" id="email" name="email"class="form-control "  data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Email*"  required>
       	</div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
        
      <input type="text" id="fathers_name" class="form-control "  name="contact"  required autofocus placeholder="Contact*">
      </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
        <select name="course"style="height:34px;width:100%;border: 1px solid #ccd0d2;border-radius: 4px;">
          <option value="">Courses*</option>
          <option value="LCD Repairing Course">LCD Repairing Course</option>
          <option value="Hdd Repairing Course">Hdd Repairing Course</option>
          <option value="CCTV Repairing Course">CCTV Repairing Course</option>
          <option value="Laptop Repairing Course">Laptop Repairing Course</option>
          <option value="Printer Repairing Course">Printer Repairing Course</option>

          <option value="Mobile Repairing Course">Mobile Repairing Course</option>
          <option value="AC Repairing Course">AC Repairing Course </option>
          <option value="Fan Repairing Course">Fan Repairing Course</option>
          <option value="Freeze Repairing Course">Freeze Repairing Course</option>
          <option value="Combo Course 1">Combo Course 1</option>
          <option value="Combo Course 2">Combo Course 2</option>
          <option value="Combo Course 3">Combo Course 3</option>
          <option value="Grinder Repairing Course">Grinder Repairing Course</option>
          <option value="Cooler Repairing Course">Cooler Repairing Course</option>
          <option value="Xerox Machine Repairing Course">Xerox Machine Repairing Course</option>
          <option value="Owen Repairing Course">Owen Repairing Course</option>
          <option value="Elevator Repairing Course">Elevator Repairing Course</option>
          <option value="Motor Winding Repairing Course">Motor Winding Repairing Course</option>
          <option value="Washing Machine Repairing Course">Washing Machine Repairing Course</option>
          <option value="Basic Electronic Course">Basic Electronic Course</option>
          <option value="Computer Hardware Course">Computer Hardware Course </option>
          
        </select>      
      </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
        <select name="enq_type"style="height:34px;width:100%;border: 1px solid #ccd0d2;border-radius: 4px;">
          <option value="" Disabled Readonly selected>Enquire As...</option>
          <option value="Customer">Customer</option>
          <option value="Student">Student</option>
          <option value="Franchisee">Franchisee</option>
        </select>
        </div>
        </div>
        
	   	 <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="
			padding-top: 9px;
			 padding-bottom: 9px;
			border-bottom-width: 8px;
			padding-left: 50px;
			padding-right: 50px;
			font-size:14px;
      background-color:#b60a0a;
      margin-top:5%;">submit</button>
          </div></center>
    	</form>	

              </div>
</div>
             
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        
        <div class="sidebar-widget product-tag wow fadeInUp" style="background-color:#ffc20e;">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list"> 
              <a class="item" title="Phone" href="{{url('/all_new_laptop')}}">Laptop</a><br/>
               <a class="item " title="Vest" href="{{url('/all_new_desktop')}}">Desktop</a><br/>
                <a class="item" title="Smartphone" href="{{url('/all_accessories')}}">Accessories</a><br/>
                 <a class="item" title="Furniture" href="{{url('/all_refurbished_laptop')}}">Refurbished
                  Laptop</a> 
                  <a class="item" title="T-shirt" href="{{url('/all_refurbished_desktop')}}">Refurbished 
                  Desktop</a> 
             </div>
           
          </div>
         
        </div>
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp" style="background-color:#ffc20e;">
          <h3 class="section-title">Product Categories</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image img-hei">
                            <div class="image"> <a href="{{url('/all_new_laptop')}}"> <img src="images/new/hp-laptop.png" class="img-hei" alt=""> </a> </div>
                          </div>
                         
                        </div>
                       
                        <div class="col col-xs-7">
                           <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_new_laptop')}}" class="product-link">Laptop</a></h3>
                           
                          </div>
                        </div>
                     
                      </div>
                    
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/all_new_desktop')}}"> <img src="images/new/desktop2.png" class="img-hei"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_new_desktop')}}" class="product-link">Desktop</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="images/new/computer-accessories3.png" class="img-hei"  alt="image"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_accessories')}}" class="product-link">Accessories</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('images/new/printer1.png')}}" class="img-hei" alt=""></a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            
                            <!--<div class="rating rateit-small"></div>-->
                            <div class="product-price"><h3 class="name"><a href="#" class="product-link">Printer</a></h3> <span class="price"></span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="images/new/repairing1.png" class="img-hei" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#" class="product-link">Repairing Tools</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <div class="product-price"> <span class="price"></span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="images/new/software2.png" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#" class="product-link">Software</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <div class="product-price"> <span class="price"> </span> </div>
                            <!-- /.product-price --> 
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="images/new/training2rbg.png" alt="images">
                              <div class="zoom-overlay"></div>
                              </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#" class="product-link">Training Programs</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <div class="product-price"> <span class="price"></span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="images/new/ic21.png"  alt="">
                              <div class="zoom-overlay"></div>
                              </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#" class="product-link">IC</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <div class="product-price"> <span class="price"></span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="images/new/download1.png" alt="image"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#" class="product-link">Components</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <div class="product-price"> <span class="price"></span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
       
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
               <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs" style="background-color:#ffc20e;">
		
          <h3 class="section-title">Our Franchisee</h3>
        <?php 
        use App\Franchisee;
        use App\User;
        $franchisees = Franchisee::all();
        ?>
		
          <div class="owl-carousel sidebar-carousel  outer-top-ss" ><!--style="height:550px;overflow-y:auto;"-->
            <div class="item scrollbar scrollbar-primary" style="width: 23rem;">
              <div class="products " >
			 <marquee direction ="up" height="400px" style="backround-color:#ffc20e;">
                             <ul class="links list-group">
                             @foreach($franchisees as $franchisee)
                            <?php
                              $user = User::where('id',$franchisee->user_id)->first();
                            ?>
                            @if($user->status != "Accepted")
                              @continue
                            @endif
                              <li><a href="" class=" list-group-item list-group-item-action  " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >{{$franchisee->city}}</span><br><span class="text-justify">Address : {{$franchisee->address}}
								<br>
								Contact: {{$franchisee->contact1}}</span></a></li>
                @endforeach
                              <!-- <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 CHINCHWAD, PUNE</span><br><span class="text-justify">Dagadu Patil Nagar,
								Opposite Swiss County Soc.
								Thergoan Dange Chowk Link Road
								Thergoan Pune
								Phone : 70 3002 3002 / 90 7500 4200</span></a></li>
                              <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 LATUR, MAHARASHTRA</span><br><span class="text-justify">Mozzam Tower Opposite to Sudarshan Lodge
								Shivaji Chowk, Latur
								Phone: 9965919111</span></a></li>
                              <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 DIVA, THANE</span><br><span class="text-justify">Shop -404/ Shivam Plaza, Commercial Complex
									Near Shubham Karoti MD Colony Diva, East
									Phone: 9819997949</span></a></li>
                              <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 BHOSARI, PUNE</span><br><span class="text-justify">SR NO 72/1 Adarsh Nagar
									Dighi, Bhosari Pune
									Phone: 7058486321</span></a></li>
							 <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 CHIKHALI, PUNE</span><br><span class="text-justify">SR No. 1400 Shop No.2
									Dhondiba Malhari Society
									Morewasti, Chikhali Pune
									Phone: 9822970993</span></a></li>
							 <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 HINJEWADI, PUNE</span><br><span class="text-justify">Laxmi Complex, Laxmi Chowk
									1st Floor, Hinjewadi, Pune
									Phone :7028177277</span></a></li>
							 <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 SANGAMNER, AHMEDNAGAR</span><br><span class="text-justify">Samarth Hights, Maladat Road , Tiranga Chowk
									Sangamner, Ahmednagar
									Phone: 9823713270</span></a></li>
							 <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 KOLHAPUR</span><br><span class="text-justify">Brameshawar Park, Behind Hotel Royal Kolhapur
									Shivaji Peth Kolhapur
									Phone: 9158596868</span></a></li>
							 <li><a href=""  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >SW7 BHARUCH, GUJRAT</span><br><span class="text-justify">SHOP NO/2 1ST&nbsp;FLOOR
								TRALSAWALA SHOPPING CENTER,
								KASAK NEAR GARNALA,
								BHARUCH GUJARAT-392001
								PHONE:971405955</span></a></li> -->
							
							 
                        </ul>      
			 </marquee>
                <!-- /.hot-deal-wrapper -->
                
                
                <!-- /.product-info -->
                
            
              </div>
            </div>
         
          
          </div>
		  
          <!-- /.sidebar-widget --> 
        </div>
		
		 <!-- /.sidebar-widget --> 

     <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs" style="background-color:#ffc20e;">
        <h3 class="section-title">Courses</h3>
        
          <div id="courses_owl" class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
          <div class="item slide-left">
              <div class="products">
                              <div class="card" style="width: 100%;height:50vh;">
                                  <img class="card-img-top" style="width:100% ; height:50%;" src="images/new/laptop-repairing.png" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px; font-weight:700;margin-bottom:20px">Laptop Repairing Course</h5>
                                    <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>Laptop Block Diagram</li>
                                      <li>Laptop Assembly and disassembly</li>
                                      <li>RAM Repairing Techniques</li>
                                      <li><a href="{{url('/course_select/Laptop Repairing Course')}}">Read More</a></li>
                                    </ul>
                                    <div style="width:100%;padding: 10px 35px;">
                                      <a href="{{url('/course_select/Laptop Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn">Register Now</a>
                                    </div>
                                  </div>
                              </div>
                <!-- /.hot-deal-wrapper -->                
                <!-- /.product-info -->                
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class="add-cart-button btn-group">
                      
                    </div>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                         <div class="card" style="width: 100%;height:50vh;">
                                  <img class="card-img-top" style="width:100%;height:50%;" src="images/new/printer-repairing.jpg" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Printer Repairing Course</h5>
                                    <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>Laser Technology Theory</li>
                                      <li>Laser Assembly</li>
                                      <li>Paper Pickup Assembly</li>
                                      <li><a href="{{url('/course_select/Printer Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                                    <div style="width:100%;padding: 10px 35px;">
                                      <a href="{{url('/course_select/Printer Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn">Register Now</a>
                                    </div>
                                  </div>
                          </div>
                <!-- /.hot-deal-wrapper -->
                <div class="product-info text-left m-t-20">                 
                  <!-- /.product-price -->                   
                </div>
                <!-- /.product-info -->                
                <div class="cart clearfix animate-effect">                 
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                          <div class="card" style="width: 100%;height:50vh;">
                                  <img class="card-img-top" style="width:100%;height:50%;" src="images/new/lcd-repairing.png" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px; font-weight:700;margin-bottom:20px">LCD Repairing Course</h5>
                                    <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>Basic Electronic</li>
                                      <li>Touch and display solution</li>
                                      <li>Charging connector, sim tray replacement</li>
                                      <li><a href="{{url('/course_select/LCD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                                    <div style="width:100%;padding: 10px 35px;">
                                      <a href="{{url('/course_select/LCD Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn">Register Now</a>
                                    </div>
                                  </div>
                          </div>
                <div class="product-info text-left m-t-20">
                 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                <div class="card" style="width: 100%;height:auto;">
                                  <img class="card-img-top" style="width:90%;height:45%;margin-left:5%" src="images/new/mobile-repair.png" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px; font-weight:700;margin-bottom:20px;">Mobile Repairing Course</h5>
                                    <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>Basic Electronic</li>
                                      <li>Touch and display solution</li>
                                      <li>Charging connector, sim tray replacement</li>
                                      <li><a href="{{url('/course_select/Mobile Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                                    <div style="width:100%;padding: 10px 35px 0px;">
                                      <a href="{{url('/course_select/Mobile Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                                    </div>
                                  </div>
                          </div>
                <div class="product-info text-left m-t-20">               
                  
                </div>
                <!-- /.product-info -->                
                <div class="cart clearfix animate-effect">                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                <div class="card" style="width: 100%;height:50vh;">
                                  <img class="card-img-top" style="width:100%;height:50%;" src="images/new/hdd-repair-icon.png" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Hdd Repairing Course</h5>
                                    <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>How to Use Multimeter, Diagram</li>
                                      <li>Hard Drive Types</li>
                                      <li>IC Identification</li>
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                                    <div style="width:100%;padding: 10px 35px;">
                                      <a href="{{url('/course_select/HDD Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                                    </div>
                                  </div>
                          </div>
                <div class="product-info text-left m-t-20">                
                  
                </div>
                <!-- /.product-info -->               
                <div class="cart clearfix animate-effect">                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                <div class="card" style="width: 100%;height:50vh;">
                                  <img class="card-img-top" style="width:100%;height:50%;" src="images/new/cctv.png" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">CCTV Repairing Course</h5>
                                    <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>Types Of Camera(DOM, BULLET)</li>
                                      <li>Types Of Cable(COXEAL, CAT 5)</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li>
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                                    <div style="width:100%;padding: 10px 35px;">
                                      <a href="{{url('/course_select/CCTV Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                                    </div>
                                  </div>
                          </div>
                <div class="product-info text-left m-t-20">                 
                </div>
                <!-- /.product-info -->                
                <div class="cart clearfix animate-effect">                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/wahs-repaire1.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Washing Machine_Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <!-- <li>Types Of Camera(DOM, BULLET)</li>
                                      <li>Types Of Cable(COXEAL, CAT 5)</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li> -->
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Washing Machine Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/motor-winding.jpg" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Motor Winding Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                                    <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <!-- <li>Types Of Camera(DOM, BULLET)</li>
                                      <li>Types Of Cable(COXEAL, CAT 5)</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li> -->
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Motor Winding Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/grinder.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Grinder Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <!-- <li>Types Of Camera(DOM, BULLET)</li>
                                      <li>Types Of Cable(COXEAL, CAT 5)</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li> -->
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Grinder Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/air-conditioning-repair.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">AC Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <!-- <li>Types Of Camera(DOM, BULLET)</li>
                                      <li>Types Of Cable(COXEAL, CAT 5)</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li> -->
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/AC Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/freeze-repair.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Freeze Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <!-- <li>Types Of Camera(DOM, BULLET)</li>
                                      <li>Types Of Cable(COXEAL, CAT 5)</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li> -->
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Freeze Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/xerox-machine.webp" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Xerox Machine Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                                    <ul class="syllabus_list" style="margin-bottom:10px;">
                                      <li>How to Use Multimeter, Diagram</li>
                                      <li>Resistor- Function, Denoting Letter,</li>
                                      <li>Types Of Connector(BNC, DC POWER )</li>
                                      <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                                      
                                    </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Xerox Machine Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/fan-repairing1copy.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Fan Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                              <ul class="syllabus_list" style="margin-bottom:10px;">
                                  <!-- <li>How to Use Multimeter, Diagram</li>
                                  <li>Resistor- Function, Denoting Letter,</li>
                                  <li>Capacitor – Function</li> -->
                                  <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                              </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Fan Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/cooler.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Cooler Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                              <ul class="syllabus_list" style="margin-bottom:10px;">
                                  <!-- <li>How to Use Multimeter, Diagram</li>
                                  <li>Resistor- Function, Denoting Letter,</li>
                                  <li>Capacitor – Function</li> -->
                                  <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                              </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Cooler Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn">Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/oven1.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Owen Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                              <ul class="syllabus_list" style="margin-bottom:10px;">
                                  <!-- <li>How to Use Multimeter, Diagram</li>
                                  <li>Resistor- Function, Denoting Letter,</li>
                                  <li>Capacitor – Function</li> -->
                                  <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                              </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Owen Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/elavator-repair.jpg" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Elevator Repairing Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                              <ul class="syllabus_list" style="margin-bottom:10px;">
                                  <!-- <li>How to Use Multimeter, Diagram</li>
                                  <li>Resistor- Function, Denoting Letter,</li>
                                  <li>Capacitor – Function</li> -->
                                  <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                              </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Elevator Repairing Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/basic-ele.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Basic Electronic Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                              <ul class="syllabus_list" style="margin-bottom:10px;">
                                  <li>How to Use Multimeter, Diagram</li>
                                  <li>Resistor- Function, Denoting Letter,</li>
                                  <li>Capacitor – Function</li>
                                  <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                              </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Basic Electronic Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn" >Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item slide-left">
              <div class="products">
                  <div class="card" style="width: 100%;height:50vh;">
                      <img class="card-img-top" style="width:100%;height:50%;" src="images/new/computer-hardware1copy1.png" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title" style="font-size:16px; font-weight:600;margin-bottom:20px">Computer Hardware Course</h5>
                              <p class="card-text" style="font-weight:700;">Price : Rs.10000</p>
                              <p class="card-text" style="font-weight:700;">Syllabus : </p>
                              <ul class="syllabus_list" style="margin-bottom:10px;">
                                  <li>Laptop & Desktop Parts</li>
                                  <li>RAM Voltage Identification</li>
                                  <li>Front Panal Connector Working</li>
                                  <li><a href="{{url('/course_select/HDD Repairing Course')}}">Read More</a></li>
                              </ul>
                              <div style="width:100%;padding: 10px 35px;">
                                  <a href="{{url('/course_select/Computer Hardware Course')}}" class="btn-upper btn btn-primary checkout-page-button course-btn">Register Now</a>
                              </div>
                          </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>

          </div>
          <!-- /.sidebar-widget --> 
        </div> 

        <!-- ============================================== HOT DEALS: END ============================================== --> 
        



        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->
         <!-- <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Franchise</h3>
          <div class="sidebar-widget-body outer-top-xs">
           
            <form>
              <div class="form-group">
               
              </div>
              <a href="{{ url('/franchisee') }}" class="btn btn-primary">Take a franchise</a>
            </form>
          </div>
          
        </div>
		
		      <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Student Admission</h3>
          <div class="sidebar-widget-body outer-top-xs">
           
            <form>
              <div class="form-group">
               
              </div>
              <a href="{{ url('/student_registration') }}" class="btn btn-primary">Take a admission</a>
            </form>
          </div>
          
        </div> -->
		
		
        
        <!-- ============================================== Testimonials: END ============================================== -->
        
        <!-- <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div> -->
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
           <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION Ã¢â‚¬â€œ HERO ========================================= -->
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
          <div class="item">
            <a href="{{url('/courses')}}">
                  <img src="images/new/sw7-1.jpg" style="background-size:contain;background-position:center;background-repeat:no-repeat;"></a>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left sagar" >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>
                  <div class="info-boxes wow fadeInUp" >
          <!-- <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">sw7 infomedia pvt Ltd </h6>
                </div>
              </div>
             
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">100% Practical oriented skill based course </h6>
                </div>
              </div>
             
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><a href="{{url('/courses')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Read more</a> </h4>
                    </div>
                  </div>
                  <h6 class="text"></h6>
                </div>
              </div>
              
            </div>
                      </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                 
                  <div class="button-holder fadeInDown-3 text-center"></div> 
                </div>
                
                <!-- /caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            <div class="item">
            <a href="{{url('/productview/1')}}">
                  <img src="images/new/sw7-2=2.jpg" style="background-size:contain;background-position:center;background-repeat:no-repeat;"></a>
             
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left sagar" >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>
                  <div class="info-boxes wow fadeInUp" >
          <!-- <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">sw7 infomedia pvt Ltd  </h6>
                </div>
              </div>
              
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">Free hostel faculty & many more.. </h6>
                </div>
              </div>
              
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                     <h4 class="info-box-heading green"><a href="{{url('/courses')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Read more</a> </h4>
                    </div>
                  </div>
                  <h6 class="text"></h6>
                </div>
              </div>
              
            </div>
            
          </div>-->
          
          
        </div>
        <!-- /.info-boxes --> 
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                 
                  <!--<div class="button-holder fadeInDown-3 text-center"><a href="#" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Read more</a> </div> -->
                </div>
                
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            <div class="item">
            <a href="{{url('/courses')}}">
                  <img src="images/new/sw7-3.jpg" style="background-size:contain;background-position:center;background-repeat:no-repeat;"></a>
            
              
                                <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left " >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>

                  <div class="info-boxes wow fadeInUp" >
          <!-- <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">sw7 infomedia pvt Ltd  </h6>
                </div>
              </div>
             
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">Refurbished laptop & Desktop Wholesale </h6>
                </div>
              </div>
              
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><a href="{{url('all_new_laptop')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </h4>
                    </div>
                  </div>
                  <h6 class="text"></h6>
                </div>
              </div>
             
            </div>
            
          </div> -->
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
                
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                   <div class="button-holder fadeInDown-3 text-center">  </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            <div class="item">
            <a href="{{url('/franchisee')}}">
                  <img src="images/new/sw7_4new.jpg" style="background-size:contain;background-position:center;background-repeat:no-repeat;"></a>
            
              
                                <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left " >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>

                  <div class="info-boxes wow fadeInUp" >
          <!-- <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">sw7 infomedia pvt Ltd  </h6>
                </div>
              </div>
             
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green">Refurbished laptop & Desktop Wholesale </h6>
                </div>
              </div>
              
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><a href="{{url('all_new_laptop')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </h4>
                    </div>
                  </div>
                  <h6 class="text"></h6>
                </div>
              </div>
             
            </div>
            
          </div> -->
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
                
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                   <div class="button-holder fadeInDown-3 text-center">  </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            
                  
            <!-- /.item -->
            <div class="item">
            <a href="{{url('/hostel')}}">
                  <img src="images/new/sw5.jpeg" style="background-size:contain;background-position:center;background-repeat:no-repeat;"></a>
             
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left sagar" >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate_animated animate_bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>
                  <div class="info-boxes wow fadeInUp" >
          
        </div>
        <!-- /.info-boxes --> 
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                 
                  <!--<div class="button-holder fadeInDown-3 text-center"><a href="#" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Read more</a> </div> -->
                </div>
                
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
          </div>

          
          <!-- /.owl-carousel --> 
        </div>
		
		 
       
        
        <!-- ========================================= SECTION Ã¢â‚¬â€œ HERO : END ========================================= --> 
        
        
        <!-- ============================================== INFO BOXES ============================================== -->

        <!-- <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">


                </div>
             </div>
          </div>
      </div> -->


<!-- 
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/LCD Repairing Course') }}" target="_blank">
                    <div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">LCD Repairing Course</h2>
                            
                        </div></div>
                    </a>						
                </div>
            
                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/Hdd Repairing Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">Hdd Repairing Course</h2>
                            
                        </div></div>
                    </a>						
                </div>

                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/CCTV Repairing Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">CCTV Repairing Course</h2>
                            
                        </div></div>
                    </a>						
                </div>
                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/Laptop Repairing Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">Laptop Repairing Course</h2>
                            
                        </div></div>
                    </a>						
                </div>

                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/Printer Repairing Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">Printer Repairing Course </h2>
                            
                        </div></div>
                    </a>						
                </div>

                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/Mobile Repairing Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">Mobile Repairing Course</h2>
                            
                        </div></div>
                    </a>						
                </div>

                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/course_select/AC Repairing Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">AC Repairing Course</h2>
                            
                        </div></div>
                    </a>						
                </div>

                <div class="col-lg-3 col-sm-6" style="padding-top:20px;">
                    <a href="{{ url('/More_Course') }}" target="_blank"><div class="brand-content report">
                        
                        <div class="media-body">							
                            <h2 style="color:black;">More Courses</h2>
                            
                        </div></div>
                    </a>						
                </div>

              </div>
          </div>
        </div> -->



        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
             
              <!-- .col -->
              
             
              <!-- .col -->
              
             
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
 
		
			        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <!-- <section class="section featured-product wow fadeInUp">
          <h3 class="section-title"> Brand Desktop </h3>
          <marquee><div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/dell_new_desktop')}}"><img  src="images/new/brand/dell4.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/dell_new_desktop')}}">DELL</a></p></div>
                    
				
                  </div>
                 
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                 
                    
                  </div>

                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                         
                        </li>
                        
                      </ul>
                    </div>
                  
                  </div>
                 
                </div>
               
                
              </div>
            
            </div>
          
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/hp_new_desktop')}}"><img  src="images/new/brand/hp9.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/hp_new_desktop')}}">HP</a></p> </div>
                    
                    
                    
                  </div>
                
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                 
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                       
                      </ul>
                    </div>
             
                  </div>
                 
                </div>
              
                
              </div>
          
            </div>
           
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/lenovo_new_desktop')}}"><img  src="images/new/brand/l2.png" data-echo="images/new/brand/leno4.png" alt="" style="height:150px;width:150px;"></a><p class="name text-center"><a href="{{url('/lenovo_new_desktop')}}">Lenovo</a></p> </div>
                   
                    
                    
                  </div>
              
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
             
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                        
                      </ul>
                    </div>
                   
                  </div>
               
                </div>
              
                
              </div>
           
            </div>
         
            
            
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/acer_new_desktop')}}"><img  src="images/new/brand/acer2.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/acer_new_desktop')}}">Acer</a></p> </div>
                    
                  </div>
                  
                  
                  <div class="product-info text-left">
                   
                 
                    <div class="description"></div>
                  
                    
                  </div>
                
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                        
                      </ul>
                    </div>
                 
                  </div>
                 
                </div>
              
                
              </div>
       
            </div>
          
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/asus_new_desktop')}}"><img  src="images/new/brand/asusa2.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/asus_new_desktop')}}">Asus</a></p></div>
                  
                    
                   
                  </div>
               
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                         
                        </li>
                        
                      </ul>
                    </div>
               
                  </div>

                </div>
              
                
              </div>
           
            </div>
          
			
			<div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/toshiba_new_desktop')}}"><img  src="images/new/brand/tushiba2.png" alt="" style="height:150px;width:150px;"></a><p class="name text-center"><a href="{{url('/toshiba_new_desktop')}}">Toshiba</a></p></div>
                
                  </div>
                  
                  
                  <div class="product-info text-left">
                    
                  
                    <div class="description"></div>
                  
                    
                  </div>
               
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                         
                        </li>
                        
                      </ul>
                    </div>
                  
                  </div>
               
                </div>
                
                
              </div>
              
            </div>
          
          </div></marquee>
         
        </section> -->

        <div class="row" style="background:white;margin-left: 0px;margin-right: 0px;margin-top:20px;margin-bottom:20px;">
        <div class="col-lg-12 col-sm-12" style="padding-top:20px;padding-bottom:20px;">
        <h3 class="section-title" style="white-space:nowrap;">  Courses <marquee style="color:red;padding-left:40px;" behavior="sliding" width="60%" height="20px" scrollamount="3" direction="down">Book Your Seat Now!!!</marquee></h3>
         </div>
           <div class="col-lg-4 col-sm-4" style="">
                  <div class="product-image">
                  <span class="comboprop" style="text-align:center;font-weight:bold;">COMBO 1</span>
                  </div>
                  <div class="product-info text-left">
                          <div class="description">

                          <ul class="comboul" style="color:#b60a0a;text-align:justify;white-space:nowrap;">
                                  <li>Laptop Repairing</li>
                                  <li>Desktop Motherboard</li>
                                  <li>LED TV Repairing</li>
                                  <li>Printer Repairing</li>
                                  <li>CCTV Camera Inst.</li>
                                </ul>
                          </div>
                          <div style="white-space:nowrap;">
                            <span style="font-weight:bold;">Rs.20,000/-</span>
                            <span style="text-decoration:line-through red;">Rs.50,000/-</span>
                          </div>
                  </div>
    
             </div>
             <div class="col-lg-4 col-sm-4" style="">
                  <div class="product-image">
                  <span class="comboprop" style="text-align:center;font-weight:bold;">COMBO 2</span>
                  </div>
                  <div class="product-info text-left">
                          <div class="description">

                                <ul style="color:#b60a0a;text-align:justify;white-space:nowrap;">
                                  <li>Laptop Repairing</li>
                                  <li>Desktop Motherboard</li>
                                  <li>LED TV Repairing</li>
                                  <li>Printer Repairing</li>
                                  <li>CCTV Camera Inst.</li>
                                  <li>Mobile Repairing</li>
                                </ul>
                          </div>
                          <div style="white-space:nowrap;">
                            <span style="font-weight:bold;">Rs.22,000/-</span>
                            <span style="text-decoration:line-through red;">Rs.60,000/-</span>
                          </div>
                  </div> 
             </div>
             <div class="col-lg-4 col-sm-4" style="">
                      <div class="product-image">
                      <span class="comboprop" style="text-align:center;font-weight:bold;">COMBO 3</span>
                      </div>
                      <div class="product-info text-left">
                              <div class="description">

                                    <ul style="color:#b60a0a;text-align:justify;white-space:nowrap;">
                                      <li>Laptop Repairing</li>
                                      <li>Desktop Motherboard</li>
                                      <li>LED TV Repairing</li>
                                      <li>Printer Repairing</li>
                                      <li>CCTV Camera Inst.</li>
                                      <li>Mobile Repairing</li>
                                      <li>Xerox Machine Repairing</li>
                                    </ul>
                              </div>
                              <div style="white-space:nowrap;">
                                <span style="font-weight:bold;">Rs.28,000/-</span>
                                <span style="text-decoration:line-through red;">Rs.70,000/-</span>
                              </div>
                      </div>

             </div>
             <div class="col-md-12">
             <div class="product-image" style="">
                          <a href="{{ url('/student_registration') }}" class=" comboprop regcomb" style="background:#ffc206;color:white;padding-right:10px;padding-left:10px;">
                                   <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                                   REGISTER AS STUDENT 
                          </a>
                    </div>
      <marquee behavior="alternate">For Addmission & Nearest Branch Please Log In  To Our Site</marquee>
             </div>

        </div>
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  LAPTOPS </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">    
      @foreach($products as $product)    
      @if($product->type=="Laptop")    
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{ url('productview/'.$product->id) }}"><img  src="{{asset('/images/products/'.$product->path)}}" alt="" class="img-thumbnail" style="width:180px;height:150px;"></a> <p class="name text-center"><a href="{{ url('productview/'.$product->id) }}">{{ $product->product_name }}</a><br>MRP :Rs. <span style="text-decoration:line-through;">{{ $product->mrp }}</span><br>Price :Rs.  {{ $product->price }}</p></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                       
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            @endif

@endforeach
                       </div>       
        </section>
	    
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  Desktops </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">    
      @foreach($products as $product)    
      @if($product->type=="Desktop")    
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{ url('productview/'.$product->id) }}"><img  src="{{asset('/images/products/'.$product->path)}}" alt="" class="img-thumbnail" style="width:180px;height:150px;"></a> <p class="name text-center"><a href="{{ url('productview/'.$product->id) }}">{{ $product->product_name }}</a><br>MRP :Rs. <span style="text-decoration:line-through;">{{ $product->mrp }}</span><br>Price :Rs.  {{ $product->price }}</p></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                       
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            @endif

@endforeach
                       </div>       
        </section>
	
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  Mobiles </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">    
      @foreach($products as $product)    
      @if($product->type=="Mobiles")    
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{ url('productview/'.$product->id) }}"><img  src="{{asset('/images/products/'.$product->path)}}" alt="" class="img-thumbnail" style="width:180px;height:150px;"></a> <p class="name text-center"><a href="{{ url('productview/'.$product->id) }}">{{ $product->product_name }}</a><br>MRP :Rs. <span style="text-decoration:line-through;">{{ $product->mrp }}</span><br>Price :Rs.  {{ $product->price }}</p></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                       
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            @endif

@endforeach
                       </div>       
        </section>
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  PRINTERS </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">    
      @foreach($products as $product)    
      @if($product->type=="Printer")    
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{ url('productview/'.$product->id) }}"><img  src="{{asset('/images/products/'.$product->path)}}" alt="" class="img-thumbnail" style="width:180px;height:150px;"></a> <p class="name text-center"><a href="{{ url('productview/'.$product->id) }}">{{ $product->product_name }}</a><br>MRP :Rs. <span style="text-decoration:line-through;">{{ $product->mrp }}</span><br>Price :Rs.  {{ $product->price }}</p></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                       
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            @endif

@endforeach
                       </div>       
        </section>
	
        <!-- /.section --> 
					        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <!-- <section class="section featured-product wow fadeInUp">
          <h3 class="section-title"> Brand Printer </h3>
          <marquee><div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
           
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/hp_printer')}}"><img  src="images/new/brand/hp9.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/hp_printer')}}">HP</a></p> </div>
                    
                  </div>
              
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                  
                    
                  </div>
              
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                       
                      </ul>
                    </div>

                  </div>
               
                </div>
               
                
              </div>
              
            </div>
           
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/canon_printer')}}"><img  src="" data-echo="images/new/brand/canon2.png" alt="" style="height:150px;width:150px;"></a><p class="name text-center"><a href="{{url('/canon_printer')}}">Canon</a></p> </div>
                
                    
                    
                  </div>
                
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
               
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                        
                      </ul>
                    </div>
                   
                  </div>
                 
                </div>
          
                
              </div>
           
            </div>
         
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/xerox_printer')}}"><img  src="images/new/brand/xerox-logo.png" alt="" style="height:150px;width:150px;"></a><p class="name text-center"><a href="{{url('/xerox_printer')}}">Xerox</a></p></div>
                   
                  </div>
                 
                  
                  <div class="product-info text-left">
                    
                   
                    <div class="description"></div>
                 
                    
                  </div>
               
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                         
                        </li>
                        
                      </ul>
                    </div>
                  
                  </div>
                
                </div>
               
                
              </div>
            
            </div>
         
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/reco_printer')}}"><img  src="images/new/brand/ricoh2.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/reco_printer')}}">Ricoh</a></p> </div>
                   
                  </div>
                
                  
                  <div class="product-info text-left">
                  
                    <div class="description"></div>
                     
                    
                  </div>
                 
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          
                        </li>
                        
                      </ul>
                    </div>
                   
                  </div>
                
                </div>
               
                
              </div>
             
            </div>
          
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="{{url('/lenovo_printer')}}"><img  src="images/new/brand/leno4.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="{{url('/lenovo_printer')}}">Lenovo</a></p></div>
               
                  </div>
                
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                 
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                         
                        </li>
                        
                      </ul>
                    </div>
                  
                  </div>

                </div>
               
                
              </div>
              
            </div>
            
			
			     <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image text-center"> <a href="#"><img  src="images/new/brand/epson2.png" alt="" style="height:150px;width:150px;"></a> <p class="name text-center"><a href="#">Epson</a></p></div>
                 
                    
                 
                  </div>
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                   
                    
                  </div>
                 
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                         
                        </li>
                        
                      </ul>
                    </div>
                   
                  </div>
                  
                </div>
             
                
              </div>
            
            </div>
        
          </div></marquee>
        
        </section> -->
      
		
       
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">

          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Repairing Tools</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/smd_machine')}}"> <img src="{{asset('images/new/acc/1.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/smd_machine')}}">SMD Machine</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/soldering_gun')}}"> <img src="{{asset('images/new/acc/2.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/soldering_gun')}}">Soldering Gun</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/disordering_pump')}}"> <img src="{{asset('images/new/acc/3.jpg')}}"  class="img-thumbnail"alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/disordering_pump')}}">Disordering Pump</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/twisers')}}"> <img src="{{asset('images/new/acc/4.jpg')}}"  class="img-thumbnail"alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/twisers')}}">Twisers</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/cutter')}}"> <img src="{{asset('images/new/acc/5.jpg')}}" class="img-thumbnail"alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/cutter')}}">Cutter</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/soldering_pest')}}"> <img src="{{asset('images/new/acc/6.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/soldering_pest')}}">Soldering Pest</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/desoldring_wire')}}"> <img src="{{asset('images/new/acc/7.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/desoldring_wire')}}">Desoldring Wire</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('opener')}}"> <img src="{{asset('images/new/acc/8.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('opener')}}">Opener</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div><!--item close-->
			  
			                <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/magnify_lamp')}}"> <img src="{{asset('images/new/acc/9.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/magnify_lamp')}}"> Magnify Lamp</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/microscope')}}"> <img src="{{asset('images/new/acc/10.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/microscope')}}">Microscope</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div><!--item-->
			  
						                <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/bios_programmer')}}"> <img src="{{asset('images/new/acc/11.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/bios_programmer')}}"> Bios Programmer</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/tool_kit')}}"> <img src="{{asset('images/new/acc/12.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/tool_kit')}}">Tool kit</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div><!--item-->
			  
			  			                <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/tool_kit')}}"> <img src="{{asset('images/new/acc/13.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/tool_kit')}}"> SMD Tester</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/dc_power_supply')}}"> <img src="{{asset('images/new/acc/14.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/dc_power_supply')}}">DC Power Supply</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div><!--item-->
			  
			  			                <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/booster')}}"> <img src="{{asset('images/new/acc/15.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/booster')}}"> Booster</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/LED_Backlight_Tester')}}"> <img src="{{asset('images/new/acc/16.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/LED_Backlight_Tester')}}">LED Backlight Tester</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div><!--item-->
			  
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
		
		  <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Accessories</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/laptop_touchpad')}}"> <img src="{{asset('images/new/touchpad.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/laptop_touchpad')}}">Touchpad</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/headphones')}}"> <img src="{{asset('images/new/head.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/headphones')}}">Headphone</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/laptop_charger')}}"> <img src="{{asset('images/new/charger.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/laptop_charger')}}">Charger</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/cpu_processors')}}"> <img src="{{asset('images/new/cpu.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/cpu_processors')}}">Cpu</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/keyboards')}}"> <img src="{{asset('images/new/hd/keyboard.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/keyboards')}}">Keyboard</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/mouse')}}"> <img src="{{asset('images/new/mouse.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/mouse')}}">Mouse</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/all_printer')}}"> <img src="{{asset('images/new/printer.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_printer')}}">Printer</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('pen_drive')}}"> <img src="{{asset('images/new/usb-device.jpg')}}" class="img-thumbnail" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('pen_drive')}}">Pen Drive</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> Ã¢â€šÂ¹450.99 </span> </div> -->
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>

		       <!-- ============================================== INFO BOXES : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        
		
        <!--<div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title blink">COURSES</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Laptop Repairing Course')}}"> <img src="{{asset('images/new/icon/laptop.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            
                            
                          </div>
                          
                        </div>
                        
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Laptop Repairing Course')}}">Laptop Repairing Course</a></h3>
                            
                          </div>
                        </div>
                       
                      </div>
                     
                    </div>
                   
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Printer Repairing Course')}}"> <img src="{{asset('images/new/icon/printer-with-paper.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                          </div>
                         
                        </div>
                        
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Printer Repairing Course')}}">Printer Repairing Course</a></h3>
                            
                          </div>
                        </div>
                       
                      </div>
                      
                    </div>
                  
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/LCD Repairing Course')}}"> <img src="{{asset('images/new/icon/repair.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                          
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/LCD Repairing Course')}}">LCD Repairing Course</a></h3>
                            
                          </div>
                        </div>
                       
                      </div>
                     
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Mobile Repairing Course')}}"> <img src="{{asset('images/new/icon/mrepair.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            
                            
                          </div>
                          
                        </div>
                       
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Mobile Repairing Course')}}">Mobile Repairing Course</a></h3>
                            
                            
                          </div>
                        </div>
                       
                      </div>
                     
                    </div>
                   
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/HDD Repairing Course')}}"> <img src="{{asset('images/new/icon/hard-disk-drive.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                        
                        </div>
                       
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/HDD Repairing Course')}}">Hdd Repairing Course</a></h3>
                           
                            
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/CCTV Repairing Course')}}"> <img src="{{asset('images/new/icon/cctv.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/CCTV Repairing Course')}}">CCTV Repairing Course</a></h3>
                            
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Washing Machine Repairing Course')}}"> <img src="{{asset('images/new/icon/washing-machine.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Washing Machine Repairing Course')}}">Washing Machine_Repairing Course</a></h3>
                          
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Motor Winding Repairing Course')}}"> <img src="{{asset('images/new/icon/electric-motor.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Motor Winding Repairing Course')}}">Motor Winding Repairing Course</a></h3>
                          
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  
                    
                  </div>
                </div>
              </div>
			  
			   <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Grinder Repairing Course')}}"> <img src="{{asset('images/new/icon/grinder.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Grinder Repairing Course')}}">Grinder Repairing Course</a></h3>
                          
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/AC Repairing Course')}}"> <img src="{{asset('images/new/icon/air-conditioner.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                            
                          </div>
                        
                        </div>
                    
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/AC Repairing Course')}}">AC Repairing Course</a></h3>
                           
                          </div>
                        </div>
                         
                      </div>
                     
                    </div>
                  
                    
                  </div>
                </div>
              </div>
			  
			       <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Freeze Repairing Course')}}"> <img src="{{asset('images/new/icon/freezer.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                         
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Freeze Repairing Course')}}">Freeze Repairing Course</a></h3>
                          
                            
                          </div>
                        </div>
                      
                      </div>
                   
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Xerox Machine Repairing Course')}}"> <img src="{{asset('images/new/icon/xerox-machine.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                            
                          </div>
                         
                        </div>
                     
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Xerox Machine Repairing Course')}}">Xerox Machine Repairing Course</a></h3>
                         
                          </div>
                        </div>
                       
                      </div>
                    
                    </div>
                  
                    
                  </div>
                </div>
              </div>
			  
			   <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Fan Repairing Course')}}"> <img src="{{asset('images/new/icon/fan.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                         
                        </div>
                        
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Fan Repairing Course')}}">Fan Repairing Course</a></h3>
                          
                            
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                    
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Cooler Repairing Course')}}"> <img src="{{asset('images/new/icon/air-cooler.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                        
                        </div>
                       
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Cooler Repairing Course')}}">Cooler Repairing Course</a></h3>
                           
                            
                          </div>
                        </div>
                      
                      </div>
                      
                    </div>
                    
                    
                  </div>
                </div>
              </div>
			  
			    <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Owen Repairing Course')}}"> <img src="{{asset('images/new/icon/owen.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                             
                            
                          </div>
                           
                        </div>
                                               <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Owen Repairing Course')}}">Owen Repairing Course</a></h3>
                            
                          </div>
                        </div>
                        
                      </div>
                      
                    </div>
                     
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Elevator Repairing Course')}}"> <img src="{{asset('images/new/icon/elevator.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            
                            
                          </div>
                         
                        </div>
                       
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Elevator Repairing Course')}}">Elevator Repairing Course</a></h3>
                           
                            
                          </div>
                        </div>
                        
                      </div>
                      
                    </div>
                   
                    
                  </div>
                </div>
              </div>
			  
			  		    <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Basic Electronic Course')}}"> <img src="{{asset('images/new/icon/screwdriver.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Basic Electronic Course')}}">Basic Electronic Course</a></h3>
                           
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Computer Hardware Course')}}"> <img src="{{asset('images/new/icon/computer.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                          
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Computer Hardware Course')}}">Computer Hardware Course</a></h3>
                            
                          </div>
                        </div>
                       
                      </div>
                     
                    </div>
                    
                    
                  </div>
                </div>
              </div>
			  
			  		    <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Combo Course 1')}}"> <img src="{{asset('images/new/icon/hand-tools.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                          
                        </div>
                       
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Combo Course 1')}}">Combo Course1</a></h3>
                           
                          </div>
                        </div>
                        
                      </div>
                     
                    </div>
                    
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Combo Course 2')}}"> <img src="{{asset('images/new/icon/hand-tools.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            
                          </div>
                        
                        </div>
                      
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Combo Course 2')}}">Combo Course2</a></h3>
                            
                            
                          </div>
                        </div>
                      
                      </div>
                      
                    </div>
                    
                    
                  </div>
                </div>
              </div>
			  
			  	  
			  		    <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/course_select/Combo Course 3')}}"> <img src="{{asset('images/new/icon/hand-tools.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                           
                            
                          </div>
                         
                        </div>
                       
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Combo Course 3')}}">Combo Course3</a></h3>
                           
                            
                          </div>
                        </div>
                        
                      </div>
                     
                    </div>
                    
                    
                  </div>
               
                </div>
              </div>
			  
            </div>
          </div>
       
        </div>-->
        <!-- /.section --> 
		

        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 

        <!-- /.sidebar-widget --> 
        <!-- ============================================== BEST SELLER : END ============================================== --> 
        
        <!-- ============================================== BLOG SLIDER ============================================== -->
       
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
	  
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
	</div>
	</div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
  <div class="container-fluid" style="background-color:#f9f8f0;">
		
<hr>

<h2 class="text-center"><b>Gallery</b></h2>


<hr>

<div class="bxslider" style="background-color:#f9f8f0;">

  <img  class="img-responsive" src="images/sw7/banner2.jpeg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  
  <img class="img-responsive" src="images/sw7/photo/37.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img class="img-responsive" src="images/sw7/photo/44.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img class="img-responsive" src="images/sw7/photo/54.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img class="img-responsive" src="images/sw7/photo/40.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img  class="img-responsive" src="images/sw7/photo/13.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img class="img-responsive" src="images/sw7/photo/12.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img class="img-responsive" src="images/sw7/photo/7.jpg" data-src="/images/sw7/photo/7.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img  class="img-responsive" src="{{asset('images/sw7/photo/9.jpg')}}"  data-src="{{asset('images/sw7/photo/9.jpg')}}')}}" alt="" style="height:150px;width:150px;" alt="ClientName" >
  <img class="img-responsive" src="{{asset('/images/sw7/photo/10.jpg')}}" data-src="/images/sw7/photo/10.jpg" alt="" style="height:150px;width:150px;" alt="ClientName" >
   
</div>
<br>
<div class="text-center">
<a href="{{url('/gallery')}}" class="btn btn-lg btn-primary ">More Photo</a>
</div>
</div>  
<div class="container-fluid" style="background-color:#f9f8f0;">
		
<hr>

<h2 class="text-center"><b>Brand Products</b></h2>


<hr>

<div class="bxslider">
  <img  class="img-responsive" src="images/new/brand/dell65.png" alt="" style="height:150px;width:150px;" alt="ClientName" title="Dell">
  <img class="img-responsive" src="images/new/brand/hp11.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName2">
  <img class="img-responsive" src="images/new/brand/leno6.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName3">
  <img class="img-responsive" src="images/new/brand/tushiba2.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName4">
  <img class="img-responsive" src="images/new/brand/asusa2.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName5">
  <img  class="img-responsive" src="images/new/brand/acer2.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName6">
  <img class="img-responsive" src="images/new/brand/canon2.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName7">
  <img class="img-responsive" src="images/new/brand/xerox-logo.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName8">
  <img  class="img-responsive" src="images/new/brand/ricoh2.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName9">
  <img class="img-responsive" src="images/new/brand/epson2.png" alt="" style="height:140px;width:140px;" alt="ClientName" title="ClientName10">

</div>
</div>

	<!------------------------------------------------Gallery------------------------------------------------------->

        <!-- /.section --> 
		<!------------------------------------------------End Gallery------------------------------------------------------->
    <div class="container-fluid"style="background-color:#f9f8f0;">
<hr>
<h2 class="text-center"><b>GMap</b></h2><br>

		<div class="row">
		<div class="col-md-12 col-sm-12">
    <div class="col-md-6 col-sm-6" style="border:2px solid #ffc20e;padding:0px !important;">
<!--<iframe src="https://www.google.com/maps/d/embed?mid=1wzl44FM4xj22V5Teizxw3EpQpZ4EwBzn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>	-->
  <iframe src="https://www.google.com/maps/d/embed?mid=1bdgK0ZhA6rbq1gviWcfXL9XVoxL6CHX1" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  
  </div>
  <div class="col-md-6 col-sm-6"style="border:2px solid #ffc20e;height: 407px;">
  <div class="row">
  <div class="head" style="padding-left:8%;background-color:#b60a0a;color:white;height:45px;font-size:25px;"><b>Address</b></div>
    <br/>
  <p style="color:black;font-size:25px;font-family:orbitan;"><i class="fa fa-map-marker" style="font-size:30px;color:red;padding-left: 10px;
    padding-right: 10px;"></i>Dagadu Patil Nagar, Thergaon, Pimpri-Chinchwad, Maharashtra</p>
    <br/>
  <p style="color:black;font-size:25px;font-family:orbitan;"><i class="fa fa-map-marker" style="font-size:30px;color:red;padding-left: 10px;
    padding-right: 10px;"></i>Pimpri (pune),Swapnanagari Hsg Soc,Morewasti Chikhali, Pune </p>
    <br/>
    <p style="color:black;font-size:25px;font-family:orbitan;"><i class="fa fa-map-marker" style="font-size:30px;color:red;padding-left: 10px;
    padding-right: 10px;"></i>Sgm college road,vidyanagar,a/p-saidapur,karad </p>
  <br/>
  <p style="color:black;font-size:25px;font-family:orbitan;"><i class="fa fa-map-marker" style="font-size:30px;color:red;padding-left: 10px;
    padding-right: 10px;"></i>Shivaji Chowk,Latur</p>
<br/>
<br/>
  </div>  

  </div>

  </div>
    </div>
	</div>
</div>
<br>

<div class="container-fluid" style="background-color:#f9f8f0;">
<h2 class="text-center"><b>Our Reviews</b></h2><br>
<div id="wpac-google-review"></div>
</div>
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'GoogleReview', id: 27635, place_id: 'ChIJiSA_HQq5wjsRww_cF4nL-GQ', view_mode: 'list'});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = 'https://embed.widgetpack.com/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>



@endsection

@section('scripts')

  
  
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
$('.bxslider').bxSlider({
  autoHover: true,
  auto: true,
  slideWidth: 200,
  minSlides: 2,
  maxSlides: 6,
  controls: true,
  pager: false,
  speed: 500,
  captions: true,
  slideMargin: 5,
});
</script>
@endsection
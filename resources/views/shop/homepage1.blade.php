@extends('layouts.master')
 

@section('css')




@endsection
		




@section('content')
@section('js')
  

@endsection
<style>
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
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <li class="dropdown menu-item"> <a href="{{url('/laptop')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Laptop </a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <h2 class="title">Laptops</h2>
                            <ul class="links">
                           
                              <li><a href="{{url('/dell_new_laptop')}}">Dell</a></li>
                              <li><a href="{{url('/hp_new_laptop')}}">Hp</a></li>
                              <li><a href="{{url('/lenovo_new_laptop')}}">Lenovo</a></li>
                              <li><a href="{{url('/toshiba_new_laptop')}}">Toshiba</a></li>
                              <li><a href="{{url('/acer_new_laptop')}}">Acer</a></li>
                              <li><a href="{{url('/asus_new_laptop')}}">Asus</a></li>
                              <li><a href="{{url('/others_new_laptop')}}">Others</a></li>
                            </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                       <h2 class="title">Refurbished Laptops</h2>
                            <ul class="links">
                            <!-- <li><a href="{{url('/laptop')}}">Acer</a></li> -->
                              <li><a href="{{url('/refurbished_dell_laptop')}}">Dell</a></li>
                              <li><a href="{{url('/refurbished_hp_laptop')}}">Hp</a></li>
                              <li><a href="{{url('/refurbished_lenovo_laptop')}}">Lenovo</a></li>
                              <li><a href="{{url('/refurbished_toshiba_laptop')}}">Toshiba</a></li>
                              <li><a href="{{url('/refurbished_acer_laptop')}}">Acer</a></li>
                              <li><a href="{{url('/refurbished_asus_laptop')}}">Asus</a></li>
                              <li><a href="{{url('/refurbished_others_laptop')}}">Others</a></li>
                           </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <h2 class="title">Peripheral Parts</h2>
                            <ul class="links">
                              <li><a href="{{url('/laptop_screen')}}">Screen</a></li>
                              <li><a href="{{url('/laptop_keyboard')}}">Keyboard</a></li>
                              <li><a href="{{url('/laptop_hinges')}}">Hinges</a></li>
                              <li><a href="{{url('/laptop_body')}}">Body</a></li>
                              <li><a href="{{url('/laptop_wificard')}}">Wifi Card</a></li>
                              <li><a href="{{url('/laptop_dvd_rw')}}">DVD RW</a></li>
                              <li><a href="{{url('/laptop_charger')}}">Charger</a></li>
                              <li><a href="{{url('/laptop_bios_battery')}}">Bios Battery</a></li>
                                </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                      <h2 class="title">Peripheral Parts</h2>
                        <ul class="links list-unstyled">
                        <li><a href="{{url('/laptop_cables')}}">Cables</a></li>
                              <li><a href="{{url('/laptop_dc_jack')}}">Dc Jack</a></li>
                              <li><a href="{{url('/laptop_hitsing')}}">Hitsing</a></li>
                              <li><a href="{{url('/laptop_hitting_pest')}}">Hitting Pest</a></li>
                              <li><a href="{{url('/laptop_touchpad')}}">Touchpad</a></li>
                              <li><a href="{{url('/laptop_speaker')}}">Speaker</a></li>
                              <li><a href="{{url('/laptop_battery')}}">Battery</a></li>
                              <li><a href="{{url('/laptop_other_peripheral')}}">Others</a></li>
							   <br><li class="pull-left"> <a href="all_new_laptop"> All Laptop</a> </li>
                         
                        </ul>
                      </div>
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
    
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item" > <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-desktop" ></i>Desktop</a>
                <ul class="dropdown-menu mega-menu" >
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3 ">
                       <h2 class="title">Desktop</h2>
                            <ul class="links">
                            <!-- <li><a href="{{url('/desktop')}}">Acer</a></li> -->
                              <li><a href="{{url('/dell_new_desktop')}}">Dell</a></li>
                              <li><a href="{{url('/hp_new_desktop')}}">Hp</a></li>
                              <li><a href="{{url('/lenovo_new_desktop')}}">Lenovo</a></li>
                              <li><a href="{{url('/toshiba_new_desktop')}}">Toshiba</a></li>
                              <li><a href="{{url('/acer_new_desktop')}}">Acer</a></li>
                              <li><a href="{{url('/asus_new_desktop')}}">Asus</a></li>
                              <li><a href="{{url('/others_new_desktop')}}">Others</a></li>
                            </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                         <h2 class="title">Refurbished Desktop</h2> 
                            <ul class="links">
                              <li><a href="{{url('/dell_refurbished_desktop')}}">Dell</a></li>
                              <li><a href="{{url('/hp_refurbished_desktop')}}">Hp</a></li>
                              <li><a href="{{url('/lenovo_refurbished_desktop')}}">Lenovo</a></li>
                              <li><a href="{{url('/toshiba_refurbished_desktop')}}">Toshiba</a></li>
                              <li><a href="{{url('/acer_refurbished_desktop')}}">Acer</a></li>
                              <li><a href="{{url('/asus_refurbished_desktop')}}">Asus</a></li>
                              <li><a href="{{url('/others_refurbished_desktop')}}">Others</a></li>
							   <br><li class="pull-left"> <a href="all_new_desktop"> All Desktop</a></li>
                             </ul>
                      </div>
                      <!-- /.col -->
                     
                        </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-print"></i> Printers</a>
                <ul class="dropdown-menu page ">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-menu">
                        <h2 class="title">Printers</h2><span></span>
                            <ul class="links">
                            <!-- <li><a href="{{url('/desktop')}}">Acer</a></li> -->
                              <li><a href="{{url('/hp_printer')}}">HP</a></li>
                              <li><a href="{{url('/canon_printer')}}">Canon</a></li>
                              <li><a href="{{url('/xerox_printer')}}">Xerox</a></li>
                              <li><a href="{{url('/reco_printer')}}">Reco</a></li>
                              <li><a href="{{url('/lenovo_printer')}}">Lenovo</a></li>
                              <li><a href="{{url('/epson_printer')}}">Epson</a></li>
                              <li><a href="{{url('/printer_peripheral')}}">Peripheral Parts</a></li>
							   <li><a href="{{url('/all_printer')}}">All Printers</a></li>
                              </ul>
                      </div>
                      
                     <!-- <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a> </div>-->
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Accessories</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <h2 class="title">Accessories</h2>
                            <ul class="links">
                            <li><a href="{{url('/gaming')}}">Gaming</a></li>
                              <li><a href="{{url('/adapters')}}">Adapters</a></li>
                              <li><a href="{{url('/batteries_accessories')}}">Batteries</a></li>
                              <li><a href="{{url('/cooling_pads')}}">Cooling Pads</a></li>
                              <li><a href="{{url('/headphones')}}">Headphones</a></li>
							  <li><a href="{{url('/routers_modems')}}">Routers & Modems</a></li>
                             
                            </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
					   <h2 class="title"></h2>
                        <ul class="links list-unstyled">
						
                           <li><a href="{{url('/cpu_processors')}}">CPUs, Processors</a></li>
                              <li><a href="{{url('/graphics_cards')}}">Graphics Cards</a></li>
                              <li><a href="{{url('/webcam')}}">Webcam</a></li>
                              <li><a href="{{url('/keyboards')}}">Keyboards</a></li>
                              <li><a href="{{url('/mouse')}}">Mouse</a></li>
                              <li><a href="{{url('/other_accessories')}}">Others</a></li>
							  <li class="pull-left"> <a href="{{url('all_accessories')}}"> All Accessories</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                     
                      <!-- /.col -->
                     
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
				  <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Repairing Tools</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
					
                      <div class="col-sm-12 col-md-3">
					  <h2 class="title"> Repairing Tools</h2>
                             <ul class="linksss">
                              <li><a href="{{url('/smd_machine')}}">SMD Machine</a></li>
                              <li><a href="{{url('/soldering_gun')}}">Soldering Gun</a></li>
                              <li><a href="{{url('/disordering_pump')}}">Disordering Pump</a></li>
                              <li><a href="{{url('/twisers')}}">Twisers</a></li>
                              
                              </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
					   
                        <ul class="links list-unstyled">
						<h2 class="title"> Repairing Tools</h2>
	                          <li><a href="{{url('/magnify_lamp')}}"> Magnify Lamp</a></li>
                              <li><a href="{{url('/microscope')}}">Microscope</a></li>
                              <li><a href="{{url('/bios_programmer')}}">Bios Programmer</a></li>
                              <li><a href="{{url('/tool_kit')}}">Tool kit</a></li>
                              
            
                                  
                        </ul>
                      </div>
					  <div class="col-sm-12 col-md-3">
					   
                        <ul class="links list-unstyled">
						<h2 class="title"> Repairing Tools</h2>
	                          
                              <li><a href="{{url('/smd_tester')}}">SMD Tester </a></li>
                              <li><a href="{{url('/dc_power_supply')}}">DC Power Supply </a></li>
                              <li><a href="{{url('/booster')}}">Booster </a></li>
                              <li class=""> <a href="{{url('/LED_Backlight_Tester')}}">LED Backlight Tester</a></li>
            
                                  
                        </ul>
                      </div>
					  <div class="col-sm-12 col-md-3">
					   
                        <ul class="links list-unstyled">
	                          <h2 class="title"> Repairing Tools</h2>
                            <li><a href="{{url('/cutter')}}"> Cutter </a></li>
                              <li><a href="{{url('/soldering_pest')}}">Soldering Pest</a></li>
                              <li><a href="{{url('/desoldring_wire')}}"> Desoldring Wire </a></li>
                              <li><a href="{{url('/opener')}}">Opener</a></li> 
            
                                  
                        </ul>
                      </div>
					  
                      <!-- /.col -->
                     
                      <!-- /.col -->
                     
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item --
			  
			  
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Health and Beauty</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="images/new/service-banner8" /></a> </div>
                    </div>
                    <!-- /.row --
                  </li>
                  <!-- /.yamm-content --
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item --
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a> 
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item --
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> 
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
              <!-- /.menu-item -->
              
            <!--sagar  <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Courses</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-4">
                            <ul class="links">
                              <li><a href="{{url('/laptop_repair')}}">Laptop Repairing Course</a></li>
                              <li><a href="{{url('/printer_repair')}}">Printer Repairing Course</a></li>
                              <li><a href="{{url('/lcd_repair')}}">LCD Repairing Course</a></li>
                              <li><a href="{{url('/mobile_repair')}}">Mobile Repairing Course</a></li>
							  <li><a href="{{url('/hdd_repair')}}">Hdd Repairing Course</a></li>
							  <li><a href="{{url('/cctv_repair')}}">CCTV Repairing Course</a></li>
                              </ul>
                      </div>
                      <!-- /.col -->
                  <!--sagar    <div class="col-sm-12 col-md-4">
                        <ul class="links">
                           
                                 <li><a href="{{url('/washing_machine_repair')}}">washing Machine_Repairing Course</a></li>
                          
                              <li><a href="{{url('/motor_winding_repair')}}">Motor Winding Repairing Course</a></li>
                             
                              <li><a href="{{url('/grinder_repair')}}">Grinder Repairing Course</a></li>
                              <li><a href="{{url('/ac_repair')}}">AC Repairing Course</a></li>
                              <li><a href="{{url('/freeze_repair')}}">Freeze Repairing Course</a></li>
                              <li><a href="{{url('/xerox_repair')}}">Xerox Machine Repairing Course</a></li>
							 
                         </ul>
                      </div>
                      <!-- /.col -->
                    <!--sagar  <div class="col-sm-12 col-md-4">
                         <ul class="links">
                             <li><a href="{{url('/fan_repair')}}">Fan Repairing Course</a></li>
                              <li><a href="{{url('/cooler_repair')}}">Cooler Repairing Course</a></li>
                              <li><a href="{{url('/owen_repair')}}">Owen Repairing Course</a></li>
                              <li><a href="{{url('/elevator_repair')}}">Elevator Repairing Course</a></li>
                          </ul>
                          
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col --> 
                   <!--sagar </div>
                    <!-- /.row --> 
               <!--sagar   </li>
                  <!-- /.yamm-content -->
              <!--sagar  </ul>
                <!-- /.dropdown-menu --><!--sagar-- </li>-->
                <!-- /.dropdown-menu --> 
              <!-- /.menu-item -->
              
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
        <h3 class="section-title">Courses</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            <div class="item">
              <div class="products">
                             <ul class="links list-group">
                              <li ><a href="{{url('/course_select/Laptop Repairing Course')}}" class=" list-group-item list-group-item-action  " style="margin-right:10px; color:black;">Laptop Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Printer Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;">Printer Repairing Course</a></li>
                              <li><a href="{{url('/course_select/LCD Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;">LCD Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Mobile Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;">Mobile Repairing Course</a></li>
							  <li><a href="{{url('/course_select/HDD Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;">Hdd Repairing Course</a></li>
							  <li><a href="{{url('/course_select/CCTV Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;">CCTV Repairing Course</a></li>
                <li><a href="{{url('/course_select/Washing Machine Repairing Course')}}"  class=" list-group-item list-group-item-action "style="margin-right:10px;color:black;">washing Machine_Repairing Course</a></li>
                          
                              <li><a href="{{url('/course_select/Motor Winding Repairing Course')}}"  class=" list-group-item list-group-item-action "style="margin-right:10px;color:black;">Motor Winding Repairing Course</a></li>
                              </ul>
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
            <div class="item">
              <div class="products">
			  
			          <ul class="links list-group">
                           
                                 
                             
                              <li><a href="{{url('/course_select/Grinder Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Grinder Repairing Course</a></li>
                              <li><a href="{{url('/course_select/AC Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">AC Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Freeze Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Freeze Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Xerox Machine Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Xerox Machine Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Fan Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Fan Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Cooler Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Cooler Repairing Course</a></li>
                         </ul>
               
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
            <div class="item">
              <div class="products">
                
                <!-- /.hot-deal-wrapper -->
				       <ul class="links list-group">
                             
                              <li><a href="{{url('/course_select/Owen Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Owen Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Elevator Repairing Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Elevator Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Basic Electronic Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Basic Electronic Course</a></li>
                              <li><a href="{{url('/course_select/Computer Hardware Course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Computer Hardware Course</a></li>
                              <li><a href="{{url('/course_select/Combo Course 1')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Combo Course1</a></li>
                              <li><a href="{{url('/course_select/Combo Course 2')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Combo Course2</a></li>
                              <li><a href="{{url('/course_select/Combo Course 3')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:black;">Combo Course3</a></li>
                          </ul>
                
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
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
       
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
        <!-- ============================================== PRODUCT TAGS ============================================== -->
        <div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list"> <a class="item" title="Phone" href="{{url('/all_new_laptop')}}">Laptop</a> <a class="item " title="Vest" href="{{url('/all_new_desktop')}}">Desktop</a> <a class="item" title="Smartphone" href="{{url('/all_accessories')}}">Accessories</a> <a class="item" title="Furniture" href="{{url('/all_refurbished_laptop')}}">Refurbished Laptop</a> <a class="item" title="T-shirt" href="{{url('/all_refurbished_desktop')}}">Refurbished Desktop</a> 
            <!-- <a class="item" title="Sneaker" href="#">Sneaker</a> <a class="item" title="Toys" href="#">Toys</a> <a class="item" title="Rose" href="#">Rose</a> -->
             </div>
            <!-- /.tag-list --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Product Categories</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('/all_new_laptop')}}"> <img src="images/new/new/17.jpg"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_new_laptop')}}">laptop</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/all_new_desktop')}}"> <img src="images/10.jpg"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_new_desktop')}}">Desktop</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="#"> <img src="images/new/computer-accessories.jpg"  alt="image"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_accessories')}}">Accessories</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="#"> <img src="{{asset('images/new/printer.jpg')}}" alt=""></a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            
                            <!--<div class="rating rateit-small"></div>-->
                            <div class="product-price"><h3 class="name"><a href="#">Printer</a></h3> <span class="price"></span> </div>
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
                            <div class="image"> <a href="#"> <img src="images/new/reparing.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Repairing Tools</a></h3>
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
                            <div class="image"> <a href="#"> <img src="images/new/soft.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Software</a></h3>
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
                            <div class="image"> <a href="#"> <img src="images/edu.png" alt="images">
                              <div class="zoom-overlay"></div>
                              </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Training Programs</a></h3>
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
                            <div class="image"> <a href="#"> <img src="images/new/ic2.jpg"  alt="">
                              <div class="zoom-overlay"></div>
                              </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">IC</a></h3>
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
                            <div class="image"> <a href="#"> <img src="images/new/download.jpg" alt="image"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Components</a></h3>
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
        <!-- ============================================== NEWSLETTER ============================================== -->
        <!-- <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Franchise</h3>
          <div class="sidebar-widget-body outer-top-xs">
           
            <form>
              <div class="form-group">
               
              </div>
              <button class="btn btn-primary">Take A Franchise</button>
            </form>
          </div>
          
        </div>
         -->
          <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
		 <?php 
          Use App\Userblogs;
          $blogs = Userblogs::orderBy('id', 'asc')->take(5)->get();
          //echo $blogs[0];
         ?>
          <h3 class="section-title">NEWS & BLOGS</h3>
		  
		  @if($blogs!=null)
          <div class="owl-carousel sidebar-carousel  outer-top-ss" ><!--style="height:550px;overflow-y:auto;"-->
            <div class="item">
              <div class="products">
			 <!-- <marquee direction ="up">-->
                             <ul class="links list-group">
                              <li ><a href="{{url('/userblogs/show/1')}}" class=" list-group-item list-group-item-action  " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >{{$blogs[0]->title}}</span><br><span class="text-justify"><!--{!!$blogs[0]->shortdescription!!}--></span></a></li>
                              <li><a href="{{url('/userblogs/show/2')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >{{$blogs[1]->title}}</span><br><span class="text-justify"><!--{!!$blogs[1]->shortdescription!!}--></span></a></li>
                              <li><a href="{{url('/userblogs/show/3')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >{{$blogs[2]->title}}</span><br><span class="text-justify"><!--{!!$blogs[2]->shortdescription!!}--></span></a></li>
                              <li><a href="{{url('/userblogs/show/4')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >{{$blogs[3]->title}}</span><br><span class="text-justify"><!--{!!$blogs[3]->shortdescription!!}--></span></a></li>
                              <li><a href="{{url('/userblogs/show/5')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:black;"><span style=" font-weight: bold;" >{{$blogs[4]->title}}</span><br><span class="text-justify"><!--{!!$blogs[4]->shortdescription!!}--></span></a></li>
							 
                              </ul>
			 <!-- </marquee>-->
                <!-- /.hot-deal-wrapper -->
                
                
                <!-- /.product-info -->
                
            
              </div>
            </div>
         
          
          </div>
		   @endif
          <!-- /.sidebar-widget --> 
        </div>
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
               <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
		
          <h3 class="section-title">Our Franchise</h3>
        <?php 
        use App\Franchisee;
        use App\User;
        $franchisees = Franchisee::all();
        ?>
		
          <div class="owl-carousel sidebar-carousel  outer-top-ss" ><!--style="height:550px;overflow-y:auto;"-->
            <div class="item scrollbar scrollbar-primary" style="width: 23rem;">
              <div class="products " >
			 <marquee direction ="up" height="400px">
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
        <!-- ========================================== SECTION â€“ HERO ========================================= -->
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
          <div class="item" style="background-image: url('images/new/new/first_banner.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left sagar" >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>
                  <div class="info-boxes wow fadeInUp" >
          <div class="info-boxes-inner">
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
              <!-- .col -->
              
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
              <!-- .col -->
              
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
              <!-- .col --> 
            </div>
            <!-- /.row --> 
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
             <div class="item" style="background-image: url('images/new/new/bed.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left sagar" >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>
                  <div class="info-boxes wow fadeInUp" >
          <div class="info-boxes-inner">
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
              <!-- .col -->
              
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
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><a href="#" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Read more</a> </h4>
                    </div>
                  </div>
                  <h6 class="text"></h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                 
                  <div class="button-holder fadeInDown-3 text-center"><a href="#" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Read more</a> </div> 
                </div>
                
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
              
                  <div class="item" style="background-image: url('images/new/hd/bg.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left " >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>

                  <div class="info-boxes wow fadeInUp" >
          <div class="info-boxes-inner">
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
              <!-- .col -->
              
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
              <!-- .col -->
              
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
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
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
                   <div class="item" style="background-image: url('images/new/new/m.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left sagar" >
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1"> <span class=" animate__animated animate__bounce " style="color:black;"><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </div>

                  <div class="info-boxes wow fadeInUp" >
          <div class="info-boxes-inner">
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
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"></h4>
                    </div>
                  </div>
                  <h6 class="text info-box-heading green"> Become A Franchise Partner </h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><a href="#" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Take Franchisee</a> </h4>
                    </div>
                  </div>
                  <h6 class="text"></h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
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
          
            <!-- /.item -->
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
		
		 
       
        
        <!-- ========================================= SECTION â€“ HERO : END ========================================= --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
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
        <?php 
         Use App\Product;
          $products = Product::orderBy('id', 'asc')->take(15)->get();
          //echo $blogs[0];
         ?>
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  Laptops </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/productview/1')}}"><img  src="{{asset('/images/products/'.$products[0]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/1')}}">{{ $products[0]->product_name }}</a></p></div>
                    
					<!-- /.image -->
                    
                   <!-- <div class="tag hot"><span>hot</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/2')}}"><img  src="{{asset('/images/products/'.$products[1]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/2')}}">{{ $products[1]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/3')}}"><img  src="{{asset('/images/products/'.$products[2]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/3')}}">{{ $products[2]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/4')}}"><img  src="{{asset('/images/products/'.$products[3]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/4')}}">{{ $products[3]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag hot"><span></span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                   <!-- <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/5')}}"><img  src="{{asset('/images/products/'.$products[4]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/5')}}">{{ $products[4]->product_name }}</a></p></div>
                   
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
          
            
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/asus_new_desktop')}}"><img  src="images/new/brand/asusa2.png" alt=""></a> <p class="name text-center"><a href="{{url('/asus_new_desktop')}}">Asus</a></p></div>
                  
                    
                  
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
        
          </div> -->
         
        </section>
        <!-- /.section --> 
		
				        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  Desktops </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/productview/6')}}"><img  src="{{asset('/images/products/'.$products[5]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/6')}}">{{ $products[5]->product_name }}</a></p></div>
                    
					<!-- /.image -->
                    
                   <!-- <div class="tag hot"><span>hot</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/7')}}"><img  src="{{asset('/images/products/'.$products[6]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/7')}}">{{ $products[6]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/8')}}"><img  src="{{asset('/images/products/'.$products[7]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/8')}}">{{ $products[7]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/9')}}"><img  src="{{asset('/images/products/'.$products[8]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/9')}}">{{ $products[8]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag hot"><span></span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                   <!-- <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/10')}}"><img  src="{{asset('/images/products/'.$products[9]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/10')}}">{{ $products[9]->product_name }}</a></p></div>
                   
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
          
            
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/asus_new_desktop')}}"><img  src="images/new/brand/asusa2.png" alt=""></a> <p class="name text-center"><a href="{{url('/asus_new_desktop')}}">Asus</a></p></div>
                  
                    
                  
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
        
          </div> -->
         
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
      
		
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">  Printers </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/productview/11')}}"><img  src="{{asset('/images/products/'.$products[10]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/11')}}">{{ $products[10]->product_name }}</a></p></div>
                    
					<!-- /.image -->
                    
                   <!-- <div class="tag hot"><span>hot</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/12')}}"><img  src="{{asset('/images/products/'.$products[11]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/12')}}">{{ $products[11]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/13')}}"><img  src="{{asset('/images/products/'.$products[12]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/13')}}">{{ $products[12]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/14')}}"><img  src="{{asset('/images/products/'.$products[13]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/14')}}">{{ $products[13]->product_name }}</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag hot"><span></span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                   <!-- <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> â‚¹450.99 </span> <span class="price-before-discount">â‚¹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
                    <!-- /.product-price --> 
                    
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
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                  <div class="image"> <a href="{{url('/productview/15')}}"><img  src="{{asset('/images/products/'.$products[14]->path)}}" alt="" style="width:200px;height:150px;"></a> <p class="name text-center"><a href="{{url('/productview/15')}}">{{ $products[14]->product_name }}</a></p></div>
                   
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
          
            
            <!-- <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/asus_new_desktop')}}"><img  src="images/new/brand/asusa2.png" alt=""></a> <p class="name text-center"><a href="{{url('/asus_new_desktop')}}">Asus</a></p></div>
                  
                    
                  
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
        
          </div> -->
         
        </section>
		
		
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
                            <div class="image"> <a href="{{url('/smd_machine')}}"> <img src="{{asset('images/new/acc/1.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/smd_machine')}}">SMD Machine</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/soldering_gun')}}"> <img src="{{asset('images/new/acc/2.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/soldering_gun')}}">Soldering Gun</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/disordering_pump')}}"> <img src="{{asset('images/new/acc/3.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/disordering_pump')}}">Disordering Pump</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/twisers')}}"> <img src="{{asset('images/new/acc/4.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/twisers')}}">Twisers</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/cutter')}}"> <img src="{{asset('images/new/acc/5.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/cutter')}}">Cutter</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/soldering_pest')}}"> <img src="{{asset('images/new/acc/6.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/soldering_pest')}}">Soldering Pest</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/desoldring_wire')}}"> <img src="{{asset('images/new/acc/7.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/desoldring_wire')}}">Desoldring Wire</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('opener')}}"> <img src="{{asset('images/new/acc/8.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('opener')}}">Opener</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/magnify_lamp')}}"> <img src="{{asset('images/new/acc/9.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/magnify_lamp')}}"> Magnify Lamp</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/microscope')}}"> <img src="{{asset('images/new/acc/10.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/microscope')}}">Microscope</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/bios_programmer')}}"> <img src="{{asset('images/new/acc/11.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/bios_programmer')}}"> Bios Programmer</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/tool_kit')}}"> <img src="{{asset('images/new/acc/12.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/tool_kit')}}">Tool kit</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/tool_kit')}}"> <img src="{{asset('images/new/acc/13.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/tool_kit')}}"> SMD Tester</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/dc_power_supply')}}"> <img src="{{asset('images/new/acc/14.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/dc_power_supply')}}">DC Power Supply</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/booster')}}"> <img src="{{asset('images/new/acc/15.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/booster')}}"> Booster</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/LED_Backlight_Tester')}}"> <img src="{{asset('images/new/acc/16.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/LED_Backlight_Tester')}}">LED Backlight Tester</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/laptop_touchpad')}}"> <img src="{{asset('images/new/touchpad.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/laptop_touchpad')}}">Touchpad</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/headphones')}}"> <img src="{{asset('images/new/head.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/headphones')}}">Headphone</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/laptop_charger')}}"> <img src="{{asset('images/new/charger.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/laptop_charger')}}">Charger</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/cpu_processors')}}"> <img src="{{asset('images/new/cpu.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/cpu_processors')}}">Cpu</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/keyboards')}}"> <img src="{{asset('images/new/hd/keyboard.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/keyboards')}}">Keyboard</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/mouse')}}"> <img src="{{asset('images/new/mouse.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/mouse')}}">Mouse</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/all_printer')}}"> <img src="{{asset('images/new/printer.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/all_printer')}}">Printer</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('pen_drive')}}"> <img src="{{asset('images/new/usb-device.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('pen_drive')}}">Pen Drive</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
        
		
        <div class="best-deal wow fadeInUp outer-bottom-xs">
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
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Laptop Repairing Course')}}">Laptop Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Printer Repairing Course')}}"> <img src="{{asset('images/new/icon/printer-with-paper.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Printer Repairing Course')}}">Printer Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/LCD Repairing Course')}}"> <img src="{{asset('images/new/icon/repair.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/LCD Repairing Course')}}">LCD Repairing Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Mobile Repairing Course')}}"> <img src="{{asset('images/new/icon/mrepair.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Mobile Repairing Course')}}">Mobile Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/HDD Repairing Course')}}"> <img src="{{asset('images/new/icon/hard-disk-drive.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/HDD Repairing Course')}}">Hdd Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/CCTV Repairing Course')}}"> <img src="{{asset('images/new/icon/cctv.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/CCTV Repairing Course')}}">CCTV Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Washing Machine Repairing Course')}}"> <img src="{{asset('images/new/icon/washing-machine.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Washing Machine Repairing Course')}}">Washing Machine_Repairing Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Motor Winding Repairing Course')}}"> <img src="{{asset('images/new/icon/electric-motor.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Motor Winding Repairing Course')}}">Motor Winding Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Grinder Repairing Course')}}"> <img src="{{asset('images/new/icon/grinder.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Grinder Repairing Course')}}">Grinder Repairing Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/AC Repairing Course')}}"> <img src="{{asset('images/new/icon/air-conditioner.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/AC Repairing Course')}}">AC Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Freeze Repairing Course')}}"> <img src="{{asset('images/new/icon/freezer.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Freeze Repairing Course')}}">Freeze Repairing Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Xerox Machine Repairing Course')}}"> <img src="{{asset('images/new/icon/xerox-machine.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Xerox Machine Repairing Course')}}">Xerox Machine Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Fan Repairing Course')}}"> <img src="{{asset('images/new/icon/fan.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Fan Repairing Course')}}">Fan Repairing Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Cooler Repairing Course')}}"> <img src="{{asset('images/new/icon/air-cooler.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Cooler Repairing Course')}}">Cooler Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Owen Repairing Course')}}"> <img src="{{asset('images/new/icon/owen.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Owen Repairing Course')}}">Owen Repairing Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Elevator Repairing Course')}}"> <img src="{{asset('images/new/icon/elevator.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Elevator Repairing Course')}}">Elevator Repairing Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Basic Electronic Course')}}"> <img src="{{asset('images/new/icon/screwdriver.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Basic Electronic Course')}}">Basic Electronic Course</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Computer Hardware Course')}}"> <img src="{{asset('images/new/icon/computer.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Computer Hardware Course')}}">Computer Hardware Course</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Combo Course 1')}}"> <img src="{{asset('images/new/icon/hand-tools.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Combo Course 1')}}">Combo Course1</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Combo Course 2')}}"> <img src="{{asset('images/new/icon/hand-tools.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Combo Course 2')}}">Combo Course2</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/course_select/Combo Course 3')}}"> <img src="{{asset('images/new/icon/hand-tools.png')}}" alt="" style="width:70px;height:70px;"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/course_select/Combo Course 3')}}">Combo Course3</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> â‚¹450.99 </span> </div> -->
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
			  
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
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
  <div class="container-fluid">
		
<hr>

<h2 class="text-center"><b>Gallery</b></h2><br>


<hr>

<div class="bxslider">

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
<div class="container-fluid">
		
<hr>

<h2 class="text-center"><b>Brand Products</b></h2><br>


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

<br><br>
	<!------------------------------------------------Gallery------------------------------------------------------->

        <!-- /.section --> 
		<!------------------------------------------------End Gallery------------------------------------------------------->
    <div class="container-fluid">
<hr>
<h2 class="text-center"><b>GMap</b></h2><br>
		<div class="row">
		<div class="col-md-12 col-sm-12">
<iframe src="https://www.google.com/maps/d/embed?mid=1wzl44FM4xj22V5Teizxw3EpQpZ4EwBzn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>	

   
	    </div>
	</div>
</div>
<br><br><br>

<div class="container-fluid">
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
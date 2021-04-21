@extends('layouts.master')
 

@section('css')

@endsection
		


@section('js')

 
@endsection

@section('content')
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
				  <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Repairing tools</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
					
                      <div class="col-sm-12 col-md-3">
					  <h2 class="title"> Repairing tools</h2>
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
						<h2 class="title"> Repairing tools</h2>
	                          <li><a href="{{url('/magnify_lamp')}}"> Magnify Lamp</a></li>
                              <li><a href="{{url('/microscope')}}">Microscope</a></li>
                              <li><a href="{{url('/bios_programmer')}}">Bios Programmer</a></li>
                              <li><a href="{{url('/tool_kit')}}">Tool kit</a></li>
                              
            
                                  
                        </ul>
                      </div>
					  <div class="col-sm-12 col-md-3">
					   
                        <ul class="links list-unstyled">
						<h2 class="title"> Repairing tools</h2>
	                          
                              <li><a href="{{url('/smd_tester')}}">SMD Tester </a></li>
                              <li><a href="{{url('/dc_power_supply')}}">DC Power Supply </a></li>
                              <li><a href="{{url('/booster')}}">Booster </a></li>
                              <li class=""> <a href="{{url('/LED_Backlight_Tester')}}">LED Backlight Tester</a></li>
            
                                  
                        </ul>
                      </div>
					  <div class="col-sm-12 col-md-3">
					   
                        <ul class="links list-unstyled">
	                          <h2 class="title"> Repairing tools</h2>
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
                              <li ><a href="{{url('/laptop_repair')}}" class=" list-group-item list-group-item-action  " style="margin-right:10px; color:blue;">Laptop Repairing Course</a></li>
                              <li><a href="{{url('/printer_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:blue;">Printer Repairing Course</a></li>
                              <li><a href="{{url('/lcd_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:blue;">LCD Repairing Course</a></li>
                              <li><a href="{{url('/mobile_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:blue;">Mobile Repairing Course</a></li>
							  <li><a href="{{url('/hdd_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:blue;">Hdd Repairing Course</a></li>
							  <li><a href="{{url('/cctv_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px; color:blue;">CCTV Repairing Course</a></li>
                <li><a href="{{url('/washing_machine_repair')}}"  class=" list-group-item list-group-item-action "style="margin-right:10px;color:blue;">washing Machine_Repairing Course</a></li>
                          
                              <li><a href="{{url('/motor_winding_repair')}}"  class=" list-group-item list-group-item-action "style="margin-right:10px;color:blue;">Motor Winding Repairing Course</a></li>
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
                           
                                 
                             
                              <li><a href="{{url('/grinder_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Grinder Repairing Course</a></li>
                              <li><a href="{{url('/ac_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">AC Repairing Course</a></li>
                              <li><a href="{{url('/freeze_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Freeze Repairing Course</a></li>
                              <li><a href="{{url('/xerox_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Xerox Machine Repairing Course</a></li>
                              <li><a href="{{url('/fan_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Fan Repairing Course</a></li>
                              <li><a href="{{url('/cooler_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Cooler Repairing Course</a></li>
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
                             
                              <li><a href="{{url('/owen_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Owen Repairing Course</a></li>
                              <li><a href="{{url('/elevator_repair')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Elevator Repairing Course</a></li>
                              <li><a href="{{url('/basic_electronic_course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Basic Electronic Course</a></li>
                              <li><a href="{{url('/hardware_course')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Computer Hardware Course</a></li>
                              <li><a href="{{url('/combo_course1')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Combo Course1</a></li>
                              <li><a href="{{url('/combo_course2')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Combo Course2</a></li>
                              <li><a href="{{url('/combo_course3')}}"  class=" list-group-item list-group-item-action " style="margin-right:10px;color:blue;">Combo Course3</a></li>
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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


         
         <?php 
          Use App\Userblogs;
          $blogs = Userblogs::orderBy('id', 'asc')->take(5)->get();
          //echo $blogs[0];
         ?>
         <div class="news" style="height:500px;border-style:ridge; overflow-y: auto;font-family:times new roman;">
        <!-- Hello dffdfdfd-->

        @if($blogs!=null)
        <center><h3 class="section-title"> News & Blogs</h3></center>
      
        <!-- <div class="image"> <a href="{{url('/userblogs/show/'.$blogs[0]->id)}}"> <img src="{{asset($blogs[0]->path)}}" style="width:100px;height:100px;" alt=""> </a> </div> -->
        <h4 style="margin-left:20px;margin-right:20px;" class="name"><b>{{$blogs[0]->title}}</b></h4>
        <p style="margin-left:20px;margin-right:20px;text-align:left;font-size:15px;font-family:'times new roman;">{{$blogs[0]->shortdescription}}</p>
        <br>
        <h4 style="margin-left:20px;margin-right:20px;" class="name"><b>{{$blogs[1]->title}}</b></h4>
        <p style="margin-left:20px;margin-right:20px;text-align:left;font-size:15px;font-family:'times new roman;">{{$blogs[1]->shortdescription}}</p>

        <br>
        <h4 style="margin-left:20px;margin-right:20px;" class="name"><b>{{$blogs[2]->title}}<b></h4>
        <p style="margin-left:20px;margin-right:20px;text-align:left;font-size:15px;font-family:'times new roman;">{{$blogs[2]->shortdescription}}</p>

        <br>
        <h4 style="margin-left:20px;margin-right:20px;" class="name"><b>{{$blogs[3]->title}}</b></h4>
        <p style="margin-left:20px;margin-right:20px;text-align:left;font-size:15px;font-family:'times new roman;">{{$blogs[3]->shortdescription}}</p>

        <br>
        <h4 style="margin-left:20px;margin-right:20px;" class="name"><b>{{$blogs[4]->title}}</b></h4>
        <p style="margin-left:20px;margin-right:20px;text-align:left;font-size:15px;font-family:'times new roman;">{{$blogs[4]->shortdescription}}</p>
        @endif
         </div>
      
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
        <!-- ============================================== Testimonials============================================== -->
        <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
        <h3 class="section-title"> Student Feedback</h3>
      
          <div id="advertisement" class="advertisement">
            <div class="item">
              <div class="avatar"><img src="images/new/feedback/1.png" style="height:60px;width:60px;" alt="Image"></div>
              <div class="testimonials"><em>"</em> Sir is cooperative. Product is explained very well. Service given very kindly and properly. Thank you so much. Wish you<em>"</em></div>
              <div class="clients_author">Suhas Shinde </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item">
              <div class="avatar"><img src="images/new/feedback/2.png"  style="height:60px;width:60px;" alt="Image"></div>
              <div class="testimonials"><em>"</em> I can 100% suggest SW7 and Mr. Mahesh for computer purchase and related services.This is first time I have interacted<em>"</em></div>
              <div class="clients_author">Paresh Mohol</div>
            </div>
            <!-- /.item -->
            
            <div class="item">
              <div class="avatar"><img src="images/new/feedback/3.png" style="height:60px;width:60px;" alt="Image"></div>
              <div class="testimonials"><em>"</em> All in one solution for laptops , desktops , mobile  & tv all-rounder person . Good and quick service. Laptop screen was not showing solved at almost no cost , and working perfectly ., Thank you 😊😊👍👌<em>"</em></div>
              <div class="clients_author">Prashant Ranpise</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
			 <div class="item">
              <div class="avatar"><img src="images/new/feedback/4.png" style="height:60px;width:60px;" alt="Image"></div>
              <div class="testimonials"><em>"</em> The excellent Support got from SW7 Center/Mahesh during this crucial time of lockdown where all shops are closed and he  is not carrying any single charges during lockdown as per his commitment and to provide unstoble suppprt to people to avoid any uninterrupte in thier work... Thanks lot Mahesh.... Keep it with good work.... Grow up as like Sky.<em>"</em></div>
              <div class="clients_author">nilesh sathe</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
			
			<div class="item">
              <div class="avatar"><img src="images/new/feedback/5.png" style="height:60px;width:60px;" alt="Image"></div>
              <div class="testimonials"><em>"</em> One of the best technical institute...100% satisfaction<em>"</em></div>
              <div class="clients_author">laxman patil</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
			
			<div class="item">
              <div class="avatar"><img src="images/new/feedback/6.png" style="height:60px;width:60px;" alt="Image"></div>
              <div class="testimonials"><em>"</em> EXCELLENT LEARNING AND ALL OVER FACILITY 👍♥️<em>"</em></div>
              <div class="clients_author">RUSHIKESH HANDGE</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ============================================== Testimonials: END ============================================== -->
        
        <!-- <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div> -->
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero" >
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm "  >
            <div class="item" style="background-image: url('images/new/new/re.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1 animate__animated animate__bounce" ><span style="color: black; background-color:white;"  ></span></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                  <!-- <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> -->
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
			  
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url('images/new/new/bed.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1 "> <span class=" animate__animated animate__bounce " style="color: black; background-color:white;"></span> </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                  <!-- <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> -->
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
            <div class="item" style="background-image: url('images/new/hd/bg.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1 animate__animated animate__bounce"><span class="" style="color: black;background-color:white;"></span></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                  <!-- <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> -->
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            <div class="item" style="background-image: url('images/new/new/m.jpg');">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left animate__animated animate__bounce">
                  <div class="slider-header fadeInDown-1"></div>
                  <div class="big-text fadeInDown-1 "><span style="color: black;background-color:white;"></span></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span></span> </div>
                  <!-- <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> -->
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
		
		 
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><marquee scrollamount = "9.3">100% Practical oriented skill based course <span style="margin-left:50px;"> Free hostel faculty</span> <span style="margin-left:50px;"> Refurbished laptop & Desktop Wholesale</span> <span style="margin-left:50px;"> Become A Franchise Partner</span></marquee></marquee></h4>
                    </div>
                  </div>
                  <h4 class="text"></h4>
				  
                </div>
              </div>
              <!-- .col -->
              
              <!--<div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on orders over $99</h6>
                </div>
              </div>
              <!-- .col -->
              
             <!-- <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra $5 off on all items </h6>
                </div>
              </div>-->
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
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
        <!-- ============================================== INFO BOXES : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        
		
		 <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">Courses</h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="#"><img src="{{asset('images/new/laptop-repair-service.png')}}" style="width:340px;height:148px;" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Laptop Reparing</a></h3>
                    <!-- <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span> -->
                    <p class="text"></p>
                    <a href="{{url('/laptop_repair')}}" class="lnk btn btn-primary">Register now</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="#"><img src="{{asset('images/new/hd/mobile-repair.png')}}" style="width:340px;height:148px;" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Mobile Reparing</a></h3>
                    <!-- <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span> -->
                    <p class="text"></p>
                    <a href="{{url('/mobile_repair')}}" class="lnk btn btn-primary">Register now</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item --> 
              
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="#"><img src="{{asset('images/new/hd/xerox-repair.jpg')}}"  style="width:340px;height:148px;" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Xerox Machine Repairing</a></h3>
                    <!-- <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span> -->
                    <p class="text"></p>
                    <a href="{{url('/xerox_repair')}}" class="lnk btn btn-primary">Register now</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="#"><img src="{{asset('images/new/hd/printer-repairing.jpeg')}}" style="width:340px;height:148px;" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">Printer Repairing</a></h3>
                    <!-- <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span> -->
                    <p class="text"></p>
                    <a href="{{url('/printer_repair')}}" class="lnk btn btn-primary">Register now</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="#"><img src="{{asset('images/new/hd/ac-repair.jpg')}}" style="width:340px;height:148px;" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">AC Repairing</a></h3>
                    <!-- <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span> -->
                    <p class="text"></p>
                    <a href="{{url('/ac_repair')}}" class="lnk btn btn-primary">Register now</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item --> 
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section>
        <!-- /.section --> 
		
			        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title"> Brand Desktop </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/dell_new_desktop')}}"><img  src="images/new/brand/dell4.png" alt=""></a> <p class="name text-center"><a href="{{url('/dell_new_desktop')}}">DELL</a></p></div>
                    
					<!-- /.image -->
                    
                   <!-- <div class="tag hot"><span>hot</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
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
                    <div class="image"> <a href="{{url('/hp_new_desktop')}}"><img  src="images/new/brand/hp9.png" alt=""></a> <p class="name text-center"><a href="{{url('/hp_new_desktop')}}">HP</a></p> </div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
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
                    <div class="image"> <a href="{{url('/lenovo_new_desktop')}}"><img  src="images/new/brand/l2.png" data-echo="images/new/brand/leno4.png" alt=""></a><p class="name text-center"><a href="{{url('/lenovo_new_desktop')}}">Lenovo</a></p> </div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
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
                    <div class="image"> <a href="{{url('/toshiba_new_desktop')}}"><img  src="images/new/brand/tushiba2.png" alt=""></a><p class="name text-center"><a href="{{url('/toshiba_new_desktop')}}">Toshiba</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag hot"><span></span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                   <!-- <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
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
                    <div class="image"> <a href="{{url('/acer_new_desktop')}}"><img  src="images/new/brand/acer2.png" alt=""></a> <p class="name text-center"><a href="{{url('/acer_new_desktop')}}">Acer</a></p> </div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                  <!--  <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
                    <div class="image"> <a href="{{url('/asus_new_desktop')}}"><img  src="images/new/brand/asusa2.png" alt=""></a> <p class="name text-center"><a href="{{url('/asus_new_desktop')}}">Asus</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag sale"><span>sale</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
		
				        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title"> Brand laptop </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/dell_new_laptop')}}"><img  src="images/new/brand/dell4.png" alt=""></a> <p class="name text-center"><a href="{{url('/dell_new_laptop')}}">DELL</a></p></div>
                    
					<!-- /.image -->
                    
                   <!-- <div class="tag hot"><span>hot</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
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
                    <div class="image"> <a href="{{url('/hp_new_laptop')}}"><img  src="images/new/brand/hp9.png" alt=""></a> <p class="name text-center"><a href="{{url('/hp_new_laptop')}}">HP</a></p> </div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
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
                    <div class="image"> <a href="{{url('/lenovo_new_laptop')}}"><img  src="images/new/brand/l2.png" data-echo="images/new/brand/leno4.png" alt=""></a><p class="name text-center"><a href="{{url('/lenovo_new_laptop')}}">Lenovo</a></p> </div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
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
                    <div class="image"> <a href="{{url('/toshiba_new_laptop')}}"><img  src="images/new/brand/tushiba2.png" alt=""></a><p class="name text-center"><a href="{{url('/toshiba_new_laptop')}}">Toshiba</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag hot"><span></span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                   <!-- <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
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
                    <div class="image"> <a href="{{url('/acer_new_laptop')}}"><img  src="images/new/brand/acer2.png" alt=""></a> <p class="name text-center"><a href="{{url('/acer_new_laptop')}}">Acer</a></p> </div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                  <!--  <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
                    <div class="image"> <a href="{{url('/asus_new_laptop')}}"><img  src="images/new/brand/asusa2.png" alt=""></a> <p class="name text-center"><a href="{{url('/asus_new_laptop')}}">Asus</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag sale"><span>sale</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
					        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title"> Brand Printer </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
           
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="{{url('/hp_printer')}}"><img  src="images/new/brand/hp9.png" alt=""></a> <p class="name text-center"><a href="{{url('/hp_printer')}}">HP</a></p> </div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>-->
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
                    <div class="image"> <a href="{{url('/canon_printer')}}"><img  src="" data-echo="images/new/brand/canon2.png" alt=""></a><p class="name text-center"><a href="{{url('/canon_printer')}}">Canon</a></p> </div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
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
                    <div class="image"> <a href="{{url('/xerox_printer')}}"><img  src="images/new/brand/xerox-logo.png" alt=""></a><p class="name text-center"><a href="{{url('/xerox_printer')}}">Xerox</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag hot"><span></span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    
                   <!-- <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button> </div>
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
                    <div class="image"> <a href="{{url('/reco_printer')}}"><img  src="images/new/brand/ricoh2.png" alt=""></a> <p class="name text-center"><a href="{{url('/reco_printer')}}">Ricoh</a></p> </div>
                    <!-- /.image -->
                    
                    <!--<div class="tag new"><span>new</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                  <!--  <div class="rating rateit-small"></div>-->
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
                    <div class="image"> <a href="{{url('/lenovo_printer')}}"><img  src="images/new/brand/leno4.png" alt=""></a> <p class="name text-center"><a href="{{url('/lenovo_printer')}}">Lenovo</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag sale"><span>sale</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
                    <div class="image"> <a href="#"><img  src="images/new/brand/epson2.png" alt=""></a> <p class="name text-center"><a href="#">Epson</a></p></div>
                    <!-- /.image -->
                    
                    <!--<div class="tag sale"><span>sale</span></div>-->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                   
                    <div class=""></div>
                    <div class="description"></div>
                    <!--<div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> <button class="btn btn-primary " type="button"><i class="fa fa-shopping-cart"></i> Add to cart</button></div>
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
        
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
		

		
		
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="images/new/service-banner8.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="images/new/service-banner8.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
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
                            <div class="image"> <a href="{{url('/smd_machine')}}"> <img src="{{asset('images/new/touchpad.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/smd_machine')}}">SMD Machine</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/soldering_gun')}}"> <img src="{{asset('images/new/head.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/soldering_gun')}}">Soldering Gun</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/disordering_pump')}}"> <img src="{{asset('images/new/charger.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/disordering_pump')}}">Disordering Pump</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/twisers')}}"> <img src="{{asset('images/new/cpu.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/twisers')}}">Twisers</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/cutter')}}"> <img src="{{asset('images/new/hd/keyboard.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/cutter')}}">Cutter</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/soldering_pest')}}"> <img src="{{asset('images/new/mouse.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/soldering_pest')}}">Soldering Pest</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('/desoldring_wire')}}"> <img src="{{asset('images/new/printer.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('/desoldring_wire')}}">Desoldring Wire</a></h3>
                           <!-- <div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <div class="image"> <a href="{{url('opener')}}"> <img src="{{asset('images/new/usb-device.jpg')}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('opener')}}">Opener</a></h3>
                            <!--<div class="rating rateit-small"></div>-->
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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
                            <!-- <div class="product-price"> <span class="price"> ₹450.99 </span> </div> -->
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

		
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-12 col-sm-12">
		<!--<iframe src="https://www.google.com/maps/d/embed?mid=18MHuVUt9TxfIWVmv_hDjNbaCg5_YDcB9" width="100%" height="480"></iframe>-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60497.74666666224!2d73.74209027869668!3d18.614158987354454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b90a1d3f2089%3A0x64f8cb8917dc0fc3!2sSW7%20INFOMEDIA%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1601894734961!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      
	    </div>
	</div>
</div>
<br><br>
<div class="container-fluid" >
		<div class="row">
		<div class="col-md-12 col-sm-12" style="height:450px;overflow-y:auto">
   
<!-- <a style="font-size:18px;font-family:Times New Roman;color:#48487f" href="https://www.google.com/search?hl=en-IN&gl=in&q=SW7+INFOMEDIA+PRIVATE+LIMITED,+Sector+No.+34,+Thergaon,+Pimpri-Chinchwad,+Maharashtra+411033&ludocid=7275788987688292291&lsig=AB86z5Xk4Gu_k1fHTRPTQ_0IRBIo#lrd=0x3bc2b90a1d3f2089:0x64f8cb8917dc0fc3,3">Write A Review </a> -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5ff8bf92-4b80-414c-a7a6-5a09de604e63"></div>


</div>
	</div>
</div>
<br><br><br>



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
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <!------------------------------------------------Gallery------------------------------------------------------->

        <!-- /.section --> 
		<!------------------------------------------------End Gallery------------------------------------------------------->

@endsection



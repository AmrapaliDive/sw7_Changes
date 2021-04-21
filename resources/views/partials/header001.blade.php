<body class="cnt-home" style="background-color:white;">

<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1" style="background-color:#f7f7f7;"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
           @if(Auth::check())
            @if(Auth::user()->role == "admin")
            <li ><a href="{{url('/admin')}}" style="color:black;" ><i class="icon fa fa-user"></i>My Account</a></li>
            @elseif(Auth::user()->role == "franchisee")
            <li><a href="{{url('/franchisee_account')}}" style="color:black;"><i class="icon fa fa-user"></i>My Account</a></li>
            @elseif(Auth::user()->role == "customer")
            <li><a href="{{url('/user_account')}}" style="color:black;"><i class="icon fa fa-user"></i>My Account</a></li>
            <!-- <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li> -->
            @elseif(Auth::user()->role == "student")
            <li><a href="{{url('/student_account')}}" style="color:black;"><i class="icon fa fa-user"></i>My Account</a></li>
            @endif
            @endif
            <!-- <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li> -->
            <!-- <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li> -->
            <!--<li><a href="{{route('product.shoppingcart')}}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>-->
            @if(Auth::check())
            <li>
	        <a href="{{ url('/user/logout') }}" style="color:black;"><i class="icon fa fa-user"></i>Logout</a></li>
              @else
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block"> 
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small animate-dropdown " style="font-color:black;" > <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value " style="color:black;"><i class="icon fa fa-lock"></i>&nbsp;Sign in & Register</span><b class="caret" style="color:black;"></b></a>
              <ul class="dropdown-menu">
             
                <li><a href="{{ url('/customer') }}"><i class="fa fa-user" aria-hidden="true"></i> Register as Customer</a></li>
                <li><a href="{{ url('/franchisee') }}"><i class="fa fa-user" aria-hidden="true"></i> Register as Franchisee </a></li>
                <li><a href="{{ url('/student_registration') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Register as Student </a></li>
                <li><a href="#staticBackdrop8" data-toggle="modal" ><i class="glyphicon glyphicon-log-in" style="color:black;"></i> Sign in</a></li>
                @endif 
               </ul>
            </li>
            <!-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a> 
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>-->
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
       
		        <div class="social-links pt-2">
                    
                    <!--<a href="https://www.facebook.com/neetatech.pune.5" style="font-size:24px;"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="https://www.instagram.com/neetatech/" style="font-size:24px;"><i class="fa fa-instagram"></i></a>
                    <a href="mailto:?subject=&body=:%20" style="font-size:24px;"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.youtube.com/channel/UCwcKr9p1YuF03sKdWteM53w" style="font-size:24px;" ><i class="fa fa-youtube"></i></a>-->
				  </div> 
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{url('/')}}"> <img src="{{ asset('images/new/logo1.jpeg') }}" alt="logo" style="height:80px; margin-top:-20px;"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
          <?php
              Use App\Franchisee;
            $cities = Franchisee::groupBy('city')->get();
          ?>
             <form action="{{ url('/productsearch') }}" method="get">
              {{csrf_field()}}
              <div class="control-group " style="border: 2px solid #f3f3f3;">
                 <select class="categories-filter animate-dropdown" style="padding-top:10px;padding-bottom:10px;"  id="city" name="city" required>
                 <option class="dropdown-menu" role="menu" value="">Select City</option>
                  <!-- <option class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="#" style="color:black;"><b class="caret"></b></a> -->
                    <ul class="dropdown-menu" role="menu" >
                      <!-- <li class="menu-header">Select City (Area)</li> -->
                      <!-- <option role="presentation"><span role="menuitem" tabindex="-1" value="">Select City</span></option> -->
                     
                       @foreach($cities as $city)
                      <option role="presentation"><span role="menuitem" tabindex="-1" >{{$city->city}}</span></option>
                      @endforeach
                    </ul>
                  </option>
                </select>
             
			  
             
                <input class="search-field"  name="psearch" placeholder="Search Course" required/>
                <!-- <a class="search-button" href="#" ></a></div> -->
                <button id="btn" type="submit" class="search-button" ></button></div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
           
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class=" dropdown-cart " > <a href="{{route('product.shoppingcart')}}" class="lnk-cart" style="background-color:#f7f7f7;">
            <div class="items-cart-inner " style="border: 2px solid #f3f3f3;">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart" style="color:black;"></i> </div>
              <div class="basket-item-count"><span class="count badge icart">{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span></div>
              <div class="total-price-basket"> <span class="lbl" style="color:black;">My cart</span> <span class="total-price"> <span class="sign"></span><span class="value"></span> </span> </div>
            </div>
            </a>
          
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
          
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown" style="background-color:#f7f7f7;">
    <div class="container-fluid">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class=" dropdown yamm-fw ">
				<a href="{{url('/')}}"  class="dropdown-toggle " style="color:black;" >Home</a>
				
			</li>
			<li class="dropdown yamm mega-menu">
				<a href="{{url('/')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">Laptop</a>
                <ul class="dropdown-menu container" style="width:500px;">
					<li>
            <div class="yamm-content " >
            <div class="row">
                
                   <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Laptops</h2>
                        <ul class="links">
                        <li><a href="{{url('/dell_new_laptop')}}">Dell</a></li>
                              <li><a href="{{url('/hp_new_laptop')}}">Hp</a></li>
                              <li><a href="{{url('/lenovo_new_laptop')}}">Lenovo</a></li>
                              <li><a href="{{url('/toshiba_new_laptop')}}">Toshiba</a></li>
                              <li><a href="{{url('/acer_new_laptop')}}">Acer</a></li>
                              <li><a href="{{url('/asus_new_laptop')}}">Asus</a></li>
                              <li><a href="{{url('/others_new_laptop')}}">Others</a></li>
                              <li><a href="{{url('/all_new_laptop')}}">All Laptop</a></li>
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-menu">
                        <h2 class="title">Refurbished Laptops</h2>
                        <ul class="links">
                        <li><a href="{{url('/refurbished_dell_laptop')}}">Dell</a></li>
                              <li><a href="{{url('/refurbished_hp_laptop')}}">Hp</a></li>
                              <li><a href="{{url('/refurbished_lenovo_laptop')}}">Lenovo</a></li>
                              <li><a href="{{url('/refurbished_toshiba_laptop')}}">Toshiba</a></li>
                              <li><a href="{{url('/refurbished_acer_laptop')}}">Acer</a></li>
                              <li><a href="{{url('/refurbished_asus_laptop')}}">Asus</a></li>
                              <li><a href="{{url('/refurbished_others_laptop')}}">Others</a></li>
                              <li><a href="{{url('/all_refurbished_laptop')}}">All Laptop</a></li>
                        </ul>
                          </div><!-- /.col -->

                   

                    
       <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> -->
      <!-- <img class="img-responsive" src="{{ asset('images/new/laptop.jpg') }}" alt=""> -->
    <!-- </div> -->
    <!-- /.yamm-content -->					
   </div>
   </div>
   </li>
	</ul>
</li>

		<!-- laptop end--->
    <li class="dropdown mega-menu">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">Desktop
								</a>
                <ul class="dropdown-menu container" style="width:520px;">
					<li>
						<div class="yamm-content">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Desktop</h2>
                <ul class="links">
                <li><a href="{{url('/dell_new_desktop')}}"> Dell</a></li>
                              <li><a href="{{url('/hp_new_desktop')}}">Hp</a></li>
                              <li><a href="{{url('/lenovo_new_desktop')}}">Lenovo</a></li>
                              <li><a href="{{url('/toshiba_new_desktop')}}">Toshiba</a></li>
                              <li><a href="{{url('/acer_new_desktop')}}">Acer</a></li>
                              <li><a href="{{url('/asus_new_desktop')}}">Asus</a></li>
                              <li><a href="{{url('/others_new_desktop')}}">Others</a></li>
                              <br><li class="pull-left"> <a href="{{url('/all_new_desktop')}}"> All Desktop</a></li>
                              </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-5 col-menu">
                <h2 class="title">Refurbished Desktop</h2>
                <ul class="links">
                <li><a href="{{url('/dell_refurbished_desktop')}}">Dell</a></li>
                              <li><a href="{{url('/hp_refurbished_desktop')}}">Hp</a></li>
                              <li><a href="{{url('/lenovo_refurbished_desktop')}}">Lenovo</a></li>
                              <li><a href="{{url('/toshiba_refurbished_desktop')}}">Toshiba</a></li>
                              <li><a href="{{url('/acer_refurbished_desktop')}}">Acer</a></li>
                              <li><a href="{{url('/asus_refurbished_desktop')}}">Asus</a></li>
                              <li><a href="{{url('/others_refurbished_desktop')}}">Others</a></li>
                              <br><li class="pull-left"> <a href="{{url('/all_refurbished_desktop')}}"> All Desktop</a></li>
            
                                  </ul>
            </div><!-- /.col -->

           
               </div><!-- /.row -->
</div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
      <!-- /desktop -->	
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;">Printers</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
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
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                
           <!---   printers end -->

           <li class="dropdown mega-menu">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"style="color:black;">Accessories
					</a>
                <ul class="dropdown-menu container" style="width:600px;">
					<li>
						<div class="yamm-content">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Accessories</h2>
                <ul class="links">
                              <li><a href="{{url('/gaming')}}">Gaming</a></li>
                              <li><a href="{{url('/adapters')}}">Adapters</a></li>
                              <li><a href="{{url('/batteries_accessories')}}">Batteries</a></li>
                              <li><a href="{{url('/cooling_pads')}}">Cooling Pads</a></li>
                              <li><a href="{{url('/headphones')}}">Headphones</a></li>
                              <li><a href="{{url('/keyboards')}}">Keyboards</a></li>
                              <li><a href="{{url('/mouse')}}">Mouse</a></li>
                               <li><a href="{{url('/webcam')}}">Webcam</a></li>
                              <li><a href="{{url('/routers_modems')}}">Routers & Modems</a></li>
                              <li><a href="{{url('/cpu_processors')}}">CPUs, Processors</a></li>
                              <li><a href="{{url('/graphics_cards')}}">Graphics Cards</a></li>
                               <li><a href="{{url('/other_accessories')}}">Others</a></li>
                               <li class="pull-left"> <a href="{{url('all_accessories')}}"> All Accessories</a></li>
                             </ul>
            </div><!-- /.col -->

           

                     <div class="col-xs-12 col-sm-6 col-md-4 col-menu">
                        <h2 class="title">Memory</h2>
						<ul class="links">
						  <li><a href="{{url('/ram')}}">RAM</a></li>
                            <li><a href="{{url('/ssd')}}">SSD</a></li>
                              <li><a href="{{url('/hd')}}">HD</a></li>
                              <li><a href="{{url('/portable_hd')}}">Portable HD</a></li>
                              <li><a href="{{url('/pen_drive')}}">Pen Drive</a></li>
                              <li ><a href="{{url('/memory_devices')}}">All Memory Devices</a></li>
							  </ul>
						</div>
						
						 <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
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
							   <li><a href="{{url('/laptop_cables')}}">Cables</a></li>
                              <li><a href="{{url('/laptop_dc_jack')}}">Dc Jack</a></li>
                              <li><a href="{{url('/laptop_hitsing')}}">Hitsing</a></li>
                              <li><a href="{{url('/laptop_hitting_pest')}}">Hitting Pest</a></li>
                              <li><a href="{{url('/laptop_touchpad')}}">Touchpad</a></li>
                              <li><a href="{{url('/laptop_speaker')}}">Speaker</a></li>
                              <li><a href="{{url('/laptop_battery')}}">Battery</a></li>
                              <li><a href="{{url('/laptop_other_peripheral')}}">Others</a></li>
                      
                              <li class="pull-left"> <a href="{{url('/all_laptop_peripheral_laptop')}}">Laptop Peripherial Parts</a> </li>
                              </ul>
                    </div><!-- /.col -->
         
           </div><!-- /.row -->
         </div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
               <!-- <li class="dropdown"> <a href="{{url('/repairing_tools')}}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;"></a>
                   <ul class="dropdown-menu pages">
				   <li><a href="#">SMD Machine </a></li>
				   <li><a href="#">Soldering Gun </a></li>
				    <li><a href="#">Disordering Pump </a></li>
					
				   </ul>
                </li>-->
						<!-- laptop end--->
    <li class="dropdown ">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">Repairing tools
								</a>
                <ul class="dropdown-menu " style="width:520px;">
					<li>
						<div class="yamm-content">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Repairing tools</h2>
                <ul class="links">
                <li><a href="{{url('/smd_machine')}}">SMD Machine</a></li>
                              <li><a href="{{url('/soldering_gun')}}">Soldering Gun</a></li>
                              <li><a href="{{url('/disordering_pump')}}">Disordering Pump</a></li>
                              <li><a href="{{url('/twisers')}}">Twisers</a></li>
                              <li><a href="{{url('/cutter')}}"> Cutter </a></li>
                              <li><a href="{{url('/soldering_pest')}}">Soldering Pest</a></li>
                              <li><a href="{{url('/desoldring_wire')}}"> Desoldring Wire </a></li>
                              <li class=""> <a href="{{url('/opener')}}">Opener</a></li>
                              </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-5 col-menu">
                <h2 class="title">Repairing tools</h2>
                <ul class="links">
                <li><a href="{{url('/magnify_lamp')}}"> Magnify Lamp</a></li>
                              <li><a href="{{url('/microscope')}}">Microscope</a></li>
                              <li><a href="{{url('/bios_programmer')}}">Bios Programmer</a></li>
                              <li><a href="{{url('/tool_kit')}}">Tool kit</a></li>
                              <li><a href="{{url('/smd_tester')}}">SMD Tester </a></li>
                              <li><a href="{{url('/dc_power_supply')}}">DC Power Supply </a></li>
                              <li><a href="{{url('/booster')}}">Booster </a></li>
                              <li class=""> <a href="{{url('/LED_Backlight_Tester')}}">LED Backlight Tester</a></li>
            
                                  </ul>
            </div><!-- /.col -->

           
               </div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
				</ul>
			</li>
			
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;">Software</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                            <li><a href="{{url('/windows_10')}}">Windows 10</a></li>
                              <li><a href="{{url('/npav')}}">NPAV Antivirus</a></li>
                              <li><a href="{{url('/quickheal')}}">Quickheal Antivirus</a></li>
                              <li><a href="{{url('/other_software')}}">Other Softwares</a></li>
                              <li><a href="{{url('/softwares')}}">All Softwares</a></li>
                             </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
				 <li class="dropdown  yamm "> <a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">training programs</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="yamm-content"style="width:500px;">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-menu">
                             <h2 class="title">Electronic Courses</h2> 
                            <ul class="links ">
                            <li><a href="{{url('/course_select/LCD Repairing Course')}}">LCD Repairing Course</a></li>
                            <li><a href="{{url('/course_select/HDD Repairing Course')}}">Hdd Repairing Course</a></li>
                              <li><a href="{{url('/course_select/CCTV Repairing Course')}}">CCTV Repairing Course</a></li>
                          
                              <li><a href="{{url('/course_select/Laptop Repairing Course')}}">Laptop Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Printer Repairing Course')}}">Printer Repairing Course </a></li>
                              <li><a href="{{url('/course_select/Mobile Repairing Course')}}">Mobile Repairing Course </a></li>
							               <li><a href="{{url('/course_select/AC Repairing Course')}}">AC Repairing Course </a></li>
                            <li><a href="{{url('/course_select/Fan Repairing Course')}}">Fan Repairing Course </a></li>
                            
                            <li><a href="{{url('/course_select/Freeze Repairing Course')}}">Freeze Repairing Course </a></li>
                            <li><a href="{{url('/course_select/Combo Course 1')}}">Combo Course 1</a></li>
                            <li><a href="{{url('/course_select/Combo Course 2')}}">Combo Course 2</a></li>
                            <li><a href="{{url('/course_select/Combo Course 3')}}">Combo Course 3</a></li>
                               </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-6 col-menu">
                            <h2 class="title" style="">Electronic Courses</h2>
                            <ul class="links">
                           

                              
                              <li><a href="{{url('/course_select/Grinder Repairing Course')}}">Grinder Repairing Course </a></li>
                              <li><a href="{{url('/course_select/Cooler Repairing Course')}}">Cooler Repairing Course</a></li>
                            
                              <li><a href="{{url('/course_select/Xerox Machine Repairing Course')}}">Xerox Machine Repairing Course  </a></li>
							               <li><a href="{{url('/course_select/Owen Repairing Course')}}">Owen Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Elevator Repairing Course')}}">Elevator Repairing Course </a></li>
                              <li><a href="{{url('/course_select/Motor Winding Repairing Course')}}">Motor Winding Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Washing Machine Repairing Course')}}">Washing Machine Repairing Course</a></li>
                              <li><a href="{{url('/course_select/Basic Electronic Course')}}">Basic Electronic Course </a></li>
                              <li><a href="{{url('/course_select/Computer Hardware Course')}}">Computer Hardware Course </a></li>
                             <!-- <li><a href="{{url('/courses')}}">All Courses</a></li> -->
                         </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-4 col-menu">
                            <!-- <h2 class="title">Repairing courses</h2> -->
                            <ul class="links">

                            <br>  
                          </ul>
                          </div>
                          <!-- /.col -->
                         
                          <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"><ul></u> <a href="#"><!--<img  class="img-responsive" alt="" src="assets/images/banners/banner-side.png" >--></a> </div>
                        </div>
                        <!-- /.row --> 
                      </div>
                      <!-- /.yamm-content --> </li>
                  </ul>
                </li>
				 <li class="link"> <a href="{{url('/ics')}}" class="" data-hover="" data-toggle="" style="color:black;">IC</a>
                  <!--<ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
							</ul>
						   </div>
						 </div>
						</div>
						</li>
						</ul>-->
						</li>
						 <li class="link"> <a href="{{url('/Components')}}" class="" data-hover="" data-toggle="" style="color:black;">Components</a>
                  <!--<ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
							</ul>
						   </div>
						 </div>
						</div>
						</li>
						</ul>-->
						</li>


               
              
                <!-- <li class="dropdown hidden-sm"> <a href="#">Refurbished Laptop </a> </li>
                <li class="dropdown hidden-sm"> <a href="#">Refurbished Desktop </a> </li>
                <li class="dropdown"> <a href="contact.html"> Accessories</a> </li>
                <li class="dropdown"> <a href="contact.html"> Courses</a> </li> -->
                <!-- <li class="dropdown"> <a href="contact.html"></a> </li> -->
                <li class="links"><a href="{{url('/userblogs/all')}}" style="color:black;">Blogs</a></li>
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;">other</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
							<li><a href="{{url('/gallery')}}">Gallery</a></li>
                             <li><a href="{{url('/contact')}}">Contact</a></li>
                             <!-- <li><a href="{{url('/faq')}}">FAQ</a></li>-->
                              <!-- <li><a href="404.html">404</a></li> -->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--<li class="dropdown  navbar-right special-menu" > <a href="#"style="color:white">Todays offer</a> </li>-->
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
<div class="container"> 
 <div class="modal fade" id="staticBackdrop8" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel8" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><h4 class="modal-title" id="staticBackdropLabe8"><b style="font-size:25px;"> SW7 Sign In</b></h4></center>
        <br>
        <div class="col-md-12 col-sm-6 ">
	<br>
	<center><p class="">Hello, Welcome to your account.</p></center>
  <form class="register-form outer-top-xs"  action="{{ url('user/login') }}" method="post" id="Validate_form_l">
  {{ csrf_field() }}
						<div class="col-md-10 col-md-offset-1	">
            @if(Session::has('success'))
    <div class="text-center ">
      <div id="charge-message" class="alert alert-success">
        <center>{{ Session::get('success') }}</center>
      </div>
    </div>
  </div>
  @endif
    @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
  <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
        <input type="text" id="email" name="email" class="form-control" style="height:35px"  data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Enter your Email "  required>
           	</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
        <input type="password" id="password" name="password"  style="height:35px"autofocus placeholder="Enter Password"  class="form-control" required>
       <!-- <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" > -->
  
      </div>
		<div class="radio outer-xs">
		  	<label>
        <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small">Don't have an account? <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value"><i class="icon fa fa-lock"></i>&nbsp; Register</span><b class="caret"></b></a>
              <ul class="dropdown-menu">
             
                <li><a href="{{ url('/customer') }}"><i class="fa fa-user" aria-hidden="true"></i> Register as Customer</a></li>
                <li><a href="{{ url('/franchisee') }}"><i class="fa fa-user" aria-hidden="true"></i> Register as Franchisee </a></li>
                <li><a href="{{ url('/student_registration') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Register as Student </a></li>
                
               
               </ul>
            </li>
             <!--<li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a> 
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>-->
          </ul>
		  
		  	</label>
		  	<a href="{{route('password.email')}}" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
    <center><div class="col-md-12">
	  	<button type="submit" class="btn-upper btn-lg btn btn-primary checkout-page-button "  
		style="
			padding-top: 9px;
			 padding-bottom: 9px;
			border-bottom-width: 8px;
			padding-left: 50px;
			padding-right: 50px;
			font-size:14px;">Login</button>
          </div></center>	</form>					
</div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>

</header>


@section('scripts')
<script src="{{ asset('assets/js/parsley.js') }}"></script>

<script>
$(document).ready(function(){
        $('#Validate_form_l').parsley();
    });
</script>
@endsection







<body class="cnt-home" style="background-color:white;">
<style>
ul li{
  list-style:none;
  /*margin-bottom:10px;*/
}
.nav>li{
  width:9.66%;
  margin-top:10px;
}

.navbar-nav > li > a li>img {
  border-right:1px solid rgba(255,255,255,0.1);
}


.navicons{
  height:50px;
  width:50px;
   margin-top:10px;
   padding-bottom: 7px;
}
.sansserif {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  /*font-family: 'Orbitron', sans-serif;*/
}
.navbar .dropdown a:hover{
  background-color: #ffc20e !important;
  color: black;
}

.mobileview
{
  display:none;
}
.sign 
{
  display:block;
}
.mobilenumber 
{
  float:right;
  height:40px;
  color:#b60a0a;
  
  position:absolute;
  right:0px;
  padding:10px;
  padding-left: 20px;
}
@media  screen and (max-width: 600px){
        .mobileview{
            display: block;
        }
        .sign {
          display:none;
        }
        .mobilenumber{
          position : relative;
          margin : auto;
          float:none;
          width:150px;
         color:#8c201c;
        }
      }
</style>

<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1" style="background-color:#ffc20e;"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
	          <div class="row">
            
				  <!--<div class="col-md-3">-->
					<!-- <a href="mailto:support@sw7infomedia.com" class="pull-left"  style="color:black;"><i class="fa fa-envelope " aria-hidden="true" style="color:black;"></i> support@sw7infomedia.com</a></span> -->
				  <!--</div>-->
				<!--<div class="col-md-3">-->
                  <!-- <a href="tel:703-002-3002" class="pull-right" style="color:black;"><i class="fa fa-phone " aria-hidden="true" style="color:black;"></i> +91 7030023002</a></span> 				 -->
               <!--</div>-->
               <div class="col-md-12 col-sm-10 sign" >
        <div class="cnt-block"style="float:left;"> 
        <ul class="list-unstyled list-inline sansserif">
            
           <?php if(Auth::check()): ?>
            <?php if(Auth::user()->role == "admin"): ?>
            <li style="margin-left:130px;"><a href="<?php echo e(url('/admin')); ?>" style="color:#B60A0A;" ><i class="icon fa fa-user"></i>My Account</a></li>
            <?php elseif(Auth::user()->role == "franchisee"): ?>
            <li style="margin-left:130px;"><a href="<?php echo e(url('/franchisee_account')); ?>" style="color:#B60A0A;"><i class="icon fa fa-user"></i>My Account</a></li>
            <?php elseif(Auth::user()->role == "customer"): ?>
            <li style="margin-left:130px;"><a href="<?php echo e(url('/user_account')); ?>" style="color:#B60A0A;"><i class="icon fa fa-user"></i>My Account</a></li>
            <!-- <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li> -->
            <?php elseif(Auth::user()->role == "student"): ?>
            <li style="margin-left:130px;"><a href="<?php echo e(url('/student_account')); ?>" style="color:#B60A0A;"><i class="icon fa fa-user"></i>My Account</a></li>
            <?php endif; ?>
            <?php endif; ?>
            <!-- <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li> -->
            <!-- <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li> -->
            <!--<li><a href="<?php echo e(route('product.shoppingcart')); ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>-->
            <?php if(Auth::check()): ?>
            <li>
	        <a href="<?php echo e(url('/user/logout')); ?>" style="color:#B60A0A;"><i class="icon fa fa-user"></i>Logout</a></li>
          
        
         
                <li> <a href="<?php echo e(url('/customer')); ?>" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:10px;padding-left:10px;margin-right:9px;">
                <i class="fa fa-user" aria-hidden="true"></i> REGISTER AS CUSTOMER</a></li>
                <li style="margin:0px 5px"><a href="<?php echo e(url('/franchisee')); ?>" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:10px;padding-left:10px;">
                <i class="fa fa-user" aria-hidden="true"></i> REGISTER AS FRANCHISEE </a></li>
                <li style="margin:0px 5px;"><a href="<?php echo e(url('/student_registration')); ?>" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:10px;padding-left:10px;">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> REGISTER AS STUDENT </a></li>
                <li style="margin:0px 5px;"><a href="#staticBackdrop8" data-toggle="modal" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:25px;padding-left:25px;">
                <i class="glyphicon glyphicon-log-in" style="color:white;"></i> SIGN IN</a></li>
            
          <?php else: ?>
          </ul>
        </div>
		</div>

       
	   <!-- /.cnt-account -->
     <div class="col-md-3"></div>
        <div class="col-md-8 col-sm-12 sign" style="height:40px;padding:10px;">
        <div class="cnt-block"style="float:left;"> 
          <ul class="list-unstyled list-inline sansserif">
            <!--<li class="dropdown dropdown-small animate-dropdown " style="font-color:black;" > <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value " style="color:black;"><i class="icon fa fa-lock"></i>&nbsp;Sign in & Register</span><b class="caret" style="color:black;"></b></a>
              <ul class="dropdown-menu">-->
             
                <li style="margin:0px 5px;"><a href="<?php echo e(url('/customer')); ?>" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:10px;padding-left:10px;">
                <i class="fa fa-user" aria-hidden="true"></i> REGISTER AS CUSTOMER</a></li>
                <li style="margin:0px 5px"><a href="<?php echo e(url('/franchisee')); ?>" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:10px;padding-left:10px;">
                <i class="fa fa-user" aria-hidden="true"></i> REGISTER AS FRANCHISEE </a></li>
                <li style="margin:0px 5px;"><a href="<?php echo e(url('/student_registration')); ?>" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:10px;padding-left:10px;">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> REGISTER AS STUDENT </a></li>
                <li style="margin:0px 5px;"><a href="#staticBackdrop8" data-toggle="modal" class="sansserif" style="color:white;background-color:#b60a0a;padding-right:25px;padding-left:25px;">
                <i class="glyphicon glyphicon-log-in" style="color:white;"></i> SIGN IN</a></li>
                <?php endif; ?> 
               </ul>
               
            <!--</li>-->
            <!-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a> 
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>-->
          <!--</ul>-->
          <!-- /.list-unstyled --> 
        
        </div>
        
		</div>

    
    <div class="col-md-3 mobileview">
        <div class="cnt-account">
          <ul class="list-unstyled">
           <?php if(Auth::check()): ?>
            <?php if(Auth::user()->role == "admin"): ?>
            <li ><a href="" style="color:black;" ><i class="icon fa fa-user"></i>My Account</a></li>
            <?php elseif(Auth::user()->role == "franchisee"): ?>
            <li><a href="" style="color:black;"><i class="icon fa fa-user"></i>My Account</a></li>
            <?php elseif(Auth::user()->role == "customer"): ?>
            <li><a href="" style="color:black;"><i class="icon fa fa-user"></i>My Account</a></li>
            <!-- <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li> -->
            <?php elseif(Auth::user()->role == "student"): ?>
            <li><a href="" style="color:black;"><i class="icon fa fa-user"></i>My Account</a></li>
            <?php endif; ?>
            <?php endif; ?>
           
            <?php if(Auth::check()): ?>
            <li>
	        <a href="" style="color:black;"><i class="icon fa fa-user"></i>Logout</a></li>
          <li class="dropdown dropdown-small animate-dropdown " style="font-color:black;" > <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value " style="color:black;"><i class="icon fa fa-lock"></i>&nbsp;Sign in & Register</span><b class="caret" style="color:black;"></b></a>
              <ul class="dropdown-menu">
             
                <li style="color:black;"><a href="<?php echo e(url('/customer')); ?>" class="sansserif" style="color:black;">
                <i class="fa fa-user" aria-hidden="true" style="font-color:black;"></i> Register as Customer</a></li>
                <li style="color:black;"><a href="<?php echo e(url('/franchisee')); ?>" class="sansserif" style="color:black;" >
                <i class="fa fa-user" aria-hidden="true" style="font-color:black;"></i> Register as Franchisee </a></li>
                <li style="color:black;"><a href="<?php echo e(url('/student_registration')); ?>" class="sansserif" style="color:black;">
                <i class="fa fa-graduation-cap" aria-hidden="true" style="font-color:black;"></i> Register as Student </a></li>
                <li style="color:black;"><a href="#staticBackdrop8" data-toggle="modal" class="sansserif" style="color:black;">
                <i class="glyphicon glyphicon-log-in" style="color:black;" style="font-color:black;"></i> Sign in</a></li>
                 
               </ul>
    </li>
          

              <?php else: ?>
          </ul>
        </div>
		</div>
    
    <div class="col-md-3 col-sm-12 mobileview">
        <div class="cnt-block"> 
          <ul class="list-unstyled list-inline" style="margin-right:9px;">
            <li class="dropdown dropdown-small animate-dropdown " style="font-color:black;" > <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value " style="color:black;"><i class="icon fa fa-lock"></i>&nbsp;Sign in & Register</span><b class="caret" style="color:black;"></b></a>
              <ul class="dropdown-menu">
             
                <li><a href="<?php echo e(url('/customer')); ?>" class="sansserif" >
                <i class="fa fa-user" aria-hidden="true"></i> Register as Customer</a></li>
                <li><a href="<?php echo e(url('/franchisee')); ?>" class="sansserif" >
                <i class="fa fa-user" aria-hidden="true"></i> Register as Franchisee </a></li>
                <li><a href="<?php echo e(url('/student_registration')); ?>" class="sansserif" >
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> Register as Student </a></li>
                <li><a href="#staticBackdrop8" data-toggle="modal" class="sansserif" >
                <i class="glyphicon glyphicon-log-in" style="color:white;"></i> Sign in</a></li>
                <?php endif; ?> 
               </ul>
               
            <!--</li>-->
            <!-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a> 
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>-->
          <!--</ul>-->
          <!-- /.list-unstyled --> 
        
        </div>
        
		</div>
    <div class="col-md-2 mobilenumber"><i class="fa fa-phone" aria-hidden="true"></i><b>&nbsp;&nbsp;+91 7030023002</b></div>
    
		</div>	   <!-- /.row -->
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
          <div class="logo"> <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('images/new/sw7123.jpg')); ?>" alt="logo" style="height:80px; margin-top:-20px;"> </a> </div>
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
             <form action="<?php echo e(url('/productsearch')); ?>" method="get">
              <?php echo e(csrf_field()); ?>

              <div class="control-group " style="border: 2px solid #f3f3f3;">
                 
             
			  
             
                <input class="search-field"  name="psearch" placeholder="Search Products Here" required/>
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
          
          <div class=" dropdown-cart " style="float:left;">
             <a href="<?php echo e(route('product.shoppingcart')); ?>" class="lnk-cart" style="background-color:#f7f7f7;width:165px;">
            <div class="items-cart-inner " style="border: 2px solid #f3f3f3;">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart" style="color:black;"></i> </div>
              <div class="basket-item-count"><span class="count badge icart"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : 0); ?></span></div>
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
  <div class="header-nav animate-dropdown" style="background-color:#B60A0A;">
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
    <div class="col-md-1" style="width:10px;"></div>
		<ul class="nav navbar-nav">
			<li class=" dropdown yamm-fw ">
      <img src="/images/navicons/homenew.png" class="navicons" style="margin-left:10px;">
				<a href="<?php echo e(url('/')); ?>"  class="dropdown-toggle " >Home</a>
				
			</li>
			<li class="dropdown yamm mega-menu">
      <img src="/images/navicons/laptopnew.png" class="navicons" style="margin-left:10px;">
				<a href="<?php echo e(url('/')); ?>" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">Laptop</a>
                <ul class="dropdown-menu container" style="width:310px;">
					<li>
            <div class="yamm-content " style="background-color:#ffc20e;" >
            <div class="row">
            
                   <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                     
                        <h2 class="title" style="color:black;">Laptops</h2>
                        <ul class="links">
                        <li><a href="<?php echo e(url('/dell_new_laptop')); ?>">Dell</a></li>
                              <li><a href="<?php echo e(url('/hp_new_laptop')); ?>">Hp</a></li>
                              <li><a href="<?php echo e(url('/lenovo_new_laptop')); ?>">Lenovo</a></li>
                              <li><a href="<?php echo e(url('/toshiba_new_laptop')); ?>">Toshiba</a></li>
                              <li><a href="<?php echo e(url('/acer_new_laptop')); ?>">Acer</a></li>
                              <li><a href="<?php echo e(url('/asus_new_laptop')); ?>">Asus</a></li>
                              <li><a href="<?php echo e(url('/others_new_laptop')); ?>">Others</a></li>
                              <li><a href="<?php echo e(url('/all_new_laptop')); ?>">All Laptop</a></li>
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-menu">
                        <h2 class="title"style="color:black;">Refurbished Laptops</h2>
                        <ul class="links">
                        <li><a href="<?php echo e(url('/refurbished_dell_laptop')); ?>">Dell</a></li>
                              <li><a href="<?php echo e(url('/refurbished_hp_laptop')); ?>">Hp</a></li>
                              <li><a href="<?php echo e(url('/refurbished_lenovo_laptop')); ?>">Lenovo</a></li>
                              <li><a href="<?php echo e(url('/refurbished_toshiba_laptop')); ?>">Toshiba</a></li>
                              <li><a href="<?php echo e(url('/refurbished_acer_laptop')); ?>">Acer</a></li>
                              <li><a href="<?php echo e(url('/refurbished_asus_laptop')); ?>">Asus</a></li>
                              <li><a href="<?php echo e(url('/refurbished_others_laptop')); ?>">Others</a></li>
                              <li><a href="<?php echo e(url('/all_refurbished_laptop')); ?>">All Laptop</a></li>
                        </ul>
                          </div><!-- /.col -->

                   

                    
       <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> -->
      <!-- <img class="img-responsive" src="<?php echo e(asset('images/new/laptop.jpg')); ?>" alt=""> -->
    <!-- </div> -->
    <!-- /.yamm-content -->					
   </div>
   </div>
   </li>
	</ul>
</li>

		<!-- laptop end--->
    <li class="dropdown mega-menu">
    <img src="/images/navicons/desktopnew.png" class="navicons" style="margin-left:20px;">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">Desktop
								</a>
                <ul class="dropdown-menu container" style="width:310px;">
					<li>
						<div class="yamm-content"style="background-color:#ffc20e;">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title"style="color:black;">Desktop</h2>
                <ul class="links">
                <li><a href="<?php echo e(url('/dell_new_desktop')); ?>"> Dell</a></li>
                              <li><a href="<?php echo e(url('/hp_new_desktop')); ?>">Hp</a></li>
                              <li><a href="<?php echo e(url('/lenovo_new_desktop')); ?>">Lenovo</a></li>
                              <li><a href="<?php echo e(url('/toshiba_new_desktop')); ?>">Toshiba</a></li>
                              <li><a href="<?php echo e(url('/acer_new_desktop')); ?>">Acer</a></li>
                              <li><a href="<?php echo e(url('/asus_new_desktop')); ?>">Asus</a></li>
                              <li><a href="<?php echo e(url('/others_new_desktop')); ?>">Others</a></li>
                              <br><li class="pull-left"> <a href="<?php echo e(url('/all_new_desktop')); ?>"> All Desktop</a></li>
                              </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-5 col-menu">
                <h2 class="title"style="color:black;">Refurbished Desktop</h2>
                <ul class="links">
                <li><a href="<?php echo e(url('/dell_refurbished_desktop')); ?>">Dell</a></li>
                              <li><a href="<?php echo e(url('/hp_refurbished_desktop')); ?>">Hp</a></li>
                              <li><a href="<?php echo e(url('/lenovo_refurbished_desktop')); ?>">Lenovo</a></li>
                              <li><a href="<?php echo e(url('/toshiba_refurbished_desktop')); ?>">Toshiba</a></li>
                              <li><a href="<?php echo e(url('/acer_refurbished_desktop')); ?>">Acer</a></li>
                              <li><a href="<?php echo e(url('/asus_refurbished_desktop')); ?>">Asus</a></li>
                              <li><a href="<?php echo e(url('/others_refurbished_desktop')); ?>">Others</a></li>
                              <br><li class="pull-left"> <a href="<?php echo e(url('/all_refurbished_desktop')); ?>"> All Desktop</a></li>
            
                                  </ul>
            </div><!-- /.col -->

           
               </div><!-- /.row -->
</div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
      <!-- /desktop -->	
      <li class="dropdown"> 
      <img src="/images/navicons/printernew.png" class="navicons" style="margin-left:20px;">
        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:white;">Printers</a>
                  <ul class="dropdown-menu pages" style="background-color:#ffc20e;">
                    <li>
                      <div class="yamm-content" style="background-color:#ffc20e;">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                            <li><a href="<?php echo e(url('/hp_printer')); ?>">HP</a></li>
                              <li><a href="<?php echo e(url('/canon_printer')); ?>">Canon</a></li>
                              <li><a href="<?php echo e(url('/xerox_printer')); ?>">Xerox</a></li>
                              <li><a href="<?php echo e(url('/reco_printer')); ?>">Reco</a></li>
                              <li><a href="<?php echo e(url('/lenovo_printer')); ?>">Lenovo</a></li>
                              <li><a href="<?php echo e(url('/epson_printer')); ?>">Epson</a></li>
                              <li><a href="<?php echo e(url('/printer_peripheral')); ?>">Peripheral Parts</a></li>
                              <li><a href="<?php echo e(url('/all_printer')); ?>">All Printers</a></li>
                              </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                
           <!---   printers end -->

           <li class="dropdown mega-menu">
           <img src="/images/navicons/accessories.png" class="navicons" style="margin-left:30px;">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"style="color:white;">Accessories
					</a>
                <ul class="dropdown-menu container" style="width:600px;">
					<li>
						<div class="yamm-content"style="background-color:#ffc20e;">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title" style="color:black;">Accessories</h2>
                <ul class="links">
                              <li><a href="<?php echo e(url('/gaming')); ?>">Gaming</a></li>
                              <li><a href="<?php echo e(url('/adapters')); ?>">Adapters</a></li>
                              <li><a href="<?php echo e(url('/batteries_accessories')); ?>">Batteries</a></li>
                              <li><a href="<?php echo e(url('/cooling_pads')); ?>">Cooling Pads</a></li>
                              <li><a href="<?php echo e(url('/headphones')); ?>">Headphones</a></li>
                              <li><a href="<?php echo e(url('/keyboards')); ?>">Keyboards</a></li>
                              <li><a href="<?php echo e(url('/mouse')); ?>">Mouse</a></li>
                               <li><a href="<?php echo e(url('/webcam')); ?>">Webcam</a></li>
                              <li><a href="<?php echo e(url('/routers_modems')); ?>">Routers & Modems</a></li>
                              <li><a href="<?php echo e(url('/cpu_processors')); ?>">CPUs, Processors</a></li>
                              <li><a href="<?php echo e(url('/graphics_cards')); ?>">Graphics Cards</a></li>
                               <li><a href="<?php echo e(url('/other_accessories')); ?>">Others</a></li>
                               <li class="pull-left"> <a href="<?php echo e(url('all_accessories')); ?>"> All Accessories</a></li>
                             </ul>
            </div><!-- /.col -->

           

                     <div class="col-xs-12 col-sm-6 col-md-4 col-menu">
                        <h2 class="title" style="color:black;">Memory</h2>
						<ul class="links">
						  <li><a href="<?php echo e(url('/ram')); ?>">RAM</a></li>
                            <li><a href="<?php echo e(url('/ssd')); ?>">SSD</a></li>
                              <li><a href="<?php echo e(url('/hd')); ?>">HD</a></li>
                              <li><a href="<?php echo e(url('/portable_hd')); ?>">Portable HD</a></li>
                              <li><a href="<?php echo e(url('/pen_drive')); ?>">Pen Drive</a></li>
                              <li ><a href="<?php echo e(url('/memory_devices')); ?>">All Memory Devices</a></li>
							  </ul>
						</div>
						
						 <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title" style="color:black;">Peripheral Parts</h2>
                        <ul class="links">
                        <li><a href="<?php echo e(url('/laptop_screen')); ?>">Screen</a></li>
                              <li><a href="<?php echo e(url('/laptop_keyboard')); ?>">Keyboard</a></li>
                              <li><a href="<?php echo e(url('/laptop_hinges')); ?>">Hinges</a></li>
                              <li><a href="<?php echo e(url('/laptop_body')); ?>">Body</a></li>
                              <li><a href="<?php echo e(url('/laptop_wificard')); ?>">Wifi Card</a></li>
                              <li><a href="<?php echo e(url('/laptop_dvd_rw')); ?>">DVD RW</a></li>
                              <li><a href="<?php echo e(url('/laptop_charger')); ?>">Charger</a></li>
                              <li><a href="<?php echo e(url('/laptop_bios_battery')); ?>">Bios Battery</a></li>
							   <li><a href="<?php echo e(url('/laptop_cables')); ?>">Cables</a></li>
                              <li><a href="<?php echo e(url('/laptop_dc_jack')); ?>">Dc Jack</a></li>
                              <li><a href="<?php echo e(url('/laptop_hitsing')); ?>">Hitsing</a></li>
                              <li><a href="<?php echo e(url('/laptop_hitting_pest')); ?>">Hitting Pest</a></li>
                              <li><a href="<?php echo e(url('/laptop_touchpad')); ?>">Touchpad</a></li>
                              <li><a href="<?php echo e(url('/laptop_speaker')); ?>">Speaker</a></li>
                              <li><a href="<?php echo e(url('/laptop_battery')); ?>">Battery</a></li>
                              <li><a href="<?php echo e(url('/laptop_other_peripheral')); ?>">Others</a></li>
                      
                              <li class="pull-left"> <a href="<?php echo e(url('/all_laptop_peripheral_laptop')); ?>">Laptop Peripherial Parts</a> </li>
                              </ul>
                    </div><!-- /.col -->
         
           </div><!-- /.row -->
         </div><!-- /.yamm-content -->					</li>
				</ul>
			</li>
               <!-- <li class="dropdown"> <a href="<?php echo e(url('/repairing_tools')); ?>" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;"></a>
                   <ul class="dropdown-menu pages">
				   <li><a href="#">SMD Machine </a></li>
				   <li><a href="#">Soldering Gun </a></li>
				    <li><a href="#">Disordering Pump </a></li>
					
				   </ul>
                </li>-->
						<!-- laptop end--->
   
            <li class="dropdown"> 
            <img src="/images/navicons/ics.png" class="navicons" style="margin-left:30px;">
            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:white;">Component</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content" style="background-color:#ffc20e;">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                            <li><a href="<?php echo e(url('/ics')); ?>">IC</a></li>
                              <li><a href="<?php echo e(url('/Components')); ?>">Components</a></li>
                              
                             </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
               
              
                <li class="dropdown  yamm "> 
         <img src="/images/navicons/trainingnew.png" class="navicons" style="margin-left:20px;">
           <a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">training programs</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="yamm-content"style="width:500px;background-color:#ffc20e;">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-menu">
                             <h2 class="title" style="color:black;">Electronic Courses</h2> 
                            <ul class="links ">
                            <li><a href="<?php echo e(url('/course_select/LCD Repairing Course')); ?>">LCD Repairing Course</a></li>
                            <li><a href="<?php echo e(url('/course_select/HDD Repairing Course')); ?>">Hdd Repairing Course</a></li>
                              <li><a href="<?php echo e(url('/course_select/CCTV Repairing Course')); ?>">CCTV Repairing Course</a></li>
                          
                              <li><a href="<?php echo e(url('/course_select/Laptop Repairing Course')); ?>">Laptop Repairing Course</a></li>
                              <li><a href="<?php echo e(url('/course_select/Printer Repairing Course')); ?>">Printer Repairing Course </a></li>
                              <li><a href="<?php echo e(url('/course_select/Mobile Repairing Course')); ?>">Mobile Repairing Course </a></li>
							               <li><a href="<?php echo e(url('/course_select/AC Repairing Course')); ?>">AC Repairing Course </a></li>
                            <li><a href="<?php echo e(url('/course_select/Fan Repairing Course')); ?>">Fan Repairing Course </a></li>
                            
                            <li><a href="<?php echo e(url('/course_select/Freeze Repairing Course')); ?>">Freeze Repairing Course </a></li>
                            <li><a href="<?php echo e(url('/course_select/Combo Course 1')); ?>">Combo Course 1</a></li>
                            <li><a href="<?php echo e(url('/course_select/Combo Course 2')); ?>">Combo Course 2</a></li>
                            <li><a href="<?php echo e(url('/course_select/Combo Course 3')); ?>">Combo Course 3</a></li>
                               </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-6 col-menu">
                            <h2 class="title" style="color:black;">Electronic Courses</h2>
                            <ul class="links">
                           

                              
                              <li><a href="<?php echo e(url('/course_select/Grinder Repairing Course')); ?>">Grinder Repairing Course </a></li>
                              <li><a href="<?php echo e(url('/course_select/Cooler Repairing Course')); ?>">Cooler Repairing Course</a></li>
                            
                              <li><a href="<?php echo e(url('/course_select/Xerox Machine Repairing Course')); ?>">Xerox Machine Repairing Course  </a></li>
							               <li><a href="<?php echo e(url('/course_select/Owen Repairing Course')); ?>">Owen Repairing Course</a></li>
                              <li><a href="<?php echo e(url('/course_select/Elevator Repairing Course')); ?>">Elevator Repairing Course </a></li>
                              <li><a href="<?php echo e(url('/course_select/Motor Winding Repairing Course')); ?>">Motor Winding Repairing Course</a></li>
                              <li><a href="<?php echo e(url('/course_select/Washing Machine Repairing Course')); ?>">Washing Machine Repairing Course</a></li>
                              <li><a href="<?php echo e(url('/course_select/Basic Electronic Course')); ?>">Basic Electronic Course </a></li>
                              <li><a href="<?php echo e(url('/course_select/Computer Hardware Course')); ?>">Computer Hardware Course </a></li>
                             <li><a href="<?php echo e(url('/courses')); ?>">All Courses</a></li>
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

                
                <!--<li class="links"><a href="<?php echo e(url('/userblogs/all')); ?>" style="color:black;">Blogs</a></li>-->
                
                <li class="dropdown ">
    <img src="/images/navicons/repairing.png" class="navicons" style="margin-left:20px;">
				<a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">Repairing tools
								</a>
                <ul class="dropdown-menu " style="width:310px;">
					<li>
						<div class="yamm-content" style="background-color:#ffc20e;">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title" style="color:black;">Repairing tools</h2>
                <ul class="links">
                <li><a href="<?php echo e(url('/smd_machine')); ?>">SMD Machine</a></li>
                              <li><a href="<?php echo e(url('/soldering_gun')); ?>">Soldering Gun</a></li>
                              <li><a href="<?php echo e(url('/disordering_pump')); ?>">Disordering Pump</a></li>
                              <li><a href="<?php echo e(url('/twisers')); ?>">Twisers</a></li>
                              <li><a href="<?php echo e(url('/cutter')); ?>"> Cutter </a></li>
                              <li><a href="<?php echo e(url('/soldering_pest')); ?>">Soldering Pest</a></li>
                              <li><a href="<?php echo e(url('/desoldring_wire')); ?>"> Desoldring Wire </a></li>
                              <li class=""> <a href="<?php echo e(url('/opener')); ?>">Opener</a></li>
                              </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-5 col-menu">
                <h2 class="title" style="color:black;">Repairing tools</h2>
                <ul class="links">
                <li><a href="<?php echo e(url('/magnify_lamp')); ?>"> Magnify Lamp</a></li>
                              <li><a href="<?php echo e(url('/microscope')); ?>">Microscope</a></li>
                              <li><a href="<?php echo e(url('/bios_programmer')); ?>">Bios Programmer</a></li>
                              <li><a href="<?php echo e(url('/tool_kit')); ?>">Tool kit</a></li>
                              <li><a href="<?php echo e(url('/smd_tester')); ?>">SMD Tester </a></li>
                              <li><a href="<?php echo e(url('/dc_power_supply')); ?>">DC Power Supply </a></li>
                              <li><a href="<?php echo e(url('/booster')); ?>">Booster </a></li>
                              <li class=""> <a href="<?php echo e(url('/LED_Backlight_Tester')); ?>">LED Backlight Tester</a></li>
            
                                  </ul>
            </div><!-- /.col -->

           
               </div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
				</ul>
			</li>
			
                <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;">Software</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content" style="background-color:#ffc20e;">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                            <li><a href="<?php echo e(url('/windows_10')); ?>">Windows 10</a></li>
                              <li><a href="<?php echo e(url('/npav')); ?>">NPAV Antivirus</a></li>
                              <li><a href="<?php echo e(url('/quickheal')); ?>">Quickheal Antivirus</a></li>
                              <li><a href="<?php echo e(url('/other_software')); ?>">Other Softwares</a></li>
                              <li><a href="<?php echo e(url('/softwares')); ?>">All Softwares</a></li>
                             </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>-->
				 
                <li class="links dropdown" style="" >
                <img src="/images/navicons/gallery.png" class="navicons" style="margin-left:10px;">  
                <a href="<?php echo e(url('/gallery')); ?>" data-hover="dropdown" data-toggle="dropdown" style="color:white;">Gallery</a></li>
                <li class="links dropdown">
                <img src="/images/navicons/contact.png" class="navicons" style="margin-left:20px;">  
                <a href="<?php echo e(url('/contact')); ?>" data-hover="dropdown" class="dropdown-toggle" style="color:white;">Contact</a></li>


				 <!--<li class="link"> <a href="<?php echo e(url('/ics')); ?>" class="" data-hover="" data-toggle="" style="color:black;">IC</a>
                  
						</li>-->
						 <!--<li class="link"> <a href="<?php echo e(url('/Components')); ?>" class="" data-hover="" data-toggle="" style="color:black;">Components</a>
                  
						</li>-->

				<!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" style="color:black;">other</a>
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
							<li><a href="<?php echo e(url('/gallery')); ?>">Gallery</a></li>
                             <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                             
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>-->
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
  <form class="register-form outer-top-xs"  action="<?php echo e(url('user/login')); ?>" method="post" id="Validate_form_l">
  <?php echo e(csrf_field()); ?>

						<div class="col-md-10 col-md-offset-1	">
            <?php if(Session::has('success')): ?>
    <div class="text-center ">
      <div id="charge-message" class="alert alert-success">
        <center><?php echo e(Session::get('success')); ?></center>
      </div>
    </div>
  </div>
  <?php endif; ?>
    <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
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
             
                <li><a href="<?php echo e(url('/customer')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Register as Customer</a></li>
                <li><a href="<?php echo e(url('/franchisee')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Register as Franchisee </a></li>
                <li><a href="<?php echo e(url('/student_registration')); ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Register as Student </a></li>
                
               
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
		  	<a href="<?php echo e(route('password.email')); ?>" class="forgot-password pull-right">Forgot your Password?</a>
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


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/parsley.js')); ?>"></script>

<script>
$(document).ready(function(){
        $('#Validate_form_l').parsley();
    });
</script>
<?php $__env->stopSection(); ?>






<style>
.navbar-default {
    background-color: white;
    color: #090909;
    font-size:15px;
}
</style>
<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
 <div id="" class="container-fluid">
   <div class="navbar-header col-md-12">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
    


     <a class="navbar-brand" href="{{url('/')}}"  style="color:#82ae46;font-size:25px;margin:5px;   "> <strong><center>Bhajiwala&trade;</center></strong></a>

  
     <!-- add in input  -  class="form-control" -->
     <ul class="nav navbar-nav   collapse navbar-collapse" style="margin-left:430px; color:black;" id="myNavbar">
          <li><a href="{{url('/')}}" style="color:black	; margin:12px;"><strong>Home</strong></a></li>
          <li class="dropdown">
              <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:black	; margin:12px;">
              <strong> Pulse Seeds</strong><span class="caret"></span>
                  <!-- <span class="caret"></span> -->
              </a>
							<ul class="dropdown-menu" role="menu">
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/pulses-seeds') }}">All Pulse Seeds</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/pulses-seeds/chana') }}">Chana</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/pulses-seeds/peans') }}">Peans</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/pulses-seeds/mung') }}">Mung</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/pulses-seeds/other') }}" >Other</a></li>
							</ul>
          </li>


          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:black	; margin:12px;">
              <strong>Vegetables</strong><span class="caret"></span>
              </a>
							<ul class="dropdown-menu" role="menu">
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/vegetables') }}">All Vegetables</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/vegetables/LeafyVege') }}" > Leafy Vegetables   </a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/vegetables/RootVege') }}" >  Organic Vegetables</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/vegetables/SqashVege') }}" > Root Vegetables</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/vegetables/BulbVege') }}" >Seasonal Vegetables</a></li>
							</ul>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:black	; margin:12px;">
              <strong>Fruits</strong><span class="caret"></span>
              </a>
							<ul class="dropdown-menu" role="menu">
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/fruits') }}">All Fruits</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/fruits') }}" >  Organic Fruits</a></li>
              <li><a onMouseOver="this.style.background='#2ab27b'"onMouseOut="this.style.background='#fff'" href="{{ url('/fruits') }}" >Seasonal Fruits</a></li>
							</ul>
          </li>


         
          <li><a  href="{{ url('/fruits') }}"style="color:black	; margin:12px;"><strong>About Us</strong></a></li>

          <li><a  href="{{ url('/contact') }}"style="color:black	; margin:12px;"><strong>Contact Us</strong></a></li>

       
      
     <!-- <form class="input-group " action="{{ url('/productsearch') }}"style=" " method="get">
        <input  type="text" id="psearch" name="psearch"  placeholder="Search here " style="height:27px; width:78px;font-size:12px; margin-top:20px" required>&nbsp
        <button  id="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);" type="submit" ><span class="fa fa-search" style="color: #7e0e0e" ></span></button> 
      
      </form>    -->
   
    
   
<li style="color:black	; margin:12px;">
    <a style="font-size:20px" href="{{ route('product.shoppingcart') }}">
        <i  style="color:black	;font-size:25px;" class="fa fa-shopping-basket" aria-hidden="true"></i>
        <span class="badge icart">{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span>
    </a>
</li>
<li class="dropdown" style="color:black	; margin:12px;">
  <a  style="color:black	;font-size:20px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
    <i  style="color:black	;font-size:25px; " class="fa fa-user" aria-hidden="true"></i>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    @if(Auth::check())
      <li><a href="{{ route('user.profile') }}"><b><i class="fa fa-shopping-cart"></i>&nbsp;Your Orders</b></a></li>
      <li role="separator" class="divider"><a href="#"></a></li>
      <li><a  href="{{route('user.edituser')}}"><b><i class="fa fa-user"></i>&nbsp;Update User Profile</b></a></li>
      <li role="separator" class="divider"><a href="#"></a></li>
      <li><a  href="{{ route('user.logout') }}"><b><i class="fa fa-sign-out"></i>&nbsp;Logout</b></a></li>
    @else
      <li><a href="{{ route('user.signup') }}"><b><i class="fa fa-user"></i>&nbsp;Register</b></a></li>
      <li><a  href="{{ route('user.signin') }}"><b><i class="fa fa-sign-in"></i>&nbsp;Log In </b></a></li>
    @endif
  </ul>
</li>
</ul>
   
   </div>
 
 </div>
</nav>

<script>
function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "myNavbar") {
    x.className += " responsive";
  } else {
    x.className = "myNavbar";
  }
}
</script>
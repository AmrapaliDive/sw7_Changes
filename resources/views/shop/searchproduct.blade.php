@extends('layouts.master')

@section('title')
Products
@endsection

@section('styles')
  <style>
<!--@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');-->
img{
  height:200px;
}
.img-responsive{
  height:200px;
}


.card {
  /* margin-right: 25px; */
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
  /* width: 34.8rem; */
  margin:5px;
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
   padding: 15px 22px 22px 22px;
}

.card__category {
    font-family: sans-serif;
    /* text-transform: uppercase; */
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: 500;
    color:#82ae46;
}

#gram{
  
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:16px;
  /* background:#82ae46; */
  background:white;
  color:black;

  align:end;
  text-align-last:center;
}
.card__title {
    margin-top: 5px;
    margin-bottom: 5px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 18px;
    font-family: sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}
#ruppee{
  font-family: 'Roboto', sans-serif;
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
  background:#2ab27b;
  color:white;
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


@media screen and (max-width: 640px) {
  #card{
    /* margin-left:-85px; */
    width:305px;
    margin-left:10px!important;

  }
  .col-md-12{
    margin-left:10px!important;
  }
}
 

 </style>
  <!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">-->
  <!-- <link href="http://materializecss.com/forms.html" rel="stylesheet"> -->
  
@endsection


@section('scripts')
<!-- <script>
    $(function(){
      $('#dynamic_select').on('change', function () {
          var q = $(this).val(); // get selected value
          alert(id);
          if (id) { 
  
              window.location = "/add-to-cart/"+ product->id +"/quantity/" + q ;
          }
          return false;
      });
    });
</script> -->

<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <script type="text/javascript">

$().ready(function(){
  sessionStorage.setItem("quantity", 0);
});

    $().ready(function(){
        //calculate();
	
        $(".minus").click(function(){
            changeQuantity(-1,this);
            calculate(this);
            
            

        });
        $(".plus").click(function(){
            changeQuantity(1,this);
          calculate(this);
        });
        $(".qty").keyup(function(e){
            if (e.keyCode == 38) changeQuantity(1,this);
            if (e.keyCode == 40) changeQuantity(-1,this);
            console.log($(this).val());
          calculate(this);
        });
	});



  function changeQuantity(num,obj)
       {
             console.log(obj);
            var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0){$(obj).parent().find('.qty').val(0);return;}
            $(obj).parent().find('.qty').val( value_to_set);
        }
        calculate(this);
     

  function calculate(obj){
        var price = parseFloat($(obj).parent().parent().find('.amount').val()) || 0;
     
      console.log(price);
     var quantity = parseInt($(obj).parent().parent().find('.qty').val());
      var q= sessionStorage.setItem("quantity", quantity);
      var p=sessionStorage.setItem("price", price);
     
      var total = price * quantity;
      $(obj).parent().parent().find('.card__by').text(total);

     var id= parseInt($(obj).parent().parent().parent().find('.qty').val());
    }

</script>
<script>
$(document).ready(function(){
    
    var total = parseInt($(".icart").text()); 
    $(".submit").click(function(){
                          //add to cart
        var total = parseInt($(".icart").text()); 
        console.log(total);
        if(total=="NaN")
        {
            ttotal=0;
          $(".icart").text(ttotal); 
        }//update
        else
        {

            total++;  
            $(".icart").text(total);    
        }
    });
});

function addToCart(id) {
 // alert(id);
 var quantity = sessionStorage.getItem("quantity");
 var price = sessionStorage.getItem("price");
 //alert(quantity);
 sessionStorage.removeItem("quantity");
 sessionStorage.removeItem("price");
  
  var amount=price;
  var qty=quantity;
 if(qty<=0)
 {
	 alert("Please Select Quantity!!!");
	 var total = parseInt($(".icart").text()); 
		//var total = $(".icart").text()); 
            console.log(total);
            total--;  
            $(".icart").text(total);    
			console.log(total);
	 return;
 }

callToAjax(id,qty,amount);
alert("Product Added to Cart Successfully!!!")
}

function callToAjax(id,qty,amount)
{
  //var url=url: 'add-to-cart/'+id+'/'+qty;
 // console.log(url);

  $.ajax({
  //url: 'add-to-cart/'+id+'/'+qty+'/'+amount,
  url: "{{URL::to('add-to-cart')}}" + '/'+id+'/'+qty+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.cart);
}
});

}

function addToWishlist(id) {
  $.ajax({
  url: "{{URL::to('/user/add-to-wishlist')}}" + '/'+id,
  //  url: "{{URL::to('/deductOne')}}" + '/'+id,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.wishlist);
  
  
  //$("#addToWishlist").text("Wishlisted");
  
}
});
alert("Product Added to Wishlist Successfully!!!")
location.reload();
}

function RemoveFromWishlist(id) {
  $.ajax({
  url: "{{URL::to('/user/remove-from-wishlist1')}}" + '/'+id,
  //  url: "{{URL::to('/deductOne')}}" + '/'+id,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.wishlist);
  
  
  //$("#addToWishlist").text("Wishlisted");
  
}
});
alert("Product Remove from Wishlist Successfully!!!")
location.reload();
}
</script>

@endsection


@section('content')
  @if(Session::has('success'))
  <div class="container" style="margin-top:30px;">
    <div class="col-md-6 ">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
 
    <div class="col-md-6 ">

    <a href="{{ url('/') }}" class="btn btn-warning pull-left"><i class="fa fa-angle-left"></i> Continue Shopping</a>
</div>
</div>

  @endif
  <div class="container-fluid" style="margin-top:30px;">


<div class="col-md-12"
style="
    padding-left: 0px;
    padding-right: 0px;"
 >

 @foreach($products->chunk(3) as $productChunk)
      @foreach($productChunk as $product)
      <!-- <div class="col-md-3 card"style="margin-bottom:30px;padding:0px"> -->
      <div id="card" class="col-sm-12 col-md-3 col-xs-12"style=" box-shadow: 8px 8px 8px 8px rgba(0,0,0,0.5) ; 
  transition: 0.3s;
  background:white;height:fit-content;min-height:340px;margin:35px;">  
      <a href="{{ url('productview/'.$product->id) }}" >
            <center><img style="margin-left:0px;margin-right:0px;margin-top:15px;width:300px;height:280px;" class="img-thumbnail"src="{!!  URL::to('images/products',array($product->path)) !!}  " alt="Product" class="img-responsive"></center>
            <div class="card__info">
              <!-- <span class="card__category">{{ $product->type }}</span> -->
              <h4 class="card__title"style="font-family:Times New Roman, Times, serif" >{{ $product->product_name }}</h4>
              <span id="rupee" class="rupee" style="font-size:22px;"> ₹</span>
              <span class="card__by" id="card__by" name="card__by" style="font-family:sans-serif;">
               {{ $product->mrp }}</span> 
              <!-- <b> /unit</b> -->
             <input type="hidden" name="amount" id="amount"  value="{{ $product->mrp }}"  class="amount"/>   
             <input type="hidden" name="productid" id="productid"  value="{{ $product->id }}"  class="productid"/>   
             </a> 
        <br>
              
                <i class="button plus fa fa-plus-circle"  value='+' style="font-size:30px;"></i>
              <input type="text" name="qty" id="qty"  value="0" style="width:20%;"  class="input-text qty"/>
              <i class="button minus fa fa-minus-circle"  value='-' style="font-size:30px;"></i>
              <br><br>
              @if(Auth::check() && (Auth::user()->role!="admin" || Auth::user()->role!="dealer"))
                <button type="submit"  style="margin-top:-55px;" class="btn btn-primary pull-right submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart<i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @else
              <button type="submit"  style="margin-top:-55px;" class="btn btn-primary pull-right submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart<i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @endif
             
              <!-- </form> -->
			            </div>
      </div>
      
      @endforeach
      
      

@endforeach
   </div>
</div>
<br><br>

        
    
@endsection

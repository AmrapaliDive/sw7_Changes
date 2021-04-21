@extends('layouts.master')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

 
@section('title')
Sw7
@endsection
@section('styles')
  <!-- <style>
  
  .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 25px;
    padding: 0 2px
    ;min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
div {
    text-align: center;
}
.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
  </style> -->
  <style>

.img-thumbnail {
    padding: 4px;
    line-height: 1.6;
    /* border: 1px solid #ddd; */
    /* border-radius: 4px; */
    transition: all .2s ease-in-out;
    display: inline-block;
    height: auto;
}
 
button{
	background-color:#2ab27b;
	color:white;
}
#bikini-display2, #bikini-display3, #bikini-display4 {
  display: none;
  position: relative;
  height: 409px;
}

@media (max-width: 1275px) {
  #bikini-display2, #bikini-display3, #bikini-display4  {
    display: none;
    position: relative;
    height: 375px;
  }
}

@media (max-width: 1150px) {
  #bikini-display2, #bikini-display3, #bikini-display4  {
    display: none;
    position: relative;
    height: 205px;
  }
}

#bikini-display1 {
  position: relative;
  height: 409px;
}

@media (max-width: 1275px) {
  #bikini-display1  {
    position: relative;
    height: 375px;
  }
}

@media (max-width: 1150px) {
  #bikini-display1  {
    position: relative;
    height: 325px;
  }
}

/* .bikini-product-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 10px;
  background-color: white;
  padding-top: 50px;
  padding-bottom: 50px;
  height: 1000px;
} */



.bikini-grid1 {
  grid-column-start: 0;
  grid-column-end: 0;
  position: relative;
  text-align: center;
  display: inline-block;
  padding-left: 10px;

}

.bikini-img-container {
  margin: auto;
  position: relative;
  display: inline-block;
}

.bikini-thumbnail {
  padding-top: 3px;
  padding-left: 3px;
  /* min-width: 494px; */
}

.bikini-thumbnail img {
  height: 100px;
}

@media (max-width: 1275px) {
  .bikini-thumbnail img  {
    height: 91.68px;
  }
}

@media (max-width: 1150px) {
  .bikini-thumbnail img  {
    height: 79.456px;
  }
}

.bikini-thumbnail img:hover {
  opacity:0.7;
  -moz-transform: scale(1.02);
  -webkit-transform: scale(1.02);
  transform: scale(1.02);
  cursor: pointer;

}


.thumbnail-clicked {
  border: 3px solid black;
}
select, option {
	font-family: 'FontAwesome';
	font-style: normal;
  align:center;
}
#gram{
  height:30px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  background:white;
  color:black;
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
  -webkit-animation: 1s linear infinite condemned_blink_effect; // for Android
  animation: 1s linear infinite condemned_blink_effect;
  color:white;
	text-shadow: white 2px 2px 1px;
  font-family: 'Patua One', cursive;

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

#grid {
    margin-bottom: 30px;
}
#product-view{
  width:65%;
}
.quick_look {
    display: none;
    position: absolute;
    bottom: 20px;
    left: 50%;
    margin-left: -51px;
    background: transparent;
    border: #FFF 2px solid;
    padding: 8px 25px;
    color: #FFF;
    font-size: 14px;
    cursor: pointer;
}

.quick_look:hover {
    background: #FFF;
    color: #333;
}

.product-info {
    width:50%;
    padding: 0 30px 20px 20px;
    line-height: 1.5;
  
}

div.product-info ul {
    margin: 10px 0px;
    padding: 0;
}

div.product-info li {
    cursor: pointer;
    list-style-type: none;
    display: inline-block;
    color: #F0F0F0;
    text-shadow: 0 0 1px #666666;
    font-size: 14px;
}

div.product-info .selected {
    color: #e4a400;
    text-shadow: 0 0 5px #ffb900;
}

.product-title {
    font-size: 1.5em;
}

.product-category {
    margin: 20px 0px;
    font-size: 0.9em;
    color: #c4c4c5;
    text-transform: uppercase;
    border-left: #c4c4c5 3px solid;
    padding: 0px 5px 0px 5px;
    text-transform: uppercase;
}

button.btn-info {
    padding: 10px;
    margin: 20px 20px 10px 0px;
    padding: 10px 20px;
    background: #67bdf7;
    border: #60b2e8 1px solid;
    border-radius: 3px;
    color: #FFF;
}

.ui-widget-header {
    border: none !important;
    background: none !important;
}

#product-view {
    border: #CCC 1px solid;
    overflow: auto;
    display: inline-block;
    padding-top: 20px;
    margin-top: 30px;
    text-align: left;
}

div.preview-image img.thumbnail {
    width: 70px;
    margin-bottom: 20px;
    padding: 5px;
}

#thumbnail-container {
    width: 70px;
    cursor: pointer;
}

.focused {
    border: 1px solid #e77600 !important;
    box-shadow: 0 0 3px 2px rgba(228, 121, 17, .5);
}



#product-view {
    display: flex;
    flex-direction: row;
}

.preview-image {
    display: flex;
    flex-direction: row;
}


/* Responsive Styles */

@media screen and (min-width: 1224px) {
    div.image {
        width: 300px;
    }
}

@media screen and (min-width: 1044px) and (max-width: 1224px) {
    div.image {
        width: 300px;
    }
}

@media screen and (min-width: 845px) and (max-width: 1044px) {
    div.image {
        width: 200px;
    }
}

@media screen and (max-width: 560px) {
    #preview-enlarged {
        float: none;
    }
    #thumbnail-container {
        width: auto;
        margin-top: 10px;
    }
}

@media screen and (max-width:1080px) {
    #product-view {
        display: flex;
        flex-direction: column;
    }
    .product-info {
      width: 98%;
    }
    div.preview-image {
        flex-direction: column-reverse;
        width:98%;
    }
    #thumbnail-container {
        display: flex;
        padding: 10px 0;
    }
    #preview-enlarged {
      margin-left:-40px;
   }
}

@media screen and (max-width:768px) {
    div.preview-image {
        padding: 10px;
    }
    .product-info {
        padding: 10px 0;
    }
    #product-view{
        width:100%;
    }
}

.thumbnail {
    margin-top: 10px
}

.thumbnail img {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 1px solid #eee;
    padding: 5px;
    cursor: pointer;
    border-radius: 4px
}

.thumbnail img:hover {
    border: 1px solid #00000059
}

 </style>
  
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    function getAmount()
    {
      a = document.getElementById("amount").value;
      //alert(a);
      return a;
    }

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
        
             //$("#quantity").val( parseInt($("#quantity").val())+num);
			      //console.log(obj);
            var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0){$(obj).parent().find('.qty').val(0);return;}
            $(obj).parent().find('.qty').val( value_to_set);
             
        }

    
    function calculate(obj){
      
  //var price = parseFloat($(obj).parent().parent().parent().find('.amount').val()) || 0;
   var price = getAmount();
      console.log(price);
     var quantity = parseInt($(obj).parent().parent().find('.qty').val());
      //alert(quantity);
    
    sessionStorage.setItem("quantity", quantity);
    sessionStorage.setItem("price", price);
      //console.log(p);
      var total = price * quantity;
     //alert(total);    
     
     $(obj).parent().parent().parent().find('.card__by').text(total);
      
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
 price = document.getElementById("amount").value;
 quantity = document.getElementById("qty").value;
  var amount=price;
  //alert(amount);
  var qty=quantity;
 if(qty<=0)
 {
	 alert("Please Select Quantity!!!");
	 var total = parseInt($(".icart").text()); 
		//var total = $(".icart").text()); 
            console.log(total);
            total--;  
            $(".icart").text(total);    
			//console.log(total);
	 return;
 }
console.log(id);
callToAjax(id,qty,amount);

}

function callToAjax(id,qty,amount)
{
    
  $.ajax({
  //url: 'http://localhost/ebay/public/add-to-cart/'+id+'/'+qty+'/'+amount,
  url: "{{URL::to('add-to-cart')}}" + '/'+id+'/'+qty+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
    alert("Product Added to Cart Successfully!!!")
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

<script>
function change_image(image){
var image_container = document.getElementById("main-image");


image_container.src = image.src;

}
</script>
 
@endsection

@section('content')
<div class="container" style="margin-top:50px;border:1px solid lightgray;background-color:white;border-radius:12px;box-shadow: 4px 4px 4px 0 rgba(0,0,0,0.7);margin-bottom:80px;">	

  <div class="col-md-12"style="min-height:none;" >
	<!--	<div class="col-md-6 ">
 <div class = "bikini-grid1" style="">
  @if($product->stock == "unavailable")
               <b><h3 class="card__stock" style="color:red;">Out Of Stock</h3></b>
               @elseif($product->stock == "available")
               <b><h3 class="card__stock" style="color:red;">Available</h3></b>
               @endif
  <center><img style="height:250px; width:450px;margin:10px;" src="{!!  URL::to('/images/vege/'.$product->path) !!}  " alt="Product" class="img-responsive "></center>
		</div>
	</div> -->

  <div class="col-md-6">
  
       <div class="p-4"> 
       <img id="main-image" src="{!!  URL::to('/images/products'.'/'.$product->path) !!}" style="width:350px;height:450px; margin-top:15px;border:0px !important;"  class="img-thumbnail" />
        </div>
        <div style="border:none;padding-left:25px;">
        @if($product->path2!=="NA")
         <img onclick="change_image(this)" src="{!!  URL::to('/images/products'.'/'.$product->path2) !!}" width="90">
         @endif

         @if($product->path3!=="NA")
		 <img onclick="change_image(this)" src="{!!  URL::to('/images/products'.'/'.$product->path3) !!}" width="90">
		 @endif
           
           <img onclick="change_image(this)" src="{!!  URL::to('/images/products'.'/'.$product->path) !!}" width="90">
            </div>
            
    
  
      	</div>

  <div class="col-md-6" style="padding-left:0px;margin-top:10px;">
  <h4>{{ $product->title }}</h4>
		<span style="font-family:Roboto, serif;color:black;font-size:15px;"><b>Product Name :-</b></span><b><span style="font-family:Roboto; font-size:14px;"> {{ $product->product_name }}</span></b><br><br>
		<span style=" font-family:Roboto, serif; font-size:15px;color:black;"><b>Product Category :-</b></span><span style="font-family:Roboto;font-size:14px;"> {{$product->type}}</span><br><br>
  

    <span style="font-family:Roboto, serif;color:black;font-size:15px;" class="">   
    <!-- MRP Price :₹ {{ $product->mrp }}<br> -->
    <b style="font-family:Roboto, serif;color:black;font-size:15px;">MRP at Price :- ₹
           
           </b ><span  class="card__by" id="card__by" name="card__by" style="font-family:Roboto; font-size:14px;text-decoration: line-through;">{{ $product->mrp }} </span> <br> <br>
            <b style="font-family:Roboto;color:black;font-size:15px;">Discount :- ₹ <span  style="font-family:Roboto;color:black;"></b> {{ $product->discount }} </span> </span>  <br> <br>
            <b style="font-family:Roboto;color:black;font-size:15px;">GST :- 
           
           <span  class="card__by1" id="card__by1" name="card__by1" style="font-family:Roboto;"></b>{{ $product->gst }} % </span> <br> <br>
            
             <b style="font-family:Roboto;color:black;font-size:15px;">Available at Price :- ₹
           
            <span  class="card__by1" id="card__by1" name="card__by1" style="font-family:Roboto"></b><b style=" font-size:15px;">{{ $product->price }} </b></span> 
           
             <input type="hidden" name="amount" id="amount"  value="{{ $product->mrp }}"  class="amount"/> 
             <input type="hidden" name="pid" id="pid"  value="{{ $product->pid }}"  class="pid"/>     
             </a> 
           
		<hr>
    <div class="col-md-3" style="margin-bottom:25px;">          
    
    <i class="button plus fa fa-plus-circle"  value='+' style="font-size:30px;"></i>
    <input type="text" name="qty" id="qty" maxlength="12" value="0" style="width:20%;" onchange="" class="input-text qty"/>
    <i class="button minus fa fa-minus-circle"  value='-' style="font-size:30px;"></i>
    {{$product->stock}} 
  </div>
  @if($product->stock<= "0")
    <div class="col-md-3" style="margin-bottom:25px;color:red;">          
    Stock Unavailable
  </div>
  @else
  <div class="col-md-3" style="margin-bottom:25px;">          
    Stock Available
  </div>
 
  @endif
<!--<div class="" style="margin-top:20px;">
          
          @if(Auth::check() && (Auth::user()->role!="admin" || Auth::user()->role!="dealer"))
                <button type="submit"   class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart<i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @else
              <button type="submit"   class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart<i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @endif
     </div>-->
    


    <br/>
    <br/>
    <br/>
<br/>

           
		
    
    <h4 style="font-size:16px;font-family:roboto;color:black;"><b>Description : </b></h4>
     <p style="text-align:justify;"> 	{!! $product->description !!}</p>

     @if(Auth::check() && (Auth::user()->role!="admin" || Auth::user()->role!="dealer"))
                <button type="submit"   class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart<i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @else
              <button type="submit"   class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart<i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @endif
              <br/>
              <br/>
     </div>       

<br>
@if($product->video)
            <p style="font-size:18px"><b>Video:</b><br><a href="{{$product->video}}">{{$product->video}}</a></p>
            @endif
					
   
    
   
       
    	</div></div><br><br>
          
    
	
    </div>
</div><br>

@endsection

@extends('layouts.master')
@section('title')
Wishlist
@endsection

@section('styles')
  <style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

/* .col-md-3{
  width:30%;
 
}
 .col-xs-12{
  width:100%;
} */

.card {
  
  margin:5px;
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
    width: 34.8rem;
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
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 500;
    color:#82ae46;
}

#gram{
 
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:16px;
  /* background:#82ae46; */
  background:#2ab27b;
  color:black;

  align:end;
  text-align-last:center;
}
.card__title {
    margin-top: 5px;
    margin-bottom: 6px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 22px;
    font-family: 'Raleway', sans-serif;
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
#dynamic_select{
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


 </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
  <!-- <link href="http://materializecss.com/forms.html" rel="stylesheet"> -->

  @section('scripts')

<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <script type="text/javascript">

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
        var gram = parseInt($(obj).parent().find('.gram').val());
            //alert(gram);
            if(gram<=0)
                {
                  alert("Please select quantity!");
                }
             if(gram>0)
             {
			      console.log(obj);
            var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0){$(obj).parent().find('.qty').val(0);return;}
            $(obj).parent().find('.qty').val( value_to_set);
             }
        }

        $('.gram').on('change',function(){
          calculate(this);
        });

  function calculate(obj){
    var gram = parseInt($(obj).parent().find('.gram').val());
    if(gram<=0)
                {
                  alert("Please Select How many gram!!!");
                  
                  var value_to_set= 1;
                  $(obj).parent().find('.qty').val(value_to_set);
                }
    
    else
    {
      var price = parseFloat($(obj).parent().parent().find('.amount').val()) || 0;
     
      console.log(price);
     var quantity = parseInt($(obj).parent().find('.qty').val());
     var gram = parseInt($(obj).parent().find('.gram').val())
    // alert(gram);
    
      var q= sessionStorage.setItem("quantity", quantity);
      var g= sessionStorage.setItem("gram", gram);
      var p=sessionStorage.setItem("price", price);
      //console.log(q);
      var total = (price *  (gram/1000))*quantity;
     // console.log(total);    
     
     $(obj).parent().parent().find('.card__by').text(total);

     var id= parseInt($(obj).parent().parent().parent().find('.qty').val());
      }

      var quantity = parseInt($(obj).parent().find('.qty').val());

if(quantity < 1){
     
          parseFloat($(obj).parent().parent().find('.submit').attr('disabled','true'));
          }
          else
          {
           parseFloat($(obj).parent().parent().find('.submit').removeAttr('disabled'));
          }
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
 var gram = sessionStorage.getItem("gram");
 var price = sessionStorage.getItem("price");
 //alert(quantity);
 sessionStorage.removeItem("quantity");
 sessionStorage.removeItem("gram");
 sessionStorage.removeItem("price");
  // $('input[name="qty"]').each(function(){
  //           mydata = $(this).val();
	//     	myid= $(this).attr('id');
  //       alert(myid);
	// 		if(id == myid)
	// 		{
			
	// 			window.alert(mydata);
	// 			return false;
	// 		}
	// 	});
  var amount=price;
  var qty=quantity;
  var gram=gram;
  //alert(gram);
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

 

callToAjax(id,qty,gram,amount);
alert("Product Added to Cart Successfully!!!")
}


function addToWishlist(id) {
  $.ajax({
  url: "{{URL::to('/user/add-to-wishlist')}}" + '/'+id,
  //  url: "{{URL::to('/deductOne')}}" + '/'+id,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.wishlist);
}
});
alert("Product Added to Wishlist Successfully!!!")
}

function callToAjax(id,qty,gram,amount)
{
  //var url=url: 'add-to-cart/'+id+'/'+qty;
 // console.log(url);

  $.ajax({
  //url: 'add-to-cart/'+id+'/'+qty+'/'+gram+'/'+amount,
  url: "{{URL::to('/add-to-cart')}}" + '/'+id+'/'+qty+'/'+gram+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.cart);
}
});

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
//location.reload();
}
}
</script>
@endsection

@endsection

@section('content')
<div class="container-fluid" style="margin-top:20px;">
  {{-- <div class="row"> --}}
    
    <div class="col-md-12 col-xs-12 " > 
      @if($products!=null)
      @foreach($products as $product)
     
    <div class="col-md-4 col-xs-12  card" style="margin-bottom:20px;">  
        @if($product->stock == "unavailable")
                <b><h4 class="card__stock" style="color:red;">Out Of Stock</h4></b>
                @elseif($product->stock == "available")
                <b><h4 class="card__stock" style="color:red;">Available</h4></b>
                @endif
        <a href="{{ url('productview/'.$product->id) }}"  >
        <img style="margin-left: 0px;margin-right: 0px;width:100%;height:150px;" src="{!!  URL::to('images/storage/products',array($product->path)) !!}  " alt="Product" class="img-responsive">
        </a>
        <div class="card__info" >
           <span class="card__category">{{ $product->type}} &nbsp;&nbsp;&nbsp; {{ $product->title }}</span>
           <br>
           <span id="rupee" class="rupee" style="color:#82ae46;"> ₹</span>
           <span class="card__by1" id="card__by1" name="card__by1" style="color:#82ae46;   font-size: 21px;">
              {{ $product->price }}</span> 
             
             <input type="hidden" name="amount" id="amount"  value="{{ $product->price }}"  class="amount"/>   
             </a>
             @if($product->qtype=="Gram")
             <select class="pull-right gram" id="gram" name="gram"  style="height:40px; width:120px; font-size:15px; "  >
               
             <option value="0" selected hidden >Select Qty...</option>
                      <option value= 1000> 1 kg </option>
                      <option value= 500> 500 gm </option>
                      <option value= 250> 250 gm </option>
                      <option value= 100> 125 gm </option>
                      </select>
              @elseif($product->qtype=="Dozen")
              <select class="pull-right gram" id="gram" name="gram" style="height:40px; width:120px; font-size:15px; "  >
              <option value="0" selected hidden>Select Qty...</option>
                      <option value= 1000> 1 Dozen </option>
                     
                      </select>
              @elseif($product->qtype=="Judi")
              <select class="pull-right gram" id="gram" name="gram" style="height:40px; width:120px; font-size:15px; " >
              <option value="0" selected hidden>Select Qty...</option>
                      <option value= 1000>Judi</option> 
                      </select>
           

              @elseif($product->qtype=="Liter")

              <select class="pull-right gram" id="gram" name="gram" style="height:40px; width:120px; font-size:15px; "  >
               
             <option value="0" selected hidden>Select Qty...</option>
                      <option value= 1000> 1 Liter</option>
                      <option value= 500> 500 ml</option>
                      <option value= 250> 250 ml </option>
                      <option value= 100> 125 ml</option>
                      </select>

              @endif
              <br>
              <i class="button plus fa fa-plus-circle"  value='+' style="font-size:25px;"></i>
              <input type="text" name="qty" id="qty" maxlength="12" value="0" style="width:50px;height:30px; "  class="input-text qty"/>
              <i class="button minus fa fa-minus-circle"  value='-' style="font-size:25px;"></i>
<br><br>
              
               &nbsp;
              <b><span id="ruppee" class="ruppee" style="font-weight:bold;
    color:#82ae46; font-size:25px;"> ₹</span></b>
              <span class="card__by" id="card__by" name="card__by" > {{ $product->price }}</span>  
              <!-- <a id="buy" role="button" class="btn btn-primary" href="'add-to-cart/'+ {{$product->id}} + '/quantity/'  + this.value '">Add To Cart</a> -->
              &nbsp;&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  
              <?php
              $stock=$product['stock'];
             ?>
<div class="pull-right" style="padding-bottom: 30px;">
@if(Auth::check())
             <!-- <a class="btn btn-primary" href="{{url('/user/remove-from-wishlist/'.$product->id)}}">Remove</a>  -->
             <a  id="removeFromWishlist" href="" onclick="RemoveFromWishlist({{$product->id}})"><i class="fa fa-heart pull-left" style="font-size:48px;color:black"></i></a> 
 @endif            
              <button disabled type="submit"   class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})" style="height:40px;"><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
           
             <!-- <button disabled type="submit"   class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})" style="height:40px;"><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button>  -->

</div>
        </div>
      
    </div>
  
    @endforeach
    @else
    <center>No Products found in Wishlist </center>
    <br><br><br>
    @endif
</div>

  </div>
</div>

@endsection

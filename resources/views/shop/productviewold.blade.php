@extends('layouts.master')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

@section('title')
Bhajiwala
@endsection

@section('css')

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
 </style>
  
@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>

function init() {
	document.getElementById("clickMe1").addEventListener("click", function() {
		document.getElementById("bikini-display1").style.display = "block";
		document.getElementById("bikini-display3").style.display = "none";
		document.getElementById("bikini-display4").style.display = "none";
		document.getElementById("bikini-display2").style.display = "none";
	});

	document.getElementById("clickMe2").addEventListener("click", function() {
		document.getElementById("bikini-display2").style.display ="block";
		document.getElementById("bikini-display1").style.display ="none";
		document.getElementById("bikini-display3").style.display ="none";
		document.getElementById("bikini-display4").style.display ="none";
	
	});

	document.getElementById("clickMe3").addEventListener("click", function() {
		document.getElementById("bikini-display3").style.display ="block";
		document.getElementById("bikini-display1").style.display ="none";
		document.getElementById("bikini-display4").style.display ="none";
		document.getElementById("bikini-display2").style.display ="none";
	});

	document.getElementById("clickMe4").addEventListener("click", function() {
		document.getElementById("bikini-display4").style.display ="block";
		document.getElementById("bikini-display1").style.display ="none";
		document.getElementById("bikini-display3").style.display ="none";
		document.getElementById("bikini-display2").style.display ="none";
	});
}
init();

$(".bikini-thumbnail img").click(function() {
	//Remove the my-list--selected class from any elements that already have it
	$('.thumbnail-clicked').removeClass('thumbnail-clicked');
	//Add the .border-bottom class back to any element that is missing it
	$('.thumbnail-clicked').addClass('bikini-thumbnails');
	//Add the my-list--selected class to the clicked element
	$(this).addClass('thumbnail-clicked');
	//Remove the border-bottom class from the clicked element
	$(this).find('.bikini-thumbnails').removeClass('bikini-thumbnails');
  });
</script>

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
  url: 'http://localhost/ebay/public/add-to-cart/'+id+'/'+qty+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
    alert("Product Added to Cart Successfully!!!")
	console.log(response.cart);
}
});

}
</script>
 
@endsection


@section('content')
<div class="container"style="margin-top:120px;border:1px solid lightgray;background-color:white;border-radius:12px;box-shadow: 4px 4px 4px 0 rgba(0,0,0,0.7); ">	
<div class="col-md-12">
	<div class="col-md-6 ">
	<div class = "bikini-grid1" style="margin:10px">
  <center><img style="height:100%;width:100%;" src="{!!  URL::to('/images/storage/products'.'/'.$product->path) !!}  " alt="Product" class="img-responsive "></center>
		</div>
	</div>

  <div class="col-md-6"style="padding-left:0px">
		<h4 style="text-transform: capitalize;color:black;"><b>{{ $product->product_name }}</b></h4>
        
        <b style="color:black;">   MRP Price :₹ {{ $product->mrp }}<br>
             Discount : {{ $product->discount }} %<br>
            Available at Price ₹:
            <span class="card__by" id="card__by" name="card__by">{{ $product->price }} </b></span> 
            
             <input type="hidden" name="amount" id="amount"  value="{{ $product->price }}"  class="amount"/> 
             <input type="hidden" name="pid" id="pid"  value="{{ $product->pid }}"  class="pid"/>     
             </a> 
		<hr>
    <b style="color:black;">Description:</b> {!! $product->description !!}<br>
		
	
    <b style="color:black;">Type :</b> {{ $product->type }}<br>

    <b style="color:black;">Subtype : </b>{{ $product->subtype }}<br>
           <div class=" pull-left" style="margin-bottom:30px;">      
        
              
          
                </div>
      <div class="pull-right " style="margin-bottom:30px;">          
    
        <i class="button plus fa fa-plus-circle"  value='+' style="font-size:30px;"></i>
        <input type="text" name="qty" id="qty" maxlength="12" value="1" style="width:20%;" onchange="" class="input-text qty"/>
        <i class="button minus fa fa-minus-circle"  value='-' style="font-size:30px;"></i>
      </div><br>
      <br>
    <div class="" style="margin-top:20px;">
              <button type="submit"  style="margin-bottom:20px;width:50%;height:80%;" class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$product->id}})">Add To Cart</button> 
         </div>
         <br>
            
    </div>
		</div>
    </div>
</div><br><br>

@endsection

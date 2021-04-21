@extends('layouts.master')


@section('styles')
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> -->
<style>
  
#text{
  color:black;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.img-responsive{
  max-width:1000%;
}

blink {
  -webkit-animation: 3s linear infinite condemned_blink_effect; // for Android
  animation: 4s linear infinite condemned_blink_effect;
  text-shadow: black 2px 2px 1px;
}

.page-header {
    padding-bottom: 10px;
    margin: 10px 22px 20px 22px;
    border-bottom: 1px solid #b11f1f;
}
.ftco-animate{
 color:white;
 margin-top:150px;
 
  
}
.hero-wrap, .img {
  height:350px;
  margin-top:0px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
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
.table .thead-primary {
    background: #82ae46;
}
.cart-list {
    overflow-x: scroll;
}
</style>
@endsection

@section('scripts')
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">

   function changeQuantity(num,obj){
             var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0)
            {
              $(obj).parent().find('.qty').val(0);
              return;
            } 
            $(obj).parent().find('.qty').val( value_to_set);
            
        }
  
        function calculate(obj,val){
      
      var price = parseFloat($(obj).parent().parent().parent().parent().find('.amount').val()) || 0;
      
     
      var quantity = parseInt($(obj).parent().parent().parent().find('.qty').val());
      //for stock
      var stquantity = parseInt($(obj).parent().parent().parent().find('.quantity').val());

      var tprice = price * quantity
      //console.log(tprice);
          
      $(obj).parent().parent().parent().parent().find('.text2').text(tprice)  || 0;

      // $(".text2").css("font-weight","bold");
	    // $(".text2").css("font-size","15px;");

        var dtotal=0;
          $(".text2").each(function()
        {
          //console.log( $(".text2").text());
          
           dtotal += parseFloat($(this).text()) || 0;
            console.log(dtotal);
        });
    $('.inner-left-md').text(dtotal);
    // $('.inner-left-md').css("font-weight","bold");
    // $('.inner-left-md').css("font-size","18px;");
    // $('.inner-left-md').css("color","black");
    
     var id =  parseInt($(obj).parent().parent().parent().parent().find('.pid').val());
     
     var quantity = parseInt($(obj).parent().parent().parent().find('.qty').val());
     var price = parseFloat($(obj).parent().parent().parent().parent().find('.amount').val()) || 0;
        if(quantity>0)
          {
          //console.log("qty " +qty);
          $.ajax({
          url: 'add-to-cart1/'+id+'/'+quantity+'/'+price,
          type: 'get',
          dataType: 'json',
          success: function(response){
          console.log(response.cart);
          }
          });
          }
       
  }

  $(document).ready(function() {
       // alert("Settings page was loaded");

       $(".plus").click(function(){
       
            changeQuantity(1,this);
            calculate(this,1);
        });

        $(".minus").click(function(){
           changeQuantity(-1,this);
            calculate(this,-1);
         });
         $(".qty").on('focusin', function(){
        console.log("Saving value " + $(this).val());
        $(this).data('val', $(this).val());
        });

        $(".qty").keyup(function(e){
            if (e.keyCode == 38) changeQuantity(1,this);
            if (e.keyCode == 40) changeQuantity(-1,this);
           calculate(this);
          
          var qty = ($(this).val());
         });
        

    });
</script>
@endsection
@section('content')
<div class="body-content outer-top-xs">
@if(Session::has('cart'))
	<div class="container">
		<div class="row ">
			<div class="shopping-cart  ">
				<div class="shopping-cart-table">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					
					<th class="cart-qty item">Quantity</th>
        
         <th style="font-size:14px;" class="text-center">Unit MRP Price (In ₹ )</th>
         <th style="font-size:14px;" class="text-center">GST (in %)</th>
         <th style="font-size:14px;" class="text-center">Unit Discount (In ₹ )</th>
					<th class="cart-sub-total item">Unit Price (In ₹ )</th>
					<th class="cart-total last-item">Price (In ₹ )</th>
				</tr>
			</thead><!-- /thead -->
			
			  @foreach($products as $product)
			<tbody>
				<tr>

					      <td class="actions"  data-th="">
                              <div class="btn-group ml-3">
                              <input type="hidden" name="quantity[]" value="{{$product['item']['id']}}" />
                                 <button class="btn btn-xs dropdown-toggle " type="button" data-toggle="dropdown" style= "font-size:19px;">
                                      <i class="fa fa-trash" style="font-size:22px;" ></i>&nbsp;<span class="caret"></span></button>
                                    
									  <ul class="dropdown-menu">
											<!-- <li><a id="ab" href="{{ route('product.deductByOne', ['product' => $product['item']['id']]) }}" style="font-size:17px;" onclick="return confirm('Are you sure you want to remove this item?');">Remove item from cart by one</a> </li> -->
											<li><a id="ab" href="{{ route('product.removeItem', ['product' => $product['item']['id']]) }}" style="font-size:17px;" onclick="return confirm('Are you sure you want to remove this item?');">Delete all items from cart</a> </li>
									  </ul>
								  </div>
							</td>
					<td class="cart-image">
					
						    <img src="{!!  URL::to('/images/products/',array($product['item']['path'])) !!}" alt="">
					
					</td>
					<td data-th="Product" class="cart-product-name-info">
						<div class="row">
											
							<div id="text">
							  <center>
							  <input type="hidden"  class="pid" id="pid" name="pid" value="{{ $product['item']['id'] }}">
								<h4 class="cart-product-description"  >{{ $product['item']  ['product_name'] }}</h4>
								<input type="hidden" style="color:black;" class="pid" id="pid" name="pid" value="{{ $product['item']['id'] }}">
							  </center>
						</div>
					</div>
					</td>
				
					
					  <td data-th="Quantity" class="text-center" id="number" style="color:black;font-size:16px;" >
              <center>
                        <div>
                           <i class="button plus fa fa-plus-circle"  value='+' style="font-size:23px;"></i><br>
                            <input type="number" name="qty" id="qty" maxlength="12" style="width:40px;" value="{{ $product['qty'] }}" min='1' class="input-text qty" /><br>
                            <i class="button minus fa fa-minus-circle"  value='-' style="font-size:23px;"></i>
                            
                        </div> 
                    </center>
              </td>
              <td data-th="MRP" class="" id="text2"><span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$product['item']['mrp']  }}</span></td>
              <td data-th="GST" class="" id="text2"><span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$product['item']['gst']  }}</span></td>
              <td data-th="Discount" class="" id="text2"><span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$product['item']['discount']  }}</span></td>
					<!--<td class="cart-product-sub-total" data-th="Unit" id="text1"><span class="cart-sub-total-price">{{$product['perprice']  }} <input type="hidden" name="amount" id="amount" style="width:100px;" value="{{ $product['perprice'] }}" class="input-text amount" /><br></span>
					</td>-->
					 <td data-th="Unit" class="cart-product-sub-total" id="text1"><span class="cart-grand-sub-total"> {{$product['perprice']  }} <input type="hidden" name="amount" id="amount" style="width:100px;" value="{{ $product['perprice'] }}" class="input-text amount" /></span></td>
			  
					<td data-th="Subtotal" class="cart-product-grand-total" id="text2"><span class="cart-grand-total-price text2"> {{$product['price']  }}</span></td>
				</tr>
			
			</tbody><!-- /tbody -->
			 @endforeach
			
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->				
<div class="col-md-4 col-sm-12 estimate-ship-tax">

</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">

</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					
					<div class="cart-grand-total">
						Grand Total (In ₹ ) :<span id="tamount" class="inner-left-md"z>{{ $totalPrice}}</span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				
		</tbody><!-- /tbody -->
		 <tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
							
								<!-- <a href="{{ route('checkout') }}" class="btn btn-upper btn-primary outer-left-xs" type="button" onclick="return confirm('Are you sure you want to continue?');">
                                 <i class="fa fa-money"></i> Cash On Delivery </a> -->
                                 
								<a href="{{ route('onlinePayment') }}" class="btn btn-upper btn-primary pull-right outer-right-xs" type="button" onclick="return confirm('Are you sure you want to continue?');"><i class="fa fa-credit-card"></i> Checkout</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
@else

      <div class="container">
            <div class="col-md-8 col-md-offset-2" >
            <center><img src="{!!  URL::to('/images/Icon-no-cart.png')!!}" class="" style="margin-top:50px;height:150px;width:200px;"/></center>
                <h3 style="color:black;margin-top:30px;font-size:30px; margin-bottom:30px;">
                <center>No Products added to your Cart.</center></h3>
             
                <center> <a href="{{ url('/') }}" class="btn btn-primary btn-lg" style=""> <center> Continue Shopping</center></a></center>
    
            </div>
			<br>
      </div> 
	  <br>

  @endif  
    
@endsection
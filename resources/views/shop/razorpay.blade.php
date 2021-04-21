@extends('layouts.master')

@section('title')
Checkout
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
           <br><br>
            <div class="panel panel-default col-md-12 col-xs-12" style=" border-radius:10px; font-family:Times New Roman; border-color:black; background-color:#ECF0F1">
                <div class=" " style="font-size:28px; margin-top:8px; color:#18619b"><center><b>Checkout</b></center></div>
                <center><b><span style="color:black;"></b></span></center>
                <!-- <hr style="margin-top:0px;border-top: 1px solid black;"> -->

                <div class="panel-body" style="color:black;font-family:Times New Roman; font-size:18px;margin-top:-25px">
                
                <!-- <hr style="margin-top:-15px;border-top: 1px solid black;"> -->
                <br><br>
               
                <!-- ●&nbsp;&nbsp;&nbsp;Validity : Lifetime Membership Plans<br><br>
                ●&nbsp;&nbsp;&nbsp;Advanced Calender<br><br>
                ●&nbsp;&nbsp;&nbsp;Professional Bills<br><br>
                ●&nbsp;&nbsp;&nbsp;Patient Details PDF<br><br>
                ● &nbsp;&nbsp;&nbsp;Unlimited Documents,Confirmation,emails<br><br>
                ● &nbsp;&nbsp;&nbsp;Hospital Websites<br><br>
                ● &nbsp;&nbsp;&nbsp;Professional Profile<br><br> -->
               </b>
               <div class="row ">
			<div class="shopping-cart  ">
				<div class="shopping-cart-table">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<!-- <th class="cart-romove item">Remove</th> -->
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					
					<th class="cart-qty item">Quantity</th>
        
         <th style="font-size:16px;" class="text-center">Unit MRP Price (In ₹ )</th>
         <th style="font-size:16px;" class="text-center">GST <br>(in %)</th>
         <th style="font-size:16px;" class="text-center">Unit Discount<br> (In ₹ )</th>
					<th class="cart-sub-total item">Unit Price<br> (In ₹ )</th>
					<th class="cart-total last-item">Price <br>(In ₹ )</th>
				</tr>
			</thead><!-- /thead -->
			
			  @foreach($products as $product)
			<tbody>
				<tr>
					      <!-- <td class="actions"  data-th="">
                              <div class="btn-group ml-3">
                                 <button class="btn btn-xs dropdown-toggle " type="button" data-toggle="dropdown" style= "font-size:19px;">
                                      <i class="fa fa-trash" style="font-size:22px;" ></i>&nbsp;<span class="caret"></span></button>
                                    
									  <ul class="dropdown-menu">
										
											<li><a id="ab" href="{{ route('product.removeItem', ['product' => $product['item']['id']]) }}" style="font-size:17px;" onclick="return confirm('Are you sure you want to remove this item?');">Delete all items from cart</a> </li>
									  </ul>
								  </div>
							</td> -->
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
				
					
					 
              <center>
                      
                         
                            <!-- <input type="number" name="qty" id="qty" maxlength="12" style="width:40px;" value="{{ $product['qty'] }}" min='1' class="input-text qty" /><br> -->
                            <td data-th="MRP" class="" id="text2"><span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $product['qty'] }}</span></td>
                         
                            
                     
                    </center>
             
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


    </div>
    </div>
    </div>


                    <div class="text-center">
                        <form action="{!!route('transactionSuccess')!!}" method="POST"  style="color: blue">
                        {{csrf_field()}}
                                <!-- Note that the amount is in paise = 50 INR -->
                                <!--amount need to be in paisa-->
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ Config::get('custom2.razor_key') }}"
                                        data-amount={{$total * 100}}
                                        data-buttontext="Pay Rs. {{$total}}"
                                        data-name="SW7"
                                       
                                        data-description="Buy SW7 Product"
                                        data-image="{{asset('/images/new/logo1.jpeg')}}"
                                        data-theme.color="#528FF0">
                                        
                                </script>
                               
                                @foreach($products as $product)
                                <input type="hidden" name="p_id[]" value="{{ $product['item']  ['id'] }}">
                                <input type="hidden" name="p_name[]" value="{{ $product['item']  ['product_name'] }}">
                                <input type="hidden" name="p_qty[]" value="{{ $product['qty'] }}">
                                 @endforeach
                                <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                               
                              
                            </form>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>

       
    </div>
</div>
<br><br><br>
@endsection
<?php

?>
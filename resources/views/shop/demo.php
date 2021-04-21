@if(Session::has('cart'))

    <div class="container" style="margin-top:40px;">
      <div class="col-md-12  text-center">
            <h4 class="" style="font-size:30px;color:black;"><b>My Cart</b></h4>
      </div>
    </div>
  <div class="container">
      <!-- <a href="{{ url('/') }}" class="btn btn-success" style="color: #fff; width:80px; margin-top:30px;"><i class="fa fa-angle-left"></i> Back</a> -->
   <div class="col-md-8 col-md-offset-2">
  <div class="cart-list">
<table id="cart" class="display table " style="margin-top:13px; ">
			<thead class="thead-primary">
      
						<tr style="color:white;">
            <th style="width:3%;font-size:16px;" class="text-center" ><i class="fa fa-trash"></i></th>
							<th style="width:10%; font-size:16px;"class="text-center" >Product</th>	
              <th style="width:5%;font-size:16px;" class="text-center">Qty</th>					
						 <th style="width:30%;font-size:16px;" class="text-center">Unit Price</th>
              
							<th style="font-size:16px;width:20%;" class="text-center">Price ₹</th>
              <th  style="width:10%;font-size:16px;"  class="text-center">Image</th>
						
						</tr>
					</thead>
                    @foreach($products as $product)
					<tbody>
						<tr>
            <td class="actions   "  data-th="">
                            <div class="btn-group"style="margin-right:0px">
                                 <button class="btn btn-danger btn-xs dropdown-toggle " type="button" data-toggle="dropdown" style= "font-size:19px;">
                                      <i class="fa fa-trash" style="font-size:22px;" ></i>&nbsp;<span class="caret"></span></button>
                                    
          <ul class="dropdown-menu">
                <!-- <li><a id="ab" href="{{ route('product.deductByOne', ['product' => $product['item']['id']]) }}" style="font-size:17px;" onclick="return confirm('Are you sure you want to remove this item?');">Remove item from cart by one</a> </li> -->
                <li><a id="ab" href="{{ route('product.removeItem', ['product' => $product['item']['id']]) }}" style="font-size:17px;" onclick="return confirm('Are you sure you want to remove this item?');">Delete all items from cart</a> </li>
          </ul>
      </div>
							</td>
							<td data-th="Product">
								<div class="row">
								
									<div id="text">
                  <center> <input type="hidden"  class="pid" id="pid" name="pid" value="{{ $product['item']['id'] }}">
										<h4 class="nomargin" style="color:black;font-size:16px;" ><b>{{ $product['item']  ['product_name'] }} </b> </h4>
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

              <td data-th="Unit" class="text-center text1"id="text1" style="color:#000000; font-size:15px;color:black;"><b>{{$product['perprice']  }} </b>
              <input type="hidden" name="amount" id="amount" style="width:100px;" value="{{ $product['perprice'] }}" class="input-text amount" /><br></td>
                          
              <td data-th="Subtotal" class="text-center text2"id="text2" style="color:black;font-size:16px;" ><b>{{$product['price']  }}</b></td>
							<td>
              <div class="col-sm-12">
                <center>	
                <img style="margin-left:0px;margin-right:100px;width:100%;height:80px;" src="{!!  URL::to('/images/storage/products/',array($product['item']['path'])) !!}" alt="" class="img-responsive">
              </center>
              </div>
              </td>
              
						</tr>
					</tbody>     
                @endforeach
                <!--table footer-->
					<tfoot>
          
						<tr>
            <td colspan="3" ></td>
							<td class=" text-center"><b style="color:black;font-size:20px;"><strong>Grand Total: ₹</strong> </b></td>
						  <td class=" text-center" class="tamount" id="tamount"><strong style="color:black;font-size:22px;">{{ $totalPrice}}  </strong></td>
              <td colspan="1" ></td>
            </tr>
          </tfoot>
          
        </table>
         
        <div class="col-md-12 col-xs-12" style="margin-top:20px;">
        <center><div class="button">
            
            <div class="col-md-6 col-xs-6"  >
  
       <a href="{{ route('checkout') }}" class="btn pull-left  " style="margin-right:40px;background-color:#82ae46;border:#82ae46;color: #fff;font-size:17px" type="button" onclick="return confirm('Are you sure you want to continue?');"><i class="fa fa-money"></i>&nbsp;Cash On Delivery</a>  
            </div>
       <div class="col-md-6 col-xs-6"  >
  
       <a href="{{ route('onlinePayment') }}" class="btn pull-right " style="margin-left:0px;background-color:#82ae46;border:#82ae46;color: #fff;font-size:17px" type="button" onclick="return confirm('Are you sure you want to continue?');"><i class="fa fa-credit-card"></i>&nbsp;Online Payment</a> 
      </div>  
      </div></center>
          </div>
          <br><br><br><br>
      </div>
         
        </div>
      
<br><br>
<br>    

 

      <?php 
      
      ?>  
     
@else

      <div class="container">
            <div class="col-md-8 col-md-offset-2" >
            <center><img src="{!!  URL::to('/images/Icon-no-cart.png')!!}" class="" style="margin-top:50px;height:150px;width:200px;"/></center>
                <h3 style="color:black;margin-top:30px;font-size:30px; margin-bottom:30px;">
                <center>No Products added to your Cart.</center></h3>
             
                <center> <a href="{{ url('/') }}" class="btn " style="border-radius:5px;background-color:#82ae46;margin-top:0px;height:50px;width:280px;color:white;font-size:19px;"> <center> Continue Shopping</center></a></center>
    
            </div>
      </div> 

  @endif  
  </div>

   <br> 
@endsection
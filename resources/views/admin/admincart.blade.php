@extends('layouts.dashboard')


@section('title', ' Manage Orders')

@section('meta')

@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

	</script>
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>
@endsection

@section('content')
<div class="container" style="">
	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
			<strong>Success!</strong> {{ session('success') }}
		
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
	@endif

	
  <div class="page-header ">
			<center><strong style="font-size:30px;margin-left:100px;" >Cart Details</strong> </center>

	
	</div>
	<div style="text-align:right;padding-right:34px;">
	
	<a class="btn btn-primary btn-lg  py-3 px-5 "style="margin-left:80px;background:#ffc20e;border-color:#ffc20e;"  href="{{ url('/admin/orderlist') }}" ><b>Back</b>&nbsp;&nbsp;&nbsp;</a> 
	</div><br>
	</div>
	

<?php
$profitTotal =0;
?>
  <div class="container" style="font-family:ubuntu;">
      <!-- <a href="{{ url('/') }}" class="btn btn-success" style="color: #fff; width:80px; margin-top:30px;"><i class="fa fa-angle-left"></i> Back</a> -->
   <div class="panel panel-default container"style="margin-left:200px;width:960px;overflow:auto">
		<div class="panel-body row">
   <div class="col-md-12">
  <div class="cart-list">
<table id="cart" class="display table " style="margin-top:13px; ">
			<thead class="thead-primary">
      
						<tr>
         
							<th style="width:40%; font-size:16px;"class="text-center" >Product</th>	
              <th style="width:40%;font-size:16px;" class="text-center">Per Unit Price ₹</th>					
					  	<th style="width:30%;font-size:16px;" class="text-center">Cart Description</th> 
              
							<th style="font-size:16px;width:20%;" class="text-center">Price ₹</th>
              <th style="font-size:16px;width:40%;" class="text-center">Profit ₹</th>
              <th style="font-size:16px;width:40%;" class="text-center">Status</th>
              <th style="font-size:16px;width:40%;" class="text-center">Reason</th>
              <th  style="width:10%;font-size:16px;"  class="text-center">Image</th>
						
						</tr>
					</thead>
          @foreach($order->cart->items as $item)
					<tbody>
						<tr>
           
							<td data-th="Product" >
								<div class="row ml-3">
								
									<div id="text">
                  <input type="hidden"  class="pid" id="pid" name="pid" value="{{ $item['item']['id'] }}">
										<h4 class="nomargin" style="color:black;font-size:16px;" ><b>{{ $item['item']  ['product_name'] }} </b> </h4>
                  
                  </div>
								</div>
							</td>
				
						
							<input type="hidden" name="amount" id="amount" style="color:black;font-size:5px;" value="{{$item['amount']}}"  class="amount"/>
						  <!-- <td data-th="Quantity">
                      
                    <center>
                        <div>
                           <input class="button plus" type="button" value='+' style="width:27px;" ></input><br><br>
                            <input type="number" name="qty" id="qty" maxlength="12" style="width:40px;" value="{{ $item['qty'] }}" min='1' class="input-text qty" /><br><br>
                            <input class="button minus" type="button" value='-' style="width:27px;"></input>
                        </div> 
                    </center>
              </td> -->

              <td data-th="Quantity" class="text-center" id="number" style="color:black;font-size:16px;" readonly><b> {{ $item['amount'] }}</b></td>

</td>
              <td data-th="Gram">
                      
                    <center>
                        <div>
                        <b style="color:black;font-size:16px;">
                            @foreach(explode(',',   preg_replace("/[^a-z0-9_.,]+/", "",$item['item']  ['gram'] )) as $info)
                           
						
                            @endforeach
                            {{ $item['desc'] }}
                            </b>
                        </div> 
                    </center>
              </td>
             
             
              <td data-th="Subtotal" class="text-center text1"id="text1" style="color:black;font-size:16px;" ><b>{{$item['price']  }}</b></td>
              <?php
              $profit = $item['item']['price'] * 25/100;
              $profit = $profit * $item['qty'];
              $profitTotal = $profitTotal + $profit; 
              //echo $profit;
              ?>
              <td data-th="profit" class="text-center text1"id="text1" style="color:black;font-size:16px;" ><b>{{ $profit }}</b></td>
              <td data-th="status" class="text-center text1"id="text1" style="color:black;font-size:16px;" ><b>{{ $item['status'] }}</b></td>
              <td data-th="reason" class="text-center text1"id="text1" style="color:black;font-size:16px;" ><b>{{ $item['reason'] }}</b></td>
							<td>
              <div class="col-sm-12">
                <center>	
                <img style="margin-left:0px;margin-right:100px;width:100%;height:100px;" src="{!!  URL::to('/images/products',array($item['item']['path'])) !!}" alt="" class="img-responsive">
              </center>
              </div>
              </td>
              
						</tr>
					</tbody>     
                @endforeach
                <!--table footer-->
					<tfoot>
         
						<tr>
            <td colspan="2" ></td>
							<td class=" text-center"><b style="color:black;font-size:20px;"><strong>Grand Total: ₹</strong> </b></td>
						  <td class=" text-center" class="tamount" id="tamount"><strong style="color:black;font-size:22px;">{{ $order->cart->totalPrice}}  </strong></td>
              <td class=" text-center" class="tprofit" id="tprofit"><strong style="color:black;font-size:22px;">{{ $profitTotal}}  </strong></td>
              <td colspan="1" ></td>
            </tr>
          </tfoot>
          
        </table>
         
       
          <br><br>
      </div>
         
        </div>
       
<br><br>
<br>    

 

      <?php 
      
      ?>  
     

    </div>
</div>
</div>	

    <br> 
  @endsection

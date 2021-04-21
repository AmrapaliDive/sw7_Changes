@extends('layouts.master2')

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
<div class="container" style="margin-top:30px;">
	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
			<strong>Success!</strong> {{ session('success') }}
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
	@endif

	
        <div class="page-header row">
            <!-- <a class="btn btn-primary btn-lg pull-left col-md-2" style="width:40px;font-size:20px;background-color:#2ab27b;color:white;border-color:#2ab27b;" href="{{ url('admin/') }}" ><</a> -->
            <h3 class="col-md-10 col-sm-8 col-xs-8" style="text:centre;color:black;font-size:30px;"><center><strong>Cart Details</strong></center> </h3>

		</div>
	</div>
	
	<?php
            $totalPrice =0;
          ?>

  <div class="container" style="font-family:ubuntu;">
      <!-- <a href="{{ url('/') }}" class="btn btn-success" style="color: #fff; width:80px; margin-top:30px;"><i class="fa fa-angle-left"></i> Back</a> -->
   <div class="col-md-8 col-md-offset-2">
  <div class="cart-list">
<table id="cart" class="display table " style="margin-top:13px; ">
			<thead class="thead-primary">
      
						<tr style="color:white;background-color:#82ae46">
         
							<th style="width:20%; font-size:16px;"class="text-center" >Product</th>	
              <th style="width:10%;font-size:16px;" class="text-center">Per Unit Price ₹</th>					
					  	<th style="width:30%;font-size:16px;" class="text-center">Cart Description</th> 
              
							<th style="font-size:16px;width:20%;" class="text-center">Price ₹</th>
              <!-- <th  style="width:10%;font-size:16px;"  class="text-center">Image</th> -->
							<th style="font-size:16px;width:20%;" class="text-center">Status</th>
							<th style="font-size:16px;width:20%;" class="text-center">Reason</th>
							<th style="font-size:16px;width:20%;" class="text-center">Update</th>
							<!-- <th style="font-size:16px;width:20%;" class="text-center">Delete</th> -->
						</tr>
					</thead>
          @foreach($orders->cart->items as $item)

					<tbody>
						<tr>
          
              @if ($item['item']['dealer_id']==$dealer->id)
              <?php
					$totalPrice = $totalPrice + $item['price'];
					//echo $totalPrice;
              ?>
							<td data-th="Product">
								<div class="row">
								
									<div id="text">
                  <center> <input type="hidden"  class="pid" id="pid" name="pid" value="{{ $item['item']['id'] }}">
										<span class="nomargin" style="font-size:16px;" >{{ $item['item']  ['product_name'] }} </span>
                  </center>
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

              <td data-th="Quantity" class="text-center" id="number" style="color:black;font-size:16px;" readonly> {{ $item['amount'] }}</td>

</td>
              <td data-th="Gram">
                      
                    <center>
                        <div>
                        <span style="color:black;font-size:16px;">
                            @foreach(explode(',',   preg_replace("/[^a-z0-9_.,]+/", "",$item['item']  ['gram'] )) as $info)
                           
						
                            @endforeach
                            {{ $item['desc']  }} 
                            </span>
                        </div> 
                    </center>
              </td>
             
             
              <td data-th="Subtotal" class="text-center text1"id="text1" style="color:black;font-size:16px;" >{{$item['price']  }}</td>
              <form  method="POST" action =" {{ url('/dealer/updateorder/'.$orders->id.'/'.$item['item']['id']) }}">
									{{csrf_field()}}
									<td>@if(isset($orders))
											<select  class="form-control" style="width:120px" id="status" name="status">
											<option value="Accepted" {{ $item['status'] === 'Accepted' ? 'selected' : '' }}>Accepted</option>
											<option value="In Process" {{ $item['status'] === 'In Process' ? 'selected' : '' }}>In Process</option>
											<option value="Completed" {{ $item['status'] === 'Completed' ? 'selected' : '' }}>Completed</option>
											<option value="Cancel" {{ $item['status'] === 'Cancel' ? 'selected' : '' }}>Cancel</option>
   
											</select>
											@else
											@endif</td>
                                     <td>@if(isset($orders))
											<select  class="form-control" style="width:120px" id="reason" name="reason">
											<option value="" {{ $item['reason'] === '' ? 'selected' : '' }}>..</option>
											<option value="Insufficient Stock" {{ $item['reason'] === 'Insufficient Stock' ? 'selected' : '' }}>Insufficient Stock</option>
											<option value="Management Issue" {{ $item['reason'] === 'Management Issue' ? 'selected' : '' }}>Management Issue</option>
											<option value="Long Distance Issue" {{ $item['reason'] === 'Long Distance Issue' ? 'selected' : '' }}>Long Distance Issue</option>
											
   
											</select>
											@else
											@endif
									</td>
											<td><button type="submit" class="btn btn-success btn-raised " ><i class="fa fa-edit"></i></button></td>
								     </form>
                					<!-- <td><a href="{{url('/admin/deleteorder/'.$orders->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a></td> -->
							<!-- <td>
              <div class="col-sm-12">
                <center>	
                <img style="margin-left:0px;margin-right:100px;width:100%;height:100px;" src="{!!  URL::to('/images/storage/products',array($item['item']['path'])) !!}" alt="" class="img-responsive">
              </center>
              </div>
              </td> -->
              @endif
						</tr>
					</tbody>     
                @endforeach
                <!--table footer-->
					<tfoot>
        
						<tr>
            <td colspan="5" ></td>
							<td class=" text-center"><b style="color:black;font-size:15px;"><strong>Grand Total: ₹</strong> </b></td>
						  <td class=" text-center" class="tamount" id="tamount"><strong style="color:black;font-size:20px;"> {{$totalPrice }} </strong></td>
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

    <br> 
  @endsection

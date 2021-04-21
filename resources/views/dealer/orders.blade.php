@extends('layouts.master2')

@section('styles')
<style>
#text{
	color:white;
}
form { display: inline; }
</style>
@endsection

@section('content')


	@if(session('success'))
		<div class="alert alert-success fade in" style="margin-top:20px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>{{ session('success') }}</strong>
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in" style="margin-top:20px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error! {{ session('danger') }}</strong>
		</div>
	@endif
	@if(session('message'))
        <div class="alert alert-info fade in" style="margin-top:20px;">
            		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           		<strong>Message! {{ session('message') }}</strong>
        </div>
        @endif
		<h3 class="" style="font-size:30px;margin-top:40px;"><center><strong>Manage Order</strong> </center></h3><hr><br<br><br>

	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
		<div class="panel-body row"> 
        <div class="col-md-12"  >
				<table id="example" class="table table-hover" class="table-responsive">
					<thead>
						<tr style="color:Green;">
							<th>ID</th>
							<th>User Id</th>
							<th>Name</th>	
							
							<!-- <th>Edit Order</th> -->
							<th>Total Price</th>
							<th>Address</th>
							<th>Payment</th>
							<th>Date\Time</th>
							<th>Cart Description [Title/Quantity]</th>
							<!-- <th>Status</th>
							<th>Reason</th>
							<th>Update</th>
							<th>Delete</th> -->
						</tr>
					</thead>

					<tbody>
						@if($myorder != null)
							@foreach($myorder as $order)
								
								<tr>		
									<td>{{ $order->id }}</td>	
									<td>{{ $order->user_id }}</td>						
									<td>{{ $order->name }}</td>
									
									<!-- <td> <a href="{{url('/edit_order/'.$order->id)}}" class="btn btn-success" style="">Edit Order</a></td> -->
									<td> 
                                    <?php
                                    $total =0;
                                    ?>
                                    @foreach($order->cart->items as $item) 
                                     @if ($item['item']['dealer_id']==$dealer->id)
                                        <?php
                                        $total = $total + $item['price'];
                                        ?>
                                       
                                    @endif
                                    @endforeach
                                    {{ $total }}
                                    </td>
									<td>{{ $order->address }}</td>
									<td>{{ $order->payment_method }}</td>
									<td>{{ $order->created_at->format('d/m/Y') }}</td>
									
									<!-- <form  method="POST" action =" {{ url('/admin/updateorder/'.$order->id) }}">
									{{csrf_field()}}
									<td>@if(isset($order))
											<select  class="form-control" style="width:120px" id="status" name="status">
											<option value="Accepted" {{ $order->status === 'Accepted' ? 'selected' : '' }}>Accepted</option>
											<option value="In Process" {{ $order->status === 'In Process' ? 'selected' : '' }}>In Process</option>
											<option value="Completed" {{ $order->status === 'Completed' ? 'selected' : '' }}>Completed</option>
											<option value="Cancel" {{ $order->status === 'Cancel' ? 'selected' : '' }}>Cancel</option>
   
											</select>
											@else
											@endif</td>
                                     <td>@if(isset($order))
											<select  class="form-control" style="width:120px" id="reason" name="reason">
											<option value="" {{ $order->reason === '' ? 'selected' : '' }}>..</option>
											<option value="Insufficient Stock" {{ $order->reason === 'Insufficient Stock' ? 'selected' : '' }}>Insufficient Stock</option>
											<option value="Management Issue" {{ $order->reason === 'Management Issue' ? 'selected' : '' }}>Management Issue</option>
											<option value="Long Distance Issue" {{ $order->reason === 'Long Distance Issue' ? 'selected' : '' }}>Long Distance Issue</option>
											
   
											</select>
											@else
											@endif
									</td>
											<td><button type="submit" class="btn btn-success btn-raised " ><i class="fa fa-edit"></i></button></td>
								     </form>
                					<td><a href="{{url('/admin/deleteorder/'.$order->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a></td> -->
									<td>
									<a href="{{url('/dealercart/'.$order->id)}}" class="btn btn-success" style=""><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></a>
									</td>
								</tr>
							
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div> 
@endsection


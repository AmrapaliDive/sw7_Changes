@extends('layouts.print')

@section('title', ' payments')
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

<script>

function myFunction() {
    var clear = document.getElementsByClassName("printClass");
    for (let index = 0; index < clear.length; index++) {
        clear[index].innerHTML="";
        
    }
    document.getElementById("print1").innerHTML="";
    window.print();
}
</script>
@endsection

@section('content')
<div class="container" >
	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
			<strong>Success!</strong> {{ session('success') }}
		</div>
		
	@endif
	@if(session('danger'))
	<div class="container">
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
		</div>
		</div>
	@endif

	<div class="container printClass" >
	
	

		<!-- <a class="btn btn-primary btn-lg pull-right "style="float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="{{ url('/admin/admissions2') }}">Find Records</a> -->
		<form style="margin-left:250px;" action="{{url('/orders/records')}}" method="POST">
		{{ csrf_field() }}
	<div class="col-md-4" style="margin-top:30px;">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Start Date</label>
				<input type="date"id="start_date" style="font-size:1.5rem;" class="form-control"  name="start_date"  required autofocus >
            </div>
            </div>
            <div class="col-md-4" style="margin-top:30px;">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;End Date</label>
				<input type="date"id="end_date" style="font-size:1.5rem;" class="form-control"  name="end_date"  required autofocus >
            </div>
			</div>
			<div class="col-md-2" style="margin-top:30px;">
            <div class="form-group">
			<button type="submit" class="btn btn-primary" style="width:200px;height:30px;font-size:15px;margin-top:30px;" name="submit">Find Records</button>
            </div>
			</div>
			
	</form>
	<br>
	<div class="col-md-4" style="">
	
	</div>
	</div>
	</div>
	
	<!-- <div class="panel panel-default container"style="margin-left:360px;width:960px;overflow:auto"> -->
		<div class="panel-body row">
		<h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>SW7 INFOMEDIA PRIVATE LIMITED</strong> </center></h3><hr style="">
		<h6 class="" style=margin-top:20px;"><center><strong>Contact Number : +91 7030023002</strong> </center></h6>
	<h6 class="" style=margin-top:20px;"><center><strong>Office Address : Office Address : Rahatani Link Rd, 
			Dagadu Patil Nagar, 
			Thergaon,Pimpri-Chinchwad, 
			Maharashtra 411017,India</strong> </center></h6><hr style="">
		<h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>Order Report</strong> </center></h3><hr style="">
		@if($start_date !=null)
	<h4 class="" style="margin-top:20px;"><center><strong>From : {{$start_date->format('d-m-Y')}}&nbsp;&nbsp;&nbsp;&nbsp;To : {{$end_date->format('d-m-Y')}} </strong> </center></h4><hr style="">
	@endif
			<div class="col-md-12">
			<table id="" class="table table-striped table-bordered">
					<thead>
						<tr style="">
							<th>ID</th>
							<th>User Id</th>
							<th>Name</th>	
						
							<th>Payment Type</th>
							<th>Address</th>
							<th>Date\Time</th>
							<th>GST Price (₹)</th>
							<th>Total Price (₹)</th>
							<!-- <th>Cart Description</th> -->
							<!-- <th>Status</th>
							<th>Reason</th>
							<th>Update</th>
							<th>Delete</th> -->
						</tr>
					</thead>

					<tbody>
						@if($order != null)
							@foreach($order as $order)
								
								<tr>		
									<td>{{ $order->id }}</td>	
									<td>{{ $order->user_id }}</td>						
									<td>{{ $order->name }}</td>
									<!-- <td>
									@foreach($order->cart->items as $item)
									{{$item['item']['title'] }} | {{ $item['qty'] }} ,
									@endforeach
									</td> -->
									
									
									<td>{{ $order->payment_method }}</td>
									<td>{{ $order->address }}</td>
									<td>{{ $order->created_at->format('d/m/Y') }}</td>
									<?php   $gst = $order->cart->totalPrice * 0.1525;?>
									<td>{{round($gst)  }}</td>
									<td>   {{ $order->cart->totalPrice }}</td>
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
									<!-- <td>
									<a href="{{url('/admin/cart/'.$order->id)}}" class="btn btn-primary pull-left" style=""><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></a>
                                     </td> -->
								</tr>
							
							@endforeach
						@endif
					</tbody>
				</table>
				<table id=""class="table table-striped table-bordered" style="">
					@if($total !=null )
						<tr>
						<td ><strong><b>GST Total (&#8377;) :</b></strong></td>
						<td ><strong><b> {{round($gst_total)}}</b></strong></td>
						</tr>
						<tr>
						<td><strong><b>Total (&#8377;) :</b></strong></td>
					    <td ><strong><b> {{ round($total)}}</b></strong></td>
						</tr>
					
					@endif
					</table>
				<!-- @if($total !=null )
	Total (Rs) : {{$total}}  <br>
	GST Total (Rs) : {{$gst_total}}  
	<br><br> -->
	@endif
			</div>
		</div>
		</div>
		<div id="print1" style="padding-left:100px;">
	<input type="button" value="Print" class="btn btn-primary" onclick="myFunction();window.location.reload();" class="form-control"><br><br>
	<a class="btn btn-primary pull-left "style="float:right;width:200px;margin:10px;margin-top:25px;font-size:1.4rem" href="{{ url('/admin/orderlist') }}">Back</a>
	</div>
	<!-- </div> -->
@endsection

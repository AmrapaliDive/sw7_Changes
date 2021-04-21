@extends('layouts.dashboard')

@section('title', 'Customers')
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



@if(session('success'))
	<div class="container col-md-6 offset-md-4" style="padding-top:30px;margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> {{ session('success') }}
		</div>
		</div>
	@endif
	@if(session('danger'))
	<div class="container col-md-6 offset-md-4">
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
		</div>
	@endif
	
	  
	<div class="page-header">
			
					
		
				<center><strong style="font-size:25px;margin-left:230px;" >Customers</strong> </center>

	
	</div>
	<div style="text-align:right;padding-right:34px;"> 
	<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;background:#ffc20e;border-color:#ffc20e;" href="{{ url('admin/') }}" ><b>Back</b></a> 
	</div><br>
	
	<?php
	use App\User;
	use App\Customer;
	?>
	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr style="">
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Address</th>
							<th>Pincode</th>
							<th>Delete Customer</th>
						</tr>  
					</thead>

					<tbody>
						@if($customers != null)
							@foreach($customers as $customer)
							@if ($customer->email =="admin@gmail.com") 
								@continue
								@endif
								<?php
								$user = User::where('id',$customer->user_id)->first(); 
								?>	
								<tr>
							
									<td>{{ $customer->id }}</td>							
									<td>{{ $customer->first_name }}  {{$customer->last_name}}</td>
									<td>{{ $customer->email }}</td>
									<td>{{ $customer->contact }}</td>
									<td>{{ $customer->address }}</td>
									<td>{{ $customer->pincode }}</td>
									<td>
									<a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('/customerlist/delete/'.$customer->id) }}" class="btn btn-danger" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Delete</a> 
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

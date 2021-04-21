@extends('layouts.dashboard')

@section('title', ' Franchisee')
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
			
			<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Franchisee Details</strong> </center></h3><br><br>		
			
			<!-- <a class="btn btn-primary pull-right"style="width:200px;margin:10px;margin-top:0px" href="{{ url('/admin/product') }}">New Product</a> -->
		

	
	</div>
	<center><div class="">
	<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;" href="{{ url('/franchiseelist') }}"><b>Back</b></a>

	</div></center>
	</div>
	<br>
	<?php
	use App\User;
	use App\Franchisee;
	?>

	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>contact 1</th>
							<th>contact 2</th>
							<th>Landline Number</th>
							<th>Address</th>
							<th>City</th>
							<th>Pincode</th>
							<th>Date Of Birth</th>
							<th>Qualification</th>
							<th>Office time</th>
							<!-- <th>Scheme</th>
							<th>Amount Paid</th> -->
							<!-- <th>Agreement</th> -->
							<!-- <th>Edit</th>
							<th>Delete</th> -->
						</tr> 
					</thead>

					<tbody>
					@if($franchisees != null)
							@foreach($franchisees as $franchisee)
								<tr>
								<?php
								$user = User::where('id',$franchisee->user_id)->first(); 
								?>		
									<td>{{ $franchisee->id }}</td>							
									<td>{{ $franchisee->first_name }}  {{$franchisee->last_name}}</td>
									<td>{{ $franchisee->email }}</td>
									<td>{{ $franchisee->contact1 }}</td>
									<td>{{ $franchisee->contact2 }}</td>
									<td>{{ $franchisee->landline_no }}</td>
									<td>{{ $franchisee->address }}</td>
									<td>{{ $franchisee->city }}</td>
									<td>{{ $franchisee->pincode }}</td>
									<td>{{ $franchisee->dob }}</td>
									<td>{{ $franchisee->qualification }}</td>
									<td>{{ $franchisee->office_time }}</td>
									<!-- <td>{{ $franchisee->scheme }}</td>
									<td>{{ $franchisee->remark1 }}</td> -->
									<!-- <td><a href="{{url('/franchisee/agreement/'.$franchisee->id)}}" class="btn btn-primary">Download Receipt</a></td> -->
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection
